<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()//method yang digunakan untuk membuat struktur tabel database
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('username');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users'); //menghilangkan skema yang kita buat
    }
};

//php artisan migrate:rollback = menghapus tabel
//php artisan migrate:fresh = melakukan rollback dan migrate secara bersama-sama
//eloquent ORM = object relational mapper. memungkin crud lewat codingan.

