@extends('layout.app',["current"=>"home"])
@section('body')
  <div class="jumbotron bg-light border border-secondary">
    <div class="row">
        .<div class="card-deck">
            <div class="card border border-primary">
                <div class="card-body">
                    <h4 class="card-title">Cadastro de produtos</h4>
                    <p class="card-text">Aqui vc cadastra todos os seu produtos.

                        so não se esqueça de cadastrar previamente suas ctegorias.
                    </p>
                    <a href="/produtos" class="btn btn-primary">Cadastre seus produtos</a>
                </div>
            </div>
            <div class="card border border-primary">
                    <div class="card-body">
                        <h4 class="card-title">Cadastro de categorias</h4>
                        <p class="card-text">Aqui vc cadastra suas categorias.
                        </p>
                        <a href="/produtos" class="btn btn-secondary">Cadastre categorias</a>
                    </div>
                </div>
        </div>
    </div>
  </div>
@endsection
