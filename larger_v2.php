<?php

echo "<h1 style='color: red'>Steven Halla, CIS 243</h1>";

function larger($x, $y){
  if (!isset($x) || !isset($y)) {
    return false;
  } else if ($x >= $y) {
    return $x;
  } else {
    return $y;
  }
}

function smaller($x, $y) {
  if (!isset($x) || !isset($y)) {
    return false;
  } else if ($x <= $y) {
    return $x;
  } else {
    return $y;
  }
}



$a = 1;
$b = 2.5;
$c = 1.9;
$d = NULL;

echo "\$a = $a";
echo "<br><br>";
echo "\$b = $b";
echo "<br><br>";

echo "\$c = $c";
echo "<br><br>";

echo "\$d = NULL";;
echo "<br><br>";

echo "larger(\$a, \$b) = " . larger($a, $b) . '<br />';
echo "larger(\$c, \$a) = " . larger($c, $a) . '<br /><br />';

echo "smaller(\$a, \$b) = " . smaller($a, $b) . '<br />';
echo "smaller(\$c, \$a) = " . smaller($c, $a) . '<br />';

?>
