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

        //$this->call(ConfigTableSeeder::class);
        //DB::table('setups')->insert(['hh_inicio_sessao'   => '19:00']);    
        
        /* $this->call(UserTableSeeder::class);
        $this->call(PaisTableSeeder::class); 
        $this->call(PotenciaTableSeeder::class);
        $this->call(CargosTableSeeder::class);
        $this->call(LojaTableSeeder::class); 
        $this->call(MembroTableSeeder::class); 
         */
        $this->call(VisitanteTableSeeder::class); 
        $this->call(SessaoTableSeeder::class);
    }
}