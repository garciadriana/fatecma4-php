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
  <?php
  if(isset($_POST["submit"])){
    $conexao = mysqli_connect('localhost','root','') or die("Não foi possível conectar ao servidor.");
    $banco = mysqli_select_db($conexao,'carros') or die("Não foi possível conectar ao banco.");
    mysqli_set_charset($conexao,'utf8');
    $sql="INSERT INTO carro(placa, nome, ano, cor, marca, preco, combustivel)"
    . "VALUES ('$_POST[placa]','$_POST[nome]','$_POST[ano]','$_POST[cor]','$_POST[marca]','$_POST[preco]','$_POST[tipo]')";
    $resultado = mysqli_query($conexao,$sql) or die("Não foi possível executar a operação.");
    echo "Gravado com sucesso";
    mysqli_close($conexao);
  }

  ?>
</body>
</html>
