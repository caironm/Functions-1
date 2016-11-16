<?php
/*
  Don't Remove this comment!.
  
  Random Material Color Generator
  Input: none
  Output: Hex code of color in string type
  Conditions: same color should not repeat on consecutive call of function
 
 
*/

 //Write your php function below.
function rcp() {
    return str_pad( dechex( mt_rand( 0, 255 ) ), 2, '0', STR_PAD_LEFT);
}

function rc() {
    return rcp() . rcp() . rcp();
}

echo "#".rc();

?>
