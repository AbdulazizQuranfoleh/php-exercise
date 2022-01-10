<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$string="--remove-all--dashes ";
$test = str_replace("-", " ", $string);
echo $test;

echo"<br>";
$string="/1+45*45-5:9";
$test = str_replace(array( '\'', '-',
'+' , '/', '*', ':' ), " ", $string);
echo $test;

$pieces = explode("hi this is five the world to try if work or not  ", $inputstring);
echo $pieces;
$first_part = implode(" ", array_splice($pieces, 0, 5));
$other_part = implode(" ", array_splice($pieces, 5));
echo"<br>";
$my_string = 'The quick brown fox jumps over the lazy dog';
echo implode(' ', array_slice(explode(' ', $my_string), 0, 5));
echo"<br>";

$str = "2,543.12";
$q = str_replace( ',', '', $str);
if( is_numeric($q))
  {
  echo $q;
  }
  echo"<br>";
  for ($x = ord('a'); $x <= ord('z'); $x++)
 echo chr($x);
 
?>
</body>
</html>