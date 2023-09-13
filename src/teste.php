<?php

require_once ("./lib/openCnabPHP/autoloader.php");
use \CnabPHP\Remessa;

function remessa_banco_do_brasil($data) {

    $arquivo = new Remessa("001",'cnab240',array(
        'tipo_inscricao'            => $data['tipo_inscricao'],            // Substitui '2' pelo valor em $data
        'numero_inscricao'          => $data['numero_inscricao'],          // Substitui '37.218.004/0001-50' pelo valor em $data
        'agencia'                   => $data['agencia'],                   // Substitui '3046' pelo valor em $data
        'agencia_dv'                => $data['agencia_dv'],                // Substitui '5' pelo valor em $data
        'conta'                     => $data['conta'],                     // Substitui '25697' pelo valor em $data
        'conta_dv'                  => $data['conta_dv'],                  // Substitui '5' pelo valor em $data
        'nome_empresa'              => $data['nome_empresa'],              // Substitui "Empresa ABC" pelo valor em $data
        'numero_sequencial_arquivo'	=> $data['numero_sequencial_arquivo'], // Substitui '00000' pelo valor em $data
        'convenio'                  => $data['convenio'],                  // Substitui '106608' pelo valor em $data
        'carteira'                  => $data['carteira'],                  // Substitui '17' pelo valor em $data
        'situacao_arquivo'          => $data['situacao_arquivo'],          // Substitui '' pelo valor em $data
        'uso_bb1'                   => $data['uso_bb1'],                   // Substitui '009999999001411222' pelo valor em $data
    ));

    $lote  = $arquivo->addLote(array(
        'tipo_servico' => $data['tipo_servico'], // Substitui '1' pelo valor em $data
        'variacao'     => $data['variacao'],     // Substitui '027' pelo valor em $data
    ));

    $lote->inserirDetalhe(array(
        'nosso_numero'           => $data['nosso_numero'],           // Substitui '1800001' pelo valor em $data
        'parcela'                => $data['parcela'],                // Substitui '01' pelo valor em $data
        'modalidade'             => $data['modalidade'],             // Substitui '1' pelo valor em $data
        'tipo_formulario'        => $data['tipo_formulario'],        // Substitui '4' pelo valor em $data
        'codigo_carteira'        => $data['codigo_carteira'],        // Substitui '4' pelo valor em $data
        'emissao_boleto'         => $data['emissao_boleto'],         // Substitui 2 pelo valor em $data
        'carteira'               => $data['carteira'],               // Substitui '17' pelo valor em $data
        'seu_numero'             => $data['seu_numero'],             // Substitui "DEV180001" pelo valor em $data
        'data_vencimento'        => $data['data_vencimento'],        // Substitui '2018-04-30' pelo valor em $data
        'valor'                  => $data['valor'],                  // Substitui '5.00' pelo valor em $data
        'cod_emissao_boleto'     => $data['cod_emissao_boleto'],     // Substitui '2' pelo valor em $data
        'especie_titulo'         => $data['especie_titulo'],         // Substitui "DM" pelo valor em $data
        'data_emissao'           => $data['data_emissao'],           // Substitui '2018-04-05' pelo valor em $data
        'codigo_juros'           => $data['codigo_juros'],           // Substitui '2' pelo valor em $data
        'data_juros'   	         => $data['data_juros'],             // Substitui '2018-04-30' pelo valor em $data
        'vlr_juros'              => $data['vlr_juros'],              // Substitui '0000000000001.00' pelo valor em $data
        'protestar'              => $data['protestar'],              // Substitui '1' pelo valor em $data
        'prazo_protesto'         => $data['prazo_protesto'],         // Substitui '90' pelo valor em $data
        'identificacao_contrato' => $data['identificacao_contrato'], // Substitui "0000000000" pelo valor em $data
        'tipo_inscricao'         => $data['tipo_inscricao'],         // Campo fixo, escreva '1' se for pessoa física, '2' se for pessoa jurídica
        'numero_inscricao'       => $data['numero_inscricao'],       // Cpf ou cnpj do pagador
        'nome_pagador'           => $data['nome_pagador'],           // O Pagador é o cliente, preste atenção nos campos abaixo
        'endereco_pagador'       => $data['endereco_pagador'],
        'bairro_pagador'         => $data['bairro_pagador'],
        'cep_pagador'            => $data['cep_pagador'],            // Com hífen
        'cidade_pagador'         => $data['cidade_pagador'],
        'uf_pagador'             => $data['uf_pagador'],
        'codigo_multa'           => $data['codigo_multa'],           // Taxa por mês
        'data_multa'             => $data['data_multa'],             // Data dos juros, mesma do vencimento
        'vlr_multa'              => $data['vlr_multa'],              // Valor do juros de 2% ao mês
        'mensagem_1'             => $data['mensagem_1'],
        'mensagem_2'             => $data['mensagem_2'],
        'mensagem_3'             => $data['mensagem_3'],
        'mensagem_4'             => $data['mensagem_4'],
    ));

    $remessa = utf8_decode($arquivo->getText());

    return $remessa;
}

?>