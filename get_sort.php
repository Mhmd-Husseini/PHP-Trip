<?php
$numbers_get = $_GET['numbers'];

$numbers = [];
$numbers = explode(',', $numbers_get);

for ($i = 0; $i < count($numbers) - 1; $i++) {
    $min = $i;
    for ($j = $i + 1; $j < count($numbers); $j++) {
        if ($numbers[$j] < $numbers[$min]) {
            $min = $j;
        } }
    if ($min != $i) {
        $swap = $numbers[$i];
        $numbers[$i] = $numbers[$min];
        $numbers[$min] = $swap;
    }}
header('Content-Type: application/json');
echo json_encode($numbers);
