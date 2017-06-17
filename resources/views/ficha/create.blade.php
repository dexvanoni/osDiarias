@extends('template.template')

@section('t')
  Nova Ordem de Serviço
@endsection

@section('title')
  O.S - Solicitação de Diárias
@endsection

@section('forma')

  {!! Form::open(array('route' => 'ficha.store', 'method' => 'POST')) !!}
  @php
    $tela = 'create';
  @endphp
  @include('ficha.formulario.formulario')
  {!! Form::close() !!}

@endsection
