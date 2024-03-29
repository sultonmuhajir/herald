<?php
/*
|--------------------------------------------------------------------------
| Abbreviate a Two Word Name
|--------------------------------------------------------------------------
|
*/

function abbrevName($name)
{
   return strtoupper(join('.',array_map(function ($i) { return $i[0]; }, explode(' ',$name))));
}


function abbrevName($name){
   $name = explode(' ', $name);
   $name = substr_replace($name, '', 1);
   $name = implode('.', $name);
   return mb_strtoupper($name);
}


function abbrevName( string $name ) : string {
   return implode( ".", array_map(function( $n ) { if ( ! empty( $n )) return $n[0]; }, explode(" ", strtoupper( $name ) ) ) );
}


function abbrevName($name)
{ 
   for($i = 0; $i < strlen($name); $i++)
   {
      if($name[$i] == " ")
      {
         return (strtoupper($name[0] . "." . $name[($i)+1]));
      }
   }
}


print_r(abbrevName("Sam Harris")." S.H
");
print_r(abbrevName("Patrick Feenan")." P.F
");
print_r(abbrevName("Evan Cole")." E.C
");
print_r(abbrevName("P Favuzzi")." P.F
");
print_r(abbrevName("David Mendieta")." D.M
");