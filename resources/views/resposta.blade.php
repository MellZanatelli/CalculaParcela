@extends('layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mt-5">
                <div class="card-header text-center">
                    <h3>Valor das Parcelas</h3>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead class="thead-dark">
                            <tr>
                                Nome: {{ $nome }}
                            </tr>
                            <tr>
                                <th>Parcela</th>
                                <th>Valor (R$)</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($dados as $dado)
                            <tr>
                                <td>{{ $dado['parcela'] }}</td>
                                <td>{{ number_format($dado['valorPago'], 2, ',', '.') }}</td>
                            </tr>
                            @endforeach
                            <tr>
                                Valor total a ser pago: {{$valorTotal, 2, ',', '.'}}
                            </tr>
                        </tbody>
                    </table>
                    <button onClick="window.location.href='/';" type="button"
                    class="btn btn-lg btn-primary btn-block botao">Voltar</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection