<?php

use Illuminate\Database\Seeder;

class VeiculoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Veiculo::class, 50)->create();
    }
}
