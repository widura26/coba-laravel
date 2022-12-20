<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

use function Valet\user;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([
        //     'name' =>'Sandhika Galih',
        //     'email' => 'sandhikagalih@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' =>'Widura Hasta',
        //     'email' => 'widura@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create(); //menggeneralisasikan data di database secara random

        Category::create([
            'name' =>'Web Programming',
            'slug' =>'web-programming'
        ]);

        Category::create([
            'name' =>'Web Design',
            'slug' =>'web-design'
        ]);

        Category::create([
            'name' =>'Personal',
            'slug' =>'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam, harum!',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores suscipit, quis officia fugit dignissimos rerum magnam numquam quibusdam odio tenetur, repellendus id similique minus! Earum, odio harum necessitatibus sed molestias ducimus quis facilis laboriosam nam quibusdam est. Assumenda voluptas aut inventore ullam iusto quo enim voluptatum nesciunt modi tenetur porro dicta dolor, voluptatem esse necessitatibus odit odio animi, numquam molestias maiores amet itaque. Quod dolore cumque harum quis perferendis totam adipisci facilis optio architecto sunt facere atque, labore praesentium recusandae tenetur, earum, voluptatum inventore itaque molestiae saepe. Delectus facilis, sed, veritatis fugiat deserunt qui nobis corporis doloremque perspiciatis quam veniam!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam, harum!',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores suscipit, quis officia fugit dignissimos rerum magnam numquam quibusdam odio tenetur, repellendus id similique minus! Earum, odio harum necessitatibus sed molestias ducimus quis facilis laboriosam nam quibusdam est. Assumenda voluptas aut inventore ullam iusto quo enim voluptatum nesciunt modi tenetur porro dicta dolor, voluptatem esse necessitatibus odit odio animi, numquam molestias maiores amet itaque. Quod dolore cumque harum quis perferendis totam adipisci facilis optio architecto sunt facere atque, labore praesentium recusandae tenetur, earum, voluptatum inventore itaque molestiae saepe. Delectus facilis, sed, veritatis fugiat deserunt qui nobis corporis doloremque perspiciatis quam veniam!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam, harum!',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores suscipit, quis officia fugit dignissimos rerum magnam numquam quibusdam odio tenetur, repellendus id similique minus! Earum, odio harum necessitatibus sed molestias ducimus quis facilis laboriosam nam quibusdam est. Assumenda voluptas aut inventore ullam iusto quo enim voluptatum nesciunt modi tenetur porro dicta dolor, voluptatem esse necessitatibus odit odio animi, numquam molestias maiores amet itaque. Quod dolore cumque harum quis perferendis totam adipisci facilis optio architecto sunt facere atque, labore praesentium recusandae tenetur, earum, voluptatum inventore itaque molestiae saepe. Delectus facilis, sed, veritatis fugiat deserunt qui nobis corporis doloremque perspiciatis quam veniam!',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam, harum!',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores suscipit, quis officia fugit dignissimos rerum magnam numquam quibusdam odio tenetur, repellendus id similique minus! Earum, odio harum necessitatibus sed molestias ducimus quis facilis laboriosam nam quibusdam est. Assumenda voluptas aut inventore ullam iusto quo enim voluptatum nesciunt modi tenetur porro dicta dolor, voluptatem esse necessitatibus odit odio animi, numquam molestias maiores amet itaque. Quod dolore cumque harum quis perferendis totam adipisci facilis optio architecto sunt facere atque, labore praesentium recusandae tenetur, earum, voluptatum inventore itaque molestiae saepe. Delectus facilis, sed, veritatis fugiat deserunt qui nobis corporis doloremque perspiciatis quam veniam!',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
