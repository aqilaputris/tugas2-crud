<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Tugas1Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('preferences');
        DB::table('portfolio');
        DB::table('contact')->insert([
            'name' => 'Aqila',
            'email' => 'ila@gmail.com',
            'massage' => 'coba aja',
        ]);
        
    }
}
