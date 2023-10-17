<?php

use App\Models\Bootcamp;
use App\Models\User;
use App\Models\Category;

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\BootcampController;
use App\Http\Controllers\EditAccountController;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\InboxController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {return view('homepage');});

Route::get('about-us', function () {return view('aboutus');});

Route::get('service', function () {return view('service');});

Route::get('dummy', function () {return view('dummy-outbound');});

Route::get('bootcamps', function () {

    $bootcamps = Bootcamp::orderByDesc('rating')->with('category', 'organizer');

    if (request('search')) {
        $bootcamps->where('name', 'like', '%' . request('search') . '%');
    }

    return view('bootcamps', [
        'bootcamps' => $bootcamps->where('status', 'like', '1')->get()
    ]);
});


Route::get('bootcamps/{bootcamp:slug}', function (Bootcamp $bootcamp) {
    return view('bootcamp_page', [
        'bootcamp' => $bootcamp
    ]);
});


Route::get('categories/{category:slug}', function (Category $category){
    return view('home', [
        'bootcamps' => $category->bootcamps->load('category', 'organizer')
    ]);
});


Route::get('organizers/{organizer:username}', function (User $organizer){
    return view('home', [
        'bootcamps' => $organizer->bootcamps->load('category', 'organizer')
    ]);
});


Route::get('dashboard', function (){
    return view('account.dashboard', [
        'user' => auth()->user()
    ]);
})->middleware('auth');


Route::get('register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('register', [RegisterController::class, 'store'])->middleware('guest');

Route::get('login', [SessionsController::class, 'create'])->middleware('guest')->name('login');
Route::post('login', [SessionsController::class, 'store'])->middleware('guest');

Route::post('logout', [SessionsController::class, 'destroy'])->middleware('auth');

Route::get('manage-bootcamp', [BootcampController::class, 'view'])->middleware('auth');
Route::get('edit-account', [EditAccountController::class, 'edit'])->middleware('auth');
Route::post('edit-account', [EditAccountController::class, 'store'])->middleware('auth');
Route::post('remove-profile-picture', [EditAccountController::class, 'remove_picture'])->middleware('auth');
Route::post('change-profile-picture', [EditAccountController::class, 'change_picture'])->middleware('auth');

Route::get('change-password', [PasswordController::class, 'edit'])->middleware('auth');
Route::post('change-password', [PasswordController::class, 'store'])->middleware('auth');

Route::get('transactions', [TransactionController::class, 'view'])->middleware('auth');

Route::post('topup/{type}', [TransactionController::class, 'topup'])->middleware('auth');

Route::post('billing-bootcamp/{bootcamp:slug}', [TransactionController::class, 'bill'])->middleware('auth');


Route::get('inbox', [InboxController::class, 'view'])->middleware('auth');

Route::get('create-bootcamp', [BootcampController::class, 'create'])->middleware('auth');
Route::post('create-bootcamp', [BootcampController::class, 'store'])->middleware('auth');

// ===========================================================================================================  Administration

Route::get('/admin/dashboard', function (){
    return view('admin.admin-dashboard', [
        'user' => auth()->user()
    ]);
})->middleware('admin');


Route::get('/admin/manage-bootcamps', function () {

    $bootcamps = Bootcamp::orderByDesc('rating')->with('category', 'organizer');

    if (request('search')) {
        $bootcamps->where('name', 'like', '%' . request('search') . '%');
    }

    return view('admin.admin-manage-bootcamps', [

        'bootcamps' => $bootcamps->get()
    ]);
})->middleware('admin');


Route::get('/admin/manage-users', function () {

    $users = User::orderBy('username');

    if (request('search')) {
        $users->where('username', 'like', '%' . request('search') . '%'); // search berdasarkan firstname/lastname?
    }

    return view('admin.admin-manage-users', [

        'users' => $users->get()
    ]);
})->middleware('admin'); // masukin ke UserController


Route::get('/admin/manage-bootcamp/{bootcamp:slug}', [BootcampController::class, 'edit'])->middleware('admin');
Route::post('/admin/manage-bootcamp/{bootcamp:slug}', [BootcampController::class, 'update'])->middleware('admin');

Route::post('/admin/ban-user/{user:id}', [UserController::class, 'ban'])->middleware('admin');
Route::post('/admin/unban-user/{user:id}', [UserController::class, 'unban'])->middleware('admin');

Route::post('/admin/approve-bootcamp/{bootcamp:slug}', [BootcampController::class, 'approve'])->middleware('admin');
Route::post('/admin/reject-bootcamp/{bootcamp:slug}', [BootcampController::class, 'reject'])->middleware('admin');
Route::post('/admin/suspend-bootcamp/{bootcamp:slug}', [BootcampController::class, 'suspend'])->middleware('admin');
Route::post('/admin/unsuspend-bootcamp/{bootcamp:slug}', [BootcampController::class, 'unsuspend'])->middleware('admin');