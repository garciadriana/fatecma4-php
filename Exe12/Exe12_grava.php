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
    <form name="form1" action="Exe12_Gravou.php" method="POST">
      <h1>Exercicio 12 - Gravar novo carro</h1>
      <p>Adriana</p>
      <hr>
      Placa: <input type="text" name="placa" value=""> Cor: <input type="text" name="cor" value=""><br>
      Nome: <input type="text" name="nome" value=""> Marca: <input type="text" name="marca" value=""><br>
      Ano Modelo: <input type="text" name="ano" value=""> Preço: <input type="text" name="preco" value=""><br>
      <br>
      Combustível:
      <input type="radio" name="tipo" value="1">Gasolina
      <input type="radio" name="tipo" value="2">Alcóol
      <input type="radio" name="tipo" value="3">Diesel
      <input type="radio" name="tipo" value="4">Gas
      <input type="radio" name="tipo" value="5">Flex
      <br><br>
      <input type="submit" name="submit" value="Enviar">
      <input type="reset" name="limpar" value="Limpar">
    </form>
  </center>
</body>
</html>
