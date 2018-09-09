<?php


if (! function_exists('pegaValorEnum')) {
   function pegaValorEnum($table, $column) {
      $type = DB::select(DB::raw("SHOW COLUMNS FROM $table WHERE Field = '{$column}'"))[0]->Type ;
         preg_match('/^enum\((.*)\)$/', $type, $matches);
         $enum = array();
         foreach( explode(',', $matches[1]) as $value )
         {
            $v = trim( $value, "'" );
            $enum[] = $v;
         } 
         
      return $enum;
   }
}


