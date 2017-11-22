<?php
$conexao = mysqli_connect('localhost','root','');
$banco = mysqli_select_db($conexao,'carros');
mysqli_set_charset($conexao,'utf8');
$sql = mysqli_query($conexao,"select * from carro") or die("Não foi possível executar a operação.");
if($_GET["q"]=="2013"){
  $sql = mysqli_query($conexao,"select * from carro where ano > 2013") or die("Não foi possível executar a operação.");
}
if($_GET["q"]=="flex"){
  $sql = mysqli_query($conexao,"select * from carro where combustivel = 5") or die("Não foi possível executar a operação.");
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
  </style>
</head>
<body>
  <center>
    <h1>Exercício 12 - Consulta de Carros</h1>
    <p>Adriana</p>
    <hr>
    <table>
      <tr>
        <th>ID</th>
        <th>Placa</th>
        <th>Cor</th>
        <th>Nome</th>
        <th>Marca</th>
        <th>Ano</th>
        <th>Preco</th>
        <th>Combustivel</th>
      </tr>
      <?php while($dados=mysqli_fetch_assoc($sql)){ ?>
        <tr>
          <td><?= $dados["id"]?></td>
          <td><?= $dados["placa"]?></td>
          <td><?= $dados["cor"]?></td>
          <td><?= $dados["nome"]?></td>
          <td><?= $dados["marca"]?></td>
          <td><?= $dados["ano"]?></td>
          <td><?= $dados["preco"]?></td>
          <td><?= $dados["combustivel"]?></td>
        </tr>
      <?php } ?>
    </table>
  </center>
</body>
</html>
