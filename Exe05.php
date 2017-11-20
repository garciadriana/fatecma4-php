<!DOCTYPE html>
  <html>
  <head>
    <meta charset="utf-8">
    <title>Exercício 05</title>
	<style>
	body{
		background: #FFC0CB;
		color: 	#DC143C;
		font-family: Century Gothic;
		
	}
	</style>
  </head>
  <body>
	    <h1><center>Exercicio 5 - equipes com até 4 alunos</h1>
        <p><center>Condicional com Switch()</p>
		<hr>
     <?php
		if(isset($_POST["submit"])){
		$qtd = $_POST["qtd"];
		$nom = $_POST["nom"];
		echo "Aviso ao representante ${nom} <br> a equipe com ${qtd} alunos foi aceita";
} ?> 
  </body>
  </html>