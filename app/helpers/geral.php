<?php


if (! function_exists('pegaValorEnum')) {
   function pegaValorEnum($table, $column, $ordena=false) {
      $type = DB::select(DB::raw("SHOW COLUMNS FROM $table WHERE Field = '{$column}'"))[0]->Type ;
         preg_match('/^enum\((.*)\)$/', $type, $matches);
         $enum = array();
         foreach( explode(',', $matches[1]) as $value )
         {
            $v = trim( $value, "'" );
            $enum[] = $v;
         } 
      //ordena   
      if($ordena){
         sort($enum);
      }
      return $enum;
   }
}


