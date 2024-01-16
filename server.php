<?php 

$stringList = file_get_contents('./json/list.json');     //!!!!!!!!!!!!!!!Gia in json non ha bisogno di decode!!!!!!!!!!!!!//

header('Content-type: application/json');

echo $stringList;

?>