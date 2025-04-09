<?php

echo "Questão 1";
echo "<br><br>";

  $valor_Um = 8 ;
  $valor_Dois = 10;

  $soma = $valor_Um + $valor_Dois;
  $subtracao = $valor_Um - $valor_Dois;
  $divisao = $valor_Um / $valor_Dois;
  $multiplicao = $valor_Um * $valor_Dois;
 

echo "<p> A soma dos valores é: ", $soma, "</p>";
echo "<p> A subtração dos valores é: ", $subtracao, "</p>";
echo "<p> A divisão dos valores é: ", $divisao, "</p>";
echo "<p> A multiplicação dos valores é: ", $multiplicao, "</p>";
echo "<br><br><br>";


//------------------------------------------------------------------------------------------------------------------------


echo "Questão 2";
echo "<br><br>";

    $distancia_Total = 100;
    $combustivel = 5;

    $media = $distancia_Total / $combustivel;

echo "<p> O consumo médio desse automóvel em km/l é: ", $media, "</p>";
echo "<br><br><br>";


//------------------------------------------------------------------------------------------------------------------------


echo "Questão 3 e 4";
echo "<br><br>";

    $nome = "hamilton";
    $salario_fixo = 5;
    $total_vendas = 10;

    $salario_final = $salario_fixo + $total_vendas + ($total_vendas * 0.15);

 echo "<p> Seu nome é: ", $nome, "</p>" ;
 echo "<p> Seu salário fixo é R$: ", $salario_fixo, "</p>";
 echo "<p> Seu salário ao final do mês é R$: ", $salario_final, "</p>";
 echo "<br><br><br>";


//------------------------------------------------------------------------------------------------------------------------


echo "Questão 5";
echo "<br><br>";

    $base = 100;
    $altura= 5;

    $area = $base * $altura;

echo "<p> A área do retângulo é: ", $media, "</p>";
echo "<br><br><br>";


//------------------------------------------------------------------------------------------------------------------------


echo "Questão 6";
echo "<br><br>";

    $valor_A = 100;
    $valor_B = 5;

    $valor_Auxiliar = $valor_B;
    $valor_B = $valor_A;
    $valor_A = $valor_Auxiliar;

echo "<p> Variável 1: ", $valor_A, "</p>";
echo "<p> Variável 2: ", $valor_B, "</p>";
echo "<br><br><br>";


//------------------------------------------------------------------------------------------------------------------------


echo "Questão 7 e 8";
echo "<br><br>";

  
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

     $Km_L = $_POST['km/l'];
     $Distancia_Percorrida = $_POST['distancia'];
     $Preco_Combustivel = $_POST['preco'];

     $custo_total = $Distancia_Percorrida/ $Km_L * $Preco_Combustivel;

echo "<h2>O custo da sua viagem é R$: $custo_total </h2>";}
echo "<br><br><br>";


//------------------------------------------------------------------------------------------------------------------------


echo "Questão 12";
echo "<br><br>";

    $valor_A = 100;
    $antecessor = $valor_A - 1;
   
echo "<p> O antecessor do número informado é : ", $antecessor , "</p>";
}
echo "<br><br><br>";


//------------------------------------------------------------------------------------------------------------------------


echo "Questão 13 e 14";
echo "<br><br>";

 if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $anos = $_POST['anos'];
        $meses = $_POST['meses'];
        $dias = $_POST['dias'];

        $dias_totais = ($anos * 365) + ($meses * 30) + $dias;

 echo "<h2>A idade total em dias é: $dias_totais dias</h2>";
    }
echo "<br><br><br>";


//------------------------------------------------------------------------------------------------------------------------


echo "Questão 15";
echo "<br><br>";

    $total_votos = 150;
    $votos_brancos= 5;
    $votos_nulos = 20;
    $votos_validos = 15;

    $Percentual_votos_brancos = $votos_brancos * 100/ $total_votos; 
    $Percentual_votos_nulos = $votos_nulos * 100 / $total_votos;
    $Percentual_votos_validos = $votos_validos * 100 / $total_votos;

    echo "<p> O total de eleitores é: ", $total_votos , "</p>",
         "<p> Os votos brancos correspondem a: ", $Percentual_votos_brancos , "%", "</p>", 
         "<p> Os votos nulos correspondem a: ", $Percentual_votos_nulos , "%" , "</p>",
         "<p> Os votos válidos correspondem a: ", $Percentual_votos_validos , "%" , "</p>";

echo "<br><br><br>";


//------------------------------------------------------------------------------------------------------------------------


echo "Questão 16 e 17";
echo "<br><br>";

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $Salario = $_POST['salario'];
            $Porcentagem = $_POST['porcentagem'];

            $Salario_Atual = $Salario + (($Salario * $Porcentagem) / 100);
 echo "<h2> Seu salário após o reajuste é R$: $Salario_Atual </h2>";
 }
echo "<br><br><br>";


//------------------------------------------------------------------------------------------------------------------------


echo "Questão 18";
echo "<br><br>";

    $valor_carro = 100;
    $porcentagem_distribuidor= $valor_carro * 0.28;
    $imposto = $valor_carro * 0.45;
   
    $valor_final_carro = $valor_carro - ($porcentagem_distribuidor + $imposto );

  
echo "<p> O valor do carro ao consumidor é: ", $valor_final_carro, "</p>";
echo "<br><br><br>";


//------------------------------------------------------------------------------------------------------------------------


echo "Questão 19";
echo "<br><br>";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $Numero_carro= $_POST['num_carro'];
        $Salario_fixo = $_POST['salario'];

        $Comissao_vendas = ($Numero_carro * 0.15);
        $Salario_final = $Salario_fixo + $Comissao_vendas + ($Comissao_vendas * 0.05);

        echo "<h2>O salário final é: $Salario_final  reais </h2>";
    }
echo "<br><br><br>";


//------------------------------------------------------------------------------------------------------------------------


echo "Questão 20";
echo "<br><br>";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nome = $_POST['nome'];
        $altura = $_POST['altura'];
        $sexo = $_POST['sexo'];

        if ($sexo == 'M') {
            $peso_ideal = (72.7 * $altura) - 58;
        } elseif ($sexo == 'F') {
            $peso_ideal = (62.1 * $altura) - 44.7;
        }

        echo "<h2>O peso ideal de $nome é: " . number_format($peso_ideal, 2, ',', '.') . " kg</h2>";
    }
?>
