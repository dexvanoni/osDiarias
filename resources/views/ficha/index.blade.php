<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Ordens de Serviço</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="/bst/css/bootstrap.min.css" rel="stylesheet">
  <link href="/bst/css/jquery.dataTables.min.css" rel="stylesheet">
  <script src="/bst/js/jquery-1.12.4.min.js"></script>
</head>
<body>
  @php
    $d1 = Session::get('pescodigo');
    $dono = Session::get('dono');
  @endphp
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <i class="navbar-brand">Relação de Ordens de Serviço </i>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

        <ul class="nav navbar-nav navbar-right">
          <li><a href="http://10.152.16.203/gapcg">GAP-CG</a></li>
          <li><a href="http://10.152.16.203/ala5">ALA5</a></li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
  <div class="container">
    <div class="pull-right">
      <a href="{{ route('account-sign-out') }}" class="btn btn-danger"> Logut </a>
    </div>
    <a href="{{ route('ficha.create') }}" class="btn btn-info"><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span> Criar Nova</a>
    <a href="{{ route('dashboard') }}" class="btn btn-primary"> Voltar</a>
    <hr>
    @if (Session::has('mensagem_create'))
      <div class="alert alert-success">
        {{ Session::get('mensagem_create') }}
      </div>
    @endif
    @if (Session::has('mensagem_del'))
      <div class="alert alert-danger">
        {{ Session::get('mensagem_del') }}
      </div>
    @endif
    @if (Session::has('mensagem_edit'))
      <div class="alert alert-warning">
        {{ Session::get('mensagem_edit') }}
      </div>
    @endif
    @if (Session::has('mensagem_print'))
      <div class="alert alert-warning">
        {{ Session::get('mensagem_print') }}
      </div>
    @endif
    <div class="rows">

    </div>
    <div class="bs-example" data-example-id="hoverable-table">
      <table class="table table-hover" id="pesquisa">
        <thead>
          <center><tr>
            <th>OS</th>
            <th>SARAM</th>
            <th>Referente a</th>
            <th>Serviço</th>
            <th>Ações</th>
          </tr></center>
        </thead>
        <tbody>
          @foreach ($diaria as $diarias)
            <tr>
              <th scope="row">{{ $diarias->id }}</th>
              <td style="width: 20%" >{{ $diarias->saram }}</td>
              <td style="width: 20%" >{{ $diarias->pnome}}</td>
              <td style="width: 40%">{{ $diarias->servico }}</td>
              <td style="width: 20%" >
                <ul class="list-inline list-small">
                  <li title="Editar">
                    <a href="{{ route('ficha.edit', ['diarias' => $diarias->id, 'apresenta'=>'editando']) }}" class="btn btn-info btn-sm"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                  </li>
                  <li>|</li>
                  <li title="Imprimir">
                    <a href="{{ route('ficha.impressao', ['diarias' => $diarias->id]) }}" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-print" aria-hidden="true"></span></a>
                  </li>
                  <li>|</li>
                  <li title="Excluir">
                    <form action="{{ route('ficha.destroy', ['diarias' => $diarias->id]) }}" method="post">
                      {{ csrf_field() }}
                      {{ method_field('DELETE') }}
                      <button type="submit" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                    </form>
                  </li>
                </ul>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
      @if ($dono != $d1)
        <h5 style="color: red">Você pode criar uma nova OS para o {{ Session::get('grad') }} {{ Session::get('pesnguerra') }} ou <a href="{{ route('voltarPerfil') }}">voltar para seu perfil</a> </h5>
      @endif
    </div>
    <center>{{ $diaria->links() }}</center>
  </div>
  <script src="/bst/js/bootstrap.min.js"></script>
  <script src="/bst/js/jquery.dataTables.min.js"></script>
  <script>
  $(document).ready(function(){
    $('#pesquisa').DataTable( {
      "scrollY":        "300px",
        "scrollCollapse": true,
        "language": {
          "url": "/js/Portuguese-Brasil.json"
        }

    } );
});
  </script>

</body>
</html>
