<?php
/*
 * CnabPHP - Geração de arquivos de remessa e retorno em PHP
 *
 * LICENSE: The MIT License (MIT)
 *
 * Copyright (C) 2013 Ciatec.net
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy of this
 * software and associated documentation files (the "Software"), to deal in the Software
 * without restriction, including without limitation the rights to use, copy, modify,
 * merge, publish, distribute, sublicense, and/or sell copies of the Software, and to
 * permit persons to whom the Software is furnished to do so, subject to the following
 * conditions:
 *
 * The above copyright notice and this permission notice shall be included in all copies
 * or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED,
 * INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A
 * PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT
 * HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION
 * OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE
 * SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 */
namespace CnabPHP\resources\B655\retorno\L084;
use CnabPHP\resources\generico\retorno\L030\Generico3;
//use CnabPHP\RetornoAbstract;
use CnabPHP\Exception;

class Registro3U extends Generico3
{
	protected $meta = array(
		'codigo_banco'=>array(          // 1.3Q
			'tamanho'=>3,
			'default'=>'104',
			'tipo'=>'int',
			'required'=>true),
		'codigo_lote'=>array(           // 2.3Q
			'tamanho'=>4,
			'default'=>1,
			'tipo'=>'int',
			'required'=>true),
		'tipo_registro'=>array(         // 3.3Q
			'tamanho'=>1,
			'default'=>'3',
			'tipo'=>'int',
			'required'=>true),
		'numero_registro'=>array(       // 4.3Q
			'tamanho'=>5,
			'default'=>'0',
			'tipo'=>'int',
			'required'=>true),
		'seguimento'=>array(            // 5.3Q
			'tamanho'=>1,
			'default'=>'U',
			'tipo'=>'alfa',
			'required'=>true),
		'filler1'=>array(               // 6.3Q
			'tamanho'=>1,
			'default'=>' ',
			'tipo'=>'int',
			'required'=>true),
		'codigo_movimento'=>array(      // 7.3Q
			'tamanho'=>2,
			'default'=>'01', // entrada de titulo
			'tipo'=>'int',
			'required'=>true),
			
			// - ------------------ até aqui é igual para todo registro tipo 3
			
		'acrescimos'=>array(               // 8.3Q
			'tamanho'=>13,
			'default'=>'',
			'tipo'=>'decimal',
			'precision'=>2,
			'required'=>true),
		'valor_desconto'=>array(            // 9.3Q
			'tamanho'=>13,
			'default'=>'',
			'tipo'=>'decimal',
			'precision'=>2,
			'required'=>true),
		'valor_abatimento'=>array(       //10.3Q
			'tamanho'=>13,
			'default'=>'',
			'tipo'=>'decimal',
			'precision'=>2,
			'required'=>true),
		'valor_iof'=>array(               // 11.3Q
			'tamanho'=>13,
			'default'=>'',
			'tipo'=>'decimal',
			'precision'=>2,
			'required'=>true),
		'valor_pago'=>array(               //12.3Q
			'tamanho'=>13,
			'default'=>'',
			'tipo'=>'decimal',
			'precision'=>2,
			'required'=>true),
		'valor_liquido'=>array(      //13.3Q   
			'tamanho'=>13,
			'default'=>'',
			'tipo'=>'decimal',
			'precision'=>2,
			'required'=>true),
		'outras_despesas'=>array(  //14.3Q
			'tamanho'=>13,
			'default'=>'',
			'tipo'=>'decimal',
			'precision'=>2,
			'required'=>true),
		'outros_creditos'=>array(   //15.3Q
			'tamanho'=>13,
			'default'=>'',
			'tipo'=>'decimal',
			'precision'=>2,
			'required'=>true),
		'data_ocorrencia'=>array(      //16.3Q
			'tamanho'=>8,
			'default'=>'',
			'tipo'=>'date',
			'required'=>true),
		'data_credito'=>array(        //17.3Q
			'tamanho'=>8,
			'default'=>'',
			'tipo'=>'date',
			'required'=>true),
		'codigo_ocorrencia_sacado'=>array(          // 18.3
			'tamanho'=>4,
			'default'=>'0',
			'tipo'=>'int',
			'required'=>true),
		'data_ocorrencia_sacado'=>array(        //18.3Q
			'tamanho'=>8,
			'default'=>'',
			'tipo'=>'date',
			'required'=>true),
		'valor_ocorrencia_sacado'=>array(            //19.3Q   Campo de preenchimento obrigatório; preencher com Seu Número de controle do título
			'tamanho'=>13,
			'default'=>'',
			'tipo'=>'decimal',
			'precision'=>2,
			'required'=>true),
		'compl_ocorrencia_sacado'=>array(            //19.3Q   Campo de preenchimento obrigatório; preencher com Seu Número de controle do título
			'tamanho'=>30,
			'default'=>' ',
			'tipo'=>'alfa',
			'required'=>true),
		'codigo_banco_correspondente'=>array(            //19.3Q   Campo de preenchimento obrigatório; preencher com Seu Número de controle do título
			'tamanho'=>3,
			'default'=>'0',
			'tipo'=>'int',
			'required'=>true),
		'nosso_numero_banco_correspondente'=>array(            //19.3Q   Campo de preenchimento obrigatório; preencher com Seu Número de controle do título
			'tamanho'=>20,
			'default'=>'0',
			'tipo'=>'int',
			'required'=>true),
		'filler4'=>array(               //19.3Q
			'tamanho'=>7,
			'default'=>' ',
			'tipo'=>'alfa',
			'required'=>true),
		
	);
}

?>
