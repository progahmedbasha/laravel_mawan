<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_types')->insert([
            'name' => 'admin2',
            // 'email' => 'admin2@email.com',
            // 'phone' => '01000000001',
            // 'user_type_id' => '1',
            // 'password' => Hash::make('12345678'),
        ]);
    }
}
