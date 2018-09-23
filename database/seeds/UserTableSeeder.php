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

        if  (! DB::table('users')->find(1)) {
           
            DB::table('users')->insert([
                'name'              =>  'Marcelo Miranda',
                'email'             =>  'marcelo.miranda.pp@gmail.com',
                'password'          =>  bcrypt('teste123'),
                'remember_token'    =>  str_random(10),
                'avatar'            =>  '',
            ]);

            DB::table('users')->insert([
                'name'              =>  'Teste de sistema',
                'email'             =>  'teste@teste.com',
                'password'          =>  bcrypt('teste123'),
                'remember_token'    =>  str_random(10),
                'avatar'            =>  '',
            ]);

        }


        factory(App\Models\User::class, 50)->create()->each(function($User){});
        

    }
}
