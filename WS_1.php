<?php
/*
// https://developer.spotify.com/console/get-playlist-followers-contains

// Json array format 1 elemts
[
  true
]

// Json array format 3 elemts
[
  true,
  false,
  false
]

JASON-OBJECTS
ids
jmperezperez,thelinmichael,wizzler

1 Element

{
  "jmperezperez": "True"
}

3 Elements

{
  "jmperezperez": "True",
  "thelinmichael": "False",
  "wizzler": "False"
}

JSON STRING

"{
  "jmperezperez": "True"
}"

"{
  "jmperezperez": "True",
  "thelinmichael": "False",
  "wizzler": "False"
}"

*/

// ARRAY 1 ELEMENT A JSON
$jmperezperez = array(true);
echo "PHP Array<br>";
echo var_dump($jmperezperez)."<br>";
echo print_r($jmperezperez)."<br>";

$jmperezperez_json = json_encode($jmperezperez);
echo "JSON Array format<br>";
echo var_dump($jmperezperez_json)."<br>";
echo print_r($jmperezperez_json)."<br>";

// ARRAY 3 ELEMENT A JSON
$jmperezperez_2 = array(true, false, false);
echo "<br>PHP Array<br>";
echo var_dump($jmperezperez_2)."<br>";
echo print_r($jmperezperez_2)."<br>";

// JON 1 ELEMENT A ARRAY
$jmperezperez_json_2 = json_encode($jmperezperez_2);
echo "JSON Array format<br>";
echo var_dump($jmperezperez_json_2)."<br>";
echo print_r($jmperezperez_json_2)."<br>";

$jmperezperez_json_3 = json_decode($jmperezperez_json_2);
echo "JSON Array format<br>";
echo var_dump($jmperezperez_json_3)."<br>";
echo print_r($jmperezperez_json_3)."<br>";
echo $jmperezperez_json_3 [0] ."</br>";

// 3 elements string format
$element3 = '{"primero":true, "segundo":false, "tercero":false}';
echo "3 elements string format<br>";
echo var_dump($element3)."<br>";
echo print_r($element3)."<br><br>";

$result_arr_ass = json_decode($element3, true);
echo "primero " .$result_arr_ass["primero"]."<br>";
echo "segundo " .$result_arr_ass["segundo"]."<br>";
echo "tercero " .$result_arr_ass["tercero"]."<br><br>";
?>






 ?>
