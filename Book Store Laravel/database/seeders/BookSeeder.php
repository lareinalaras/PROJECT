<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            [
                'publisher_id' => 1,
                'title' => 'Title Book 1',
                'author' => 'Lala',
                'year' => 2005,
                'synopsis' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam rutrum pretium euismod. Cras lorem urna.',
                'image' => 'buku1.jpg'
            ],

            [
                'publisher_id' => 2,
                'title' => 'Title Book 2',
                'author' => 'Lily',
                'year' => 2007,
                'synopsis' => 'Lorem ipsum elit. Nullam rutrum pretium euismod. Cras lorem urna. Fusce nec libero id ipsum aliquet suscipit non vitae sem. Curabitur rutrum non erat ac laoreet.',
                'image' => 'book2.jpg'
            ],

            [
                'publisher_id' => 3,
                'title' => 'Title Book 3',
                'author' => 'Lena',
                'year' => 2009,
                'synopsis' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam rutrum pretium euismod. Cras lorem urna, facilisis vitae justo vel..',
                'image' => 'book3.jpg'
            ],

            [
                'publisher_id' => 4,
                'title' => 'Title Book 4',
                'author' => 'Leny',
                'year' => 2010,
                'synopsis' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam rutrum pretium euismod. Cras lorem urna, facilisis vitae justo vel, malesuada mattis arcu.',
                'image' => 'book4.jpg'
            ]

        ]);
    }
}
