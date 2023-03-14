<?php

    $string = $_GET['string'];

    $reversed = strrev($string);

    if ($string === $reversed) {
        $response = ["status" => "Palindrome"];
        
    } else {
        $response = ["status" => "Non-Palindrome"];
    }
    
    header('Content-Type: application/json');
    echo json_encode(['status' => 'Not Palindrome']);
