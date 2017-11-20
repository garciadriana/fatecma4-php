<?php
if(isset($_POST["submit"])){
  $qtd = $_POST["qtd"];
  $nom = $_POST["representante"];
  echo "Aviso ao representatne ${nom} <br> a equipe com ${qtd} alunos foi aceita";
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
    <form name="fomr1" action="Exe05.php" method="post">

      <p>Quantidade de alunos na equipe </p>
      <input type="text" name="qtd" value="">
      <p>Nome do representante da equipe</p>
      <input type="text" name="representante" value="">
      <input type="submit" name="submit" value="Enviar">
    </form>
  </body>
  </html>
<?php } ?>
