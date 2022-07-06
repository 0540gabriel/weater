<?php

  for ($i = 0; $i < 10; $i ++) {

      
     echo $i."<br>";



  }







?>
<hr>

<?php

for ($i = 2; $i <= 30; $i = $i +2)

echo $i."<br>"




?>

<hr>


<?php 

for ($i = 10; $i  >=  0; $i--) {


   echo $i."<br>";

}






?>

<hr>

<?php 

$family = array("Gabriel","charity","Sophia","Earnest");

foreach ($family as $key => $value) {

    $family[$key] = $value."Percival";

 echo "Array item".$key."  is ".$value."<br>";


}


for ($i = 0; $i < sizeof($family); $i++) {

 echo $family[$i]."<br>";



}






for ($i = 10; $i  >=  0; $i--) {


   echo $i."<br>";

}






?>