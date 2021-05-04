<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device=widht, initial-scale-1">
        <title>Todas as Pessoas Cadastradas</title>
    </head>
    <body>
        <table>
            <tr><th>Nome</th><tr><th>E-mail</th><tr><th>CPF</th><tr><th>Data de Nascimento</th><tr><th>Nacionalidade</th> </tr>
            @foreach ($pessoas as $pessoa)
               <tr>
                   <td>{{$pessoa->nome}}</td>
                   <td>{{$pessoa->email}}</td>
                   <td>{{$pessoa->cpf}}</td>
                   <td>{{$pessoa->data_nasc}}</td>
                   <td>{{$pessoa->nacionalidade}}</td>
                   <td>Editar</td>
                   <td>Excluir</td>
               </tr>  
            @endforeach           
    </body>
</html>        