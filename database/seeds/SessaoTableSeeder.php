<?php

use App\Models\users;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class SessaoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        factory(App\Models\Sessao::class, 10)->create();
        

    }
}
