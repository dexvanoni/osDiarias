@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
          <div class="panel-heading">Login</div>
          <div class="panel-body">
<div class="row">

    <center><img src="/bst/brasao.png" class="img-responsive" alt="" height="90em" width="90em" /></center>

</div>
<hr>
            {{ Form::open(array('action'=>'LogInController@doLogin', 'class' => 'form-horizontal', 'method' => 'post')) }}

              <div class="form-group">
                <label for="pescodigo" class="col-md-4 control-label">SARAM</label>

                <div class="col-md-6">
                  <input id="pescodigo" type="text" class="form-control" name="pescodigo" value="{{ old('pescodigo') }}" required autofocus>

                </div>
              </div>

              <div class="form-group">
                <label for="sasis_senha" class="col-md-4 control-label">Senha</label>

                <div class="col-md-6">
                  <input id="sasis_senha" type="password" class="form-control" name="password" required>


                </div>
              </div>

              <div class="form-group">
                <div class="col-md-8 col-md-offset-4">
                {{ Form::submit('Entrar') }}

                  </button>


                </div>
              </div>
          {{ Form::close() }}
          <div class="row">

             &nbsp&nbsp&nbspDesenvolvido por ATIC-CG

          </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
