<?php

use Illuminate\Database\Seeder;

class PostoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Posto::class, 50)->create();
    }
}
