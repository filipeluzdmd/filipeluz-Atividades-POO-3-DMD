<?php

// 1 - Contagem de 1 até 10 (while)
$contador = 1;
while ($contador <= 10) {
    echo "1) Número: $contador <br>";
    $contador++;
}

echo "<br>";

// 2 - Contagem regressiva (for)
for ($i = 10; $i >= 1; $i--) {
    echo "2) Número: $i <br>";
}

echo "<br>";

// 3 - Soma de números (while)
$contador = 1;
$soma = 0;

while ($contador <= 5) {
    $soma += $contador;
    $contador++;
}

echo "3) A soma é: $soma <br><br>";


// 4 - Exibir números pares (for)
for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 == 0) {
        echo "4) Número par: $i <br>";
    }
}

echo "<br>";

// 5 - Repetição com do/while
$contador = 1;

do {
    echo "5) Número: $contador <br>";
    $contador++;
} while ($contador <= 5);

echo "<br>";

// 6 - Lista de nomes (foreach)
$nomes = ["Ana", "Carlos", "João"];

foreach ($nomes as $nome) {
    echo "6) Nome: $nome <br>";
}

echo "<br>";

// 7 - Contagem de notas aprovadas (foreach)
$notas = [8, 5, 7, 4, 9];
$aprovados = 0;

foreach ($notas as $nota) {
    if ($nota >= 6) {
        $aprovados++;
    }
}

echo "7) Total de aprovados: $aprovados <br><br>";


// 8 - Tabuada de um número (for)
$numero = 5;

for ($i = 1; $i <= 10; $i++) {
    $resultado = $numero * $i;
    echo "8) $numero x $i = $resultado <br>";
}

echo "<br>";

// 9 - Soma de números pares (while)
$contador = 1;
$soma = 0;

while ($contador <= 10) {
    if ($contador % 2 == 0) {
        $soma += $contador;
    }
    $contador++;
}

echo "9) Soma dos pares: $soma <br><br>";


// 10 - Soma dos elementos do array (foreach)
$numeros = [10, 20, 30, 40];
$soma = 0;

foreach ($numeros as $num) {
    $soma += $num;
}

echo "10) A soma total é: $soma <br><br>";


// 11 - Encontrar o maior número (foreach)
$numeros = [5, 8, 2, 15, 3];
$maior = $numeros[0];

foreach ($numeros as $num) {
    if ($num > $maior) {
        $maior = $num;
    }
}

echo "11) O maior número é: $maior";

?>