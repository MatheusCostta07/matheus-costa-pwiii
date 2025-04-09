<?php

echo "Questão 1 até a 4";
echo "<br><br>";

define("VALOR_INVALIDO", "VALOR INVÁLIDO");

do {
    echo "Digite o primeiro valor: ";
    $valor1 = floatval(fgets(STDIN));

    echo "Digite o segundo valor: ";
    $valor2 = floatval(fgets(STDIN));

    if ($valor2 == 0) {
        echo VALOR_INVALIDO . ". O segundo valor não pode ser zero.\n";
    }
} while ($valor2 == 0);


$resultado = $valor1 / $valor2;
echo "Resultado da divisão: " . $resultado . "\n";
echo "<br><br><br>";


//------------------------------------------------------------------------------------------------------------------------


echo "Questão 5";
echo "<br><br>";

do {
    echo "Digite a nota da primiera avaliação: ";
    $nota_um = floatval(fgets(STDIN));
} while ($nota_um < 0 || $nota_um > 10);


do {
    echo "Digite a nota da prova avaliação: ";
    $nota_dois = floatval(fgets(STDIN));
} while ($nota_dois < 0 || $nota_dois > 10);


$media_final = ($nota_um + $nota_dois) / 2;


echo "A média do aluno é: " . number_format($media_final, 2) . "\n"; 
echo "<br><br><br>";


//------------------------------------------------------------------------------------------------------------------------


echo "Questão 6";
echo "<br><br>";

do {
    echo "Digite a nota da primiera avaliação: ";
    $nota_um = floatval(fgets(STDIN));
} while ($nota_um < 0 || $nota_um > 10);


do {
    echo "Digite a nota da prova avaliação: ";
    $nota_dois = floatval(fgets(STDIN));
} while ($nota_dois < 0 || $nota_dois > 10);


$media_final = ($nota_um + $nota_dois) / 2;


echo "A média do aluno é: " . number_format($media_final, 2) . "\n";


echo "Deseja fazer um novo cálculo (S/N)? ";
    $resposta = strtoupper(trim(fgets(STDIN)));
    while ($resposta == 'S');

echo "Programa encerrado.\n";
echo "<br><br><br>";


//------------------------------------------------------------------------------------------------------------------------


echo "Questão 7";
echo "<br><br>";

for ($i = 1; $i <= 10; $i++) {
    echo $i . "\n";
}
echo "<br><br><br>";


//------------------------------------------------------------------------------------------------------------------------


echo "Questão 8";
echo "<br><br>";

for ($i = 10; $i >= 1; $i--) {
    echo $i . "\n";
}
echo "<br><br><br>";


//------------------------------------------------------------------------------------------------------------------------


echo "Questão 9";
echo "<br><br>";

$num = 101;

for ($i = 0; $i < 10; $i++) {
    echo $num . "\n";  
    $num++;           
}
echo "<br><br><br>";


//------------------------------------------------------------------------------------------------------------------------


echo "Questão 10";
echo "<br><br>";

echo "Digite um valor: ";
$valor = (int)fgets(STDIN);  

for ($i = 1; $i <= $valor; $i++) {
    echo $i . "\n"; 
}
echo "<br><br><br>";


//------------------------------------------------------------------------------------------------------------------------


echo "Questão 11";
echo "<br><br>";

do {
    echo "Digite um valor: ";
    $valor = (int)fgets(STDIN);  
} 
while ($valor <= 0);  

for ($i = 1; $i <= $valor; $i++) {
    echo $i . "\n"; 
}

echo "<br><br><br>";


//------------------------------------------------------------------------------------------------------------------------


echo "Questão 12";
echo "<br><br>";

echo "Vamos conhecer a tabuada do 8:\n";
for ($i = 1; $i <= 10; $i++) {
    echo "8 x $i = " . (8 * $i) . "\n";
}
echo "<br><br><br>";


//------------------------------------------------------------------------------------------------------------------------


echo "Questão 13";
echo "<br><br>";

do {
    $valor_tabuada = (int)readline("Digite um valor entre 1 e 10: ");
} while ($valor_tabuada < 1 || $valor_tabuada > 10);

echo "Tabuada do $valor_tabuada: \n";
for ($i = 1; $i <= 10; $i++) {
    echo "$valor_tabuada x $i = " . ($valor_tabuada * $i) . "\n";
}
?>
