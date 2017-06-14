<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbOsDiarias extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {

    Schema::create('tb_os_diarias', function(Blueprint $table){
      $table->increments('id');
      $table->string('pescodigo', 10)->nullable();
      $table->string('pnome')->nullable();
      $table->string('saram', 25)->nullable();
      $table->string('cpf', 25)->nullable();
      $table->string('banco', 20)->nullable();
      $table->string('agencia', 25)->nullable();
      $table->string('conta', 25)->nullable();
      $table->string('email', 50)->nullable();
      $table->string('datanascimento', 25)->nullable();
      $table->string('enquadramento', 25)->nullable();
      $table->string('identidade', 25)->nullable();
      $table->string('om', 25)->nullable();
      $table->string('telefone', 25)->nullable();
      $table->text('servico')->nullable();
      $table->text('documentos')->nullable();
      $table->integer('ne')->nullable();
      $table->text('em_proveito')->nullable();
      $table->text('custeio')->nullable();
      $table->text('local_servico')->nullable();
      $table->text('local_pernoite')->nullable();
      $table->text('data_afastamento_inicio')->nullable();
      $table->text('hora_afastamento_inicio')->nullable();
      $table->text('data_afastamento_retorno')->nullable();
      $table->text('hora_afastamento_retorno')->nullable();
      $table->text('adicional_deslocamento')->nullable();
      $table->text('total_acrescimos')->nullable();
      $table->text('valor_total')->nullable();
      $table->text('valor_total_sem_custo')->nullable();
      $table->text('rd_auxtransporte')->nullable();
      $table->text('rd_auxalimentacao')->nullable();
      $table->text('fim_semana')->nullable();
      $table->text('conveniencia_servico')->nullable();
      $table->text('justificativa')->nullable();
      $table->text('alteracao_servico')->nullable();
      $table->text('justificativa_alteracao')->nullable();
      $table->float('val_br_am_rj', 10, 0)->nullable();
      $table->float('qt_br_am_rj', 10, 0)->nullable();
      $table->float('resultado1', 10, 0)->nullable();
      $table->float('val_bh_fl_pa_rc_sl_sp', 10, 0)->nullable();
      $table->float('qt_bh_fl_pa_rc_sl_sp', 10, 0)->nullable();
      $table->float('resultado2', 10, 0)->nullable();
      $table->float('val_capitais', 10, 0)->nullable();
      $table->float('qt_capitais', 10, 0)->nullable();
      $table->float('resultado3', 10, 0)->nullable();
      $table->float('val_cidades', 10, 0)->nullable();
      $table->float('qt_cidades', 10, 0)->nullable();
      $table->float('resultado4', 10, 0)->nullable();
      $table->float('qt_acrescimo', 10, 0)->nullable();
      $table->float('val_ac', 10, 0)->nullable();
      $table->float('desc_a', 10, 0)->nullable();
      $table->float('qt_dias_a', 10, 0)->nullable();
      $table->float('resultado_dias_a', 10, 0)->nullable();
      $table->float('desc_b', 10, 0)->nullable();
      $table->float('qt_dias_b', 10, 0)->nullable();
      $table->float('resultado_dias_b', 10, 0)->nullable();
      $table->float('resultado_total', 10, 0)->nullable();
      $table->text('conforme_previsto')->nullable();
      $table->text('conforme_forca_maior')->nullable();
      $table->float('qt_meia_diaria', 10, 0)->nullable();
      $table->text('localidade_meia_diaria')->nullable();
      $table->float('qt_diaria_completa', 10, 0)->nullable();
      $table->text('localidade_diaria_completa')->nullable();
      $table->float('num_total_acrescimos', 10, 0)->nullable();
      $table->text('restituicao')->nullable();
      $table->float('valor_restituicao', 10, 0)->nullable();
      $table->timestamps();
    });
  }

  /**
  * Reverse the migrations.
  *
  * @return void
  */
  public function down()
  {
    Schema::drop('tb_os_diarias');
  }
}
