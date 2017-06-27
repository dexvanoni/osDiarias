@php
$val1 = Session::get('val1');
$val2 = Session::get('val2');
$val3 = Session::get('val3');
$val4 = Session::get('val4');
@endphp

<div class="row">
  <div class="col-md-2">
    <img src="/bst/brasao.png" class="img-responsive" alt="" height="70em" width="70em" />
  </div>
  <div class="col-md-7">
    <center>
      <h4>COMANDO DA AERONÁUTICA</h4>
      <p>GRUPAMENTO DE APOIO DE CAMPO GRANDE</p>
      <div class="">
        @if ($tela == 'show')
          ORDEM DE SERVIÇO DE SOLICITAÇÃO DE DIÁRIAS Nº: {{ $os->id }}
        @else
          ORDEM DE SERVIÇO DE SOLICITAÇÃO DE DIÁRIAS
        @endif
        @php
        $don = Session::get('dono');
        @endphp
        {!! Form::input('hidden', 'dono', $value = $don) !!}
      </div>
      <div class="">
        <sup>1</sup>SC:{!! Form::text('sc', null, array('size' => '4', 'width' => '3')) !!}
      </div>
    </center>
  </div>
  <div class="col-md-3">
    <center>
      <h5>Data: {{ date('d/m/Y') }}</h5>
      Nº PCDP:{!! Form::text('pcdp', null, array('size' => '4')) !!}
    </center>
  </div>
</div>
<div class="row">
  <h5><b>1 - DETERMINAÇÃO:</b></h5>
</div>
<div class="row">
  <h6>Determino ao militar/servidor civil abaixo que realize o serviço especificado, fora da sede desta OM, nas condições seguintes: <label style="color: red; font-size: 10px">* Campos automáticos (Alterar ficha no SIMS)</label></h6>
</div>
<!-- primeira linha da tabela-->
<div class="row">
  <div title="Digite seu POSTO/GRAD e NOME COMPLETO" class="col-md-7">
    <div class="input-group">
      <span class="input-group-addon" id="basic-addon1">2*</span>
      @if ($tela == 'create')
        {!! Form::input('text', 'pnome', $value = $pgrad, $attributes = ['class' => 'form-control input-sm', 'readonly'=>'readonly']) !!}
      @elseif ($tela == 'edit')
        {!! Form::text('pnome',  null, array('class' => 'form-control input-sm', 'readonly'=>'readonly'))!!}
      @endif
    </div>
  </div>
  <div title="Digite seu SARAM" class="col-md-2">
    <div class="input-group">
      <span class="input-group-addon" id="basic-addon1">3*</span>
      @if ($tela == 'create')
        {!! Form::input('text', 'saram', $value = $saram, $attributes = ['class' => 'form-control input-sm', 'readonly'=>'readonly']) !!}
        {!! Form::input('hidden', 'pescodigo', $value = $saram) !!}
      @elseif ($tela == 'edit')
        {!! Form::text('saram', null, array('class' => 'form-control input-sm', 'readonly'=>'readonly' ))!!}
      @endif
    </div>
  </div>
  <div title="Digite seu CPF" class="col-md-3">
    <div class="input-group">
      <span class="input-group-addon" id="basic-addon1">4*</span>
      @if ($tela == 'create')
        {!! Form::input('text', 'cpf', $value = $cpf, $attributes = ['class' => 'form-control input-sm', 'readonly'=>'readonly']) !!}
      @elseif ($tela == 'edit')
        {!! Form::text('cpf', null, array('class' => 'form-control input-sm', 'readonly'=>'readonly' ))!!}
      @endif
    </div>
  </div>
