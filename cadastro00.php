  <?php include("cabecalho.php");?>
<?php 
  $cep = '';
 ?>
 
  <form name="form1" method="GET" action="cadastro01.php">

    <table>

      <tr>
          <td>
            <label for="cep">CEP</label>
            <input type="text" name="cep" id="cep" placeholder="Informe o CEP:" value="<?=$cep?>" autofocus>
          </td>
      </tr>
                  
    
    <input onclick="submeter()" type="submit" name="submit" value="Cadastrar">
  </form>
   <?php include("rodape.php");?>