<?php

// 1 - Sistema de cálculo de salário
$salario_base = 2000;
$bonus = 500;
$salario_final = $salario_base + $bonus;

echo "1) O salário final do funcionário é R$ " . $salario_final . "<br><br>";


// 2 - Sistema de consumo de veículos
$distancia = 300; // km
$combustivel = 25; // litros
$consumo = $distancia / $combustivel;

echo "2) O consumo médio do veículo foi de " . $consumo . " km/l<br><br>";


// 3 - Sistema escolar de médias
$nota1 = 7;
$nota2 = 8;
$nota3 = 9;
$media = ($nota1 + $nota2 + $nota3) / 3;

echo "3) A média final do aluno é " . $media . "<br><br>";


// 4 - Sistema de vendas com desconto
$valor_produto = 100;
$percentual = 10;
$desconto = $valor_produto * ($percentual / 100);
$valor_final = $valor_produto - $desconto;

echo "4) O produto custava R$ " . $valor_produto . " e agora custa R$ " . $valor_final . "<br><br>";


// 5 - Sistema meteorológico
$celsius = 25;
$fahrenheit = ($celsius * 9/5) + 32;

echo "5) A temperatura de " . $celsius . "°C corresponde a " . $fahrenheit . "°F<br><br>";


// 6 - Sistema de cadastro de pessoas
$ano_atual = 2026;
$ano_nascimento = 2005;
$idade = $ano_atual - $ano_nascimento;

echo "6) A pessoa possui " . $idade . " anos<br><br>";


// 7 - Sistema de construção civil
$base = 10;
$altura = 5;
$area = $base * $altura;

echo "7) A área do terreno é " . $area . " m²<br><br>";


// 8 - Sistema de caixa de mercado
$valor_compra = 80;
$valor_pago = 100;
$troco = $valor_pago - $valor_compra;

echo "8) O troco a ser devolvido é R$ " . $troco . "<br><br>";


// 9 - Sistema bancário (juros simples)
$capital = 1000;
$taxa = 0.05; // 5%
$tempo = 12; // meses
$juros = $capital * $taxa * $tempo;

echo "9) O valor do juro gerado é R$ " . $juros . "<br><br>";


// 10 - Desafio – sistema completo de venda
$cliente = "João";
$valor = 200;
$percentual_desc = 15;

$desc = $valor * ($percentual_desc / 100);
$final = $valor - $desc;

echo "10) O cliente " . $cliente . " comprou um produto de R$ " . $valor . ", recebeu R$ " . $desc . " de desconto e pagará R$ " . $final;

?>