</div>
<p></p>
<!-- segunda linha da tabela-->
<div class="row">
  <div title="Digite o número do seu banco" class="col-md-2">
    <div class="input-group">
      <span class="input-group-addon" id="basic-addon1">5</span>
      {!! Form::text('banco', null, array('class' => 'form-control input-sm', 'placeholder'=>'BANCO:')) !!}
    </div>
  </div>
  <div title="Digite o número de sua agência" class="col-md-2">
    <div class="input-group">
      <span class="input-group-addon" id="basic-addon1">6</span>
      {!! Form::text('agencia', null, array('class' => 'form-control input-sm', 'placeholder'=>'AGÊNCIA:')) !!}
    </div>
  </div>
  <div title="Digite o número de sua conta" class="col-md-2">
    <div class="input-group">
      <span class="input-group-addon" id="basic-addon1">7</span>
      {!! Form::text('conta', null, array('class' => 'form-control input-sm', 'placeholder'=>'CONTA:')) !!}
    </div>
  </div>
  <div title="Digite seu email" class="col-md-3">
    <div class="input-group">
      <span class="input-group-addon" id="basic-addon1">8*</span>
      @if ($tela == 'create')
        {!! Form::input('text', 'email', $value = $pemail, $attributes = ['class' => 'form-control input-sm', 'readonly'=>'readonly']) !!}
      @elseif ($tela == 'edit')
        {!! Form::text('email', null, array('class' => 'form-control input-sm', 'placeholder'=>'EMAIL:', 'readonly'=>'readonly')) !!}
      @endif
    </div>
  </div>
  <div title="Digite sua data de nascimento" class="col-md-3">
    <div class="input-group">
      <span class="input-group-addon" id="basic-addon1">9*</span>
      @if ($tela == 'create')
        {!! Form::input('text', 'datanascimento', $value = date('d/m/Y', strtotime($datadenascimento)), $attributes = ['class' => 'form-control input-sm', 'readonly'=>'readonly']) !!}
      @elseif ($tela == 'edit')
        {!! Form::text('datanascimento', null, array('class' => 'form-control input-sm', 'placeholder'=>'DATA DE NASCIMENTO:', 'readonly'=>'readonly')) !!}
      @endif
    </div>
  </div>
</div>
<p></p>
<!-- terceira linha da tabela-->
<div class="row">
  <div title="Campo automático!" class="col-md-5">
    <div class="input-group">
      <span class="input-group-addon" id="basic-addon1">10</span>
      {!! Form::input('text', 'enquadramento', $value = 'Art. 18, do Dec. 4.307, de 19.jul.2002, e Portaria nº 1348/GC4, de 3 set 2015.', $attributes = ['class' => 'form-control input-sm', 'readonly'=>'readonly', 'placeholder'=>'Art. 18, do Dec. 4.307, de 19.jul.2002, e Portaria nº 1348/GC4, de 3 set 2015.']) !!}
    </div>
  </div>
  <div title="Digite sua Identidade" class="col-md-2">
    <div class="input-group">
      <span class="input-group-addon" id="basic-addon1">11*</span>
      @if ($tela == 'create')
        {!! Form::input('text', 'identidade', $value = $identidade, $attributes = ['class' => 'form-control input-sm', 'readonly'=>'readonly']) !!}
      @elseif ($tela == 'edit')
        {!! Form::text('identidade', null, array('class' => 'form-control input-sm', 'placeholder'=>'IDENTIDADE:', 'readonly'=>'readonly')) !!}
      @endif

    </div>
  </div>
  <div title="Escolha sua OM" class="col-md-2">
    <div class="input-group">
      <span class="input-group-addon" id="basic-addon1">12</span>
      {!! Form::select('om', ['placeholder'=>'OM:', 'GAP-CG'=>'GAP-CG', 'NuALA5'=> 'NuALA5'], null, ['class' => 'form-control input-sm']) !!}
    </div>
  </div>
  <div title="Digite seu telefone para contato" class="col-md-3">
    <div class="input-group">
      <span class="input-group-addon" id="basic-addon1">13*</span>
      @if ($tela == 'create')
        {!! Form::input('text', 'telefone', $value = $ramal, $attributes = ['class' => 'form-control input-sm', 'readonly'=>'readonly']) !!}
      @elseif ($tela == 'edit')
        {!! Form::text('telefone', null, array('class' => 'form-control input-sm', 'placeholder'=>'TELEFONE:', 'readonly'=>'readonly')) !!}
      @endif

    </div>
  </div>
