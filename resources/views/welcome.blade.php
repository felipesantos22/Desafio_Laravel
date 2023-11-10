<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <table class="table table-dark">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">CNPJ</th>
                <th scope="col">Nome</th>
                <th scope="col">Razão Social</th>
                <th scope="col">Endereço</th>
                <th scope="col">Ação</th> 
            </tr>
        </thead>
        <tbody>
            <?php foreach($cliente as $client): ?>
                <tr>
                    <td><?= $client->id ?></td>
                    <td><?= $client->cpf ?></td>
                    <td><?= $client->nome ?></td>
                    <td><?= $client->razao_social ?></td>
                    <td><?= $client->endereco ?></td>
                    <td>
                        <form action="{{url("/$client->id")}}" method="post">
                            @csrf
                            @method("DELETE")
                            <button type="submit" class="btn btn-info">Excluir</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
