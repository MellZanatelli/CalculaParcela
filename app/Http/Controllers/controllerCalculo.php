<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controllerCalculo extends Controller
{
    public function Calcular(Request $request)
{
    $nome = $request->input('nome');
    $valor = $request->input('valor');
    $taxa = $request->input('taxa') / 100;
    $qtd = $request->input('qtd');
    $periodo = $request->input('periodo');

    $dados = [];
    for ($i = 1; $i <= $qtd; $i++) {
        $dados[$i]['mes'] = $i;
        $dados[] = ['mes' => $i, 'valor' => number_format($capital, 2), 'juros' => number_format($juros, 2)];
    }

    return view('resposta', compact('dados'));
}

}
