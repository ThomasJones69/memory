<?php

$dieren = array("Bear", "Bear", "Elephant", "Elephant", "Lion", "Lion", "Panda", "Panda", "Tiger", "Tiger", "Turtle", "Turtle", "Wolf", "Wolf", "Zebra", "Zebra");
for ($y = 1; $y < count($dieren); $y++) {
    //               $id = $x . $y;
    $tegel = $dieren[$y];
    echo alert($tegel);
    echo $dieren["<img src='$tegel.jpg'>"];
}
?>
