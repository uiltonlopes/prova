  <?php include("cabecalho.php");?>

  <?php 

    $cep =  isset($_GET["cep"]) ? $_GET["cep"] : '';

    $url = "http://api.postmon.com.br/v1/cep/".$cep;

    $conteudo = file_get_contents($url);

    $json_str = json_decode($conteudo);

    $logradouro = $json_str->logradouro;
    $cep = $json_str->cep;
    $bairro = $json_str->bairro;
    $cidade = $json_str->cidade;
    $estado = $json_str->estado;

   ?>
 


  <form name="form1" method="GET" action="cadastro02.php">

    <table>

      <tr>
          <td>
            <label for="cep">CEP</label>
            <input type="text" name="cep" id="cep" placeholder="Informe o CEP:" value="<?=$cep?>" autofocus>
          </td>
      </tr>
                  
      <tr>
          <td>
            <label for="logradouro">Logradouro</label>
            <input type="text" name="logradouro" id="logradouro" value="<?=$logradouro?>">
          </td>
      </tr>

      <tr>
          <td>
            <label for="numero">Número</label>
            <input type="text" name="numero" id="numero" placeholder="Informe o número:" >
          </td>
      </tr>

      <tr>
          <td>
            <label for="complemento">Complemento</label>
            <input type="text" name="complemento" id="complemento" placeholder="Informe o complemento:" >
          </td>
      </tr>

      <tr>
          <td>
            <label for="bairro">Bairro</label>
            <input type="text" name="bairro" id="bairro" value="<?=$bairro?>">
          </td>
      </tr>

      <tr>
          <td>
            <label for="cidade">Cidade</label>
            <input type="text" name="cidade" id="cidade" value="<?=$cidade?>">
          </td>
      </tr>

      <tr>
          <td>
            <label for="estado">Estado</label>
            <input type="text" name="estado" id="estado" value="<?=$estado?>" >
          </td>
      </tr>

    </table>

    <input onclick="submeter()" type="submit" name="submit" value="Cadastrar">
  </form>
   <?php include("rodape.php");?>