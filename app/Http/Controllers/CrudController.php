<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelPessoa;

class CrudController extends Controller
{
 public function index()
    {

        return view(view:'index');
    }

    public function create()
    {
        return view(view:'create');

        
    }


    public function store(Request $request)
    {
        ModelPessoa::create([
            'nome' =>$request->nome,
            'cpf' =>$request->cpf,
            'email' =>$request->email,
            'data_nasc' =>$request->data_nasc,
            'nacionalidade' =>$request->nacionalidade
        ]);
        

        return "Cadastro feito com sucesso!!";
    }


    public function show()
    {
        $pessoas = ModelPessoa::all();
        return view('show', ['pessoas' => $pessoas]);
    }

  
    public function edit($id)
    {
        $pessoa = ModelPessoa::findOrFail($id);
        return view('edit',['pessoa'=>$pessoa]);
    }


    public function update(Request $request, $id)
    {    
        $pessoa = ModelPessoa::findOrFail($id);
        $pessoa->update([
            'nome' =>$request->nome,
            'cpf' =>$request->cpf,
            'email' =>$request->email,
            'data_nasc' =>$request->data_nasc,
            'nacionalidade' =>$request->nacionalidade
        ]);
        return "Cadastro atualizado com sucesso!!";
    }


    public function destroy($id)
    {
       $pessoa=ModelPessoa::findOrFail($id);
       $pessoa->delete();
       return "Cadastro excluido com sucesso.";
    }
}
