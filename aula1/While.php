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

//Insira um valor
echo "Quantos alunos tem na sala ao todo? ";
$num_alunos = intval(trim(fgets(STDIN)));

$soma_notas = 0;
$contador = 0;
//Soma das notas de todas as pessoas da sala
while ($contador < $num_alunos) {
    $contador++;
    echo "Digite a nota do aluno $contador: ";
    $nota = floatval(trim(fgets(STDIN)));
    $soma_notas += $nota;
}
//Divisão feita pra calcalar a média
$media = $soma_notas / $num_alunos;

echo "A média aritmética da turma é: " . number_format($media, 2) . "\n";
echo "<br><br><br>";


//-------------------------------------------------------------------------------------------------------------------------


echo "Questão 5";
echo "<br><br>";

$contador = 0;
$maior_numero = null;
//Inseri um número inteiro 
while ($contador < 10) {
    $contador++;
    echo "Digite o número $contador: ";
    $numero = floatval(trim(fgets(STDIN)));
//Calculo pra exibir o miaor número
    if ($maior_numero === null || $numero > $maior_numero) {
        $maior_numero = $numero;
    }
}
//Exibição dp resultadp
echo "O maior número digitado foi: " . $maior_numero . "\n";
echo "<br><br><br>";


//-------------------------------------------------------------------------------------------------------------------------


echo "Questão 6";
echo "<br><br>";

$contador = 0;
$maior1 = null;
$maior2 = null;
//Insira um número 
while ($contador < 10) {
    $contador++;
    echo "Digite o número $contador: ";
    $numero = floatval(trim(fgets(STDIN)));
// calculo para encontrar o maior número
    if ($maior1 === null || $numero > $maior1) {
        $maior2 = $maior1;
        $maior1 = $numero;
    } elseif ($maior2 === null || $numero > $maior2) {
        $maior2 = $numero;
    }
}
//Resultado encontrado e os maiores números são exibidos
if ($maior1 !== null && $maior2 !== null) {
    echo "Os dois maiores números digitados foram: $maior1 e $maior2\n";
} else {
    echo "Nenhum número válido foi digitado.\n";
}
echo "<br><br><br>";


//-------------------------------------------------------------------------------------------------------------------------


echo "Questão 7";
echo "<br><br>";

echo "Escreva o tamanho do lado de um quadrado entre 1 e 20: ";
$tamanho = intval(trim(fgets(STDIN)));

if ($tamanho < 1 || $tamanho > 20) {
    echo "Digite um número entre 1 e 20.\n";
} else {

    $i = 0;

    while ($i < $tamanho) {
        $j = 0;

        while ($j < $tamanho) {
            echo "* ";
            $j++;
        }

        echo "\n";
        $i++;
    }
}
echo "<br><br><br>";


//-------------------------------------------------------------------------------------------------------------------------


echo "Questão 8";
echo "<br><br>";

echo "Escreva o tamanho do lado de um quadrado entre 1 e 20: ";
$tamanho = intval(trim(fgets(STDIN)));

if ($tamanho < 1 || $tamanho > 20) {
    echo "Digite um número entre 1 e 20.\n";
} else {
    $i = 0;

    while ($i < $tamanho) {
        $j = 0;

        if ($i == 0 || $i == $tamanho - 1) {
            while ($j < $tamanho) {
                echo "*";
                $j++;
            }
        } else {
            echo "*";
            while ($j < $tamanho - 2) {
                echo " ";
                $j++;
            }
            echo "*";
        }

        echo "\n";
        $i++;
    }
}
?>

