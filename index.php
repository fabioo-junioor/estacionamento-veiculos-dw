<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="css/index.css">
  <title>Estacionamento de Veiculos</title>
</head>

<body>
  <header class="cabecalho">
    <nav class="navbar navbar-expand-md navbar-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php"><img src="img/UFSM_secundario.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="cadastro-pessoa.php">Cadastrar Pessoas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="cadastro-veiculo.php">Cadastrar Veiculos</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <section class="corpo">
    <div class="container-fluid">
      <div class="registro-veiculo">
        <h4>REGISTRAR ENTRADA OU SAIDA DE VEICULO!</h4>
        <form id="formulario" name="formulario">
          <div>
            <label for="" class="form-label">Escolha a Placa do Veiculo:</label>
            <select class="form-select" id="placa-veiculo" aria-label="Default select example">
              <option selected>Escolha uma Opção</option>
              <option value="1">Placa veiculo 1</option>
              <option value="2">Placa veiculo 2</option>
              <option value="3">Placa veiculo 3</option>
            </select>
          </div>
          <div>
            <label for="" class="form-label">Entrada ou Saida de Veiculo:</label>
            <select class="form-select" id="entrada-saida" aria-label="Default select example">
              <option selected>Escolha uma Opção</option>
              <option value="1">Entrada</option>
              <option value="2">Saida</option>
            </select>
          </div>
          <div>
            <button id="enviar" type="submit" class="btn btn-outline-secondary">Enviar</button>
          </div>
        </form>
      </div>
    </div>
  </section>
  <footer class="rodape">
    <div class="container-fluid">
      <p> Desenvolvido por:</p>
    </div>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>