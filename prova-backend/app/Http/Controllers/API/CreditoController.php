<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CreditoController extends Controller
{
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
}