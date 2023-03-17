<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <?php include("../model/crudUser.php");?>
    <title>Menu</title>
</head>
<body>
    <div class="container">
    <div class="header">
    <nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <h1 class="navbar-brand">Olá  --><?=nomeUser()?><--</h1>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link">Menu</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page">Cadastrar Produto</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Mostrar Produto</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
</div>
<div class="main-content">
    <div class="row">
            <div class="col-3"></div>
            <div class="col-5 position">
            <form method="POST" action="../control/controleUser.php" class="row g-3">
                <div class="row mb-3">
                <label for="nome" class="col-sm-4 col-form-label" >Nome do produto:</label>
                <input type="text" name="nomeProduto" id="nome" class="form-control" required="required">
                </div>
                <div class="row mb-3">
                <label for="senha" class="col-sm-2 col-form-label">Quantidade</label>
                <input type="number" name="qtd" id="senha" class="form-control" required="required">
                </div>
                <div class="row mb-3">
                <label for="senha" class="col-sm-2 col-form-label">Preço</label>
                <input type="text" name="preco" id="senha" class="form-control" required="required">
                </div>
                <button type="submit" name="opcao" value="cadastrarProduto" class="btn btn-info">Cadastrar</button>
                <a href="menu.php" class="btn btn-danger">Voltar</a>
            </form>
            <div class="col-3"></div>
        </div>
        </div>
</div>
    <div class="footer">
    <a href="../control/controleUser.php?opcao=sair"><button class="btn btn-danger">Sair</button></a>
    </div>
    </div>
</body>
</html>