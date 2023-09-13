<?php

header("Content-Type: application/json");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $json_data = file_get_contents("php://input");
    $data = json_decode($json_data, true);

    if ($data === null) {
        response(null, 400, "Invalid JSON");
        return;
    }

    require_once('./teste.php');

    $remessa = remessa_banco_do_brasil($data);
    // echo $remessa;
    // $json_response = json_encode($remessa);
    $json_response = response($remessa, 200, true);
    echo $json_response;
} else {
    response(null, 405, "Method Not Allowed");
}

function response($content, $response_code, $response_desc) {
    $response['content'] = $content;
    $response['response_code'] = $response_code;
    $response['response_desc'] = $response_desc;

    $json_response = json_encode($response);
    echo $json_response;
}

?>