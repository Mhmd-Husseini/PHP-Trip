<?php 

$email = $_POST["email"] ?? null;
$pass = $_POST["pass"] ?? null;

$response = [];

if (!$email || !$pass) {
    $response["status"] = "Error: email and password are required";
} else {
    $uppercase = preg_match('@[A-Z]@', $password);
    $number    = preg_match('@[0-9]@', $password);
    $specialChar = preg_match('@[^\w]@', $password);

    if(!$uppercase || !$number || !$specialChar || strlen($pass) < 8 || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $response["status"] = "Error: Password should be 8 characters and has at least: 1 uppercase letter, 1 number & 1 special character";
    } else {
        $response = ["status" => "Validated"];
    }
}

http_response_code(200);
header('Content-Type: application/json');
echo json_encode($response);