</div>
<p></p>

<!-- quarta linha da tabela-->
<div class="row">
  <div title="Informe o serviço que será realizado" class="col-md-12">
    <div class="input-group">
      <span class="input-group-addon" id="basic-addon1">14</span>
      {!! Form::text('servico', null, array('maxlength'=>'255', 'class' => 'form-control input-sm', 'placeholder'=>'SERVIÇO A REALIZAR:')) !!}
    </div>
  </div>
</div>
<p></p>

<!-- quinta linha da tabela-->
<div class="row">
  <div title="Informe os documentos que originam a missão" class="col-md-6">
    <div class="input-group">
      <span class="input-group-addon" id="basic-addon1">15</span>
      {!! Form::text('documentos', null, array('maxlength'=>'80', 'class' => 'form-control input-sm', 'placeholder'=>'DOCUMENTOS QUE ORIGINARAM A MISSÃO:')) !!}
    </div>
  </div>
  <div title="Informe o NE" class="col-md-2">
    <div class="input-group">
      <span class="input-group-addon" id="basic-addon1">16</span>
      {!! Form::text('ne', null, array('class' => 'form-control input-sm', 'placeholder'=>'NE:')) !!}
    </div>
  </div>
  <div title="Informe o preito da missão" class="col-md-4">
    <div class="input-group">
      <span class="input-group-addon" id="basic-addon1">17</span>
      {!! Form::select('em_proveito', ['placeholder'=>'MISSÃO EM PROVEITO:', 'UNIÃO'=>'UNIÃO', 'PRÓPRIO'=> 'PRÓPRIO'], null, ['class' => 'form-control input-sm']) !!}
    </div>
  </div>
</div>
<p></p>

<!-- sexta linha da tabela-->
<div class="row">
  <div title="Informe a modalidade de custeio" class="col-md-12">
    <div class="input-group">
      <span class="input-group-addon" id="basic-addon1">18</span>
      {!! Form::select('custeio', ['placeholder'=>'CUSTEIO:', 'SEM CUSTO'=>'SEM CUSTO', 'DIÁRIA'=> 'DIÁRIA', 'COMISSIONAMENTO'=>'COMISSIONAMENTO'], null, ['class' => 'form-control input-sm']) !!}
    </div>
  </div>
</div>
<p></p>

<!-- SÉTIMA linha da tabela-->
<div class="row">
  <div title="Informe a cidade de realização do serviço" class="col-md-4">
    <div class="input-group">
      <span class="input-group-addon" id="basic-addon1">19</span>
      {!! Form::select('local_servico', ['placeholder'=>'LOCAL DE REALIZAÇÃO DO SERVIÇO (Cidade):', 'val_br_am_rj'=>'Brasília, Manaus ou Rio de Janeiro', 'val_bh_fl_pa_rc_sl_sp'=> 'Belo Horizonte, Fortaleza, Porto Alegre, Recife, Salvador ou São Paulo', 'val_capitais'=>'Outra capital de Estado', 'val_cidades'=>'Outra Cidade'], null, ['class' => 'form-control input-sm', 'title'=>'LOCAL DE REALIZAÇÃO DO SERVIÇO (Cidade)', 'id'=>'local_servico']) !!}
    </div>
    <!-- campos para inserir mais localidades-->
    <div id="origem" align="center">
    		Fone <input type="text" id="fone" name="fone[]"  maxlength="14" size="14"/>
        <button type="button" name="+" onclick="duplicarCampos();"></button>
        <button type="button" name="-" onclick="removerCampos(this);"></button>
    	</div>
    	<div id="destino">
    	</div>
    <!------------------------------------------------>
  </div>
  <div class="col-md-2">
    {!! Form::input('checkbox', 'houve_pernoite', $value = "s", $attributes = ['id'=>'hp']) !!}&nbsp&nbsp&nbspHouve Pernoite?
  </div>
  <div class="col-sm-2">
    {!! Form::text('qt_pernoite', null, array('id'=>'qt_pernoite','class' =>'form-control input-sm', 'placeholder'=>'QNT DE PERNOITES:')) !!}
  </div>
  <div title="Informe os locais de pernoite" class="col-md-4">
    <div class="input-group">
      <span class="input-group-addon" id="basic-addon1">20</span>
      {!! Form::text('local_pernoite', null, array('class' =>'form-control input-sm', 'placeholder'=>'LOCAL(IS) DE PERNOITE:')) !!}
    </div>
  </div>
  <p></p>
