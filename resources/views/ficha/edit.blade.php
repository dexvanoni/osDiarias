@extends('template.template')

@section('t')
  Editar Ordem de Serviço - Nº: {{ $diaria->id }}
@endsection

@section('title')
  O.S - Solicitação de Diárias
@endsection

@section('forma')

  {!! Form::model($diaria,
    ['route' => ['ficha.update', 'diaria' => $diaria->id],
    'class' => 'form',
    'method' => 'PUT']) !!}
    @php
      $tela = 'edit';
      $apresenta = $_GET['apresenta'];
    @endphp
    @include('ficha.formulario.formulario')

    {!! Form::close() !!}

  @endsection
