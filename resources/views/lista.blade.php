<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <title>Document</title>
</head>
<body>


        <h1>Lista de Livros</h1>
        <br>
        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Autor</th>
                    <th>Editora</th>
                    <th>Descrição</th>
                
                </tr>
            </thead>
            <tbody>
            @foreach($dados as $value)
                <tr>
                    <td>{{ $value->nome }}</td>
                    <td>{{ $value->autor }}</td>
                    <td>{{ $value->editora }}</td>
                    <td>{{ $value->descricao }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
       
   

</body>
</html>