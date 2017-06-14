<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Ordens de Serviço</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="/bst/css/bootstrap.min.css" rel="stylesheet">
  <script src="/bst/js/jquery.min.js"></script>
</head>
<body>
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
    <a href="{{ route('ficha.create') }}" class="btn btn-info"><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span> Criar Nova</a>
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
    <div class="bs-example" data-example-id="hoverable-table">
      <table class="table table-hover">
        <thead>
          <tr>
            <th>OS Nº</th>
            <th>SARAM</th>
            <th>Autor</th>
            <th>Serviço</th>
            <th>Ações</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($os as $oss)
            <tr>
              <th scope="row">{{ $oss->id }}</th>
              <td>{{ $oss->saram }}</td>
              <td>{{ $oss->pnome}}</td>
              <td>{{ $oss->servico }}</td>
              <td>
                <ul class="list-inline list-small">
                  <li>
                  <a href="{{ route('ficha.edit', ['oss' => $oss->id]) }}" class="btn btn-info btn-sm"><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>Editar</a>
                  </li>
                  <li>|</li>
                <li>
                  <form action="{{ route('ficha.destroy', ['oss' => $oss->id]) }}" method="post">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <button type="submit" class="btn btn-danger btn-sm">Excluir</button>
                  </form>
                </li>
              </ul>
            </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
 <center>{{ $os->links() }}</center>
  </div>
  <script src="/bst/js/bootstrap.min.js"></script>
</body>
</html>
