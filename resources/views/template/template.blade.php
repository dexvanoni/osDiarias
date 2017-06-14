<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>@yield('title')</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="/bst/css/bootstrap.min.css" rel="stylesheet">
  <script src="/bst/js/jquery.min.js"></script>
</head>
<body>
  <!--Nav Bar-->
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
        <i class="navbar-brand">@yield('t')</i>
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
      <a href="{{ route('ficha.index') }}" class="btn btn-primary"> Voltar</a>
    </div>

    @yield('forma')

  </div>
  <script type="text/javascript">
  $( document ).ready(function() {
    $('#camposExtras').hide();
    $("#alteracao_servico_s").click(function(){
      $('#camposExtras').show();
    });
    $("#alteracao_servico_n").click(function(){
      $('#camposExtras').hide();
    });
  });
  </script>
  <!-- CALCULA OS INPUTS DE VALOR E QUANTIDADE DA TABELA DE CÔMPUTO DE DIÁRIAS-->
  <!-- PRIMEIRA LINHA -->
  <script type="text/javascript">
  $(document).ready( function() {
    $('#a, #a1').blur(function(){
      var valor 		= $('#a').val();
      var qt = $('#a1').val();
      if(valor == "") valor = 0;
      if(qt == "") qt = 0;
      var resultado 	= parseFloat(valor) * parseFloat(qt);
      $('#resultado1').val(resultado);
    })
  });
  </script>
  <!-- SEGUNDA LINHA -->
  <script type="text/javascript">
  $(document).ready( function() {
    $('#b, #b1').blur(function(){
      var valor 		= $('#b').val();
      var qt = $('#b1').val();
      if(valor == "") valor = 0;
      if(qt == "") qt = 0;
      var resultado 	= parseFloat(valor) * parseFloat(qt);
      $('#resultado2').val(resultado);
    })
  });
  </script>
  <!-- TERCEIRA LINHA -->
  <script type="text/javascript">
  $(document).ready( function() {
    $('#c, #c1').blur(function(){
      var valor 		= $('#c').val();
      var qt = $('#c1').val();
      if(valor == "") valor = 0;
      if(qt == "") qt = 0;
      var resultado 	= parseFloat(valor) * parseFloat(qt);
      $('#resultado3').val(resultado);
    })
  });
  </script>
  <!-- QUARTA LINHA -->
  <script type="text/javascript">
  $(document).ready( function() {
    $('#d, #d1').blur(function(){
      var valor 		= $('#d').val();
      var qt = $('#d1').val();
      if(valor == "") valor = 0;
      if(qt == "") qt = 0;
      var resultado 	= parseFloat(valor) * parseFloat(qt);
      $('#resultado4').val(resultado);
    })
  });
  </script>
  <!--TERMINA CÁLCULO DA TABELA-->

  <!-- MULTIPLICAÇÃO DE DESCONTOS -->
  <!-- PRIMEIRA LINHA-->
  <script type="text/javascript">
  $(document).ready( function() {
    $('#desc_a, #qt_dias_a').blur(function(){
      var valor 		= $('#desc_a').val();
      var qt = $('#qt_dias_a').val();
      if(valor == "") valor = 0;
      if(qt == "") qt = 0;
      var resultado 	= parseFloat(valor) * parseFloat(qt);
      $('#resultado_dias_a').val(resultado);
    })
  });
  </script>
  <!-- SEGUNDA LINHA-->
  <script type="text/javascript">
  $(document).ready( function() {
    $('#desc_b, #qt_dias_b').blur(function(){
      var valor 		= $('#desc_b').val();
      var qt = $('#qt_dias_b').val();
      if(valor == "") valor = 0;
      if(qt == "") qt = 0;
      var resultado 	= parseFloat(valor) * parseFloat(qt);
      $('#resultado_dias_b').val(resultado);
    })
  });
  </script>

  <!--SOMA E DESCONTO DE TOTAIS-->
  <script type="text/javascript">
  $(document).ready( function() {
    $('#resultado1, #resultado2, #resultado3, #resultado4, #val_ac, #resultado_dias_a, #resultado_dias_b').blur(function(){
      var v1 		= $('#resultado1').val();
      var v2 		= $('#resultado2').val();
      var v3 		= $('#resultado3').val();
      var v4 		= $('#resultado4').val();
      var v5 		= $('#val_ac').val();
      var v6 		= $('#resultado_dias_a').val();
      var v7 		= $('#resultado_dias_b').val();
      if(v1 == "") v1 = 0;
      if(v2 == "") v2 = 0;
      if(v3 == "") v3 = 0;
      if(v4 == "") v4 = 0;
      if(v5 == "") v5 = 0;
      if(v6 == "") v6 = 0;
      if(v7 == "") v7 = 0;
      var resultado1 	= parseFloat(v1) + parseFloat(v2) + parseFloat(v3) + parseFloat(v4) + parseFloat(v5);
      $('#resultado_soma').val(resultado1);
      var resultado2 	= parseFloat(v6) + parseFloat(v7);
      $('#resultado_descontos').val(resultado2);
      var resultado 	= parseFloat(resultado1) - parseFloat(resultado2);
      $('#resultado_total').val(resultado);
    })
  });
  </script>

  <script src="/bst/js/bootstrap.min.js"></script>
</body>
</html>
