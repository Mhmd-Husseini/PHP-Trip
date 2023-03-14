<?php

$birth = $_POST['birth'];
$age = date('Y') - $birth;
$response = [];

if ($even = $age % 2 == 0) {
    $response["even"] = "Age is even";
} else {
    $response["even"] = "Age isn't even";
}

$response["prime"] = "Age is prime";
for ($i = 2; $i < $age; $i++) {
    if ($age % $i == 0) {
        $response["prime"] = "Age isn't prime";
        break;
    }
}

header('Content-Type: application/json');
echo json_encode($response);
