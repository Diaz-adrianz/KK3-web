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
        Schema::create('t_percobaan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username', 50);
            $table->string('email', 50);
            $table->string('password', 128);
            $table->enum('role', ['user', 'admin', 'superAdmin']);
            $table->text('biograph');
            $table->string('phone', 50);
            $table->string('full_name', 100);
            $table->string('picture', 100);
            $table->integer('poins');
            $table->integer('viewers');
            $table->year('birth_year');
            $table->dateTime('last_active');
            $table->boolean('is_blocked');
            $table->boolean('is_vip');
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_percobaan');
    }
};
