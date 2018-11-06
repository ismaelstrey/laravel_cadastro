@extends('layout.app',["current"=>"produtos"])
@section('body')
    <div class="card border-dark">
        {{-- <img class="card-img-top" src="holder.js/100px180/" alt=""> --}}
        <div class="card-body">
            <form action="/categorias" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nome">Produtos</label>
                    <input type="text" name="nomeCategoria" id="nome" class="form-control" placeholder="Monitor 21 polegadas" aria-describedby="Nome do produto">
                    <small id="Nome do produto" class="text-muted">Produto a ser criado</small>
                </div>
                <div class="form-group">
                  <label for="estoque">Estoque</label>
                  <input type="number" name="estoque" id="estoque" class="form-control" placeholder="12" aria-describedby="helpId">
                  <small id="helpId" class="text-muted">Qantidade de produtos</small>
                </div>
              <div class="form-group">
                  <label for="categoria">Categoria</label>
                  <select class="custom-select" name="categoria" id="categoria">
                      <option selected>Informática</option>
                      <option value="1">Informática</option>
                      <option value="2">Carro</option>
                      <option value="3">Casa</option>
                  </select>
              </div>
              <div class="form-group">
                <label for="preco">Preço</label>
                <input type="text" name="preco" id="preco" class="form-control" placeholder="15,00" aria-describedby="helpId">
                <small id="helpId" class="text-muted">Preço do produto</small>
              </div>
                <button type="submit" class="btn btn-primary">Cadastrar</button>
                <button type="cancel" class="btn btn-danger">Cancelar</button>
            </form>
        </div>
      </div>
      <br>

    @component('componente.produtos_view',["dados"=>$dados,"edit"=>'edit'])
    @endcomponent
@endsection


