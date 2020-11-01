<?php
header('content-type: text/plain');

 $stuff = array('name' => 'Rahat', 'Course'=>"w4e");
 echo("<pre>\n");
 foreach ($stuff as $key => $value) {
  echo "key=".$key.  " value=".$value."\n";
 }

for ($i=0; $i <count($stuff) ; $i++) {
  echo "key=".$i." value=".$stuff[$i]."\n";

}
 echo("\n</pre>\n");
 ?>
