<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PreferencesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('preferences')->insert([
            'name' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit',
            'content' => 'Lorem ipsum dolor sit amet conse',
        ]);
    }
}
