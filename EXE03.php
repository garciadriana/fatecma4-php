<!DOCTYPE HTML>
<META charset="UTF-8">
<HTML><!--Exercício 03 - PHP - Prof.Celso Gallão-->
<HEAD>
	<TITLE>Exercício 03</TITLE>
</HEAD>
<BODY BGCOLOR="pink" TEXT="red">
<H1>Exercício 03 - Trabalhando com Datas</H1>
<H2>Utilizando Funções de Data</H2>
<H3>Adriana e Igor</H3><HR><B>
<FONT face="Arial" size="4" color="darkblue">
<?php
//Utilizando date()
echo "Data e Hora atual: ";
echo date("F jS Y, h:iA");
echo "<HR>";
//Utilizando checkdate()
$mes = 02;
$dia = 16;
$ano = 1970;
$resp = checkdate($mes, $dia, $ano);
if ($resp == 1){
	echo "A data $dia/$mes/$ano é Válida!";
} 
else {
	echo "A data $dia/$mes/$ano é Inválida!";
}
//Utilizando mktime()
echo "<HR>";
$hora = 06;
$min = 35;
$seg = 55;
$dt = mktime($hora, $min, $seg, $mes, $dia, $ano);
echo "Data $dia/$mes/$ano às $hora:$min:$seg = $dt";
//Utilizando time() e microtime()
echo "<HR>A hora atual é ";
echo time();
echo "<HR>A hora atual exata é ";
echo microtime();
//Calculando a dif entre duas datas
$mes2 = 03;
$dia2 = 07;
$ano2 = 2008;
$data_inicial = mktime(0,0,0,$mes,$dia,$ano);
$data_final = mktime(0,0,0,$mes2,$dia2,$ano2);
$dif_dias = ($data_final - $data_inicial)/86400;
$dif_horas= ($data_final - $data_inicial)/3600;
$dif_min = ($data_final - $data_inicial)/60;
$dif_seg = ($data_final - $data_inicial);
$dias = ceil($dif_dias);
echo "<HR>A diferença entre a data $dia/$mes/$ano até a data $dia2/$mes2/$ano2 é de $dias dias,<br>ou de 
$dif_horas horas,ou ainda de $dif_min minutos, ou se preferir de $dif_seg segundos.";
?>
</BODY>
</HTML>

