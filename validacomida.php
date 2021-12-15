<?php

$nome = $_POST['nome'];
$senha = $_POST['senha'];
$idade = $_POST['idade'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];

echo $nome;
echo "<br>";
echo $senha;
echo "<br>";
echo $idade;
echo "<br>";
echo $telefone;
echo "<br>";
echo $email;
echo "<br>";

$comidaPref = $_POST['comidaPref'];

echo $comidaPref;
echo "<br>";

$disciplinas = '';

if (isset($_POST['redes'])) {
	echo "redes de computadores"."<br>";
	$disciplinas .="redes de computadores";
}
if (isset($_POST['JavaScript'])) {
	echo "Java Script"."<br>";
	$disciplinas .="Java Script";
}
if (isset($_POST['Java'])) {
	echo "Programação em Java"."<br>";
	$disciplinas .="Programação em Java";
}
if (isset($_POST['Arquitetura'])) {
	echo "Arquitetura e manutenção de PC"."<br>";
	$disciplinas .="Arquitetura e manutenção de PC";
}

$carro = $_POST['cars'];
echo $carro;
echo "<br>";

$nota = $_POST['nota'];
echo $nota;
echo "<br>";

$data = $_POST['data'];
echo $data;
echo "<br>";

$descanso = $_POST['descanso'];
echo $descanso;
echo "<br>";

