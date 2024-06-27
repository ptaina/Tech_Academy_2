<?php
header("Content-Type: application/json");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $data = json_decode(file_get_contents('php://input'), true);


    if (isset($data['email']) && isset($data['message'])) {
        $email = $data['email'];
        $message = $data['message'];


        $response = [
            "status" => "success",
            "message" => "Mensagem enviada com sucesso!"
        ];
    } else {
        $response = [
            "status" => "error",
            "message" => "Dados incompletos."
        ];
    }

    echo json_encode($response);
} else {
    echo json_encode([
        "status" => "error",
        "message" => "Método não suportado."
    ]);
}
?>