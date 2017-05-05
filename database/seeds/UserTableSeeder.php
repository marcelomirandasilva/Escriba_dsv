<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();

        DB::table('users')->insert([
        'name'      =>  'marcelo',
        'email'     =>  'marcelo.miranda.pp@gmail.com',
        'password'  =>  bcrypt('teste123')
        ]);


    }
}
