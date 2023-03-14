<?php
    $input = $_GET['stringNumbers'];
    $numbers = preg_match_all('/\d+/', $input, $matches);

    if ($numbers > 0) {
        $reversed = '';
        $values = preg_split('/\d+/', $input, -1, PREG_SPLIT_OFFSET_CAPTURE);

        for ($i = count($values) - 1; $i >= 0; $i--) {
            $reversed .= $values[$i][0] . (isset($matches[0][$i]) ? $matches[0][$i] : '');
        }

        $response = ['result' => $reversed];
    } else {
        $response = ['result' => 'No numbers found in the input string'];
    }

    header('Content-Type: application/json');
    echo json_encode($response);
?>
