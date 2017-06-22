<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Meu Dashboard</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="/bst/css/bootstrap.min.css" rel="stylesheet">
  <script src="/bst/js/jquery.min.js"></script>
</head>
<body>
  @php
    $d1 = Session::get('pescodigo');
    $dono = Session::get('dono');
    $administrador = Session::get('administrador');
  @endphp
  <div class="jumbotron">
    <div class="col-md-offset-2">
      <div class="container">

      <h2>Meu dashboard</h2>
      @if ($administrador)
        <h5>Você é administrador do sistema!</h5>
      @endif
      @if ($dono != $d1)
      <p>Você está logado com o SARAM: {{ $dono }} e realizará as ações para o {{ Session::get('grad') }} {{ Session::get('pesnguerra') }}<br> com o SARAM: {{ $d1 }}</p>
      @else
      <p>Usuário: {{ Session::get('grad') }} {{ Session::get('pesnguerra') }}</p>
      @endif
      <p><a data-toggle="collapse" data-target="#options" class="btn btn-primary" role="button">Opções</a></p>
    </div>
  </div>
  </div>
  <div class="collapse" id="options">
    <div class="row">
      <div class="col-md-3 col-xs-offset-3">
        <br>
      <a href="{{ route('ficha.index') }}" class="btn btn-info"><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span> Minhas OS</a>
        @if ($administrador)
          <a href="{{ route('verTodasOs') }}"class="btn btn-success"><span class="glyphicon glyphicon-king" aria-hidden="true"></span> Administração</a>
        @endif
    </div>
    <div class="col-md-3 col-xs-offset-3">
      Ordens de Serviço de outro militar
        {!! Form::open(array('route' => 'outro', 'method' => 'POST')) !!}
        {!! Form::text('outro_militar', null, array('size'=>'15', 'id'=>'outro_militar', 'placeholder' => 'SARAM')) !!}
        {{ Form::submit('Ir', array('class'=>'btn btn-primary')) }}
        {!! Form::close() !!}
  </div>
</div>
</div>
<hr>
<div class="container">
  <center><img src="/bst/brasao.png" class="img-responsive" alt="" height="150em" width="150em" /></center>
  <center><h2>@TIC</h2></center>
</div>
<script src="/bst/js/bootstrap.min.js"></script>
</body>
</html>
