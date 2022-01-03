   <?php
     //number 1
   echo nl2br("dina \n saad \r\n mohamed ");
      echo "<br>********************";

      //number 2
      echo"<br>";
      echo strtolower("Hello WORLD.");
      echo "<br>";
      echo strtoupper("Hello world!");
      echo "<br>";
      echo str_repeat("Wow",10);
      echo"<br>";
      echo"***********************";
       
      //number 3
   echo "<br>";

      foreach($_SERVER as $key => $value ){
      echo nl2br('['.$key.'] :'.$value."\n");
}
   
echo "<br>**********************<br>";

      




      //number 4

    
 echo"<br>";
    $a=array(12,45,10,25);
    $length = count($a);
echo array_sum($a);
echo"<br>";
  $average=array_sum($a)/$length;
echo $average;
echo"<br>";
echo"*********************";

echo"<br>";

sort($a);
for($i = $length-1; $i >= 0; $i--) {
  echo $a[$i];
  echo "<br>";
 
}
echo"**********************";
echo "<br>";

//number 5
$age = array("sara"=>"31", "john"=>"41", "walaa"=>"39");
asort($age);

foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}

echo"**********************";
echo "<br>";

$age = array("sara"=>"31", "john"=>"41", "walaa"=>"39");
ksort($age);

foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";

}
echo"**********************";
echo "<br>";


$age = array("sara"=>"31", "john"=>"41", "walaa"=>"39");
arsort($age);

foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}
echo"**********************";
echo "<br>";


$age = array("sara"=>"31", "john"=>"41", "walaa"=>"39");
krsort($age);

foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}

?>