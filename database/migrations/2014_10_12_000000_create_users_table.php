<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {

            $table->id();

            $table->string('firstname');
            $table->string('lastname');

            $table->string('username')->unique();

            $table->string('password');

            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->now();

            $table->string('phone_number')->nullable();
            $table->integer('e_wallet_balance')->default(0);

            $table->text('bio')->nullable();

            $table->boolean('is_admin')->default(false);

            $table->boolean('is_suspended')->default(false);

            $table->string('profile_picture_path')->default("profile_pictures/no-prof.jpg");

            $table->rememberToken();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
