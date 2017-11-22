<?php
if(isset($_POST["submit"])){
  $conexao = mysqli_connect('localhost','root','');
  $banco = mysqli_select_db($conexao,'carros');
  mysqli_set_charset($conexao,'utf8');
  $sql = mysqli_query($conexao,"select * from carro where placa = '$_POST[placa]' ") or die("Não foi possível executar a operação.");
  $dados=mysqli_fetch_assoc($sql);
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Exercício 12</title>
  <style>
  body{
    background: #D8BFD8;
    color: #9932CC;
    font-family: Century Gothic;
  }
  h1{
    font-weight: bold;
  }
  </style>
</head>
<body>
  <center>
    <h1>Resultado da procura</h1>

    <form name="form1" action="Exe12_Alterou.php" method="POST">
      Placa <?= $dados["placa"]?> Nome <?= $dados["nome"]?> <br>
      Ano/Modelo <?= $dados["ano"]?> Cor <?= $dados["cor"]?> <br>
      Preço atual <?= $dados["preco"]?><br>
      Novo preço <input type="text" name="preco" value="" /><br>
      <input type="hidden" name="idCarro" value="<?= $dados["id"]?>" />
      <input type="reset" name="naoAltera" value="Não Alterar" onclick="window.open('Exe12.php','_self')">
      <input type="submit" name="submit" value="Alterar">
    </form>
  </center>
</body>
</html>
