<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProblemaQuatroController extends Controller
{
    public function resolucao(Request $request)
    {
        try {
            $numeros = explode(',', $request->numeros);
            $numerosFibonacci = array();

            
            foreach ($numeros as $numero) {
                if( $this->fibonacci($numero) ){
                    $numerosFibonacci[] = $numero;
                }
            }

            // Ordena o array
            sort($numerosFibonacci);
            
            return response()->json($numerosFibonacci, 200);
        } catch (\Throwable $th) {
            return response()->json([
                'message'   => $th->getMessage(),
            ], 500);
        }
    }

    public function fibonacci($numero) {
        $anterior = 0;
        $atual = 1;
        $proximo = 1;

        for ($i = 0; $i <= $numero ; $i++) { 
            $proximo = $anterior + $atual;
            if($proximo == $numero){
                return true;
            }
            $anterior = $atual;
            $atual = $proximo;
        }
        return false;
    }
}
