@if (isset($dados) && count($dados)>0)
      <div class="card border-info">
        <div class="card-body">
          <h4 class="card-title">Produtos</h4>
          <p class="card-text">Criadas</p>
              <table class="table table-bordered">
                  <thead class="thead-dark center">
                      <tr>
                          <th>Nome</th>
                          <th>Data de criação</th>
                          <th>Data de Atualização</th>
                          @if (isset($edit))
                          <th  colspan="2"><strong>Ações</strong></th>
                          @endif

                      </tr>
                      </thead>
                      <tbody>
                @foreach ($dados as $dado)
                        <tr class="center">
                            <td scope="row">{{$dado->nome}}</td>
                            <td>{{$dado->created_at}}</td>
                            <td>{{$dado->updated_at}}</td>
                            @if (isset($edit))
                            <td>
                                <a href="/categorias/delete/{{$dado->id}}" title="Deletar: {{$dado->nome}}" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></a>
                            </td>
                            <td>
                                <a href="/categorias/edit/{{$dado->id}}" title="Editar: {{$dado->nome}}" class="btn btn-sm btn-info"><i class="fas fa-edit"></i></a>
                            </td>
                            @endif
                        </tr>
                 @endforeach
                        <tr class="bg-info">
                               @if (isset($edit))
                               <td class="center" colspan="5"><strong>Total de registros: <strong class="badge badge-light">{{count($dados)}}</strong></strong></td>
                               @else
                               <td class="center" colspan="4"><strong>Total de registros: <strong class="badge badge-light">{{count($dados)}}</strong></strong></td>
                               @endif
                        </tr>
                      </tbody>
              </table>
        </div>
      </div>
      @else
      <div class="alert alert-info alert-dismissible fade show" role="alert">
            <strong>Alerta!</strong> Voçê não possui nem um produto ainda cadastrado na sua base de dados ainda.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
      @endif

