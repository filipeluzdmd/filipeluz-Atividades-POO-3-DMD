<?php

echo "<h2>EXERCÍCIO 1: Maioridade</h2>";
$idade = 20;
echo ($idade >= 18) ? "Maior de idade" : "Menor de idade";

echo "<hr>";

echo "<h2>EXERCÍCIO 2: Aprovação</h2>";
$nota = 7;
echo ($nota >= 6) ? "O aluno está aprovado" : "O aluno está reprovado";

echo "<hr>";

echo "<h2>EXERCÍCIO 3: Positivo ou Negativo</h2>";
$numero = -5;
echo ($numero >= 0) ? "Número positivo" : "Número negativo";

echo "<hr>";

echo "<h2>EXERCÍCIO 4: Desconto</h2>";
$valor = 120;
$final = ($valor >= 100) ? $valor - ($valor * 0.10) : $valor;
echo "Valor final: R$ $final";

echo "<hr>";

echo "<h2>EXERCÍCIO 5: Par ou Ímpar</h2>";
$numero = 4;
echo ($numero % 2 == 0) ? "Número par" : "Número ímpar";

echo "<hr>";

echo "<h2>EXERCÍCIO 6: Login</h2>";
$usuario = "admin";
$senha = "1234";
echo ($usuario == "admin" && $senha == "1234") ? "Acesso permitido" : "Acesso negado";

echo "<hr>";

echo "<h2>EXERCÍCIO 7: Classificação</h2>";
$nota = 7;
if ($nota >= 8) {
    echo "Excelente";
} elseif ($nota >= 6) {
    echo "Bom";
} else {
    echo "Reprovado";
}

echo "<hr>";

echo "<h2>EXERCÍCIO 8: Frete</h2>";
$valor = 250;
echo ($valor >= 200) ? "Frete grátis" : "Frete pago";

echo "<hr>";

echo "<h2>EXERCÍCIO 9: Evento</h2>";
$idade = 16;
$acompanhado = true;
echo ($idade >= 18 || $acompanhado) ? "Entrada permitida" : "Entrada negada";

echo "<hr>";

echo "<h2>EXERCÍCIO 10: Bloqueio</h2>";
$bloqueado = false;
echo (!$bloqueado) ? "Acesso permitido" : "Acesso negado";

echo "<hr>";

echo "<h2>EXERCÍCIO 11: Aprovação Completa</h2>";
$nota = 7;
$frequencia = 70;

if ($nota >= 6 && $frequencia >= 75) {
    echo "O aluno está aprovado";
} elseif ($nota >= 6 && $frequencia < 75) {
    echo "O aluno está reprovado por falta";
} else {
    echo "O aluno está reprovado por nota";
}

echo "<hr>";

echo "<h2>EXERCÍCIO 12: Desconto Progressivo</h2>";
$valor = 150;
$vip = false;

if ($valor >= 200 || $vip) {
    $final = $valor * 0.85;
} elseif ($valor >= 100) {
    $final = $valor * 0.90;
} else {
    $final = $valor;
}

echo "Valor final: R$ $final";

echo "<hr>";

echo "<h2>EXERCÍCIO 13: Permissão</h2>";
$idade = 20;
$nivel = 2;
$bloqueado = false;

if ($bloqueado) {
    echo "Acesso negado";
} elseif ($nivel == 3) {
    echo "Acesso total";
} elseif ($nivel == 2 && $idade >= 18) {
    echo "Acesso parcial";
} else {
    echo "Acesso limitado";
}

echo "<hr>";

echo "<h2>EXERCÍCIO 14: Bônus</h2>";
$salario = 2000;
$anos = 5;
$meta = true;

if ($anos >= 5 && $meta) {
    $bonus = $salario * 0.20;
} elseif ($anos >= 2 && $meta) {
    $bonus = $salario * 0.10;
} else {
    $bonus = 0;
}

$final = $salario + $bonus;
echo "O salário final é R$ $final";

echo "<hr>";

echo "<h2>EXERCÍCIO 15: Temperatura</h2>";
$temp = 30;

if ($temp < 15) {
    echo "Frio";
} elseif ($temp <= 25) {
    echo "Agradável";
} elseif ($temp <= 35) {
    echo "Quente";
} else {
    echo "Muito quente";
}

?>