<?php

namespace CnabPHP\samples;
require_once ("./lib/openCnabPHP/autoloader.php");
use \CnabPHP\Remessa;

$arquivo = new Remessa('104','cnab240_sigcb',array(
    'nome_empresa' =>"Empresa ABC", // seu nome de empresa
    'tipo_inscricao'  => 2, // 1 para cpf, 2 cnpj 
    'numero_inscricao' => '123.122.123-56', // seu cpf ou cnpj completo
    'agencia'       => "3300", // agencia sem o digito verificador 
    'agencia_dv'    => '1', // somente o digito verificador da agencia 
    'conta'         => '3264', // número da conta
    'conta_dv'     => (string)0, // digito da conta
    'posto' => '87', // codigo forncecido pelo sicredi obs: como o dv da agencia não é informado eu armazeno no banco de dados essa valor no dv da agencia
    'codigo_beneficiario'     => '10668', // codigo fornecido pelo banco
    'convenio'     => '106608', // codigo fornecido pelo banco
    'carteira'     => '123', // codigo fornecido pelo banco
    'codigo_beneficiario_dv'     => '2', // codigo fornecido pelo banco
    'numero_sequencial_arquivo'     => 1,
    'situacao_arquivo' =>'P', // use T para teste e P para produ��o
    'mensagem_1'=>'Sua mensagem personalizada para todos os boletos do arquivo aqui' // suportado somente para SICOOB cnab400, mudar o numero 1 para 2,3,4,5 para incluir mais mensagens
));

//var_dump($arquivo->getText());die;
$lote  = $arquivo->addLote(array('tipo_servico'=> 1)); // tipo_servico  = 1 para cobrança registrada, 2 para sem registro

$lote->inserirDetalhe(array(
    'codigo_movimento' => 1, //1 = Entrada de título, para outras opções ver nota explicativa C004 manual Cnab_SIGCB na pasta docs
    'nosso_numero'      => 50, // numero sequencial de boleto
    'seu_numero'        => 43,// se nao informado usarei o nosso numero 

    /* campos necessarios somente para itau e siccob,  não precisa comentar se for outro layout    */
    'carteira_banco'    => 109, // codigo da carteira ex: 109,RG esse vai o nome da carteira no banco
    'cod_carteira'      => "01", // I para a maioria ddas carteiras do itau
    'codigo_carteira'      => "01", // I para a maioria ddas carteiras do itau
     /* campos necessarios somente para itau,  não precisa comentar se for outro layout    */
     
    'especie_titulo'    => "NP", // informar dm e sera convertido para codigo em qualquer laytou conferir em especie.php
    'valor'             => 100.00, // Valor do boleto como float valido em php
    'emissao_boleto'    => 2, // tipo de emissao do boleto informar 2 para emissao pelo beneficiario e 1 para emissao pelo banco
    'protestar'         => 3, // 1 = Protestar com (Prazo) dias, 3 = Devolver após (Prazo) dias
    'prazo_protesto'    => 5, // Informar o numero de dias apos o vencimento para iniciar o protesto
    'nome_pagador'      => "JOSÉ da SILVA ALVES", // O Pagador é o cliente, preste atenção nos campos abaixo
    'tipo_inscricao'    => 1, //campo fixo, escreva '1' se for pessoa fisica, 2 se for pessoa juridica
    'numero_inscricao'  => '123.122.123-56',//cpf ou ncpj do pagador
    'endereco_pagador'  => 'Rua dos developers,123 sl 103',
    'bairro_pagador'    => 'Bairro da insonia',
    'cep_pagador'       => '12345-123', // com hífem
    'cidade_pagador'    => 'Londrina',
    'uf_pagador'        => 'PR',
    'data_vencimento'   => '2018-04-09', // informar a data neste formato
    'data_emissao'      => '2018-04-09', // informar a data neste formato
    'vlr_juros'         => 0.15, // Valor do juros de 1 dia'
    'codigo_desconto2'  => '1', // comentar se não for usar segundo desconto
    'data_desconto'     => '2016-04-09', // informar a data neste formato
    'data_desconto2'     => '2016-04-09', // informar a data neste formato
    'data_desconto3'     => '2016-04-09', // informar a data neste formato
    'vlr_desconto'      => '0', // Valor do desconto
    'vlr_desconto2'      => 95.52, // Valor do desconto
    'vlr_desconto3'      => '0', // Valor do desconto
    'baixar'            => 1, // codigo para indicar o tipo de baixa '1' (Baixar/ Devolver) ou '2' (Não Baixar / Não Devolver)
    'prazo_baixar'       => 90, // prazo de dias para o cliente pagar após o vencimento
    'mensagem'          => 'JUROS de R$0,15 ao dia'.PHP_EOL."Não receber apos 30 dias",
    'email_pagador'     => 'rogerio@ciatec.net', // data da multa
    'data_multa'        => '2016-04-09', // informar a data neste formato, // data da multa
    'vlr_multa'         => 30.00, // valor da multa
    'parcela'         => 1, // valor da multa
    'modalidade'         => 1, // valor da multa
    'tipo_formulario'         => 1, // valor da multa

    // campos necessários somente para o sicoob
    //'cod_instrucao1'     => 1, //instrução para cobrar juros novas regras da base de boletos unificada 
    //'cod_instrucao2'     => 1, //instrução para cobrar juros novas regras da base de boletos unificada 
    //'taxa_multa'         => 0.00, // taxa de multa em percentual
    //'taxa_juros'         => 0.00, // taxa de juros em percentual
));        
//header("Content-Disposition: attachment;filename=" . $arquivo->getFileName() .";");
echo utf8_decode($arquivo->getText()); // observar a header do seu php para não gerar comflitos de codificação de caracteres

?>
