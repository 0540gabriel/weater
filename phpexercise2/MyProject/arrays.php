<?php

$myArray = array("Gabriel","Matthew","Timothy","Ekow");

print_r($myArray);

echo $myArray[3];

echo "<br><br>";

$anotherArray[0] = "wakye";

$anotherArray[1] = "friedrice";

$anotherArray[5] = "fufu";

$anotherArray["myFavouriteFood"] = "beans";

print_r($anotherArray);


echo "<br><br>";

$thirdArray = array
("Nigeria"=> "English", 
 "Togo" => "French",
"Egypt" => "Arab");


print_r($thirdArray);

echo sizeof($thirdArray);


?>