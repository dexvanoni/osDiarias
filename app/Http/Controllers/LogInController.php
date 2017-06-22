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
use App\Valor;
use App\Adm;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;



class LogInController extends Controller
{
  public function doLogin(Request $request)
  {
    // verifica se é Adm
    $adm1 = Adm::where('pescodigo', '=', $request->get('pescodigo'))->first();
    $adm2='';
    if ($adm1) {
      $adm2 = $adm1->pescodigo;
    }

    if ($adm2) {
      $administrador='';
      Session::put('administrador', $adm2);
    }
    //--------------------------------------


    $usuario = User::where('pescodigo', '=', $request->get('pescodigo'))->first();
    $senha = User::where('sasis_senha', '=', $request->get('password'))->first();
    $posto = DB::table('tb_posto_graduacao')
    ->select('pgabrev')
    ->where('pgid', '=', $usuario->pespostograd)
    ->get();
    $posto = $posto[0]->pgabrev;

    $valor1 = DB::table('tb_valores_diaria')
    ->where([
      ['posto', '=', $posto],
      ['cidades', '=', 'val_br_am_rj']
      ])->get();
      $valor2 = DB::table('tb_valores_diaria')
      ->where([
        ['posto', '=', $posto],
        ['cidades', '=', 'val_bh_fl_pa_rc_sl_sp']
        ])->get();
        $valor3 = DB::table('tb_valores_diaria')
        ->where([
          ['posto', '=', $posto],
          ['cidades', '=', 'val_capitais']
          ])->get();
          $valor4 = DB::table('tb_valores_diaria')
          ->where([
            ['posto', '=', $posto],
            ['cidades', '=', 'val_cidades']
            ])->get();

            //$valor1 = Valor::where('posto', '=', $posto)->where('cidades', '=', 'val_br_am_rj');
            $val1_1 = $valor1[0]->valor;
            //$valor2 = Valor::where('posto', '=', $posto)->where('cidades', '=', 'val_bh_fl_pa_rc_sl_sp');
            $val2_2 = $valor2[0]->valor;
            //$valor3 = Valor::where('posto', '=', $posto)->where('cidades', '=', 'val_capitais');
            $val3_3 = $valor3[0]->valor;
            //$valor4 = Valor::where('posto', '=', $posto)->where('cidades', '=', 'val_cidades');
            $val4_4 = $valor4[0]->valor;


            if( $usuario && $senha) {

              //Abrindo as seções

              $grad='';
              Session::put('grad', $posto);
              $pgrad = Session::get('grad');

              $val1='';
              Session::put('val1', $val1_1);
              $valor_1 = Session::get('val1');

              $val2='';
              Session::put('val2', $val2_2);
              $valor_2 = Session::get('val2');

              $val3='';
              Session::put('val3', $val3_3);
              $valor_3 = Session::get('val3');

              $val4='';
              Session::put('val4', $val4_4);
              $valor_4 = Session::get('val4');

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

              return view('dashboard.index', compact('usuario', 'posto', 'adm2', 'valor1'));
            } else {
              return view('login');
            }
          }
          //-------------------------------------------------------------------------------------

          public function outro(Request $request)
          {

            Session::pull('grad');
            Session::pull('val1');
            Session::pull('val2');
            Session::pull('val3');
            Session::pull('val4');
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

            $valor1 = DB::table('tb_valores_diaria')
            ->where([
              ['posto', '=', $posto],
              ['cidades', '=', 'val_br_am_rj']
              ])->get();
              $valor2 = DB::table('tb_valores_diaria')
              ->where([
                ['posto', '=', $posto],
                ['cidades', '=', 'val_bh_fl_pa_rc_sl_sp']
                ])->get();
                $valor3 = DB::table('tb_valores_diaria')
                ->where([
                  ['posto', '=', $posto],
                  ['cidades', '=', 'val_capitais']
                  ])->get();
                  $valor4 = DB::table('tb_valores_diaria')
                  ->where([
                    ['posto', '=', $posto],
                    ['cidades', '=', 'val_cidades']
                    ])->get();

                    //$valor1 = Valor::where('posto', '=', $posto)->where('cidades', '=', 'val_br_am_rj');
                    $val1_1 = $valor1[0]->valor;
                    //$valor2 = Valor::where('posto', '=', $posto)->where('cidades', '=', 'val_bh_fl_pa_rc_sl_sp');
                    $val2_2 = $valor2[0]->valor;
                    //$valor3 = Valor::where('posto', '=', $posto)->where('cidades', '=', 'val_capitais');
                    $val3_3 = $valor3[0]->valor;
                    //$valor4 = Valor::where('posto', '=', $posto)->where('cidades', '=', 'val_cidades');
                    $val4_4 = $valor4[0]->valor;


                    $grad='';
                    Session::put('grad', $posto);
                    $pgrad = Session::get('grad');

                    $val1='';
                    Session::put('val1', $val1_1);
                    $valor_1 = Session::get('val1');

                    $val2='';
                    Session::put('val2', $val2_2);
                    $valor_2 = Session::get('val2');

                    $val3='';
                    Session::put('val3', $val3_3);
                    $valor_3 = Session::get('val3');

                    $val4='';
                    Session::put('val4', $val4_4);
                    $valor_4 = Session::get('val4');

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
                    Session::pull('val1');
                    Session::pull('val2');
                    Session::pull('val3');
                    Session::pull('val4');
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

                    $valor1 = DB::table('tb_valores_diaria')
                    ->where([
                      ['posto', '=', $posto],
                      ['cidades', '=', 'val_br_am_rj']
                      ])->get();
                      $valor2 = DB::table('tb_valores_diaria')
                      ->where([
                        ['posto', '=', $posto],
                        ['cidades', '=', 'val_bh_fl_pa_rc_sl_sp']
                        ])->get();
                        $valor3 = DB::table('tb_valores_diaria')
                        ->where([
                          ['posto', '=', $posto],
                          ['cidades', '=', 'val_capitais']
                          ])->get();
                          $valor4 = DB::table('tb_valores_diaria')
                          ->where([
                            ['posto', '=', $posto],
                            ['cidades', '=', 'val_cidades']
                            ])->get();

                            //$valor1 = Valor::where('posto', '=', $posto)->where('cidades', '=', 'val_br_am_rj');
                            $val1_1 = $valor1[0]->valor;
                            //$valor2 = Valor::where('posto', '=', $posto)->where('cidades', '=', 'val_bh_fl_pa_rc_sl_sp');
                            $val2_2 = $valor2[0]->valor;
                            //$valor3 = Valor::where('posto', '=', $posto)->where('cidades', '=', 'val_capitais');
                            $val3_3 = $valor3[0]->valor;
                            //$valor4 = Valor::where('posto', '=', $posto)->where('cidades', '=', 'val_cidades');
                            $val4_4 = $valor4[0]->valor;

                            $grad='';
                            Session::put('grad', $posto);
                            $pgrad = Session::get('grad');

                            $val1='';
                            Session::put('val1', $val1_1);
                            $valor_1 = Session::get('val1');

                            $val2='';
                            Session::put('val2', $val2_2);
                            $valor_2 = Session::get('val2');

                            $val3='';
                            Session::put('val3', $val3_3);
                            $valor_3 = Session::get('val3');

                            $val4='';
                            Session::put('val4', $val4_4);
                            $valor_4 = Session::get('val4');

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
