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
    $sql="UPDATE carro SET preco='$_POST[preco]' WHERE id=$_POST[idCarro]";
    $resultado = mysqli_query($conexao,$sql) or die("Não foi possível executar a operação.");
    echo "Alterado com sucesso";
    mysqli_close($conexao);
  }

  ?>
</body>
</html>
