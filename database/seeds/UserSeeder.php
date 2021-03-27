<?php

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
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin2@email.com',
            'phone' => '01000000001',
            'user_type_id' => '1',
            'password' => Hash::make('12345678'),
        ]);
    }
}
