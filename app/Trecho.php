<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trecho extends Model
{
  protected $connection = 'pgsql';
  protected $fillable = [
    'local_servico',
    'local_pernoite',
    'data_afastamento_inicio',
    'hora_afastamento_inicio',
    'data_afastamento_retorno',
    'hora_afastamento_retorno',
    'adicional_deslocamento',
    'total_acrescimos',
    'ck_valor_total',
    'valor_total',
    'valor_total_sem_custo',
    'rd_auxtransporte',
    'rd_auxalimentacao',
    'a_s',
    't_s',
    'houve_pernoite',
    'hp',
    'qt_pernoite'
  ];
}
