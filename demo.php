<?php

$sentence = array(“the”, “quick”, “brown”, “fox”, “jumps”, “over”, “the”, “lazy”, “dog”);

foreach($sentence as $key => $val) {
  if($key === 0) continue;      

  echo "$val\n";
}

?>