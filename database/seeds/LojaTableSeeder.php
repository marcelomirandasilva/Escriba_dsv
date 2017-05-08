<?php
use App\Models\loja;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class LojaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DB::table('loja')->truncate();

        DB::table('loja')->insert([
            'co_titulo'   => 'ARLS',
            'no_loja'     => 'PIONEIROS DO PROGRESSO',
            'nu_loja'     => 1731,
            'dt_fundacao' => '01/01/1960',
            'fk_potencia_id' => 176
        ]);
        
       $faker = Faker::create('pt_BR');

        foreach (range(1,50) as $i) {
          

            DB::table('loja')->insert([
                'co_titulo'         => 'ARLS',
                'no_loja'           => $faker->company,
                'nu_loja'           => $faker->numberBetween($min = 1000, $max = 9000), 
                'dt_fundacao'       => $faker->date($format = 'Y-m-d', $max = 'now'),
                'fk_potencia_id'    => rand(1, 193),
            ]);
        }
    }
}
