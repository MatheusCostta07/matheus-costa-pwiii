<?php
echo "Questão 1";
echo "<br><br>";
// Exiba os números ímpares de 1 a 100
echo "Números ímpares de 1 a 100:\n";
// indica o ponto de partida da contagem 
$numero = 1;
// condição do loop até o número 100 e dividindo por 2 para verificar se o número é ímpar
while ($numero <= 100) {
  if ($numero % 2 != 0) {
    echo $numero . " ";
  }
  $numero++;
}
//  Exibe o resultao
echo "\n";
echo "<br><br><br>";


//------------------------------------------------------------------------------------------------------------------------


echo "Questão 2";
echo "<br><br>";

//os números pares seguem a mesma lógica dos ímpares, só muda o resulatado da divisão e o resto
//Exiba os números pares de 1 a 100
echo "Números pares de 1 a 100:\n";
// indica o ponto de partida da contagem 
$numero = 1;
// condição do loop até o número 100 e dividindo por 2 para verificar se o número é par 
while ($numero <= 100) {
  if ($numero % 2 == 0) {
    echo $numero . " ";
  }
  $numero++;
}
// Exibe o resultado 
echo "\n";
echo "<br><br><br>";


//-------------------------------------------------------------------------------------------------------------------------


echo "Questão 3";
echo "<br><br>";

echo "Números pares e ímpares de 1 até 50:\n";
echo "<br>";
// Define o número limite para a contagem
$limite = 50;

//Exiba os números pares
echo "Números pares:\n";
$numero = 1;
while ($numero <= $limite) {
    if ($numero % 2 == 0) {
        echo $numero . " ";
    }
    $numero++;
}
echo "<br>";
echo "\n\n";
//Exiba os números ímpares
echo "Números ímpares:\n";
$numero = 1;
while ($numero <= $limite) {
    if ($numero % 2 != 0) {
        echo $numero . " ";
    }
    $numero++;
}
echo "\n";
echo "<br><br><br>";


//-------------------------------------------------------------------------------------------------------------------------


echo "Questão 4";
echo "<br><br>";




echo "Calculando a Média da Turma\n";

// Questiona ao usuário quantos alunos fazem parte da turma
echo "Digite o número de alunos na turma: ";
$numAlunos = trim(fgets(STDIN));

// Validação para garantir que o número de alunos é um inteiro positivo
if (!is_numeric($numAlunos) || $numAlunos <= 0) {
    echo "Número de alunos inválido. Por favor, digite um número inteiro positivo.\n";
    exit(1); // Encerra o script com código de erro
}

$totalNotas = 0;
$contador = 1;

echo "\nPor favor, digite as notas dos alunos:\n";

// Loop while para obter as notas de cada aluno
while ($contador <= $numAlunos) {
    echo "Digite a nota do aluno " . $contador . ": ";
    $nota = trim(fgets(STDIN));

    // Validação para garantir que a nota é um número válido
    if (!is_numeric($nota)) {
        echo "Nota inválida. Por favor, digite um valor numérico para a nota.\n";
        continue; // Volta para o início do loop para pedir a nota novamente
    }

    $totalNotas += $nota;
    $contador++;
}

// Calcula a média
if ($numAlunos > 0) {
    $media = $totalNotas / $numAlunos;
    echo "\nA média aritmética da turma é: " . number_format($media, 2) . "\n";
} else {
    echo "\nNão foram inseridas notas para calcular a média.\n";
}











?>

