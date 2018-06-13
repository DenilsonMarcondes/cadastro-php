<?php 
	require_once("conexao/conexao.php");
 ?>

  <?php
    
    //Inserção no banco

    if (isset($_POST["nome"])) {
        $nome   = $_POST["nome"];
        $email = $_POST["email"];
        $telefone = $_POST["telefone"];
        
        $inserir = "INSERT INTO clientes ";
        $inserir .= " (nome,email,telefone) ";
        $inserir .= "VALUES ";
        $inserir .= "('$nome','$email','$telefone') "; 

        $operacao_inserir = mysqli_query($conecta,$inserir);
        if (!$operacao_inserir) {
            die("Erro no banco");
        }
    }

 ?>

<!DOCTYPE html>
<html>
<head>


<!--LINK PARA A UTILIZAÇÃO DO BOOTSTRAP VIA CDN-->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<!--FIM DO LINK PARA A UTILIZAÇÃO DO BOOTSTRAP VIA CDN-->

	<title>Cadastro de Clientes</title>
	<meta charset="utf-8">
</head>
<body>

	<br>
		<br>

	<!--NAVBAR MENU-->

	<nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="cadastrar.php">Cadastro</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="cadastrar.php">Clientes</a></li>
            <li><a href="cadastrar.php">Clientes</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

     <!--FIM NAVBAR MENU-->

        <br>

	<div class="container">
		<form action="cadastrar.php" method="POST">

		<label>Nome:</label>
		<input type="text" class="form-control" name="nome">
		<br>

		<label>Email:</label>
		<input type="text" class="form-control" name="email">
		<br>

		<label>Telefone:</label>
		<input type="text" class="form-control" name="telefone">
		<br>

		<button name="btn" value="btn-salvar" class="btn btn-success">Cadastrar Clientes</button>

	</form>
	</div>

	<br>

	<div class="container">
		<center><h4>TABELA DOS CLIENTES CADASTRADOS</h4></center>
	</div>

	
	
	<div class="container">
  <table class="table" class="table table-striped">
  <thead>
    <tr>
      <center><th scope="col">Nome dos Clientes</th></center>
      <center><th scope="col">Email</th></center>
      <center><th scope="col">Telefone</th></center>
    </tr>
  </thead>
  <tbody>

    <?php 

    //Codigo para listar os clientes na tabela utilizando a estrutura de repetição WHILE

      $sql = "SELECT * FROM clientes ";
      $resultado = mysqli_query($conecta,$sql);
      while($dados = mysqli_fetch_array($resultado)):
     ?>

    <tr>
      <td><?php echo $dados['nome']; ?></td>
      <td><?php echo $dados['email']; ?></td>
      <td><?php echo $dados['telefone']; ?></td>
    </tr>

  <?php endwhile ?>

  </tbody>
</table>
</div>

<!--Fim da Tabela-->
<br>

<!--Inicio footer-->
  <div class="container">
      <footer>
       <?php // codigo para mostrar o ano na página da aplicação
       echo date("Y"); ?> - Sistema de cadastro com bootstrap desenvolvido por: Denílson Rodrigues Marcondes
      </footer>
  </div>
<!--Fim footer-->



	

</body>
</html>
