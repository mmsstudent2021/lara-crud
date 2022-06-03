<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Post::factory()->create([
            "title" => "hello hello hello",
            "description" => "hello hello hello hello hello hello hello hello "
        ]);

        Post::factory(50)->create();


//        $this->call([
//            PostSeeder::class
//        ]);
    }
}
