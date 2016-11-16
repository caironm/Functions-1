<?php
/*
  Don't Remove this comment.
  Write your function below.
  Random String Generator
  Input Params: n - length of output string (Default: 20)
  Conditions: Output String Must Only Contain a-z, A-Z, 0-9. No Special Chars.
*/
<?php
function RandomString()
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randstring = '';
    for ($i = 0; $i < 20; $i++) {
        $randstring = $characters[rand(0, strlen($characters))];
    }
    return $randstring;
}
RandomString();
echo $randstring;



?>
