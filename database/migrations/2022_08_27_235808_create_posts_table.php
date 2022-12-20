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
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id'); //cara duplicate alt + shift + arah bawah
            $table->foreignId('user_id');
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('excerpt'); //excerpt : untuk menyimpan sebagian kecil dari tulisan dari body blog. (read more) 
            $table->text('body');
            $table->timestamp('published_at')->nullable(); //tipe data
            $table->timestamps(); //method
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
};
