
  <?php include("cabecalho.php");?>
  <?php include("conexao.php");?>

  <?php

  $cep =  isset($_GET["cep"]) ? $_GET["cep"] : '';
  $logradouro = isset($_GET["logradouro"]) ? $_GET["logradouro"] : '';
  $numero = isset($_GET["numero"]) ? $_GET["numero"] : '';
  $complemento = isset($_GET["complemento"]) ? $_GET["complemento"] : '';
  $bairro = isset($_GET["bairro"]) ? $_GET["bairro"] : '';
  $cidade = isset($_GET["cidade"]) ? $_GET["cidade"] : '';
  $estado = isset($_GET["estado"]) ? $_GET["estado"] : '';

  $conexao = pg_connect($dados_conexao); 

  $comandoSQL = "insert into endereco(logradouro,numero,complemento,bairro,cidade,estado,cep) values('" . $logradouro . "'," . $numero . ",'" . $complemento . "','" . $bairro . "','" . $cidade . "','" . $estado . "'," . $cep . ")";

  echo "Consulta: " . $comandoSQL . "<br>";

  $resultado = pg_query($conexao, $comandoSQL);

  $numLinhas= pg_affected_rows($resultado);

  if ($numLinhas > 0) {
    echo "Endereco cadastrado com sucesso: " . "<a href='empregados.php'</a>" . "Empregados";
  } 
  else {

    echo "Erro: " . "<a href='cadastrarEmp01.php?cep=" . $cep . "'</a>" . "Voltar";

  }

  pg_free_result($resultado);
  pg_close($conexao);

  ?>

  <?php include("rodape.php");?>