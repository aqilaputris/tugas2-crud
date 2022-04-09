<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([
            'name' => 'Lorem ipsum dolor',
            'email' => 'Lorem ipsum dolor',
            'phone' => '0897654321',
            'massage' => 'Lorem ipsum dolor',
        ]);
    }
}
