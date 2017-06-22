@php
$val1 = Session::get('val1');
$val2 = Session::get('val2');
$val3 = Session::get('val3');
$val4 = Session::get('val4');
@endphp
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
    @if ($tela == 'show')
      <div class="pull-right">
        <a href="{{ route('verTodasOs') }}" class="btn btn-primary"> Voltar</a>
      </div>
    @else
      <div class="pull-right">
        <a href="{{ route('ficha.index') }}" class="btn btn-primary"> Voltar</a>
      </div>
    @endif
    @yield('forma')

    <hr>
  </div>
  <script type="text/javascript">
  var a = "<?php echo $tela; ?>";
  var dias;
  var total_dias;

  $( document ).ready(function() {
    $('#a').prop('disabled', true);
    $('#b').prop('disabled', true);
    $('#c').prop('disabled', true);
    $('#d').prop('disabled', true);
    $('#a1').prop('disabled', true);
    $('#b1').prop('disabled', true);
    $('#c1').prop('disabled', true);
    $('#d1').prop('disabled', true);

    // verifica a quantidade de dias de missão e diminui 1 (que é o dia do retorno) pelas datas inseridas
    $('#dt_ret').focusout(function(){
      var di = $("#dt_ida").val().split("/");
      var dr = $("#dt_ret").val().split("/");
      var d_i = new Date(di[2] + "/" + di[1] + "/" + di[0]);
      var d_r = new Date(dr[2] + "/" + dr[1] + "/" + dr[0]);
      var dias = (((Date.parse(d_r)) - (Date.parse(d_i))) / (24 * 60 * 60 * 1000));
      // se for 2 dias de diferença ele diminui 1 dia
      if (parseInt(dias) == 0){
          parseFloat(total_dias) = 0.5;
      } else {
        if (parseInt(dias) == 1){
          total_dias = parseInt(dias);
        } else {
          total_dias = parseInt(dias) -1;
        }
      }
    })

    // Calculando valores dos trechos
    $('#dt_ret').focusout(function(){
      alert(dias);
      var local = $('#local_servico').val();
      if(local == 'val_br_am_rj'){
        $('#a').prop('disabled', false);

        $('#a').val(<?php echo $val1; ?>);
        $('#a1').val(total_dias);
        var a = $('#a').val(<?php echo $val1; ?>);
        var a1 = $('#a1').val(total_dias);

        var resultado 	= parseFloat(a) * a1;
        $('#resultado1').val(resultado);

        $('#b').val(0);
        $('#c').val(0);
        $('#d').val(0);

      }
      if(local == 'val_bh_fl_pa_rc_sl_sp'){
        $('#b').val(<?php echo $val2; ?>);
        $('#b').prop('disabled', false);
        $('#b1').val(total_dias);
        $('#a').val(0);
        $('#c').val(0);
        $('#d').val(0);
      }
      if(local == 'val_capitais'){
        $('#c').val(<?php echo $val3; ?>);
        $('#c').prop('disabled', false);
        $('#ac').val(total_dias);
        $('#b').val(0);
        $('#a').val(0);
        $('#d').val(0);
      }
      if(local == 'val_cidades'){
        $('#d').val(<?php echo $val4; ?>);
        $('#d').prop('disabled', false);
        $('#d1').val(total_dias);
        $('#a').val(0);
        $('#b').val(0);
        $('#c').val(0);
      }
    })
    // campos extras para justificativa
    if ( a == 'edit') {
      $('#camposExtras').show();
    } else {
      $('#camposExtras').hide();
    };

    $("#alteracao_servico_s").click(function(){
      $('#camposExtras').show();
    });

    $("#alteracao_servico_n").click(function(){
      $('#camposExtras').hide();
    });
  });
  </script>
  <script src="/bst/js/bootstrap.min.js"></script>
</body>
</html>
