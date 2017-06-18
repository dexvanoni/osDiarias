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
  @php
  $tela = 'print';
  $om = $os->om;
  $numero_os = $os->id;
  @endphp
  <hr>
  <div class="container">
    <div class="imprimir">
      <div class="row">
        <div class="col-md-2">
          <img src="/bst/brasao.png" class="img-responsive" alt="" height="70em" width="70em" />
        </div>
        <div class="col-md-7">
          <center>
            <h4>COMANDO DA AERONÁUTICA</h4>
            <p>GRUPAMENTO DE APOIO DE CAMPO GRANDE</p>
            <div class="">
              ORDEM DE SERVIÇO DE SOLICITAÇÃO DE DIÁRIAS
                Nº {{ $os->id }}
            </div>
            <div class="">
              <sup>1</sup>SC:{{ $os->sc }}
            </div>
          </center>
        </div>
        <div class="col-md-3">
          <center>
            <h5>Data de Criação: {{ date('d/m/Y H:m:s', strtotime($os->created_at)) }}</h5>
            <h5>Data de Edição: {{ date('d/m/Y H:m:s', strtotime($os->updated_at)) }}</h5>
            Nº PCDP:{{ $os->pcdp }}
          </center>
        </div>
      </div>
      <hr>
      <!-- CAMPOS PARA ASSINATURAS (SOMENTE NA PÁGINA DE IMPRESSÃO) -->

      <!-- decima segunda linha da tabela- ASSINATURAS
      Se SARAM do GAP-CG a assinatura é do CHEFE DIVISÃO e CHEFE GAP-CG e se ALA5 a assinatura
      é do CMT ESQUADRÃO/CHEM e COMANDANTE DA BACG (NÚCLEO DE ALA 5)
    -->
    @if ($om == 'GAP-CG' )
      <div class="row">
        <div class="col-md-6">
          <div class="input-group">
            <span style="border: 1px solid #D3D3D3; border-radius:3px" class="input-group-addon" id="basic-addon1">29 - PROPONHO:</span>
            <br><br> <center><p> ________________________________________ </p></center>
            <center><p>CHEFE DE DIVISÃO</p></center>
          </div>
        </div>
        <div class="col-md-6">
          <div class="input-group">
            <span style="border: 1px solid #D3D3D3; border-radius:3px" class="input-group-addon" id="basic-addon1">30 - AUTORIZO:</span>
            <br><br> <center><p> ________________________________________ </p></center>
            <center><p>CHEFE DO GAP-CG</p></center>
          </div>
        </div>
      </div>
    @elseif ($om == 'NuALA5')
      <div class="row">
        <div class="col-md-6">
          <div class="input-group">
            <span style="border: 1px solid #D3D3D3; border-radius:3px" class="input-group-addon" id="basic-addon1">29 - PROPONHO:</span>
            <br><br> <center><p> ________________________________________ </p></center>
            <center><p>CMT ESQUADRÃO/CHEM</p></center>
          </div>
        </div>
        <div class="col-md-6">
          <div class="input-group">
            <span style="border: 1px solid #D3D3D3; border-radius:3px" class="input-group-addon" id="basic-addon1">30 - AUTORIZO:</span>
            <br><br> <center><p> ________________________________________ </p></center>
            <center><p>COMANDANTE DA BACG (NÚCLEO DE ALA 5)</p></center>
          </div>
        </div>
      </div>
    @elseif (empty($om))
      Assinaturas na tela de impressão!
    @endif
  </div>
  <button class="btn btn-primary" type="button" name="button" onclick="printDiv();">Imprimir</button>
</div>
</body>


<script>
function printDiv(imprimir)
{
  var conteudo = document.getElementById('imprimir').innerHTML;
  var win = window.open();
  win.document.write(conteudo);
  win.print();
  win.close();//Fecha após a impressão.
}
</script>
</html>
