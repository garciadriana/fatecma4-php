<?php
if(isset($_GET["submit"])){
  $inicio = $_GET["inicio"];
  $fim = $_GET["fim"];
  $tipo = $_GET["tipo"];
  for ($i=$inicio; $i <= $fim ; $i++) {
    if($tipo=="1"){
      if($i%2==0){
        echo "${i} - ";
      }
    }
    if($tipo=="2"){
      if($i%2!=0){
        echo "${i} - ";
      }
    }
  }
    echo "fim!";
}else {?>
  <!DOCTYPE html>
  <html>
  <head>
    <meta charset="utf-8">
    <title>Exe05</title>
  </head>
  <body>
    <h1>Exercicio 5 - equipes com até 4 alunos</h1>
    <p>Aluno 1 - Aluno2</p>
    <hr>
    <form name="fomr1" action="Exe06.php" method="GET">

      <p>Quantidade de alunos na equipe </p>
      <input type="text" name="inicio" value="">
      <input type="text" name="fim" value="">
      <p>Nome do representante da equipe</p>
      <input type="radio" name="tipo" value="1">
      <input type="radio" name="tipo" value="2">
      <input type="submit" name="submit" value="Enviar">
    </form>
  </body>
  </html>
<?php } ?>
