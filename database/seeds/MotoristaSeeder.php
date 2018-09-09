<?php

use Illuminate\Database\Seeder;

class MotoristaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Motorista::class, 50)->create();
    }
}
