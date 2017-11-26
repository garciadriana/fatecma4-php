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
  <center>
    <h1>Exercicio 5 - equipes com até 4 alunos</h1>
    <p>Condicional com Switch()</p>
    <hr>
   <?php
	$nom = $_POST["nom"];
	$qtd = $_POST["qtd"];
echo "Aviso ao líder da equipe, $nom: <p>";
	switch($qtd)
	{
		case 0: 
			echo "Com $qtd alunos, não é uma equipe";
			break;
		case 1:
			echo "Com $qtd alunos, não é uma equipe";
		case 2: 
			echo "A equipe com $qtd alunos foi aceita";
			break;
		case 3:
			echo "A equipe com $qtd alunos foi aceita";
			break;
		case 4:
			echo "A equipe com $qtd alunos foi aceita";
			break;
		default: 
			echo "A equipe com $qtd alunos não foi aceito";
			break;
	}
?>
  </center>
</body>
</html>
