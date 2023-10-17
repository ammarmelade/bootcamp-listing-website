<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('bootcamps', function (Blueprint $table) {

            $table->id();

            $table->string('name')->unique();

            $table->foreignId('user_id');

            $table->foreignId('category_id')->default(1);

            $table->string('slug');

            $table->text('overview');
            $table->text('description');

            $table->string('picture_path')->default('image 10.jpg');
            $table->string('document_path')->default('default-document.pdf');

            $table->integer('fee');
            $table->integer('total_joined')->default(0);
            $table->integer('rating')->default(0);
            $table->integer('times_rated')->default(0);

            $table->text('link');
            $table->string('phone_number')->unique();
            $table->string('email')->unique();
            
            $table->integer('status')->default(0);

            $table->timestamps();
            $table->timestamp('date_approved')->nullable();
        });
    }
    
    public function down(): void
    {
        Schema::dropIfExists('bootcamps');
    }
};