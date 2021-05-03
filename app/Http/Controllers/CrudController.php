<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelPessoa;

class CrudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */



   // private $objPessoa;
    

    //public function __construct()
    //{
    //    $this->objPessoa=new ModelPessoa();
   // }
    public function index()
    {

        return view(view:'index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view(view:'create');

        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $pessoas = ModelPessoa::all();
        return view('show', ['pessoas' => $pessoas]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
