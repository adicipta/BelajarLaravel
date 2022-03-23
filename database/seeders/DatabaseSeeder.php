<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        // User::create([
        //     'name' => 'Adi',
        //     'email' => 'only.adicipta@gmail.com',
        //     'password' => bcrypt('adisty2026')
        // ]);

        // User::create([
        //     'name' => 'Cipta',
        //     'email' => 'ciptapratama@gmail.com',
        //     'password' => bcrypt('adisty12175')
        // ]);

        User::factory(5)->create();

        Category::create([
            'name' => 'Programmer',
            'slug' => 'Programmer'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'QA Engineer',
            'slug' => 'qa-engineer'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Ini adalah tulisan saya sebagai Junior Software Developer,',
        //     'body' => 'Ini adalah tulisan saya sebagai Junior Software Developer, saya adalah Adi dengan background S1 Teknik Informatika Universitas Pamulang',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Ini adalah tulisan saya sebagai QA Engineer,',
        //     'body' => 'Ini adalah tulisan saya sebagai QA Engineer, saya adalah Cipta dengan background S1 Sistem Informasi Universitas UIN Syarif Hidayatullah',
        //     'category_id' => 1,
        //     'user_id' => 2
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Ini adalah tulisan saya sebagai Web Designer,',
        //     'body' => 'Ini adalah tulisan saya sebagai Web Designer, saya adalah Pratama dengan background S1 Desain Grafis Universitas Gunadarma',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);
    }
}