</div>
<p></p>
<!-- datas e horas SÉTIMA linha da tabela-->
<div class="row">
  <div title="Informe a data e hora de início e retorno do afastamento da sede" class="col-md-4">
    <div class="input-group">
      <span class="input-group-addon" id="basic-addon1">21 - AFASTAMENTO DE SEDE:</span>
      {!! Form::text('data_afastamento_inicio', null, array('class' => 'form-control input-sm a', 'placeholder'=>'Data Início:', 'id'=>'dt_ida')) !!}
      {!! Form::text('hora_afastamento_inicio', null, array('class' => 'form-control input-sm a', 'placeholder'=>'Hora:', 'id'=>'hr_ida')) !!}
      {!! Form::text('data_afastamento_retorno', null, array('class' => 'form-control input-sm a', 'placeholder'=>'Data Retorno:', 'id'=>'dt_ret')) !!}
      {!! Form::text('hora_afastamento_retorno', null, array('class' => 'form-control input-sm a', 'placeholder'=>'Hora:', 'id'=>'hr_ret')) !!}
    </div>
  </div>
  <div class="col-md-4">
    <div class="input-group">
      <span class="input-group-addon" id="basic-addon1">22</span>
      {!! Form::select('adicional_deslocamento', ['placeholder'=>'Informe se houve ou não adicional de deslocamento:', 'SIM'=>'SIM', 'NÃO'=> 'NÃO'], null, ['id'=>'h_d', 'class' => 'form-control input-sm a'], null, ['title'=>'(§1º, do Art.20, do Dec. 4.307/2002, alterado pelo Dec.6.907/2009)']) !!}
      {!! Form::select('total_acrescimos', ['placeholder'=>'TOTAL DE ACRÉSCIMOS:', 'DIÁRIA COMPLETA'=>'DIÁRIA COMPLETA', '1/2 DIÁRIA'=> '1/2 DIÁRIA'], null, ['class' => 'form-control input-sm a', 'id'=>'total_acrescimos'], null, ['title'=>'Informe se Diária completa ou 1/2 diária']) !!}
    </div>
    <div style="border: 1px solid #D3D3D3; border-radius:3px" class="input-group">
      <span style="border: 1px solid #D3D3D3; border-radius:3px; font-size: 10px" class="input-group-addon" id="basic-addon1">23 - VALOR TOTAL (Diária + Adc. Desl.)<br><br><br>Sem custo = </span>
      {!! Form::text('valor_total', null, array('title'=>'Valor total de diárias + adicionais de deslocamento', 'class' => 'form-control input-sm a', 'placeholder'=>'R$', 'id'=>'valor_total', 'readonly'=>'readonly')) !!}
      {!! Form::input('checkbox', 'ck_valor_total', $value = "Sem Custo", $attributes = ['id'=>'zc', 'class' => 'form-control input-sm a']) !!}
    </div>
  </div>
  <!-- oitava linha da tabela-->
  <div class="col-md-4">
    <div class="input-group">
      <span title="Informe se faz jus a auxílio transporte" style="border: 1px solid #D3D3D3; border-radius:3px" class="input-group-addon" id="basic-addon1">24 - AUXÍLIO TRANSPORTE:&nbsp</span>
      <div style="border: 1px solid #D3D3D3; border-radius:3px" class="radio">
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp{!! Form::radio('rd_auxtransporte', 'SIM', null, ['id'=>'trans_s']) !!}SIM<br>
        <div id="t_s">
          {!! Form::text('t_s', null, array('title'=>'Valor de transporte', 'class' => 'form-control input-sm a', 'placeholder'=>'R$', 'id'=>'valor_transp')) !!}
        </div>
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp{!! Form::radio('rd_auxtransporte', 'NÃO', null, ['id'=>'trans_n']) !!}NÃO<br>
      </div>
    </div>
    <div class="input-group">
      <span title="Informe se faz jus a auxílio alimentação" style="border: 1px solid #D3D3D3; border-radius:3px" class="input-group-addon" id="basic-addon1">25 - AUXÍLIO ALIMENTAÇÃO:</span>
      <div style="border: 1px solid #D3D3D3; border-radius:3px" class="radio">
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp{!! Form::radio('rd_auxalimentacao', 'SIM', null, ['id'=>'al_s']) !!}SIM<br>
        <div id="a_s">
          {!! Form::text('a_s', null, array('title'=>'Valor de Alimentação', 'class' => 'form-control input-sm a', 'placeholder'=>'R$', 'id'=>'valor_alim')) !!}
        </div>
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp{!! Form::radio('rd_auxalimentacao', 'NÃO', null, ['id'=>'al_n']) !!}NÃO<br>
      </div>
    </div>
  </div>
