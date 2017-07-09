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
        
       /* DB::table('potencias')->insert(['no_continente'   => 'Ilhas Brtânicas','no_potencia'     => 'Grande Loja da Ireland']);
        DB::table('potencias')->insert(['no_continente'   => 'Ilhas Brtânicas','no_potencia'     => 'Grande Loja da Scotland']);

        DB::table('potencias')->insert(['no_continente'   => 'Europa','no_potencia'     => 'Grande Loja da Albania']);
        DB::table('potencias')->insert(['no_continente'   => 'Europa','no_potencia'     => 'Grande Loja da Andorra']);
        DB::table('potencias')->insert(['no_continente'   => 'Europa','no_potencia'     => 'Grande Loja da Armenia']);
        DB::table('potencias')->insert(['no_continente'   => 'Europa','no_potencia'     => 'Grande Loja da Austria']);
        DB::table('potencias')->insert(['no_continente'   => 'Europa','no_potencia'     => 'Regular Grande Loja da Belgium']);
        DB::table('potencias')->insert(['no_continente'   => 'Europa','no_potencia'     => 'Grande Loja da Bosnia and Herzegovina']);
        DB::table('potencias')->insert(['no_continente'   => 'Europa','no_potencia'     => 'Grande Loja Unida da Bulgaria']);
        DB::table('potencias')->insert(['no_continente'   => 'Europa','no_potencia'     => 'Grande Loja da Croatia']);
        DB::table('potencias')->insert(['no_continente'   => 'Europa','no_potencia'     => 'Grande Loja da Cyprus']);
        DB::table('potencias')->insert(['no_continente'   => 'Europa','no_potencia'     => 'Grande Loja da Czech Republic']);
        DB::table('potencias')->insert(['no_continente'   => 'Europa','no_potencia'     => 'Grande Loja da Denmark (Danish Order of Freemasons)']);
        DB::table('potencias')->insert(['no_continente'   => 'Europa','no_potencia'     => 'Grande Loja da Estonia']);
        DB::table('potencias')->insert(['no_continente'   => 'Europa','no_potencia'     => 'Grande Loja da Finland']);
        DB::table('potencias')->insert(['no_continente'   => 'Europa','no_potencia'     => 'Grande Loge Nationale Française']);
        DB::table('potencias')->insert(['no_continente'   => 'Europa','no_potencia'     => 'Grande Loja Unida da Germany']);
        DB::table('potencias')->insert(['no_continente'   => 'Europa','no_potencia'     => 'Grande Loja da Greece']);
        DB::table('potencias')->insert(['no_continente'   => 'Europa','no_potencia'     => 'Grande Loja Simbólica da da Hungary']);
        DB::table('potencias')->insert(['no_continente'   => 'Europa','no_potencia'     => 'Grande Loja da Iceland (Icelandic Order of Freemasons)']);
        DB::table('potencias')->insert(['no_continente'   => 'Europa','no_potencia'     => 'Regular Grande Loja da Italy']);
        DB::table('potencias')->insert(['no_continente'   => 'Europa','no_potencia'     => 'Grande Loja da Latvia']);
        DB::table('potencias')->insert(['no_continente'   => 'Europa','no_potencia'     => 'Grande Loja da Lithuania']);
        DB::table('potencias')->insert(['no_continente'   => 'Europa','no_potencia'     => 'Grande Loja da Luxembourg']);
        DB::table('potencias')->insert(['no_continente'   => 'Europa','no_potencia'     => 'Grande Loja da Macedonia']);
        DB::table('potencias')->insert(['no_continente'   => 'Europa','no_potencia'     => 'Soberana Grande Loja da Malta']);
        DB::table('potencias')->insert(['no_continente'   => 'Europa','no_potencia'     => 'Grande Loja da Moldova']);
        DB::table('potencias')->insert(['no_continente'   => 'Europa','no_potencia'     => 'National Regular Grande Loja da the Principality of Monaco']);
        DB::table('potencias')->insert(['no_continente'   => 'Europa','no_potencia'     => 'Grande Loja da Montenegro']);
        DB::table('potencias')->insert(['no_continente'   => 'Europa','no_potencia'     => 'Grand East Lodge of Netherlands']);
        DB::table('potencias')->insert(['no_continente'   => 'Europa','no_potencia'     => 'Grande Loja da Norway (Norwegian Order of Freemasons)']);
        DB::table('potencias')->insert(['no_continente'   => 'Europa','no_potencia'     => 'Grande Loja Nacional da Poland']);
        DB::table('potencias')->insert(['no_continente'   => 'Europa','no_potencia'     => 'Grande Loja da Portugal (Legal)']);
        DB::table('potencias')->insert(['no_continente'   => 'Europa','no_potencia'     => 'Grande Loja Nacional da Romania']);
        DB::table('potencias')->insert(['no_continente'   => 'Europa','no_potencia'     => 'Grande Loja da Russia']);
        DB::table('potencias')->insert(['no_continente'   => 'Europa','no_potencia'     => 'Grande Loja da the Most Serene Republic of San Marino']);
        DB::table('potencias')->insert(['no_continente'   => 'Europa','no_potencia'     => 'Regular Grande Loja da Serbia']);
        DB::table('potencias')->insert(['no_continente'   => 'Europa','no_potencia'     => 'Grande Loja da Slovakia']);
        DB::table('potencias')->insert(['no_continente'   => 'Europa','no_potencia'     => 'Grande Loja da Slovenia']);
        DB::table('potencias')->insert(['no_continente'   => 'Europa','no_potencia'     => 'Grande Loja da Spain']);
        DB::table('potencias')->insert(['no_continente'   => 'Europa','no_potencia'     => 'Grande Loja da Sweden (Swedish Order of Freemasons)']);
        DB::table('potencias')->insert(['no_continente'   => 'Europa','no_potencia'     => 'Grand Lodge Alpina of Switzerland']);
        DB::table('potencias')->insert(['no_continente'   => 'Europa','no_potencia'     => 'Grande Loja da Turkey']);
        DB::table('potencias')->insert(['no_continente'   => 'Europa','no_potencia'     => 'Grande Loja da Ukraine']);


        DB::table('potencias')->insert(['no_continente'   => 'Africa','no_potencia'     => 'Grande Loja da Benin']);
        DB::table('potencias')->insert(['no_continente'   => 'Africa','no_potencia'     => 'Grande Loja da Burkina Faso']);
        DB::table('potencias')->insert(['no_continente'   => 'Africa','no_potencia'     => 'Grande Loja da Cameroon']);
        DB::table('potencias')->insert(['no_continente'   => 'Africa','no_potencia'     => 'Grande Loja da Congo*']);
        DB::table('potencias')->insert(['no_continente'   => 'Africa','no_potencia'     => 'Grande Loja da Gabon']);
        DB::table('potencias')->insert(['no_continente'   => 'Africa','no_potencia'     => 'Grande Loja da Ghana']);
        DB::table('potencias')->insert(['no_continente'   => 'Africa','no_potencia'     => 'Grande Loja Nacional da Guinea']);
        DB::table('potencias')->insert(['no_continente'   => 'Africa','no_potencia'     => 'Grande Loja da Ivory Coast']);
        DB::table('potencias')->insert(['no_continente'   => 'Africa','no_potencia'     => 'Grande Loja da the Republic of Liberia']);
        DB::table('potencias')->insert(['no_continente'   => 'Africa','no_potencia'     => 'Grande Loja Nacional da Madagascar']);
        DB::table('potencias')->insert(['no_continente'   => 'Africa','no_potencia'     => 'Grande Loja Nacional da Mali']);
        DB::table('potencias')->insert(['no_continente'   => 'Africa','no_potencia'     => 'Grande Loja da Mauritius']);
        DB::table('potencias')->insert(['no_continente'   => 'Africa','no_potencia'     => 'Regular Grande Loja da the Kingdom of Morocco']);
        DB::table('potencias')->insert(['no_continente'   => 'Africa','no_potencia'     => 'Grande Loja da Nigeria']);
        DB::table('potencias')->insert(['no_continente'   => 'Africa','no_potencia'     => 'Grande Loja da Senegal']);
        DB::table('potencias')->insert(['no_continente'   => 'Africa','no_potencia'     => 'Grande Loja da South Africa']);
        DB::table('potencias')->insert(['no_continente'   => 'Africa','no_potencia'     => 'Grande Loja Nacional da Togo']);


        DB::table('potencias')->insert(['no_continente'   => 'Asia e Australia','no_potencia'     => 'Grande Loja Unida da New South Wales and the Australian Capital Territory']);
        DB::table('potencias')->insert(['no_continente'   => 'Asia e Australia','no_potencia'     => 'Grande Loja da New Zealand']);
        DB::table('potencias')->insert(['no_continente'   => 'Asia e Australia','no_potencia'     => 'Grande Loja da Queensland']);
        DB::table('potencias')->insert(['no_continente'   => 'Asia e Australia','no_potencia'     => 'Grande Loja da South Australia and the Northern Territory']);
        DB::table('potencias')->insert(['no_continente'   => 'Asia e Australia','no_potencia'     => 'Grande Loja da Tasmania']);
        DB::table('potencias')->insert(['no_continente'   => 'Asia e Australia','no_potencia'     => 'Grande Loja Unida da Victoria']);
        DB::table('potencias')->insert(['no_continente'   => 'Asia e Australia','no_potencia'     => 'Grande Loja da Western Australia']);


        DB::table('potencias')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja da Alberta']);
        DB::table('potencias')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja da British Columbia and Yukon']);
        DB::table('potencias')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja da Canada (in the Province of Ontario)']);
        DB::table('potencias')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja Prince Hall da Ontario']);
        DB::table('potencias')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja da Manitoba']);
        DB::table('potencias')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja da New Brunswick']);
        DB::table('potencias')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja da Newfoundland and Labrador']);
        DB::table('potencias')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja da Nova Scotia']);
        DB::table('potencias')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja da Prince Edward Island']);
        DB::table('potencias')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja da Quebec']);
        DB::table('potencias')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja da Saskatchewan']);
        DB::table('potencias')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja da Alabama']);
        DB::table('potencias')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja da Alaska']);
        DB::table('potencias')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja Prince Hall da Alaska']);
        DB::table('potencias')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja da Arizona']);
        DB::table('potencias')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja Prince Hall da Arizona']);
        DB::table('potencias')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja da Arkansas']);
        DB::table('potencias')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja da California']);
        DB::table('potencias')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja Prince Hall da California']);
        DB::table('potencias')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja da Colorado']);
        DB::table('potencias')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja Prince Hall da Colorado']);
        DB::table('potencias')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja da Connecticut']);
        DB::table('potencias')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja Prince Hall da Connecticut']);
        DB::table('potencias')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja da Delaware']);
        DB::table('potencias')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja Prince Hall da Delaware']);
        DB::table('potencias')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja da the District of Columbia   [Washington DC]']);
        DB::table('potencias')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja Prince Hall da the District of Columbia   [Washington DC]']);
        DB::table('potencias')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja da Florida']);
        DB::table('potencias')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja da Georgia']);
        DB::table('potencias')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja da Hawaii']);
        DB::table('potencias')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja Prince Hall da Hawaii']);
        DB::table('potencias')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja da Idaho']);
        DB::table('potencias')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja da Illinois']);
        DB::table('potencias')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja Prince Hall da Illinois']);
        DB::table('potencias')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja da Indiana']);
        DB::table('potencias')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja Prince Hall da Indiana']);
        DB::table('potencias')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja da Iowa']);
        DB::table('potencias')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja Prince Hall da Iowa']);
        DB::table('potencias')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja da Kansas']);
        DB::table('potencias')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja Prince Hall da Kansas']);
        DB::table('potencias')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja da Kentucky']);
        DB::table('potencias')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja da Louisiana']);
        DB::table('potencias')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja da Maine']);
        DB::table('potencias')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja da Maryland']);
        DB::table('potencias')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja Prince Hall da Maryland']);
        DB::table('potencias')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja da Massachusetts']);
        DB::table('potencias')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja Prince Hall da Massachusetts']);
        DB::table('potencias')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja da Michigan']);
        DB::table('potencias')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja Prince Hall da Michigan']);
        DB::table('potencias')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja da Minnesota']);
        DB::table('potencias')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja Prince Hall da Minnesota']);
        DB::table('potencias')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja da Mississippi']);
        DB::table('potencias')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja da Missouri']);
        DB::table('potencias')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja Prince Hall da Missouri']);
        DB::table('potencias')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja da Montana']);
        DB::table('potencias')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja da Nebraska']);
        DB::table('potencias')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja Prince Hall da Nebraska']);
        DB::table('potencias')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja da Nevada']);
        DB::table('potencias')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja Prince Hall da Nevada']);
        DB::table('potencias')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja da New Hampshire']);
        DB::table('potencias')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja da New Jersey']);
        DB::table('potencias')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja Prince Hall da New Jersey']);
        DB::table('potencias')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja da New Mexico']);
        DB::table('potencias')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja Prince Hall da the State of New Mexico']);
        DB::table('potencias')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja da the State of New York']);
        DB::table('potencias')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja Prince Hall da New York']);
        DB::table('potencias')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja da North Carolina']);
        DB::table('potencias')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja Prince Hall da North Carolina']);
        DB::table('potencias')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja da North Dakota']);
        DB::table('potencias')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja da Ohio']);
        DB::table('potencias')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja Prince Hall da Ohio']);
        DB::table('potencias')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja da Oklahoma']);
        DB::table('potencias')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja da Oregon']);
        DB::table('potencias')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja Prince Hall da Oregon']);
        DB::table('potencias')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja da Pennsylvania']);
        DB::table('potencias')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja Prince Hall da Pennsylvania']);
        DB::table('potencias')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja da Rhode Island']);
        DB::table('potencias')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja Prince Hall da Rhode Island']);
        DB::table('potencias')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja da South Carolina']);
        DB::table('potencias')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja da South Dakota']);
        DB::table('potencias')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja da Tennessee']);
        DB::table('potencias')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja da Texas']);
        DB::table('potencias')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja Prince Hall da Texas']);
        DB::table('potencias')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja da Utah']);
        DB::table('potencias')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja da Vermont']);
        DB::table('potencias')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja da Virginia']);
        DB::table('potencias')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja Prince Hall da Virginia']);
        DB::table('potencias')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja da Washington']);
        DB::table('potencias')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja Prince Hall da Washington']);
        DB::table('potencias')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja da West Virginia']);
        DB::table('potencias')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja da Wisconsin']);
        DB::table('potencias')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja Prince Hall da Wisconsin']);
        DB::table('potencias')->insert(['no_continente'   => 'América do Norte','no_potencia'     => 'Grande Loja da Wyoming']);



        DB::table('potencias')->insert(['no_continente'   => 'América Central','no_potencia'     => 'Grande Loja da Costa Rica']);
        DB::table('potencias')->insert(['no_continente'   => 'América Central','no_potencia'     => 'Grande Loja da Cuscatlan of El Salvador']);
        DB::table('potencias')->insert(['no_continente'   => 'América Central','no_potencia'     => 'Grande Loja da Guatemala']);
        DB::table('potencias')->insert(['no_continente'   => 'América Central','no_potencia'     => 'York Grande Loja da Mexico']);
        DB::table('potencias')->insert(['no_continente'   => 'América Central','no_potencia'     => 'Grande Loja da Panama']);
        DB::table('potencias')->insert(['no_continente'   => 'América Central','no_potencia'     => 'Grande Loja da the State of Vera Cruz']);
        DB::table('potencias')->insert(['no_continente'   => 'América Central','no_potencia'     => 'Grande Loja Prince Hall da the Commonwealth of the Bahamas']);
        DB::table('potencias')->insert(['no_continente'   => 'América Central','no_potencia'     => 'Grande Loja Prince Hall da the Caribbean and Jurisdiction']);
        DB::table('potencias')->insert(['no_continente'   => 'América Central','no_potencia'     => 'Grande Loja da Cuba']);
        DB::table('potencias')->insert(['no_continente'   => 'América Central','no_potencia'     => 'Grande Loja da the Dominican Republic']);
        DB::table('potencias')->insert(['no_continente'   => 'América Central','no_potencia'     => 'Grande Oriente do Haiti']);
        DB::table('potencias')->insert(['no_continente'   => 'América Central','no_potencia'     => 'Grande Loja de Puerto Rico']);

*/

        //DB::table('potencia')->insert(['no_continente'   => 'América do Sul','no_potencia'     => 'Grande Loja da Argentina']);
        //DB::table('potencia')->insert(['no_continente'   => 'América do Sul','no_potencia'     => 'Grande Loja da Bolivia']);
        DB::table('potencias')->insert(['no_continente'   => 'América do Sul','no_potencia'     => 'Grande Oriente do Brasil']);
        DB::table('potencias')->insert(['no_continente'   => 'América do Sul','no_potencia'     => 'Grande Loja Maçônica do Estado do Espírito Santo']);
        DB::table('potencias')->insert(['no_continente'   => 'América do Sul','no_potencia'     => 'Grande Loja Maçônica do Estado de Mato Grosso Do Sul']);
        DB::table('potencias')->insert(['no_continente'   => 'América do Sul','no_potencia'     => 'Grande Loja Maçônica do Estado do Rio De Janeiro']);
        DB::table('potencias')->insert(['no_continente'   => 'América do Sul','no_potencia'     => 'Grande Loja Maçônica do estado do Rio Grande do Sul']);
        DB::table('potencias')->insert(['no_continente'   => 'América do Sul','no_potencia'     => 'Grande Loja Maçônica do Estado São Paulo']);
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
