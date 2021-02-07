<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'name' => 'admin',
            'last_name' => 'admin last name',
            'direction' => 'direction of admin',
            'date_of_birth' => '1996-01-05 00:00:00',
            'email' => 'admin@admin.com',
            'password' => bcrypt('12345678'),
        ]);
    }
}
