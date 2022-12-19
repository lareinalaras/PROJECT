<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PublisherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('publishers')->insert([
            [
                'name' => 'Lala',
                'address' => 'Jl. Mawar',
                'phone' => '08123456789',
                'email' => 'lala@gmail.com',
                'image' => 'images1.jpg'
            ],

            [
                'name' => 'Lily',
                'address' => 'Jl. Melati',
                'phone' => '08123456788',
                'email' => 'lily@gmail.com',
                'image' => 'images2.jpg'
            ],

            [
                'name' => 'Lena',
                'address' => 'Jl. Anggrek',
                'phone' => '08123456787',
                'email' => 'lena@gmail.com',
                'image' => 'images3.jpg'
            ],

            [
                'name' => 'Leny',
                'address' => 'Jl. Tulip',
                'phone' => '08123456786',
                'email' => 'leny@gmail.com',
                'image' => 'images4.jpg'
            ]
        ]);
    }
}
