<?php

include 'include/cal.inc.php';


$boxa = $_POST['boxa'];
$boxb = $_POST['boxb'];
$cal = $_POST['cal'];

$calculator = new bodmas($boxa, $boxb, $cal);
echo $calculator->calcMethod();