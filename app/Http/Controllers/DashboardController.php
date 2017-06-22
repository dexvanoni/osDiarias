<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Os;
use App\User;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Html;
use App\Pessoa;
use App\Valor;
use App\Adm;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use PDF;
use Dompdf\Dompdf;

class DashboardController extends Controller
{
  private $os;
  private $pessoa;

  public function __construct(Os $os, Pessoa $pessoa, Valor $valor)
  {
    $this->os = $os;
    $this->pessoa = $pessoa;
    $this->valor = $valor;
  }
  public function dash(){
    return view('dashboard.index');
  }

  public function store(Request $request){

    $this->validate($request, [
      'servico' => 'required'
    ]);

    Os::create($request->all());
    Session::flash('mensagem_create', 'Ordem de serviço adicionada com sucesso!');
    return redirect()->route('ficha.index');

  }


  public function index()
  {

    $sar = Session::get('dono');
    
    $os = Os::where('dono', '=', $sar)->paginate(1000);
    //$os = Os::orderBy('id', 'DESC')->paginate(5);
    return view('ficha.index',compact('os'));

  }

  public function admin()
  {

    $os = Os::orderBy('id', 'DESC')->paginate(1000);
    //$os = Os::orderBy('id', 'DESC')->paginate(5);
    return view('adm.adms',compact('os'));

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

    if(!($os = Os::find($id))) {

      throw new ModelNotFoundException("Ordem de serviço não encontrada!");

    }
    return view('ficha.edit', compact('os'));
  }

  public function show($id)
   {
     if(!($os = Os::find($id))) {

       throw new ModelNotFoundException("Ordem de serviço não encontrada!");

     }
     return view('ficha.show', compact('os'));

   }

  public function print($id){

    if(!($os = Os::find($id))) {

      throw new ModelNotFoundException("Ordem de serviço não encontrada!");

    }
    Session::flash('mensagem_print', 'Ordem de serviço enviada a impressora!');
    return view('ficha.impressao', compact('os'));

    //$pdf = PDF::loadView('ficha.impressao', ['os' => $os]);
    //return $pdf->download('os.pdf');
    //return redirect()->route('ficha.index');

  }


  public function update(Request $request, $id){

    if (!($os = Os::find($id))){
      throw new ModelNotFoundException("OS não encontrada!");
    }

    $data = $request->all();
    $os->fill($data)->save();
    Session::flash('mensagem_edit', "Ordem de Serviço editada com Sucesso!");
    return redirect()->route('ficha.index');
  }

  public function destroy($id){

    if (!($os = Os::find($id))){
      throw new ModelNotFoundException("OS não encontrada!");
    }

    $os->delete();
    Session::flash('mensagem_del', "Ordem de Serviço deletada com Sucesso!");
    return redirect()->route('ficha.index');

  }
}
