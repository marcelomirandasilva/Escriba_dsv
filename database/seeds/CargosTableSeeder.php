<?php

use Illuminate\Database\Seeder;

class CargosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cargos')->insert(['no_cargo'   => 'Venerável Mestre']);    

        DB::table('cargos')->insert(['no_cargo'   => '1º Vigilante']);    
        DB::table('cargos')->insert(['no_cargo'   => '2º Vigilante']);    
        DB::table('cargos')->insert(['no_cargo'   => 'Orador']);    
        DB::table('cargos')->insert(['no_cargo'   => 'Secretário']);    
        DB::table('cargos')->insert(['no_cargo'   => 'Tesoureiro']);    
        DB::table('cargos')->insert(['no_cargo'   => 'Chanceler']);    
        DB::table('cargos')->insert(['no_cargo'   => 'Mestre de Cerimônias']);    
        DB::table('cargos')->insert(['no_cargo'   => 'Hospitaleiro']);    
        DB::table('cargos')->insert(['no_cargo'   => '1º Diácono']);    
        DB::table('cargos')->insert(['no_cargo'   => '2º Diácono']);    
        DB::table('cargos')->insert(['no_cargo'   => '1º Experto']);    
        DB::table('cargos')->insert(['no_cargo'   => '2º Experto']);    
        DB::table('cargos')->insert(['no_cargo'   => 'Porta-Bandeira']);    
        DB::table('cargos')->insert(['no_cargo'   => 'Porta-Estandarte']);    
        DB::table('cargos')->insert(['no_cargo'   => 'Porta-Espada']);    
        DB::table('cargos')->insert(['no_cargo'   => 'Cobridor Externo']);    
        DB::table('cargos')->insert(['no_cargo'   => 'Cobridor Interno']);    
        DB::table('cargos')->insert(['no_cargo'   => 'Mestre de Harmonia']);    
        DB::table('cargos')->insert(['no_cargo'   => 'Arquiteto']);    
        DB::table('cargos')->insert(['no_cargo'   => 'Mestre de Banquete']);    
        DB::table('cargos')->insert(['no_cargo'   => 'Bibliotecário']);    
        DB::table('cargos')->insert(['no_cargo'   => 'Deputado Federal']);    
        DB::table('cargos')->insert(['no_cargo'   => 'Deputado Estadual']);    

    }
}
