<?php
use Illuminate\Database\Seeder;


class VisitanteTableSeeder extends Seeder
{

    public function run()
    {

       
        factory(App\Models\Visitante::class, 10)->create();

    }
}

