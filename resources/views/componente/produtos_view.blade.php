      <div class="card border-info">
        <div class="card-body">
          <h4 class="card-title">Produtos</h4>
          <p class="card-text">Criadas</p>
              <table class="table table-bordered">
                  <thead class="thead-dark center">
                      <tr>
                          <th>Nome</th>
                          <th>Quantidade</th>
                          <th>Preço</th>
                          <th>Categoria</th>
                          <th>Data de criação</th>
                          <th>Data de Atualização</th>
                      </tr>
                </thead>
              <tbody>
              </tbody>
              </table>
        </div>
        <div class="alert alert-info alert-dismissible fade show" role="alert">
                <strong>Alerta!</strong> Voçê não possui nem um produto ainda cadastrado na sua base de dados ainda.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
         </div>
      </div>
      <br><br>


@section('javascript')
<script type="text/javascript"></script>
@endsection
