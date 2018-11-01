@extends('layout.app',["current"=>"categorias"])
@section('body')
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-3">Categorias</h1>
            <p class="lead">Nova</p>
            <hr class="my-2">
            <p>Usado para Criação de categorias</p>
            <p class="lead">
                <a class="btn btn-primary btn-lg" href="/categorias/nova" role="button">Criar uma nova Categoria</a>
            </p>
        </div>
    </div>
@endsection

