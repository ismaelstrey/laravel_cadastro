@extends('layout.app',["current"=>"categorias"])
@section('body')
    <div class="card border-dark">
        {{-- <img class="card-img-top" src="holder.js/100px180/" alt=""> --}}
        <div class="card-body">
            <form action="/categorias" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nome">Categoria</label>
                    <input type="text" name="nomeCategoria" id="nome" class="form-control" placeholder="Informática" aria-describedby="Nome da catergiari">
                    <small id="Nome da catergiari" class="text-muted">Categoria de produto a ser criada</small>
                </div>
                <button type="submit" class="btn btn-primary">Cadastrar</button>
                <button type="cancel" class="btn btn-danger">Cancelar</button>
            </form>
        </div>
      </div>
      <br>

    @component('componente.categorias_view',["dados"=>$dados,"edit"=>'edit'])
    @endcomponent
@endsection