</div>
<p></p>
<!-- nona linha da tabela-->
<div class="row">
  <div title="JUSTIFICATIVA DA MISSÃO EM FINAL DE SEMANA / FERIADO: (§ 2º, Art. 5º, do Dec. 5.992/2006)" class="col-md-12">
    <div class="input-group">
      <span class="input-group-addon" id="basic-addon1">26</span>
      {!! Form::textarea('fim_semana', null, array('rows'=>'3', 'class' => 'form-control', 'placeholder'=>'JUSTIFICATIVA DA MISSÃO EM FINAL DE SEMANA / FERIADO: (§ 2º, Art. 5º, do Dec. 5.992/2006)')) !!}
    </div>
  </div>
</div>
<p></p>
<!-- decima linha da tabela-->
<div class="row">
  <div title="JUSTIFICATIVA DA CONVENIÊNCIA DO SERVIÇO: (Inciso 2.1.3, da ICA 177-42)" class="col-md-12">
    <div class="input-group">
      <span class="input-group-addon" id="basic-addon1">27</span>
      {!! Form::textarea('conveniencia_servico', null, array('rows'=>'3', 'class' => 'form-control', 'placeholder'=>'JUSTIFICATIVA DA CONVENIÊNCIA DO SERVIÇO: (Inciso 2.1.3, da ICA 177-42)')) !!}
    </div>
  </div>
</div>
<p></p>
<!-- decima primeira linha da tabela-->
<div class="row">
  <div title="JUSTIFICATIVA: (Art 1º, da Portaria 1348/GC4/2015)" class="col-md-12">
    <div class="input-group">
      <span class="input-group-addon" id="basic-addon1">28</span>
      {!! Form::textarea('justificativa', null, array('rows'=>'3', 'class' => 'form-control', 'placeholder'=>'JUSTIFICATIVA: (Art 1º, da Portaria 1348/GC4/2015)')) !!}
    </div>
  </div>
</div>
<p></p>

