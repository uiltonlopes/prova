
  <?php include("cabecalho.php");?>
  <?php include("conexao.php");?>

  <?php

  $conexao = pg_connect($dados_conexao);  

  $resultado = pg_query($conexao, "select * from endereco order by id");

  $arr_resultado = pg_fetch_all($resultado);

  ?>
  <div class="container">

  <table class="table-responsive" align="center">
    <br/>
            <tr align="center">
                
                <th>ID</th>
                <th>logradouro</th>
                <th>numero</th>
                <th>complemento</th>
                <th>bairro</th>
                <th>cidade</th>
                <th>estado</th>
                <th>cep</th>
            </tr>
            <?php foreach($arr_resultado as $l){?>
              <tr align="center">
                  <td><?=$l['id']?></td>
                  <td><?= $l['logradouro']?></td>
                  <td><?= $l['numero']?></td>
                  <td><?= $l['complemento']?></td>                
                  <td><?= $l['bairro']?></td>
                  <td><?= $l['cidade']?></td>
                  <td><?= $l['estado']?></td>
                  <td><?= $l['cep']?></td>
                  <td><a href="alterarEmp01.php?ssn=<?=$l['ssn']?>"</a>Alterar</td>
                  <td><a href="excluirEmp.php?ssn=<?=$l['ssn']?>"</a>Excluir</td>
              </tr>
            <?php } ?>
  </table>
  </div>

  <?php include("rodape.php");?>

