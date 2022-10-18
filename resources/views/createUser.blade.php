<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Criar usuário</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <form action="{{route('user.store')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="">Nome</label>
                <input name="name" type="tetx" class="form-control" id="" aria-describedby="" placeholder="Digite seu nome">
              </div>
            <div class="form-group">
              <label for="">Email </label>
              <input type="email" name="email" class="form-control" id="" aria-describedby="" placeholder="Digite seu email">
            </div>
            <div class="form-group">
              <label for="">Senha</label>
              <input type="password" name="password"class="form-control" id="" placeholder="Digite sua senha">
            </div> <br/>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </div>

          </form>

    </div>
</body>
</html>