<!-- ##########################  SEGUNDA SEÇÃO DA FICHA #############################################-->
<!-- na tela de criação não aparece a FACD e nem HOMOLOGAÇÃO e na tela de edição não aparece a HOMOLOGAÇÃO. A HOMOLOGAÇÃO só aparece para o administrador -->
<!-- decima TERCEIRA linha da tabela-->
<div class="facd">
  <div class="row">
    <h5><b>II - <sup>31</sup>FICHA DE APRESENTAÇÃO DE CONCESSÃO DE DIÁRIAS (FACD):</b></h5>
  </div>
  <p></p>
  <div class="row">
    <div style="border: 1px solid #D3D3D3; border-radius:3px" class="col-md-12">
      <div class="col-md-10">
        <label style="font-size: 10.5px">OCORRERAM, POR MOTIVO DE FORÇA MAIOR, ALTERAÇÕES NO LOCAL DE REALIZAÇÃO DO SERVIÇO E/OU NAS DATAS DE INÍCIO/RETORNO AUTORIZADOS INICIALMENTE?</label>
      </div>
      <div style="font-size: 10px" class="col-md-2">
        <center>
          {!! Form::radio('alteracao_servico', 'SIM', null, ['id'=>'alteracao_servico_s']) !!}SIM&nbsp&nbsp&nbsp
          {!! Form::radio('alteracao_servico', 'NÃO', null, ['id'=>'alteracao_servico_n']) !!}NÃO
        </center>
      </div>
    </div>
    <!-- DIV abaixo só aparece se o radio (de cima) SIM for selecionado (jquery escrita no template) -->
    <div class="col-md-12" id="camposExtras">
      {!! Form::textarea('justificativa_alteracao', null, array('rows'=>'3', 'class' => 'form-control', 'placeholder'=>'JUSTIFICATIVA:')) !!}
      <h5>Campo Grande, {!! Form::text('dia', null, array('size'=>'3')) !!} &nbsp de &nbsp {!! Form::text('mes', null,array('size' => '15')) !!}&nbsp de 2017. Responsável pelo serviço: {!! Form::text('responsavel', null,array('size' => '20')) !!} </h5>
    </div>
  </div>
  <hr>
  <div style="border: 1px solid #D3D3D3; border-radius:3px" class="row">
    <center><h5><b>CÔMPUTO DE DIÁRIAS E ACRÉSCIMOS - POR LOCALIDADE</b></h5></center>
  </div>
  <!-- IDENTIFICAÇÃO DOS CAMPOS DA TABELA-->
  <div style="border: 1px solid #D3D3D3; border-radius:3px" class="row">
    <div class="col-md-2">
      <center><b>Valor</b></center>
    </div>
    <div class="col-md-6">
      <center><b>Cidades</b></center>
    </div>
    <div class="col-md-2">
      <center><b>Quantidade</b></center>
    </div>
    <div class="col-md-2">
      <center><b>Subtotal</b></center>
    </div>
  </div>
  <div style="border: 1px solid #D3D3D3; border-radius:3px"  class="row">
    <!-- PRIMEIRA LINHA DA TABELA-->
    <div class="row">
      <div class="col-md-2">
        <center>{!! Form::text('val_br_am_rj', null, array('size'=>'6', 'id'=>'a')) !!}</center>
      </div>
      <div class="col-md-6">
        <center><h6>Brasília, Manaus, Rio de Janeiro</h6></center>
      </div>
      <div class="col-md-2">
        <center>{!! Form::text('qt_br_am_rj', null, array('size'=>'6', 'id'=>'a1')) !!} <label style="color: red; font-size: 10px" id="l1">+1/2</label> </center>
      </div>
      <div class="col-md-2">
        <center>{!! Form::text('resultado1', null, array('size'=>'6', 'id'=>'resultado1', 'readonly'=>'readonly')) !!}</center>
      </div>
    </div>
    <!-- SEGUNDA LINHA DA TABELA-->
    <div class="row">
      <div class="col-md-2">
        <center>{!! Form::text('val_bh_fl_pa_rc_sl_sp', null, array('size'=>'6', 'id'=>'b')) !!}</center>
      </div>
      <div class="col-md-6">
        <center><h6>Belo Horizonte, Fortaleza, Porto Alegre, Recife, Salvador e São Paulo</h6></center>
      </div>
      <div class="col-md-2">
        <center>{!! Form::text('qt_bh_fl_pa_rc_sl_sp', null, array('size'=>'6', 'id'=>'b1')) !!}<label style="color: red; font-size: 10px" id="l2">+1/2</label></center>
      </div>
      <div class="col-md-2">
        <center>{!! Form::text('resultado2', null, array('size'=>'6', 'id'=>'resultado2', 'readonly'=>'readonly')) !!}</center>
      </div>
    </div>
    <!-- TERCEIRA LINHA DA TABELA-->
    <div class="row">
      <div class="col-md-2">
        <center>{!! Form::text('val_capitais', null, array('size'=>'6', 'id'=>'c')) !!}</center>
      </div>
      <div class="col-md-6">
        <center><h6>Demais capitais de Estado</h6></center>
      </div>
      <div class="col-md-2">
        <center>{!! Form::text('qt_capitais', null, array('size'=>'6', 'id'=>'c1')) !!}<label style="color: red; font-size: 10px" id="l3">+1/2</label></center>
      </div>
      <div class="col-md-2">
        <center>{!! Form::text('resultado3', null, array('size'=>'6', 'id'=>'resultado3', 'readonly'=>'readonly')) !!}</center>
      </div>
    </div>
    <!-- QUARTA LINHA DA TABELA-->
    <div class="row">
      <div class="col-md-2">
        <center>{!! Form::text('val_cidades', null, array('size'=>'6', 'id'=>'d')) !!}</center>
      </div>
      <div class="col-md-6">
        <center><h6>Demais Cidades</h6></center>
      </div>
      <div class="col-md-2">
        <center>{!! Form::text('qt_cidades', null, array('size'=>'6', 'id'=>'d1')) !!}<label style="color: red; font-size: 10px" id="l4">+ 1/2</label></center>
      </div>
      <div class="col-md-2">
        <center>{!! Form::text('resultado4', null, array('size'=>'6', 'id'=>'resultado4', 'readonly'=>'readonly')) !!}</center>
      </div>
    </div>
    <!-- LINHA DE ACRÉSCIMOS-->
    <hr>
    <div class="row">
      <div class="col-md-8">
        <center><h6><b>Acréscimos de Deslocamento</b></h6></center>
      </div>
      <div class="col-md-2">
        <center>{!! Form::input('text', 'qt_acrescimo', null, $attributes = ['id'=>'qt_acrescimo', 'size'=>'6', 'readonly'=>'readonly']) !!} </center>
      </div>
      <div class="col-md-2">
        <center>{!! Form::input('text', 'val_ac', null, $attributes = ['id'=>'val_ac','size'=>'6', 'readonly'=>'readonly']) !!}</center>
      </div>
    </div>
    <!-- LINHA DE DESCONTOS-->
    <hr>
    <div class="row">
      <div class="col-md-2">
        <center><b>Valor Diário</b></center>
      </div>
      <div class="col-md-6">
        <center><b>Cômputo de Descontos</b></center>
      </div>
      <div class="col-md-2">
        <center><b>Dias Úteis</b></center>
      </div>
      <div class="col-md-2">
        <center><b>Subtotal</b></center>
      </div>
    </div>
    <!-- PRIMEIRA LINHA DESCONTO-->
    <div class="row">
      <div class="col-md-2">
        <center>{!! Form::text('desc_a', null, array('size'=>'6', 'id'=>'desc_a')) !!}</center>
      </div>
      <div class="col-md-6">
        <center><h6>Auxílio Alimentação - Valor líquido mensal: R$ 0</h6></center>
      </div>
      <div class="col-md-2">
        <center>{!! Form::text('qt_dias_a', null, array('size'=>'6', 'id'=>'qt_dias_a')) !!}</center>
      </div>
      <div class="col-md-2">
        <center>{!! Form::text('resultado_dias_a', null, array('size'=>'6', 'id'=>'resultado_dias_a', 'readonly'=>'readonly')) !!}</center>
      </div>
    </div>
    <!-- SEGUNDA LINHA DESCONTO-->
    <div class="row">
      <div class="col-md-2">
        <center>{!! Form::text('desc_b', null, array('size'=>'6', 'id'=>'desc_b')) !!}</center>
      </div>
      <div class="col-md-6">
        <center><h6>Auxílio Transporte - Valor líquido mensal: R$ 0</h6></center>
      </div>
      <div class="col-md-2">
        <center>{!! Form::text('qt_dias_b', null, array('size'=>'6', 'id'=>'qt_dias_b')) !!}</center>
      </div>
      <div class="col-md-2">
        <center>{!! Form::text('resultado_dias_b', null, array('size'=>'6', 'id'=>'resultado_dias_b', 'readonly'=>'readonly')) !!}</center>
      </div>
    </div>
    <hr>
    <h4>Número de diárias completas computadas: {!! Form::text('qtn_dc', null, array('size'=>'6', 'id'=>'qtn_dc', 'readonly'=>'readonly')) !!}</h4>
    <h4>Número de 1/2 diárias computadas: {!! Form::text('qtn_md', null, array('size'=>'6', 'id'=>'qtn_md', 'readonly'=>'readonly')) !!}</h4>
    <hr>
    <div class="row">
      <div class="col-md-4">
        &nbsp&nbspPublique-se: <br> &nbsp&nbspCampo Grande/MS, {{ date('d/m/Y') }}
      </div>
      <div class="col-md-4">
        <center><p> ________________________________________ </p></center>
        <center><p>ORDENADOR DE DESPESAS</p></center>
      </div>
      <div class="col-md-2">
        <center><b>TOTAL</b></center>
      </div>
      <div class="col-md-2">
        <center>{!! Form::text('resultado_total', null, array('size'=>'6', 'id'=>'resultado_total', 'readonly'=>'readonly')) !!}</center>
      </div>
    </div>
  </div>
