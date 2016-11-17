<?php
/*
  Don't Remove this comment.
  Write your function below.
  Random String Generator
  Input Params: n - length of output string (Default: 20)
  Conditions: Output String Must Only Contain a-z, A-Z, 0-9. No Special Chars.
*/
function RandomString() //length parameter not passed
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randstring = '';
    for ($i = 0; $i < 20; $i++) {
        $randstring = $characters[rand(0, strlen($characters))]; //$randstring is assigned a single char everytime.
    }
    return $randstring;
}
RandomString();
echo $randstring; //this variable is not available out the function.


?>
