<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{    
    public function up(): void
    {
        Schema::create('mails', function (Blueprint $table) {

            $table->id();
            
            $table->foreignId('sender_id')->references('id')->on('users');
            $table->foreignId('receiver_id')->references('id')->on('users');

            $table->string('title');
            $table->text('body');

            $table->integer('status');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('mails');
    }
};
