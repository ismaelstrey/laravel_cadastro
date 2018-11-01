@extends('layout.app',["current"=>"categoria"])
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
      <div class="card border-info">

        <div class="card-body">
          <h4 class="card-title">Categorias</h4>
          <p class="card-text">Criadas</p>

              <table class="table table-bordered">
                  <thead class="thead-default">
                      <tr>
                          <th>Nome</th>
                          <th>Data de criação</th>
                          <th>Data de Atualização</th>
                      </tr>
                      </thead>
                      <tbody>
                @foreach ($dados as $dado)
                          <tr>
                              <td scope="row">{{$dado->nome}}</td>
                              <td>{{$dado->created_at}}</td>
                              <td>{{$dado->updated_at}}</td>
                          </tr>
                 @endforeach

                      </tbody>
              </table>

        </div>
      </div>
@endsection


