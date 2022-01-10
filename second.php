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
  echo "the new trainee is so genius.";
  echo"<br>";
  echo str_replace("the","our","the new trainee is so genius.");
 echo"<br>";
  $str1 = 'football';
$str2 = 'footboll';

for($i=0;$i <= strlen($str1);$i++){
    if($str1[$i] != $str2[$i]){
        echo($str1[$i] );
    }
}
$a = array(4, 4, array("twinkle", "twinkle", "little ","star"));
var_dump($a);
echo"<br>";
$ch = 'z';
$next_ch = ++$ch; 
if (strlen($next_ch) > 1) {
 $next_ch = $next_ch[0];
}
echo $next_ch;
echo"<br>";
$original_string = 'The brown fox';
$string_to_insert ='quick';
$insert_pos = 4;
$new_string = substr_replace($original_string, $string_to_insert.' ', $insert_pos, 0);
echo $new_string;
echo"<br>";
echo $original_string;
echo"<br>";
$str = "0000775505";
echo ltrim($str,"0");
echo"<br>";
$orgenals="the quick brown  fox jumps over the lazy dog";
$var="fox";
echo str_replace("fox","",$orgenals);
echo"<br>";






  ?>
</body>
</html>