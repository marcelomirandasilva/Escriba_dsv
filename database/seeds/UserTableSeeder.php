<?php

use App\Models\users;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DB::table('users')->truncate();
        if  (! DB::table('users')->find(1)) {
           
            DB::table('users')->insert([
                'name'      =>  'marcelo',
                'email'     =>  'marcelo.miranda.pp@gmail.com',
                'password'  =>  bcrypt('teste123')
            ]);
        }

    }
}
