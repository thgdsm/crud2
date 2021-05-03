@extends('templates.template')

@section('content')
<table>
    <tr><th>Nome</th><th>CPF</th><th>E-mail</th><th>Data de nascimento</th><th>Nacionalidade</th></tr>
    @foreach ($pessoas as $pessoa)
        
    <tr>
        <td>{{$pessoa->nome}}</td>
        <td>{{$pessoa->cpf}}</td>
        <td>{{$pessoa->email}}</td>
        <td>{{$pessoa->data_nasc}}</td>
        <td>{{$pessoa->nacionalidade}}</td>
        <td>Editar</td>
        <td>Excluir</td>
    </tr>
    @endforeach
</table>
@endsection