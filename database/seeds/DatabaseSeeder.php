<?php

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
        $this->call(SecretariaSeeder::class);
        $this->call(BaseSeeder::class); 
        $this->call(PostoSeeder::class); 
        $this->call(MotoristaSeeder::class);
        $this->call(VeiculoSeeder::class); 
        $this->call(AbastecimentoSeeder::class); 
    }
}
