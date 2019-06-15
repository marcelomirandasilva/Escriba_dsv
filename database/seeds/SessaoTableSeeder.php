<?php

use App\Models\sessao;
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

        factory(App\Models\Sessao::class, 5)->create();
        

    }
}
