  <!DOCTYPE html>
  <html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <title>Login</title>
  </head>
  <body>
    <div class="container">
      <div class="header">
        <nav class="navbar bg-light">
          <div class="container-fluid">
            <h1 class="navbar-brand">Login</a>
          </div>
        </nav>
      </div>
      <div class="row">
          <div class="col-3"></div>
          <div class="col-5 position">
            <form method="POST" action="./control/controleUser.php" class="row g-3">
              <div class="row mb-3">
                <label for="nome" class="col-sm-2 col-form-label" >Nome:</label>
                <input type="text" name="nome" id="nome" class="form-control" placeholder="Insira o nome de usuário.">
              </div>
              <div class="row mb-3">
                <label for="senha" class="col-sm-2 col-form-label">Senha:</label>
                <input type="password" name="senha" id="senha" class="form-control" placeholder="Insira a senha.">
              </div>
              <button type="submit" name="opcao" value="entrar" class="btn btn-success" >Entrar</button>
              <button type="submit" name="opcao" value="cadastrar" class="btn btn-info">Cadastrar</button>
            </form>
          <div class="col-3"></div>
        </div>
      </div>
    </div> 
  </body>