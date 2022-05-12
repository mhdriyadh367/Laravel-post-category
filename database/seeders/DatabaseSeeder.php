<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
use App\Models\Post;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        User::factory(10)->create();

        User::create([
            'name'=> 'Muhammad riyadh',
            'username' => 'riyadh',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('adminadmin')
        ]);

        

        Category::create([
            'name' => 'Football',
            'slug' => 'football'
        ]);

        Category::create([
            'name' => 'Badminton',
            'slug' => 'badminton'
        ]);

        Category::create([
            'name' => 'MotoGP',
            'slug' => 'moto-gp'
        ]);

        // Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem dikit',
        //     'body' => 'Lorem banyak',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem dikit',
        //     'body' => 'Lorem banyak',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem dikit',
        //     'body' => 'Lorem banyak',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);
    }
}
