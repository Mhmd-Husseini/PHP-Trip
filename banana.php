<?php
$input = $_POST["inputText"];
$vowels = ["a", "e", "i", "o", "u"];
$first_consonants = "";

for ($i = 0; $i < strlen($input); $i++) {
    if (array_search($input[$i], $vowels) === false) {
        $first_consonants .= $input[$i];
    } else {
        break;
    }
}

$result = substr($input, strlen($first_consonants)) . $first_consonants . "ay";
$response = ["result" => $result];

header('Content-Type: application/json');
echo json_encode($response);
?>
