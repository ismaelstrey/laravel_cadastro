@extends('layout.app',["current"=>"produtos"])
@section('body')

    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <h3 class="card-title">Produtos</h3>
            <p class="card-text">Lista de produtos</p>
            <button type="button" class="btn btn-primary btn-lg float-right" data-toggle="modal" data-target="#dlgProdutos">
                Novo
               </button>
          </div>
        </div>
        <table class="table table-ordered table-hover">
            <thead class="thead-dark center">
                <tr>
                    <th>Codigo</th>
                    <th>Nome</th>
                    <th>Preço</th>
                    <th>Estoque</th>
                    <th>Categoria</th>
                    <th>Açoes</th>
                </tr>
            </thead>
            <tbody  id="tabelaProdutos" class="center">


            </tbody>
        </table>
      </div>
    </div>
<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="dlgProdutos" tabindex="-1" role="dialog" aria-labelledby="produtosId" aria-hidden="true">

    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form class="form-horisontal" id="formProduto">
                        <div class="modal-header">
                                <h4 class="modal-title" id="produtosId">Cadastro de produtos</h4>
                        </div>
                <div class="modal-body">
                    <input type="hidden" name="id" id="id">
                        <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" name="nome" id="nomeProduto" aria-describedby="helpId" placeholder="Televisor">
                    <small id="helpId" class="form-text text-muted">Nome do produto</small>
                </div>
                <div class="form-group">
                        <label for="estoque">Estoque</label>
                        <input type="number" name="estoque" id="estoqueProduto" class="form-control" placeholder="12" aria-describedby="helpId">
                        <small id="helpId" class="text-muted">Qantidade de produtos</small>
                      </div>
                    <div class="form-group">
                        <label for="categoria">Categoria</label>
                            <select class="custom-select" id="categoria_id"></select>
                    </div>
                    <div class="form-group">
                      <label for="preco">Preço</label>
                      <input type="text" name="preco" id="precoProduto" class="form-control" placeholder="15,00" aria-describedby="helpId">
                      <small id="helpId" class="text-muted">Preço do produto</small>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Salvar</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>

            </div>
        </form>
        </div>
    </div>
</div>



    {{-- @if (isset($dados))
    @component('componente.produtos_view',["dados"=>$dados])
    @endcomponent
    @endif --}}
@endsection

@section('javascript')
    <script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': "{{csrf_token()}}"
        }
    });
        function novoProduto(){}
        function montarLinha(p){
            var linha = "<tr id = " + "prod_" + p.id + ">" +
            "<td>" + p.id + "</td>" +
            "<td>" + p.nome + "</td>" +
            "<td>" + p.estoque + "</td>" +
            "<td>" + p.preco + "</td>" +
            "<td>" + p.categoria_id + "</td>" +
            "<td>" +
                '<button class="btn btn-sm btn-primary ml-2" onclick="editar('+ p.id +')">Editar</button>' +
                '<button class="btn btn-sm btn-danger ml-2" onclick="remover('+ p.id +')">Apagar</button>' +
             "</td>" +
            "<tr>";
            return linha;
        }
        // Carregar categorias
        function carregarCategorias(){
            $.getJSON('/api/categorias', function(data) {
                 for (i=0;i<data.length; i++){
                    opcao = '<option value = "' + data[i].id + '">' +
                    data[i].nome + '</option>';
                    $('#categoria_id').append(opcao);
                }
            });
        }
        // Carregar produtos
        function carregarProdutos(){
            $.getJSON('/api/produtos', function(produtos) {
                 for (i=0;i<produtos.length; i++){
                    linha = montarLinha(produtos[i]);
                    $('#tabelaProdutos').append(linha);

                }
            });
        }
        // criar produto
        function criarProduto(){
            prod = {
                nome: $("#nomeProduto").val(),
                preco: $("#precoProduto").val(),
                estoque: $("#estoqueProduto").val(),
                categoria_id: $("#categoria_id").val()
                }
                $.post('/api/produtos',prod, function(data){
                    produto = JSON.parse(data);
                    linha = montarLinha(produto);
                    $('#tabelaProdutos').append(linha);

                });
        }
        // apagar
        function remover(id){
            $.ajax({
                type: "DELETE",
                url: "/api/produtos/" + id,
                context: this,
                success: function() {
                    Linhas = $("#prod_"+id);
                    Linhas.remove();
                },
                error: function(error) {
                    console.log(error);
                }
            });
        }
        // submit
        $("#formProduto").submit(function(event){
        event.preventDefault();
        criarProduto();
        $("#dlgProdutos").modal('hide');
        });
        $(function(){
            carregarCategorias();
            carregarProdutos();
        });
    </script>
@endsection
