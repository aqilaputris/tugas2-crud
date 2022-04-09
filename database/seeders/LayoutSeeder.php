<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LayoutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('layouts')->insert([
            'preferences' => 'Start Bootstrap',
            'portfolio' => 'foto 1',
            'about' => 'about me',
            'contact' => 'contact me',
        ]);
    }
}
