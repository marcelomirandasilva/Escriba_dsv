<?php
use Illuminate\Database\Seeder;
use App\Models\irmao;
use Faker\Factory as Faker;

class IrmaosTableSeeder extends Seeder
{

    public function run()
    {
        //DB::table('irmao')->truncate();

        $faker = Faker::create('pt_BR');

        foreach (range(1,50) as $i) {
          
            DB::table('irmao')->insert([
                'no_irmao'              => $faker->name,
                'co_cim'                => $faker->numberBetween($min = 11111, $max = 9999999),
                'nu_cpf'                => $faker->cpf(false),
                'dt_nascimento'         => $faker->date($format = 'Y-m-d', $max = 'now'),

                'ic_estado_civil'       => $faker->randomElement($array = array (
                                                                                    'Solteiro',
                                                                                    'Casado',
                                                                                    'Divorciado',
                                                                                    'Viúvo',
                                                                                    'Separado',
                                                                                    'União estável'
                                                                                )),

                'ic_grau'               => $faker->randomElement($array = array (

                                                                                    'Profano',
                                                                                    'Aprendiz',
                                                                                    'Companheiro',
                                                                                    'Mestre',
                                                                                    'M.Instalado'
                                                                                )),                                                                                


                'dt_iniciacao'          =>$faker->date($format = 'Y-m-d', $max = 'now'),
                'fk_loja_iniciacao'     =>$faker->numberBetween($min = 1, $max = 5),

                'dt_elevacao'           =>$faker->date($format = 'Y-m-d', $max = 'now'),
                'fk_loja_elevacao'      =>$faker->numberBetween($min = 1, $max = 5),

                'dt_exaltacao'          =>$faker->date($format = 'Y-m-d', $max = 'now'),
                'fk_loja_exaltacao'      =>$faker->numberBetween($min = 1, $max = 5),

                'dt_instalacao'          =>$faker->date($format = 'Y-m-d', $max = 'now'),
                'fk_loja_instalacao'     =>$faker->numberBetween($min = 1, $max = 5),

                

                'ic_situacao'            => $faker->randomElement($array = array (
                
                                                                                    'Regular',
                                                                                    'Suspenso',
                                                                                    'XXXXXXXXX',
                                                                                    'YYYYYYYYY',
                                                                                    'ZZZZZZZZZ'
                                                                                )),
                

                'ic_escolaridade'       => $faker->randomElement($array = array (

                                                                                'Fundamental - Incompleto',
                                                                                'Fundamental - Completo',
                                                                                'Médio - Incompleto',
                                                                                'Médio - Completo',
                                                                                'Superior - Incompleto',
                                                                                'Superior - Completo',
                                                                                'Pós-graduação - Incompleto',
                                                                                'Pós-graduação - Completo',
                                                                                'Mestrado - Incompleto',
                                                                                'Mestrado - Completo',
                                                                                'Doutorado - Incompleto',
                                                                                'Doutorado - Completo'
                                                                                )),

                                                                            

                'de_profissao'          => $faker->jobTitle,
                
                'ic_aposentado'         => $faker->randomElement($array = array ('Não', 'Sim')),

            
            ]);



        }
    }
}