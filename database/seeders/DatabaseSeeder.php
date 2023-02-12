<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\MyImage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create(['name' => 'user1', 'email' => 'user1@user.com']);
        User::factory()->create(['name' => 'user2', 'email' => 'user2@user.com']);

        MyImage::factory()->create([
            'title' => 'Autumn',
            'description' => 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.',
            'image' => 'img/seeder/autumn.jpg',            
            'user_id' => '1',
        ]);

        MyImage::factory()->create([
            'title' => 'Grass',
            'description' => 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.',
            'image' => 'img/seeder/grass.jpg',            
            'user_id' => '1',
        ]);


        MyImage::factory()->create([
            'title' => 'Mountain',
            'description' => 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.',
            'image' => 'img/seeder/mountain.jpg',            
            'user_id' => '1',
        ]);


        MyImage::factory()->create([
            'title' => 'River',
            'description' => 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.',
            'image' => 'img/seeder/river.jpg',            
            'user_id' => '1',
        ]);

        MyImage::factory()->create([
            'title' => 'Winter',
            'description' => 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.',
            'image' => 'img/seeder/winter.jpg',            
            'user_id' => '2',
        ]);

        MyImage::factory()->create([
            'title' => 'Pink and Blue Skye',
            'description' => 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.',
            'image' => 'img/seeder/pink-and-blue-sky.jpg',            
            'user_id' => '2',
        ]);

        MyImage::factory()->create([
            'title' => 'Tree',
            'description' => 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.',
            'image' => 'img/seeder/tree.jpg',            
            'user_id' => '2',
        ]);

        MyImage::factory()->create([
            'title' => 'Beach',
            'description' => 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.',
            'image' => 'img/seeder/beach.jpg',            
            'user_id' => '2',
        ]);
    }
}
