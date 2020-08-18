<?php
/*
3 - 
    Criada a Controller instituicoes
        php artisan make:controller API/InstituicoesController    // Controller foi criada dentro da pasta API no intuito organizacional
    Criado o Index de instituicoes
        public function index()
        {
            $instituicoes = array (
                0 => 
                array (
                'chave' => 'PAN',
                'valor' => 'Pan',
                ),
                1 => 
                array (
                'chave' => 'OLE',
                'valor' => 'Ole',
                ),
                2 => 
                array (
                'chave' => 'BMG',
                'valor' => 'Bmg',
                ),
            );
            
            return response()->json($instituicoes);
        
        }

4 -
    Criada a Controller convenios
        php artisan make:controller API/ConveniosController    // Controller foi criada dentro da pasta API no intuito organizacional
    Criado o Index de Convenio
        public function index()
        {
            $convenios = array (
                0 => 
                array (
                'chave' => 'INSS',
                'valor' => 'INSS',
                ),
                1 => 
                array (
                'chave' => 'FEDERAL',
                'valor' => 'Federal',
                ),
                2 => 
                array (
                'chave' => 'SIAPE',
                'valor' => 'Siape',
                ),
            );

            return response()->json($convenios);
        
        }

5 - 
    Criada a migration taxas
        php artisan make:migration create_taxas_table
    Criado o Index de credito
        public function index($instituicao, $valor)
    {
        $taxas = array (
            0 => 
            array (
              'parcelas' => 72,
              'taxaJuros' => 2.05,
              'parcela' =>  $valor * 0.02604,
              'instituicao' => 'BMG',
              'convenio' => 'INSS',
            ),
            1 => 
            array (
              'parcelas' => 60,
              'taxaJuros' => 2.05,
              'parcela' =>  $valor * 0.03015,
              'instituicao' => 'BMG',
              'convenio' => 'INSS',
            ),
            2 => 
            array (
              'parcelas' => 48,
              'taxaJuros' => 2.05,
              'parcela' =>  $valor * 0.03529,
              'instituicao' => 'BMG',
              'convenio' => 'INSS',
            ),
            3 => 
            array (
              'parcelas' => 36,
              'taxaJuros' => 2.05,
              'parcela' =>  $valor * 0.04719,
              'instituicao' => 'BMG',
              'convenio' => 'INSS',
            ),
            4 => 
            array (
              'parcelas' => 84,
              'taxaJuros' => 1.9,
              'parcela' =>  $valor * 0.024384,
              'instituicao' => 'BMG',
              'convenio' => 'INSS',
            ),
            5 => 
            array (
              'parcelas' => 48,
              'taxaJuros' => 2.05,
              'parcela' =>  $valor *0.03429,
              'instituicao' => 'PAN',
              'convenio' => 'INSS',
            ),
            6 => 
            array (
              'parcelas' => 72,
              'taxaJuros' => 2.08,
              'parcela' =>  $valor * 0.02843,
              'instituicao' => 'PAN',
              'convenio' => 'INSS',
            ),
            7 => 
            array (
              'parcelas' => 36,
              'taxaJuros' => 2.1,
              'parcela' => $valor * 0.03125,
              'instituicao' => 'PAN',
              'convenio' => 'FEDERAL',
            ),
            8 => 
            array (
              'parcelas' => 60,
              'taxaJuros' => 2.05,
              'parcela' =>  $valor * 0.03035,
              'instituicao' => 'OLE',
              'convenio' => 'INSS',
            ),
            9 => 
            array (
              'parcelas' => 72,
              'taxaJuros' => 2.08,
              'parcela' => $valor * 0.02843,
              'instituicao' => 'OLE',
              'convenio' => 'INSS',
            ),
        );

        foreach($taxas as $tax){
            if(in_array($instituicao, $tax)){
                $inti = $tax;
                
            }
        }
        // Me perdir um pouco e como e tecnico nao encontrei
        return response()->json($inti);
          
    }
    */