<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Exercises</title>
</head>
<body>
    <?php
    $name="AbdUlAziz";
   echo strtoupper($name);
   echo"<br>";
    echo strtolower($name);
    echo"<br>";
    echo ucfirst($name);
    echo"<br>";
    echo ucwords($name);
    echo"<br>";
    $created_at = date("H:i:s");
    echo $created_at;
    echo"<br>";
    $date = date_create('085119');
echo date_format($date, 'H:i:s');
echo"<br>";
    $orange="orange";
$word="l am a full stack develper at orange coding academy";
if(strpos($word,$orange)!== false){
    echo $word;
    echo"<br>";
    echo"word found";
    
}
echo"<br>";
$path = 'www.orange.com/index.php';
$file_name = substr(strrchr($path, "/"), 1);
echo $path;
echo"<br>";
echo $file_name;
echo"<br>";
$otherPath='info@orange.com';
$other_file_name=substr($otherPath,0,4);
echo $other_file_name;
echo"<br>";
$other_file_name_end=substr($otherPath,-3);
echo $other_file_name_end;
echo"<br>";
echo"<br>";
function password($chars) 
{
  $data = '1234567890-=qwertyuiop[]asdfghjkl;zxcvnbm,';
  return substr(str_shuffle($data), 0, $chars);
}
  echo password(9);








    ?>
</body>
</html>