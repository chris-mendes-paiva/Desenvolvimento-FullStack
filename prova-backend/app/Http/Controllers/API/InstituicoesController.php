<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InstituicoesController extends Controller
{
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
}
