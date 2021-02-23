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

//crear JSON amb

$jmperezperez = array(true);
echo "PHP Array<br>";
echo var_dump($jmperezperez)."<br>";
echo print_r($jmperezperez)."<br>";

$jmperezperez_json = json_encode($jmperezperez);
echo "JSON Array format<br>";
echo var_dump($jmperezperez_json)."<br>";
echo print_r($jmperezperez_json)."<br>";

$jmperezperez_2 = array(true, false, false);
echo "<br>PHP Array<br>";
echo var_dump($jmperezperez_2)."<br>";
echo print_r($jmperezperez_2)."<br>";

$jmperezperez_json_2 = json_encode($jmperezperez_2);
echo "JSON Array format<br>";
echo var_dump($jmperezperez_json_2)."<br>";
echo print_r($jmperezperez_json_2)."<br>";



 ?>
