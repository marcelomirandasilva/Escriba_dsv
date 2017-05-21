<?php

use Illuminate\Database\Seeder;

class PotenciaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
       /* DB::table('potencia')->insert(['no_continente'   => 'Ilhas Brtânicas','no_potencia'     => 'Grande Loja da Ireland']);
        DB::table('potencia')->insert(['no_continente'   => 'Ilhas Brtânicas','no_potencia'     => 'Grande Loja da Scotland']);

        DB::table('potencia')->insert(['no_continente'   => 'Europa','no_potencia'     => 'Grande Loja da Albania']);
        DB::table('potencia')->insert(['no_continente'   => 'Europa','no_potencia'     => 'Grande Loja da Andorra']);
        DB::table('potencia')->insert(['no_continente'   => 'Europa','no_potencia'     => 'Grande Loja da Armenia']);
        DB::table('potencia')->insert(['no_continente'   => 'Europa','no_potencia'     => 'Grande Loja da Austria']);
        DB::table('potencia')->insert(['no_continente'   => 'Europa','no_potencia'     => 'Regular Grande Loja da Belgium']);
        DB::table('potencia')->insert(['no_continente'   => 'Europa','no_potencia'     => 'Grande Loja da Bosnia and Herzegovina']);
        DB::table('potencia')->insert(['no_continente'   => 'Europa','no_potencia'     => 'Grande Loja Unida da Bulgaria']);
        DB::table('potencia')->insert(['no_continente'   => 'Europa','no_potencia'     => 'Grande Loja da Croatia']);
        DB::table('potencia')->insert(['no_continente'   => 'Europa','no_potencia'     => 'Grande Loja da Cyprus']);
        DB::table('potencia')->insert(['no_continente'   => 'Europa','no_potencia'     => 'Grande Loja da Czech Republic']);
        DB::table('potencia')->insert(['no_continente'   => 'Europa','no_potencia'     => 'Grande Loja da Denmark (Danish Order of Freemasons)']);
        DB::table('potencia')->insert(['no_continente'   => 'Europa','no_potencia'     => 'Grande Loja da Estonia']);
        DB::table('potencia')->insert(['no_continente'   => 'Europa','no_potencia'     => 'Grande Loja da Finland']);
        DB::table('potencia')->insert(['no_continente'   => 'Europa','no_potencia'     => 'Grande Loge Nationale Française']);
        DB::table('potencia')->insert(['no_continente'   => 'Europa','no_potencia'     => 'Grande Loja Unida da Germany']);
        DB::table('potencia')->insert(['no_continente'   => 'Europa','no_potencia'     => 'Grande Loja da Greece']);
        DB::table('potencia')->insert(['no_continente'   => 'Europa','no_potencia'     => 'Grande Loja Simbólica da da Hungary']);
        DB::table('potencia')->insert(['no_continente'   => 'Europa','no_potencia'     => 'Grande Loja da Iceland (Icelandic Order of Freemasons)']);
        DB::table('potencia')->insert(['no_continente'   => 'Europa','no_potencia'     => 'Regular Grande Loja da Italy']);
        DB::table('potencia')->insert(['no_continente'   => 'Europa','no_potencia'     => 'Grande Loja da Latvia']);
        DB::table('potencia')->insert(['no_continente'   => 'Europa','no_potencia'     => 'Grande Loja da Lithuania']);
        DB::table('potencia')->insert(['no_continente'   => 'Europa','no_potencia'     => 'Grande Loja da Luxembourg']);
        DB::table('potencia')->insert(['no_continente'   => 'Europa','no_potencia'     => 'Grande Loja da Macedonia']);
        DB::table('potencia')->insert(['no_continente'   => 'Europa','no_potencia'     => 'Soberana Grande Loja da Malta']);
        DB::table('potencia')->insert(['no_continente'   => 'Europa','no_potencia'     => 'Grande Loja da Moldova']);
        DB::table('potencia')->insert(['no_continente'   => 'Europa','no_potencia'     => 'National Regular Grande Loja da the Principality of Monaco']);
        DB::table('potencia')->insert(['no_continente'   => 'Europa','no_potencia'     => 'Grande Loja da Montenegro']);
        DB::table('potencia')->insert(['no_continente'   => 'Europa','no_potencia'     => 'Grand East Lodge of Netherlands']);
        DB::table('potencia')->insert(['no_continente'   => 'Europa','no_potencia'     => 'Grande Loja da Norway (Norwegian Order of Freemasons)']);
        DB::table('potencia')->insert(['no_continente'   => 'Europa','no_potencia'     => 'Grande Loja Nacional da Poland']);
        DB::table('potencia')->insert(['no_continente'   => 'Europa','no_potencia'     => 'Grande Loja da Portugal (Legal)']);
        DB::table('potencia')->insert(['no_continente'   => 'Europa','no_potencia'     => 'Grande Loja Nacional da Romania']);
        DB::table('potencia')->insert(['no_continente'   => 'Europa','no_potencia'     => 'Grande Loja da Russia']);
        DB::table('potencia')->insert(['no_continente'   => 'Europa','no_potencia'     => 'Grande Loja da the Most Serene Republic of San Marino']);
        DB::table('potencia')->insert(['no_continente'   => 'Europa','no_potencia'     => 'Regular Grande Loja da Serbia']);
        DB::table('potencia')->insert(['no_continente'   => 'Europa','no_potencia'     => 'Grande Loja da Slovakia']);
        DB::table('potencia')->insert(['no_continente'   => 'Europa','no_potencia'     => 'Grande Loja da Slovenia']);
        DB::table('potencia')->insert(['no_continente'   => 'Europa','no_potencia'     => 'Grande Loja da Spain']);
        DB::table('potencia')->insert(['no_continente'   => 'Europa','no_potencia'     => 'Grande Loja da Sweden (Swedish Order of Freemasons)']);
        DB::table('potencia')->insert(['no_continente'   => 'Europa','no_potencia'     => 'Grand Lodge Alpina of Switzerland']);
        DB::table('potencia')->insert(['no_continente'   => 'Europa','no_potencia'     => 'Grande Loja da Turkey']);
        DB::table('potencia')->insert(['no_continente'   => 'Europa','no_potencia'     => 'Grande Loja da Ukraine']);


        DB::table('potencia')->insert(['no_continente'   => 'Africa','no_potencia'     => 'Grande Loja da Benin']);
        DB::table('potencia')->insert(['no_continente'   => 'Africa','no_potencia'     => 'Grande Loja da Burkina Faso']);
        DB::table('potencia')->insert(['no_continente'   => 'Africa','no_potencia'     => 'Grande Loja da Cameroon']);
        DB::table('potencia')->insert(['no_continente'   => 'Africa','no_potencia'     => 'Grande Loja da Congo*']);
        DB::table('potencia')->insert(['no_continente'   => 'Africa','no_potencia'     => 'Grande Loja da Gabon']);
        DB::table('potencia')->insert(['no_continente'   => 'Africa','no_potencia'     => 'Grande Loja da Ghana']);
        DB::table('potencia')->insert(['no_continente'   => 'Africa','no_potencia'     => 'Grande Loja Nacional da Guinea']);
        DB::table('potencia')->insert(['no_continente'   => 'Africa','no_potencia'     => 'Grande Loja da Ivory Coast']);
        DB::table('potencia')->insert(['no_continente'   => 'Africa','no_potencia'     => 'Grande Loja da the Republic of Liberia']);
        DB::table('potencia')->insert(['no_continente'   => 'Africa','no_potencia'     => 'Grande Loja Nacional da Madagascar']);
        DB::table('potencia')->insert(['no_continente'   => 'Africa','no_potencia'     => 'Grande Loja Nacional da Mali']);
        DB::table('potencia')->insert(['no_continente'   => 'Africa','no_potencia'     => 'Grande Loja da Mauritius']);
        DB::table('potencia')->insert(['no_continente'   => 'Africa','no_potencia'     => 'Regular Grande Loja da the Kingdom of Morocco']);
        DB::table('potencia')->insert(['no_continente'   => 'Africa','no_potencia'     => 'Grande Loja da Nigeria']);
        DB::table('potencia')->insert(['no_continente'   => 'Africa','no_potencia'     => 'Grande Loja da Senegal']);
        DB::table('potencia')->insert(['no_continente'   => 'Africa','no_potencia'     => 'Grande Loja da South Africa']);
        DB::table('potencia')->insert(['no_continente'   => 'Africa','no_potencia'     => 'Grande Loja Nacional da Togo']);


        DB::table('potencia')->insert(['no_continente'   => 'Asia e Australia','no_potencia'     => 'Grande Loja Unida da New South Wales and the Australian Capital Territory']);
        DB::table('potencia')->insert(['no_continente'   => 'Asia e Australia','no_potencia'     => 'Grande Loja da New Zealand']);
        DB::table('potencia')->insert(['no_continente'   => 'Asia e Australia','no_potencia'     => 'Grande Loja da Queensland']);
        DB::table('potencia')->insert(['no_continente'   => 'Asia e Australia','no_potencia'     => 'Grande Loja da South Australia and the Northern Territory']);
        DB::table('potencia')->insert(['no_continente'   => 'Asia e Australia','no_potencia'     => 'Grande Loja da Tasmania']);
        DB::table('potencia')->insert(['no_continente'   => 'Asia e Australia','no_potencia'     => 'Grande Loja Unida da Victoria']);
        DB::table('potencia')->insert(['no_continente'   => 'Asia e Australia','no_potencia'     => 'Grande Loja da Western Australia']);


        DB::table('potencia')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja da Alberta']);
        DB::table('potencia')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja da British Columbia and Yukon']);
        DB::table('potencia')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja da Canada (in the Province of Ontario)']);
        DB::table('potencia')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja Prince Hall da Ontario']);
        DB::table('potencia')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja da Manitoba']);
        DB::table('potencia')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja da New Brunswick']);
        DB::table('potencia')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja da Newfoundland and Labrador']);
        DB::table('potencia')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja da Nova Scotia']);
        DB::table('potencia')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja da Prince Edward Island']);
        DB::table('potencia')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja da Quebec']);
        DB::table('potencia')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja da Saskatchewan']);
        DB::table('potencia')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja da Alabama']);
        DB::table('potencia')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja da Alaska']);
        DB::table('potencia')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja Prince Hall da Alaska']);
        DB::table('potencia')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja da Arizona']);
        DB::table('potencia')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja Prince Hall da Arizona']);
        DB::table('potencia')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja da Arkansas']);
        DB::table('potencia')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja da California']);
        DB::table('potencia')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja Prince Hall da California']);
        DB::table('potencia')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja da Colorado']);
        DB::table('potencia')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja Prince Hall da Colorado']);
        DB::table('potencia')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja da Connecticut']);
        DB::table('potencia')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja Prince Hall da Connecticut']);
        DB::table('potencia')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja da Delaware']);
        DB::table('potencia')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja Prince Hall da Delaware']);
        DB::table('potencia')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja da the District of Columbia   [Washington DC]']);
        DB::table('potencia')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja Prince Hall da the District of Columbia   [Washington DC]']);
        DB::table('potencia')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja da Florida']);
        DB::table('potencia')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja da Georgia']);
        DB::table('potencia')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja da Hawaii']);
        DB::table('potencia')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja Prince Hall da Hawaii']);
        DB::table('potencia')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja da Idaho']);
        DB::table('potencia')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja da Illinois']);
        DB::table('potencia')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja Prince Hall da Illinois']);
        DB::table('potencia')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja da Indiana']);
        DB::table('potencia')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja Prince Hall da Indiana']);
        DB::table('potencia')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja da Iowa']);
        DB::table('potencia')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja Prince Hall da Iowa']);
        DB::table('potencia')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja da Kansas']);
        DB::table('potencia')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja Prince Hall da Kansas']);
        DB::table('potencia')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja da Kentucky']);
        DB::table('potencia')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja da Louisiana']);
        DB::table('potencia')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja da Maine']);
        DB::table('potencia')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja da Maryland']);
        DB::table('potencia')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja Prince Hall da Maryland']);
        DB::table('potencia')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja da Massachusetts']);
        DB::table('potencia')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja Prince Hall da Massachusetts']);
        DB::table('potencia')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja da Michigan']);
        DB::table('potencia')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja Prince Hall da Michigan']);
        DB::table('potencia')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja da Minnesota']);
        DB::table('potencia')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja Prince Hall da Minnesota']);
        DB::table('potencia')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja da Mississippi']);
        DB::table('potencia')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja da Missouri']);
        DB::table('potencia')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja Prince Hall da Missouri']);
        DB::table('potencia')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja da Montana']);
        DB::table('potencia')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja da Nebraska']);
        DB::table('potencia')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja Prince Hall da Nebraska']);
        DB::table('potencia')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja da Nevada']);
        DB::table('potencia')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja Prince Hall da Nevada']);
        DB::table('potencia')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja da New Hampshire']);
        DB::table('potencia')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja da New Jersey']);
        DB::table('potencia')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja Prince Hall da New Jersey']);
        DB::table('potencia')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja da New Mexico']);
        DB::table('potencia')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja Prince Hall da the State of New Mexico']);
        DB::table('potencia')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja da the State of New York']);
        DB::table('potencia')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja Prince Hall da New York']);
        DB::table('potencia')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja da North Carolina']);
        DB::table('potencia')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja Prince Hall da North Carolina']);
        DB::table('potencia')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja da North Dakota']);
        DB::table('potencia')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja da Ohio']);
        DB::table('potencia')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja Prince Hall da Ohio']);
        DB::table('potencia')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja da Oklahoma']);
        DB::table('potencia')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja da Oregon']);
        DB::table('potencia')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja Prince Hall da Oregon']);
        DB::table('potencia')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja da Pennsylvania']);
        DB::table('potencia')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja Prince Hall da Pennsylvania']);
        DB::table('potencia')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja da Rhode Island']);
        DB::table('potencia')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja Prince Hall da Rhode Island']);
        DB::table('potencia')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja da South Carolina']);
        DB::table('potencia')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja da South Dakota']);
        DB::table('potencia')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja da Tennessee']);
        DB::table('potencia')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja da Texas']);
        DB::table('potencia')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja Prince Hall da Texas']);
        DB::table('potencia')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja da Utah']);
        DB::table('potencia')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja da Vermont']);
        DB::table('potencia')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja da Virginia']);
        DB::table('potencia')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja Prince Hall da Virginia']);
        DB::table('potencia')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja da Washington']);
        DB::table('potencia')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja Prince Hall da Washington']);
        DB::table('potencia')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja da West Virginia']);
        DB::table('potencia')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja da Wisconsin']);
        DB::table('potencia')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja Prince Hall da Wisconsin']);
        DB::table('potencia')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja da Wyoming']);



        DB::table('potencia')->insert(['no_continente'   => 'América Central','no_potencia'     => 'Grande Loja da Costa Rica']);
        DB::table('potencia')->insert(['no_continente'   => 'América Central','no_potencia'     => 'Grande Loja da Cuscatlan of El Salvador']);
        DB::table('potencia')->insert(['no_continente'   => 'América Central','no_potencia'     => 'Grande Loja da Guatemala']);
        DB::table('potencia')->insert(['no_continente'   => 'América Central','no_potencia'     => 'York Grande Loja da Mexico']);
        DB::table('potencia')->insert(['no_continente'   => 'América Central','no_potencia'     => 'Grande Loja da Panama']);
        DB::table('potencia')->insert(['no_continente'   => 'América Central','no_potencia'     => 'Grande Loja da the State of Vera Cruz']);
        DB::table('potencia')->insert(['no_continente'   => 'América Central','no_potencia'     => 'Grande Loja Prince Hall da the Commonwealth of the Bahamas']);
        DB::table('potencia')->insert(['no_continente'   => 'América Central','no_potencia'     => 'Grande Loja Prince Hall da the Caribbean and Jurisdiction']);
        DB::table('potencia')->insert(['no_continente'   => 'América Central','no_potencia'     => 'Grande Loja da Cuba']);
        DB::table('potencia')->insert(['no_continente'   => 'América Central','no_potencia'     => 'Grande Loja da the Dominican Republic']);
        DB::table('potencia')->insert(['no_continente'   => 'América Central','no_potencia'     => 'Grande Oriente do Haiti']);
        DB::table('potencia')->insert(['no_continente'   => 'América Central','no_potencia'     => 'Grande Loja de Puerto Rico']);

*/

        //DB::table('potencia')->insert(['no_continente'   => 'América do Sul','no_potencia'     => 'Grande Loja da Argentina']);
        //DB::table('potencia')->insert(['no_continente'   => 'América do Sul','no_potencia'     => 'Grande Loja da Bolivia']);
        DB::table('potencia')->insert(['no_continente'   => 'América do Sul','no_potencia'     => 'Grande Oriente do Brasil']);
        DB::table('potencia')->insert(['no_continente'   => 'América do Sul','no_potencia'     => 'Grande Loja Maçônica do Estado do Espírito Santo']);
        DB::table('potencia')->insert(['no_continente'   => 'América do Sul','no_potencia'     => 'Grande Loja Maçônica do Estado de Mato Grosso Do Sul']);
        DB::table('potencia')->insert(['no_continente'   => 'América do Sul','no_potencia'     => 'Grande Loja Maçônica do Estado do Rio De Janeiro']);
        DB::table('potencia')->insert(['no_continente'   => 'América do Sul','no_potencia'     => 'Grande Loja Maçônica do estado do Rio Grande do Sul']);
        DB::table('potencia')->insert(['no_continente'   => 'América do Sul','no_potencia'     => 'Grande Loja Maçônica do Estado São Paulo']);
        //DB::table('potencia')->insert(['no_continente'   => 'América do Sul','no_potencia'     => 'Grande Loja da Chile']);
        //DB::table('potencia')->insert(['no_continente'   => 'América do Sul','no_potencia'     => 'Grande Loja da Colombia em Barranquilla']);
        //DB::table('potencia')->insert(['no_continente'   => 'América do Sul','no_potencia'     => 'Grande Loja da Colombia em Bogota']);
        //DB::table('potencia')->insert(['no_continente'   => 'América do Sul','no_potencia'     => 'Grande Loja da Colombia em Cali']);
        //DB::table('potencia')->insert(['no_continente'   => 'América do Sul','no_potencia'     => 'Grande Loja da Colombia em Cartagena']);
        //DB::table('potencia')->insert(['no_continente'   => 'América do Sul','no_potencia'     => 'Grande Loja Oriental da Colombia ‘Francisco de Paula Santander’']);
        //DB::table('potencia')->insert(['no_continente'   => 'América do Sul','no_potencia'     => 'Grande Loja da Los Andes']);
        //DB::table('potencia')->insert(['no_continente'   => 'América do Sul','no_potencia'     => 'Grande Loja da Ecuador']);
        //DB::table('potencia')->insert(['no_continente'   => 'América do Sul','no_potencia'     => 'Grande Loja Simbólica da da Paraguay']);
        //DB::table('potencia')->insert(['no_continente'   => 'América do Sul','no_potencia'     => 'Grande Loja da Peru']);
        //DB::table('potencia')->insert(['no_continente'   => 'América do Sul','no_potencia'     => 'Grande Loja da Uruguay']);
        //DB::table('potencia')->insert(['no_continente'   => 'América do Sul','no_potencia'     => 'Grande Loja da the Republic da Venezuela']);
        
    }
}
