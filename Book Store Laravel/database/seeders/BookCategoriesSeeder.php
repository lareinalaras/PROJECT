<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class BookCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('book_categories')->insert([

            ['book_id' => 1, 'category_id' => 1],
            ['book_id' => 1, 'category_id' => 2],
            ['book_id' => 2, 'category_id' => 2],
            ['book_id' => 2, 'category_id' => 4],
            ['book_id' => 2, 'category_id' => 3],
            ['book_id' => 3, 'category_id' => 3],
            ['book_id' => 3, 'category_id' => 1],
            ['book_id' => 3, 'category_id' => 2],
            ['book_id' => 4, 'category_id' => 1]
        ]);
    }
}
