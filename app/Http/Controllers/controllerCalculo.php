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

    $valorAtualizado = $valor;
    $valorTotal = 0.00;

    $dados = [];
    for ($i = 1; $i <= $qtd; $i++) {

        $valorAtualizado = number_format($valorAtualizado * (1 + $taxa), 2, ',', '.');
        $parcelaRestante = (($qtd - $i) +1);

        $dados[$i]['parcela'] = $i;
        $dados[$i]['valorPago'] = number_format(($valorAtualizado / $parcelaRestante), 2, ',', '.');

        $valorTotal = number_format(($valorTotal + $dados[$i]['valorPago']), 2, ',', '.');

    }

    return view('resposta', compact('dados'), $nome, $valorTotal);
}

}
