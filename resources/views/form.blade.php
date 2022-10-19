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
        <form action="{{route('form')}}" method="post">
            @csrf
            <div class="form-group">
              <label for="">Titulo</label>
              <input type="text" class="form-control"  name="title">
            </div>
            <div class="form-group">
              <label for="">Subtitulo</label>
              <input type="text" class="form-control"  name="subtitle">
            </div>
            <div class="form-group">
                <label for="">Descrição</label>
                <textarea class="form-control" name= "content" rows="3"></textarea>
              </div><br/>

              <input type="submit" class="btn btn-primary" value="Cadastrar Artigo">
          </form>

    </div>
</body>
</html>

