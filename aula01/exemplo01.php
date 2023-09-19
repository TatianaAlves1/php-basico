<?php
//Comando para mostrar mensagem na página
echo "Olá, Mundo!";
$nome  = "Tatiana Alves";
$curso = "ADS";
$ch    = 60;
$mensalidade = 899.99;
$status = true;
//Concatenação de variáveis
echo "<br>Seja bem-vindo(a), ".$nome;
echo "<h3>Seu curso é $curso </h3>";
echo "<h3>O curso de $curso custa R$ $mensalidade por mês</h3>";
echo "O status atual da sua matrícula é: $status";
//Tipos de dados
echo "<h2>Tipos de dados:</h2>";
echo "Variável nome: ".gettype($nome)."<br>";
echo "Variável curso: ".gettype($curso)."<br>";
echo "Variável Carga horária: ".gettype($ch)."<br>";
echo "Variável mensalidade: ".gettype($mensalidade)."<br>";
echo "Variável status: ".gettype($status)."<br>";
//descrição da variável
echo "<h2>Descrição da variável:</h2>";
echo var_dump($nome)."<br>";
echo var_dump($curso)."<br>";
echo var_dump($ch)."<br>";
echo var_dump($mensalidade)."<br>";
echo var_dump($status)."<br>";











?>