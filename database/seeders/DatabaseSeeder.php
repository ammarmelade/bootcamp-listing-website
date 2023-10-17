<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Bootcamp;
use App\Models\User;
use App\Models\Category;
use App\Models\Mail;
use App\Models\Transaction;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // User::truncate();
        // Bootcamp::truncate();
        // Category::truncate();

        $user = User::create([

            'firstname' => 'Admin',
            'lastname' => 'Ocamp',

            'password' => bcrypt('12345678'),

            'email' => 'admin@ocamp.com',
            'email_verified_at' => now(),
            
            'phone_number' => '0812345678',
            'e_wallet_balance' => 250000,

            'bio' => 'test bio',
            'is_admin' => True,

            'remember_token' => Str::random(10),

        ]);
        
        User::factory(5)->create();

        Mail::factory(5)->create();

        $front_end_development = Category::create([
            'name' => 'Front-End Development',
            'slug' => 'front-end-development'
        ]);

        $data_science = Category::create([
            'name' => 'Data Science',
            'slug' => 'data-science'
        ]);

        Bootcamp::create([

            'user_id' => $user->id,
            'category_id' => $front_end_development->id,

            'name' => 'Javascript',
            'slug' => 'get-started-with-javascript',

            'overview' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Non deleniti fugiat possimus ea. Nesciunt corrupti beatae, perspiciatis assumenda corporis aut eum a rem!',
            'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatem tempora minima provident ad accusamus deserunt laborum, mollitia cum tempore veritatis nulla quidem ut, quis consectetur pariatur, inventore laudantium dicta nemo dolor dolore ratione amet sint. Commodi veritatis, minus dolorem culpa a repudiandae odio quod totam atque sunt tempora ipsam maxime enim voluptas ipsa omnis. Recusandae in nam iusto aspernatur laborum?',

            'fee' => 100000,
            'total_joined' => 40,
            'rating' => 4,
            'times_rated' => 10,

            'link' => 'https://stackoverflow.com/questions/1827063/mysql-error-key-specification-without-a-key-length',
            'phone_number' => fake()->unique()->phoneNumber(),
            'email' => fake()->unique()->safeEmail(),

            'status' => 1
            
        ]);

        Bootcamp::create([

            'user_id' => $user->id,
            'category_id' => $front_end_development->id,

            'name' => 'Bootstrap',
            'slug' => 'bootstrap-from-scratch',

            'overview' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Non deleniti fugiat possimus ea. Nesciunt corrupti beatae, perspiciatis assumenda corporis aut eum a rem!',
            'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatem tempora minima provident ad accusamus deserunt laborum, mollitia cum tempore veritatis nulla quidem ut, quis consectetur pariatur, inventore laudantium dicta nemo dolor dolore ratione amet sint. Commodi veritatis, minus dolorem culpa a repudiandae odio quod totam atque sunt tempora ipsam maxime enim voluptas ipsa omnis. Recusandae in nam iusto aspernatur laborum?',

            'fee' => 100000,
            'total_joined' => 10,
            'rating' => 2,
            'times_rated' => 10,

            'link' => 'https://stackoverflow.com/questions/1827063/mysql-error-key-specification-without-a-key-length',
            'phone_number' => fake()->unique()->phoneNumber(),
            'email' => fake()->unique()->safeEmail(),

            'status' => 1
            
        ]);

        Bootcamp::create([

            'user_id' => $user->id,
            'category_id' => $data_science->id,

            'name' => 'Python',
            'slug' => 'introduction-to-machine-learning',

            'overview' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Non deleniti fugiat possimus ea. Nesciunt corrupti beatae, perspiciatis assumenda corporis aut eum a rem!',
            'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatem tempora minima provident ad accusamus deserunt laborum, mollitia cum tempore veritatis nulla quidem ut, quis consectetur pariatur, inventore laudantium dicta nemo dolor dolore ratione amet sint. Commodi veritatis, minus dolorem culpa a repudiandae odio quod totam atque sunt tempora ipsam maxime enim voluptas ipsa omnis. Recusandae in nam iusto aspernatur laborum?',

            'fee' => 100000,
            'total_joined' => 100,
            'rating' => 5,
            'times_rated' => 10,

            'link' => 'https://stackoverflow.com/questions/1827063/mysql-error-key-specification-without-a-key-length',
            'phone_number' => fake()->unique()->phoneNumber(),
            'email' => fake()->unique()->safeEmail(),

            'status' => 1
            
        ]);

        Transaction::create([

            'user_id' => $user->id,

            'name' => 'Top-Up - GoPay',
            'amount' => 20000

        ]);

        Transaction::create([

            'user_id' => $user->id,

            'name' => 'Billing bootcamp: Introduction to C',
            'amount' => -50000

        ]);
    }
}
