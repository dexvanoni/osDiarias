  <div class="row">
    <div class="col-md-2">
      <img src="/bst/brasao.png" class="img-responsive" alt="" height="70em" width="70em" />
    </div>
    <div class="col-md-7">
      <center>
        <h4>COMANDO DA AERONÁUTICA</h4>
        <p>GRUPAMENTO DE APOIO DE CAMPO GRANDE</p>
          <div class="">
            ORDEM DE SERVIÇO DE SOLICITAÇÃO DE DIÁRIAS N.º {!! Form::text('id', null, array('readonly'=>'readonly', 'size' => '5')) !!}
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
        {!! Form::text('pnome', null, array('class' => 'form-control input-sm', 'readonly'=>'readonly' ))!!}
      </div>
    </div>
    <div title="Digite seu SARAM" class="col-md-2">
      <div class="input-group">
        <span class="input-group-addon" id="basic-addon1">3*</span>
        {!! Form::text('saram', null, array('class' => 'form-control input-sm', 'readonly'=>'readonly' ))!!}
      </div>
    </div>
    <div title="Digite seu CPF" class="col-md-3">
      <div class="input-group">
        <span class="input-group-addon" id="basic-addon1">4*</span>
      {!! Form::text('cpf', null, array('class' => 'form-control input-sm', 'readonly'=>'readonly' ))!!}
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
        {!! Form::text('email', null, array('class' => 'form-control input-sm', 'placeholder'=>'EMAIL:', 'readyonly'=>'readonly')) !!}
      </div>
    </div>
    <div title="Digite sua data de nascimento" class="col-md-3">
      <div class="input-group">
        <span class="input-group-addon" id="basic-addon1">9*</span>
        {!! Form::text('datanascimento', null, array('class' => 'form-control input-sm', 'placeholder'=>'DATA DE NASCIMENTO:')) !!}
      </div>
    </div>
  </div>
  <p></p>
  <!-- terceira linha da tabela-->
  <div class="row">
    <div title="Campo automático!" class="col-md-5">
      <div class="input-group">
        <span class="input-group-addon" id="basic-addon1">10</span>
        {!! Form::text('enquadramento', null, array('style'=>'font-size:10px', 'value'=>'Art. 18, do Dec. 4.307, de 19.jul.2002, e Portaria nº 1348/GC4, de 3 set 2015.', 'class' => 'form-control input-sm', 'readonly'=>'readonly', 'placeholder'=>'Art. 18, do Dec. 4.307, de 19.jul.2002, e Portaria nº 1348/GC4, de 3 set 2015.')) !!}
      </div>
    </div>
    <div title="Digite sua Identidade" class="col-md-2">
      <div class="input-group">
        <span class="input-group-addon" id="basic-addon1">11*</span>
        {!! Form::text('identidade', null, array('class' => 'form-control input-sm', 'placeholder'=>'IDENTIDADE:', 'readonly'=>'readonly')) !!}
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
        {!! Form::text('telefone', null, array('class' => 'form-control input-sm', 'placeholder'=>'TELEFONE:', 'readonly'=>'readonly')) !!}
      </div>
    </div>
  </div>
  <p></p>

  <!-- quarta linha da tabela-->
  <div class="row">
    <div title="Informe o serviço que será realizado" class="col-md-12">
      <div class="input-group">
        <span class="input-group-addon" id="basic-addon1">14</span>
        {!! Form::text('servico', null, array('class' => 'form-control input-sm', 'placeholder'=>'SERVIÇO A REALIZAR:')) !!}
      </div>
    </div>
  </div>
  <p></p>

  <!-- quinta linha da tabela-->
  <div class="row">
    <div title="Informe os documentos que originam a missão" class="col-md-6">
      <div class="input-group">
        <span class="input-group-addon" id="basic-addon1">15</span>
        {!! Form::text('documentos', null, array('class' => 'form-control input-sm', 'placeholder'=>'DOCUMENTOS QUE ORIGINARAM A MISSÃO:')) !!}
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
        {!! Form::select('em_proveito', ['placeholder'=>'MISSÃO EM PROVEITO:', 'UNIÃO'=>'UNIÃO', 'PRÓPRIA'=> 'PRÓPRIA'], null, ['class' => 'form-control input-sm']) !!}
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
    <div title="Informe a cidade de realização do serviço" class="col-md-5">
      <div class="input-group">
        <span class="input-group-addon" id="basic-addon1">19</span>
        {!! Form::text('local_servico', null, array('class' => 'form-control input-sm', 'placeholder'=>'LOCAL DE REALIZAÇÃO DO SERVIÇO (Cidade):')) !!}
      </div>
    </div>
    <div title="Informe os locais de pernoite" class="col-md-7">
      <div class="input-group">
        <span class="input-group-addon" id="basic-addon1">20</span>
        {!! Form::text('local_pernoite', null, array('class' => 'form-control input-sm', 'placeholder'=>'LOCAL(IS) DE PERNOITE:')) !!}
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
        {!! Form::text('data_afastamento_inicio', null, array('class' => 'form-control input-sm', 'placeholder'=>'Data Início:')) !!}
        {!! Form::text('hora_afastamento_inicio', null, array('class' => 'form-control input-sm', 'placeholder'=>'Hora:')) !!}
        {!! Form::text('data_afastamento_retorno', null, array('class' => 'form-control input-sm', 'placeholder'=>'Data Retorno:')) !!}
        {!! Form::text('hora_afastamento_retorno', null, array('class' => 'form-control input-sm', 'placeholder'=>'Hora:')) !!}
      </div>
    </div>
    <div class="col-md-4">
      <div class="input-group">
        <span class="input-group-addon" id="basic-addon1">22</span>
        {!! Form::select('adicional_deslocamento', ['placeholder'=>'Informe se houve ou não adicional de deslocamento:', 'SIM'=>'SIM', 'NÃO'=> 'NÃO'], null, ['class' => 'form-control input-sm'], null, ['title'=>'(§1º, do Art.20, do Dec. 4.307/2002, alterado pelo Dec.6.907/2009)']) !!}
        {!! Form::select('total_acrescimo', ['placeholder'=>'TOTAL DE ACRÉSCIMOS:', 'DIÁRIA COMPLETA'=>'DIÁRIA COMPLETA', '1/2 DIÁRIA'=> '1/2 DIÁRIA'], null, ['class' => 'form-control input-sm'], null, ['title'=>'Informe se Diária completa ou 1/2 diária']) !!}
      </div>
      <div style="border: 1px solid #D3D3D3; border-radius:3px" class="input-group">
        <span style="border: 1px solid #D3D3D3; border-radius:3px; font-size: 10px" class="input-group-addon" id="basic-addon1">23 - VALOR TOTAL (Diária + Adc. Desl.)</span>
          {!! Form::text('valor_total', null, array('title'=>'Informe o valor total de diárias + adicionais de deslocamento', 'class' => 'form-control input-sm', 'placeholder'=>'R$')) !!}
        &nbsp&nbsp{!! Form::checkbox('ck_valor_total', null, array('title'=>'Não havendo custos, favor marcar esta caixa!', 'class' => 'form-control input-sm', 'value'=>'SEM CUSTO', false)) !!}&nbsp&nbsp&nbsp&nbspSEM CUSTO
      </div>
    </div>
    <!-- oitava linha da tabela-->
    <div class="col-md-4">
      <div class="input-group">
        <span title="Informe se faz jus a auxílio transporte" style="border: 1px solid #D3D3D3; border-radius:3px" class="input-group-addon" id="basic-addon1">24 - AUXÍLIO TRANSPORTE:&nbsp</span>
        <div style="border: 1px solid #D3D3D3; border-radius:3px" class="radio">
          &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp{!! Form::radio('rd_auxtransporte', 'SIM') !!}SIM<br>
          &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp{!! Form::radio('rd_auxtransporte', 'NÃO') !!}NÃO<br>
          </div>
      </div>
      <div class="input-group">
        <span title="Informe se faz jus a auxílio alimentação" style="border: 1px solid #D3D3D3; border-radius:3px" class="input-group-addon" id="basic-addon1">25 - AUXÍLIO ALIMENTAÇÃO:</span>
        <div style="border: 1px solid #D3D3D3; border-radius:3px" class="radio">
          &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp{!! Form::radio('rd_auxalimentacao', 'SIM') !!}SIM<br>
          &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp{!! Form::radio('rd_auxalimentacao', 'NÃO') !!}NÃO<br>
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
        <span class="input-group-addon" id="basic-addon1">27</span>
        <textarea id="justificativa" name="justificativa" class='form-control' placeholder='JUSTIFICATIVA: (Art 1º, da Portaria 1348/GC4/2015)'></textarea>
      </div>
    </div>
  </div>
  <p></p>

  <!-- ##########################  SEGUNDA SEÇÃO DA FICHA #############################################-->

  <!-- decima TERCEIRA linha da tabela-->
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
          <input type="radio" name="alteracao_servico" id="alteracao_servico_s" value="Sim">SIM&nbsp&nbsp&nbsp
          <input type="radio" name="alteracao_servico" id="alteracao_servico_n" value="Não">NÃO
        </center>
      </div>
    </div>
    <!-- DIV abaixo só aparece se o radio (de cima) SIM for selecionado (jquery escrita no template) -->
    <div class="col-md-12" id="camposExtras">
      <textarea id="justificativa_alteracao" name="justificativa_alteracao" class='form-control' placeholder='JUSTIFICATIVA:'></textarea>
      <h5>Campo Grande, <input size="2" maxlength="2" type="text" name="dia">&nbsp de &nbsp<input type="text" name="mes">&nbsp de 2017. Responsável pelo serviço: <input type="text" name="responsavel"></h5>
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
        <center><input size="6" type="text" name="val_br_am_rj" id="a"></center>
      </div>
      <div class="col-md-6">
        <center><h6>Brasília, Manaus, Rio de Janeiro</h6></center>
      </div>
      <div class="col-md-2">
        <center><input size="6" type="text" name="qt_br_am_rj" id="a1"></center>
      </div>
      <div class="col-md-2">
        <center><input size="6" type="text" name="resultado1" id="resultado1" readonly></center>
      </div>
    </div>
    <!-- SEGUNDA LINHA DA TABELA-->
    <div class="row">
      <div class="col-md-2">
        <center><input size="6" type="text" name="val_bh_fl_pa_rc_sl_sp" id="b"></center>
      </div>
      <div class="col-md-6">
        <center><h6>Belo Horizonte, Fortaleza, Porto Alegre, Recife, Salvador e São Paulo</h6></center>
      </div>
      <div class="col-md-2">
        <center><input size="6" type="text" name="qt_bh_fl_pa_rc_sl_sp" id="b1"></center>
      </div>
      <div class="col-md-2">
        <center><input size="6" type="text" name="resultado2" id="resultado2" readonly></center>
      </div>
    </div>
    <!-- TERCEIRA LINHA DA TABELA-->
    <div class="row">
      <div class="col-md-2">
        <center><input size="6" type="text" name="val_capitais" id="c"></center>
      </div>
      <div class="col-md-6">
        <center><h6>Demais capitais de Estado</h6></center>
      </div>
      <div class="col-md-2">
        <center><input size="6" type="text" name="qt_capitais" id="c1"></center>
      </div>
      <div class="col-md-2">
        <center><input size="6" type="text" name="resultado3" id="resultado3" readonly></center>
      </div>
    </div>
    <!-- QUARTA LINHA DA TABELA-->
    <div class="row">
      <div class="col-md-2">
        <center><input size="6" type="text" name="val_cidades" id="d"></center>
      </div>
      <div class="col-md-6">
        <center><h6>Demais Cidades</h6></center>
      </div>
      <div class="col-md-2">
        <center><input size="6" type="text" name="qt_cidades" id="d1"></center>
      </div>
      <div class="col-md-2">
        <center><input size="6" type="text" name="resultado4" id="resultado4" readonly></center>
      </div>
    </div>
    <!-- LINHA DE ACRÉSCIMOS-->
    <hr>
    <div class="row">
      <div class="col-md-8">
        <center><h6><b>Acréscimos de Deslocamento</b></h6></center>
      </div>
      <div class="col-md-2">
        <center><input size="6" type="text" name="qt_acrescimo" id="qt_acrescimo"></center>
      </div>
      <div class="col-md-2">
        <center><input size="6" type="text" name="val_ac" id="val_ac" readonly></center>
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
        <center><input size="6" type="text" name="desc_a" id="desc_a"></center>
      </div>
      <div class="col-md-6">
        <center><h6>Auxílio Alimentação - Valor líquido mensal: R$ 0</h6></center>
      </div>
      <div class="col-md-2">
        <center><input size="6" type="text" name="qt_dias_a" id="qt_dias_a"></center>
      </div>
      <div class="col-md-2">
        <center><input size="6" type="text" name="resultado_dias_a" id="resultado_dias_a" readonly></center>
      </div>
    </div>
    <!-- SEGUNDA LINHA DESCONTO-->
    <div class="row">
      <div class="col-md-2">
        <center><input size="6" type="text" name="desc_b" id="desc_b"></center>
      </div>
      <div class="col-md-6">
        <center><h6>Auxílio Transporte - Valor líquido mensal: R$ 0</h6></center>
      </div>
      <div class="col-md-2">
        <center><input size="6" type="text" name="qt_dias_b" id="qt_dias_b"></center>
      </div>
      <div class="col-md-2">
        <center><input size="6" type="text" name="resultado_dias_b" id="resultado_dias_b" readonly></center>
      </div>
    </div>
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
        <center><input size="6" type="text" name="resultado_total" id="resultado_total" readonly></center>
      </div>
    </div>

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
        <p>b) 1. <input type="checkbox" name="conforme_previsto" value="Conforme previsto na presente Ordem de Serviço">Conforme previsto na presente Ordem de Serviço</p>
      </div>
      <div class="row">
        <p>2. <input type="checkbox" name="conforme_forca_maior" value="Conforme a seguir, por motivo de força maior">Conforme a seguir, por motivo de força maior.</p>
      </div>
      <div class="row">
        <p>1/2 diária - Qtd: <input size="3" type="text" name="qt_meia_diaria" id="qt_meia_diaria"> referente a localidade de <input type="text" name="localidade_meia_diaria"></p>
      </div>
      <div class="row">
        <p>Diária Completa - <input size="3" type="text" name="qt_diaria_completa" id="qt_diaria_completa"> referente a pernoite(s) em <input type="text" name="localidade_diaria_completa"></p>
      </div>
      <div class="row">
        <p>Número total de acréscimos: <input size="3" type="text" name="num_total_acrescimos" value=""></p>
      </div>
      <div class="row">
        3. Restituição a efetuar:&nbsp&nbsp&nbsp&nbsp
        <div class="radio-inline">
          <input type="radio" name="restituicao" value="Sim">SIM&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
          <input type="radio" name="restituicao" value="Não">NÃO&nbsp&nbsp&nbsp&nbsp
        </div>
        Valor: R$ <input type="text" name="valor_restituicao">
      </div>
      <div class="row">
        <br><br>
        <p>Publique-se:____________________________________________________________</p>
        <br>
        <button type="submit" class="btn btn-primary">Salvar edição</button>
        <button type="reset" class="btn btn-primary">Limpar</button>
        <br><br>
      </div>

    </div>
