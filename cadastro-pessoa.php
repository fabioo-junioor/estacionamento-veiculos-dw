<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="css/home.css">
  <link rel="stylesheet" href="css/cadastro-pessoas.css">
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
      <div class="cad-pessoa">
        <div>
          <h4>FORMULÁRIO DE CADASTRO DE PESSOA!!</h4>
        </div>
        <div class="listar-pessoas">
          <!-- Button trigger modal LISTAR VEICULOS-->
          <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Listar Pessoas Cadastrados</button>
          <!-- Modal -->
          <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="staticBackdropLabel">Lista de Pessoas Cadastrados</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <h4>INSERIR LISTA AQUI</h4>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div>
          <form id="formulario" name="formulario">
            <label for="" class="form-label">Informe seu nome:</label>
            <input type="text" id="nome" placeholder="Nome" class="form-control">
            <label for="" class="form-label">Informe seu CPF:</label>
            <input type="number" id="cpf" placeholder="CPF" class="form-control">
            <label for="" class="form-label">Informe seu telefone:</label>
            <input type="tel" id="telefone" placeholder="Telefone" class="form-control">
            <label for="" class="form-label">Informe o numero do apartamento:</label>
            <input type="text" id="num_apart" placeholder="Numero do Apartamento" class="form-control">
            <button id="enviar" type="submit" class="btn btn-outline-secondary">Enviar</button>
          </form>
        </div>
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