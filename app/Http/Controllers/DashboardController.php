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
use App\Pessoa;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
  private $os;
  private $pessoa;

  public function __construct(Os $os, Pessoa $pessoa)
  {
    $this->os = $os;
    $this->pessoa = $pessoa;
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

    $os = Os::orderBy('id', 'DESC')->paginate(5);
    return view('ficha.index',compact('os'));

  }

  public function create()
  {
    $pessoa = $this->pessoa->all();

    return view('ficha.create', compact('pessoa'));
  }

  public function edit($id){

    if(!($os = Os::find($id))) {

      throw new ModelNotFoundException("Ordem de serviço não encontrada!");

    }
    return view('ficha.edit', compact('os'));
  }

  public function update(Request $request, $id){

    if (!($os = Os::find($id))){
      throw new ModelNotFoundException("OS não encontrada!");
      }

    $data = $request->all();
    Session::flash('mensagem_edit', "Ordem de Serviço editada com Sucesso!");
    $os->save();
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
