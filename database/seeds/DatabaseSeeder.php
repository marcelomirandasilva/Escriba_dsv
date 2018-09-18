9<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* $this->call(UserTableSeeder::class);
        $this->call(PaisTableSeeder::class); 
        $this->call(PotenciaTableSeeder::class);
        $this->call(CargosTableSeeder::class);
        $this->call(LojaTableSeeder::class); */
        $this->call(MembroTableSeeder::class);
    }
}