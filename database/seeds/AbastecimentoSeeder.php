<?php

use Illuminate\Database\Seeder;

class AbastecimentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Abastecimento::class, 500)->create();
    }
}
