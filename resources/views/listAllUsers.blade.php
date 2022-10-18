<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de Usuários</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <a href="{{route('user.create')}}" class="btn btn-info">Novo</a>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Email</th>
                <th scope="col">Ações</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <th scope="row">{{$user->id}}</th>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>
                        <a href="{{route('user.edit', $user->id)}}" class="btn btn-primary">Editar</a>
                        <form action="{{route('user.destroy', ['user'=> $user->id])}}" method="post">
                            @csrf
                            @method('delete')
                            <input type="hidden" name="user"value="">
                             <input type="submit" class="btn btn-danger" value="Excluir">
                        </form>

                        <a href="{{route('user.show', $user ->id)}}" class="btn btn-success">Visualizar</a>
                    </td>
                  </tr>
                @endforeach
            </tbody>
          </table>

    </div>

</body>
</html>
