<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ConveniosController extends Controller
{
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
}
