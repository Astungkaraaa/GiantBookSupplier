<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use App\Models\Category;
use App\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        $publisher = DB::table('publishers')->pluck('id');
        for($i=0;$i<12;$i++){
            // DB::table('books')->insert([
            $book = Book::create([
                'publisher_id' => $faker->randomElement($publisher),
                'title' => $faker->sentence($nbWords = 2, $variableNbWords = true),
                'author' => $faker->name,
                'year' => $faker->year($max = 2023),
                'image' => $faker->imageUrl($width=1280, $height = 1080),
                'synopsis' => $faker->paragraph($nbSentence = 3, $variableNbSentence = true)
            ]);

            $categories = Category::inRandomOrder()->limit(rand(1, 4))->get();
            $book->categories()->attach($categories);
        }
    }
}