</div>

<div class="homologa">
  <div class="col-md-12">
    <div class="row">
      <h5><b>III - <sup>32</sup>HOMOLOGAÇÃO:</b></h5>
    </div>
  </div>
  <br>
  <div class="col-md-offset-2">
    <div class="row">
      <br>
      <p>a) Homologo a concessão de diárias</p>
    </div>
    <div class="row">
      <p>b) 1. {!! Form::checkbox('conforme_previsto', null, array('class' => 'form-control input-sm', 'value'=>'Conforme previsto na presente Ordem de Serviço')) !!} Conforme previsto na presente Ordem de Serviço</p>
    </div>
    <div class="row">
      <p>2. {!! Form::checkbox('conforme_forca_maior', null, array('class' => 'form-control input-sm', 'value'=>'Conforme a seguir, por motivo de força maior')) !!} Conforme a seguir, por motivo de força maior.</p>
    </div>
    <div class="row">
      <p>1/2 diária - Qtd: {!! Form::text('qt_meia_diaria', null, array('size'=>'3', 'id'=>'qt_meia_diaria')) !!} referente a localidade de {!! Form::text('localidade_meia_diaria', null, array('size'=>'25')) !!}</p>
    </div>
    <div class="row">
      <p>Diária Completa - {!! Form::text('qt_diaria_completa', null, array('size'=>'3', 'id'=>'qt_diaria_completa')) !!} referente a pernoite(s) em {!! Form::text('localidade_diaria_completa', null, array('size'=>'45')) !!}</p>
    </div>
    <div class="row">
      <p>Número total de acréscimos: {!! Form::text('num_total_acrescimos', null, array('size'=>'3', 'id'=>'num_total_acrescimos')) !!}</p>
    </div>
    <div class="row">
      3. Restituição a efetuar:&nbsp&nbsp&nbsp&nbsp
      <div class="radio-inline">
        {!! Form::radio('restituicao', 'SIM') !!}SIM&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        {!! Form::radio('restituicao', 'NÃO') !!}NÃO&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
      </div>
      Valor: R$ {!! Form::text('valor_restituicao', null, array('size'=>'15', 'id'=>'valor_restituicao')) !!}
    </div>
    <div class="row">
      <br><br>
      <p>Publique-se:____________________________________________________________</p>
      <br>
    </div>
  </div>
</div>
<br>
@if ($tela == 'show')
  <a href="{{ route('verTodasOs') }}" class="btn btn-primary"> Voltar</a>
@else
  <input type="submit" name="login" id="sub" value="Salvar" class="btn btn-primary">
  {{ Form::reset('Limpar', array('class'=>'btn btn-danger')) }}
@endif
