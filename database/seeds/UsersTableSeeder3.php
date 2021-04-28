<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder3 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('users')->insert([
            'name' => 'Adrian2',
            'email' => 'adrian2@gmail.com',
            'password' => Hash::make('password')
        ]);
    }
}
