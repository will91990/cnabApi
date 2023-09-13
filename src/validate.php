<?php


function validar_new_remessa($json_data) {
    try {
        if ($json_data['tipo_inscricao'] != "1" && $json_data['tipo_inscricao'] != "2") {
            return;
        }
    
        if ($json_data['numero_inscricao'] === "") {
            return;
        }
    
        if ($json_data['agencia'] === "") {
            return;
        }
    
        if ($json_data['agencia_dv'] === "") {
            return;
        }
    
        if ($json_data['conta'] === "") {
            return;
        }
    
        if ($json_data['conta_dv'] === "") {
            return;
        }
    
        if ($json_data['nome_empresa'] === "") {
            return;
        }
    
        if ($json_data['numero_sequencial_arquivo'] === "") {
            return;
        }
    
        if ($json_data['convenio'] === "") {
            return;
        }
    
        if ($json_data['carteira'] === "") {
            return;
        }
    
        if ($json_data['situacao_arquivo'] === "") {
            return;
        }
    
        if ($json_data['uso_bb1'] === "") {
            return;
        }
    } catch (\Throwable $th) {
        //throw $th;
    }
}



?>