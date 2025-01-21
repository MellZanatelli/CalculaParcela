@extends('layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card mt-5">
                <div class="card-header text-center">
                    <h3>Calculadora de Juros Compostos</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('calcular') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="nome">Nome:</label>
                            <input type="text" name="nome" id="nome" class="form-control"
                            placeholder="José da Silva" required autofocus>
                        </div>
                        <div class="form-group mt-3">
                            <label for="valor">Valor do empréstimo:</label>
                            <input type="number" name="valor" id="valor" class="form-control"
                            placeholder="100.00" min="10" required>
                        </div>
                        <div class="form-group mt-3">
                            <label for="taxa">Taxa de juros ao mês: (%)</label>
                            <input type="number" name="taxa" id="taxa" class="form-control"
                            placeholder="10" min="1" required>
                        </div>
                        <div class="form-group mt-3">
                            <label for="qtd">Quantidade de parcelas:</label>
                            <input type="number" name="qtd" id="qtd" class="form-control"
                            placeholder="3" min="1" required>
                        </div>
                        <div class="form-group text-center mt-4">
                            <button type="submit" class="btn btn-primary">Calcular</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
