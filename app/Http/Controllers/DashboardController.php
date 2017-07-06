<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Diaria;
use App\User;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Html;
use App\Pessoa;
use App\Trecho;
use App\Valor;
use App\Adm;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use PDF;
use Dompdf\Dompdf;

class DashboardController extends Controller
{
  private $diaria;
  private $pessoa;

  public function __construct(Diaria $diaria, Pessoa $pessoa, Valor $valor)
  {
    $this->diaria = $diaria;
    $this->pessoa = $pessoa;
    $this->valor = $valor;
  }
  public function dash(){
    return view('dashboard.index');
  }

  public function store(Request $request){

  $diaria = Diaria::create($request->all());

  $tr = $request->all();
    foreach($tr['tr'] as $values)
    {
      $diaria->trechos()->create($values);
    }

  Session::flash('mensagem_create', 'Ordem de serviço para o Sr. ' .$request->pnome. ' foi adicionada com sucesso!');

  return redirect()->route('ficha.index');

}


public function index()
{

  $sar = Session::get('dono');

  $diaria = Diaria::where('dono', '=', $sar)->paginate(1000);
  //$diaria = Diaria::orderBy('id', 'DESC')->paginate(5);
  return view('ficha.index',compact('diaria'));

}

public function admin()
{

  $diaria = Diaria::orderBy('id', 'DESC')->paginate(1000);
  //$diaria = Diaria::orderBy('id', 'DESC')->paginate(5);
  return view('adm.adms',compact('diaria'));

}

public function create()
{
  $pessoa = $this->pessoa->all();

  $pgrad = Session::get('grad').' '.Session::get('pesncompleto');
  $login = Session::get('peslogin');
  $saram = Session::get('pescodigo');
  $cpf = Session::get('pescpf');
  $datadenascimento = Session::get('pesdn');
  $pemail = Session::get('pesemail');
  $identidade = Session::get('pesidentidade');
  $ramal = Session::get('pesfonetrabramal');

  return view('ficha.create', compact('pessoa', 'pgrad', 'login', 'saram', 'cpf', 'datadenascimento', 'pemail', 'identidade', 'ramal'));
}

public function edit($id){

  if(!($diaria = Diaria::find($id))) {

    throw new ModelNotFoundException("Ordem de serviço não encontrada!");

  }
  $trechos = Diaria::find($id)->trechos;
  return view('ficha.edit', compact('diaria', 'trechos'));
}

public function show($id)
{
  if(!($diaria = Diaria::find($id))) {

    throw new ModelNotFoundException("Ordem de serviço não encontrada!");

  }
  return view('ficha.show', compact('diaria'));

}

public function print($id){

  if(!($diaria = Diaria::find($id))) {

    throw new ModelNotFoundException("Ordem de serviço não encontrada!");

  }
  Session::flash('mensagem_print', 'Ordem de serviço enviada a impressora!');
  return view('ficha.impressao', compact('diaria'));

  //$pdf = PDF::loadView('ficha.impressao', ['diaria' => $diaria]);
  //return $pdf->download('os.pdf');
  //return redirect()->route('ficha.index');

}


public function update(Request $request, $id){

  if (!($diaria = Diaria::find($id))){
    throw new ModelNotFoundException("OS não encontrada!");
  }

  $data = $request->all();
  $diaria->fill($data)->save();
  Session::flash('mensagem_edit', "Ordem de Serviço editada com Sucesso!");
  return redirect()->route('ficha.index');
}

public function destroy($id){

  if (!($diaria = Diaria::find($id))){
    throw new ModelNotFoundException("OS não encontrada!");
  }

  $diaria->delete();
  Session::flash('mensagem_del', "Ordem de Serviço deletada com Sucesso!");
  return redirect()->route('ficha.index');

}
}
