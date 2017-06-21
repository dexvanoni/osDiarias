<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Pessoa;
use App\Adm;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;



class LogInController extends Controller
{
  public function doLogin(Request $request)
  {
    // verifica se é Adm

    $adm = Adm::where('pescodigo', '=', $request->get('pescodigo'))->first();

    //--------------------------------------


    $usuario = User::where('pescodigo', '=', $request->get('pescodigo'))->first();
    $senha = User::where('sasis_senha', '=', $request->get('password'))->first();
    $posto = DB::table('tb_posto_graduacao')
    ->select('pgabrev')
    ->where('pgid', '=', $usuario->pespostograd)
    ->get();
    $posto = $posto[0]->pgabrev;

    if( $usuario && $senha) {

      //Abrindo as seções

      $grad='';
      Session::put('grad', $posto);
      $pgrad = Session::get('grad');

      $peslogin='';
      Session::put('peslogin', $usuario->peslogin);
      $value = Session::get('peslogin');

      $pesncompleto='';
      Session::put('pesncompleto', $usuario->pesncompleto);
      $nomecompleto = Session::get('pesncompleto');

      $pescodigo='';
      Session::put('pescodigo', $usuario->pescodigo);
      $saram = Session::get('pescodigo');

      $pescpf='';
      Session::put('pescpf', $usuario->pescpf);
      $cpf = Session::get('pescpf');

      $pesbanco='';
      Session::put('pesbanco', $usuario->pesbanco);
      $banco = Session::get('pesbanco');

      $pesdn='';
      Session::put('pesdn', $usuario->pesdn);
      $datadenascimento = Session::get('pesdn');

      $pesemail='';
      Session::put('pesemail', $usuario->pesemail);
      $pemail = Session::get('pesemail');

      $pesidentidade='';
      Session::put('pesidentidade', $usuario->pesidentidade);
      $identidade = Session::get('pesidentidade');

      $pesfonetrabramal='';
      Session::put('pesfonetrabramal', $usuario->pesfonetrabramal);
      $ramal = Session::get('pesfonetrabramal');

      $pesnguerra='';
      Session::put('pesnguerra', $usuario->pesnguerra);
      $guerra = Session::get('pesnguerra');

      $dono='';
      Session::put('dono', $usuario->pescodigo);

      return view('dashboard.index', compact('usuario', 'posto', 'adm'));
    } else {
      return view('login');
    }
  }
  //-------------------------------------------------------------------------------------

  public function outro(Request $request)
  {

    Session::pull('grad');
    Session::pull('peslogin');
    Session::pull('pesncompleto');
    Session::pull('pescodigo');
    Session::pull('pescpf');
    Session::pull('pesbanco');
    Session::pull('pesdn');
    Session::pull('pesemail');
    Session::pull('pesidentidade');
    Session::pull('pesfonetrabramal');
    Session::pull('pesnguerra');

    $usuario = User::where('pescodigo', '=', $request->get('outro_militar'))->first();
    $posto = DB::table('tb_posto_graduacao')
    ->select('pgabrev')
    ->where('pgid', '=', $usuario->pespostograd)
    ->get();
    $posto = $posto[0]->pgabrev;

    $grad='';
    Session::put('grad', $posto);
    $pgrad = Session::get('grad');

    $peslogin='';
    Session::put('peslogin', $usuario->peslogin);
    $value = Session::get('peslogin');

    $pesncompleto='';
    Session::put('pesncompleto', $usuario->pesncompleto);
    $nomecompleto = Session::get('pesncompleto');

    $pescodigo='';
    Session::put('pescodigo', $usuario->pescodigo);
    $saram = Session::get('pescodigo');

    $pescpf='';
    Session::put('pescpf', $usuario->pescpf);
    $cpf = Session::get('pescpf');

    $pesbanco='';
    Session::put('pesbanco', $usuario->pesbanco);
    $banco = Session::get('pesbanco');

    $pesdn='';
    Session::put('pesdn', $usuario->pesdn);
    $datadenascimento = Session::get('pesdn');

    $pesemail='';
    Session::put('pesemail', $usuario->pesemail);
    $pemail = Session::get('pesemail');

    $pesidentidade='';
    Session::put('pesidentidade', $usuario->pesidentidade);
    $identidade = Session::get('pesidentidade');

    $pesfonetrabramal='';
    Session::put('pesfonetrabramal', $usuario->pesfonetrabramal);
    $ramal = Session::get('pesfonetrabramal');

    $pesnguerra='';
    Session::put('pesnguerra', $usuario->pesnguerra);
    $guerra = Session::get('pesnguerra');

    return view('dashboard.index', compact('usuario', 'posto', 'dono'));
  }

  //-------------------------------------------------------------------------------------
  // Quando o usuário quer voltar para seu perfil novamente
  public function volta_perfil(Request $request)
  {
    Session::pull('grad');
    Session::pull('peslogin');
    Session::pull('pesncompleto');
    Session::pull('pescodigo');
    Session::pull('pescpf');
    Session::pull('pesbanco');
    Session::pull('pesdn');
    Session::pull('pesemail');
    Session::pull('pesidentidade');
    Session::pull('pesfonetrabramal');
    Session::pull('pesnguerra');

    $eu = Session::get('dono');
    $usuario = User::where('pescodigo', '=', $eu)->first();
    $posto = DB::table('tb_posto_graduacao')
    ->select('pgabrev')
    ->where('pgid', '=', $usuario->pespostograd)
    ->get();
    $posto = $posto[0]->pgabrev;

    //Abrindo as seções novamente

    $grad='';
    Session::put('grad', $posto);
    $pgrad = Session::get('grad');

    $peslogin='';
    Session::put('peslogin', $usuario->peslogin);
    $value = Session::get('peslogin');

    $pesncompleto='';
    Session::put('pesncompleto', $usuario->pesncompleto);
    $nomecompleto = Session::get('pesncompleto');

    $pescodigo='';
    Session::put('pescodigo', $usuario->pescodigo);
    $saram = Session::get('pescodigo');

    $pescpf='';
    Session::put('pescpf', $usuario->pescpf);
    $cpf = Session::get('pescpf');

    $pesbanco='';
    Session::put('pesbanco', $usuario->pesbanco);
    $banco = Session::get('pesbanco');

    $pesdn='';
    Session::put('pesdn', $usuario->pesdn);
    $datadenascimento = Session::get('pesdn');

    $pesemail='';
    Session::put('pesemail', $usuario->pesemail);
    $pemail = Session::get('pesemail');

    $pesidentidade='';
    Session::put('pesidentidade', $usuario->pesidentidade);
    $identidade = Session::get('pesidentidade');

    $pesfonetrabramal='';
    Session::put('pesfonetrabramal', $usuario->pesfonetrabramal);
    $ramal = Session::get('pesfonetrabramal');

    $pesnguerra='';
    Session::put('pesnguerra', $usuario->pesnguerra);
    $guerra = Session::get('pesnguerra');

    $dono='';
    Session::put('dono', $usuario->pescodigo);

    return view('dashboard.index', compact('usuario', 'posto'));

  }
  //-------------------------------------------------------------------------------------
  //-------------------------------------------------------------------------------------


  public function getSignOut() {
    Session::flush();
    $dono = '';
    return view('home');
  }
}
