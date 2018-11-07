@extends('layout.app',["current"=>"produtos"])
@section('body')
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-3">Produtos</h1>
            <p class="lead">Nova</p>
            <hr class="my-2">
            <p>Adição de novos produtos a base de dados</p>
            <p class="lead">
                <a class="btn btn-primary btn-lg" href="/produtos/novo" role="button">Adicionar um novo produto</a>
            </p>
        </div>
    </div>
    @if (isset($dados))
    @component('componente.produtos_view',["dados"=>$dados])
    @endcomponent
    @endif

@endsection

