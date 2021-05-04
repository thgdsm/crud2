@extends('templates.template')
@section('content')

@if ($errors->any())
<div class="alert alert-danger">
    {{dd($errors, $errors->any(),$errors->all())}}
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{$error}}</li>    
        @endforeach
    </ul>
</div>
    
@endif
<form action="{{Route('salvar_pessoa')}}" method="post">
    @csrf

    <div><label for="nome">Nome:</label><input type="text"  name="nome" id="nome"></div>
    <div><label for="cpf">CPF:</label><input type="text"name="cpf" id="cpf"></div>    
    <div><label for="email">E-mail:</label><input type="text" name="email" id="email"></div>
    <div><label for="data_nasc">Data de Nascimento:</label><input type="date" name="data_nasc" id="data_nasc"></div>
    <div><label for="nacionalidade">Nacionalidade:</label><input type="text" name="nacionalidade" id="nacionalidade"></div>
    <button type="Submit">Cadastrar</button>
</form>
@endsection