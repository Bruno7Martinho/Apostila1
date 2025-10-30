<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados dos Exercícios de PHP</title>
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            line-height: 1.6;
            background-color: #f8f9fa;
            color: #212529;
            padding: 20px;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
            overflow: hidden;
        }

        h1 {
            background-color: #007bff;
            color: white;
            padding: 20px;
            margin: 0;
            text-align: center;
        }

        .exercicio {
            padding: 20px;
            border-bottom: 1px solid #dee2e6;
        }

        .exercicio:last-child {
            border-bottom: none;
        }

        .exercicio h3 {
            margin-top: 0;
            color: #0056b3;
            border-bottom: 2px solid #007bff;
            padding-bottom: 5px;
        }

        .resultado {
            background-color: #e9f5ff;
            border: 1px solid #b3d7ff;
            padding: 10px 15px;
            border-radius: 4px;
            margin-top: 10px;
        }

        .resultado strong {
            color: #004a99;
        }

        code {
            background-color: #e8e8e8;
            padding: 2px 5px;
            border-radius: 3px;
        }

        ul,
        ol {
            padding-left: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Resultados dos Exercícios de PHP</h1>

        <?php
        // =============================================
        // SEQUENCIAIS (VARIÁVEIS E OPERADORES)
        // =============================================

        // 1. Soma
        echo "<div class='exercicio'>";
        echo "<h3>1. Soma</h3>";
        $num1 = 15;
        $num2 = 25;
        $soma = $num1 + $num2;
        echo "<p>Valores: <code>$num1</code> e <code>$num2</code></p>";
        echo "<div class='resultado'>A soma é: <strong>$soma</strong></div>";
        echo "</div>";


        // 2. Média Aritmética
        echo "<div class='exercicio'>";
        echo "<h3>2. Média Aritmética</h3>";
        $nota1 = 6.5;
        $nota2 = 8.5;
        $nota3 = 7.0;
        $media = ($nota1 + $nota2 + $nota3) / 3;
        echo "<p>Valores das Notas: <code>$nota1</code>, <code>$nota2</code>, <code>$nota3</code></p>";
        echo "<div class='resultado'>A média das notas é: <strong>" . number_format($media, 2, ',', '.') . "</strong></div>";


        // 3. Metros para Centímetros
        echo "<div class='exercicio'>";
        echo "<h3>3. Metros para Centímetros</h3>";
        $valorMetros = 2;
        $valorCentimetros = $valorMetros * 100;
        echo "<p>Valor em metros: <code>$valorMetros</code></p>";
        echo "<div class='resultado'>O valor em centímetros é: <strong>$valorCentimetros centímetros</strong></div>";
        echo "</div>";
        // 4. Área do Retângulo
        echo "<div class='exercicio'>";
        echo "<h3>4.Área do Retângulo</h3>";
        $base = 5;
        $altura = 10;
        $areaRetangulo = $base * $altura;
        echo "<p>Valor da Base: <code>$base</code></p>";
        echo "<p>Valor da Altura: <code>$altura</code> </p>";
        echo "<div class='resultado'>O valor em centímetros é: <strong>$valorCentimetros centímetros</strong></div>";
        echo "</div>";

        // 5. Positivo ou Negativo
        echo "<div class='exercicio'>";
        echo "<h3>5. Positivo ou Negativo</h3>";
        $valor = 5;
        if ($valor > 0) {
            $resultado = "Positivo";
        } else if ($valor < 0) {
            $resultado = "Negativo";
        } else {
            $resultado = "Zero";
        }
        echo "<p>Valor para verificação: <code>$valor</code></p>";
        echo "<div class='resultado'> Resultado:<strong>$resultado</strong></div>";
        echo "</div>";

        // 6. Maioridade
        echo "<div class='exercicio'>";
        echo "<h3>6. Maioridade</h3>";
        $idade = 19;
        if ($idade > 18) {
            $resultado = "De Maior";
        } else {
            $resultado = "De menor";
        }
        echo "<p>Idade para verificação: <code>$idade</code></p>";
        echo "<div class='resultado'> Resultado:<strong>$resultado</strong></div>";
        echo "</div>";

        // 7.Aprovação
        echo "<div class='exercicio'>";
        echo "<h3>7. Aprovação</h3>";
        $media = 6.9;
        if ($media >= 6) {
            $resultado = "Aprovado";
        } else {
            $resultado = "Reprovado";
        }
        echo "<p>Média para verificação: <code>$media</code></p>";
        echo "<div class='resultado'> Resultado:<strong>$resultado</strong></div>";
        echo "</div>";

        // 8. Maior Número
        echo "<div class='exercicio'>";
        echo "<h3>8. Maior Número</h3>";
        $numero1 = 6;
        $numero2 = 8;
        if ($numero1 > $numero2) {
            $resultado = "$numero1 é maior";
        } else if ($numero1 < $numero2) {
            $resultado = "$numero2 é maior";
        } else {
            $resultado = "Os números são iguais";
        }
        echo "<p>Número 1 para verificação: <code>$numero1</code></p>";
        echo "<p>Número 2 para verificação: <code>$numero2</code></p>";
        echo "<div class='resultado'>Resultado: <strong>$resultado</strong></div>";
        echo "</div>";


        // 9. Dia da Semana
        echo "<div class='exercicio'>";
        echo "<h3>9. Dia da Semana</h3>";
        $dia = 6;
        switch ($dia) {
            case 1:
                $resultado = "Domingo";
                break;
            case 2:
                $resultado =  "Segunda-feira";
                break;
            case 3:
                $resultado = "Terça-feira";
                break;
            case 4:
                $resultado = "Quarta-feira";
                break;
            case 5:
                $resultado = "Quinta-feira";
                break;
            case 6:
                $resultado = "Sexta-feira";
                break;
            case 7:
                $resultado = "Sábado";
                break;
        }
        echo "<p>Dia para verificação: <code>$dia</code></p>";
        echo "<div class='resultado'>Resultado: <strong>$resultado</strong></div>";
        echo "</div>";


        // 10. Vogal ou Consoante
        echo "<div class='exercicio'>";
        echo "<h3>10. Vogal ou Consoante</h3>";
        $letra = "e";
        echo "<p>Letra informada: <code>$letra</code></p>";

        $letraMinuscula = strtolower($letra);
        $tipoLetra = "";

        switch ($letraMinuscula) {
            case 'a':
            case 'e':
            case 'i':
            case 'o':
            case 'u':
                $tipoLetra = "Vogal";
                break;
            case 'b':
            case 'c':
            case 'd':
            case 'f':
            case 'g':
            case 'h':
            case 'j':
            case 'k':
            case 'l':
            case 'm':
            case 'n':
            case 'p':
            case 'q':
            case 'r':
            case 's':
            case 't':
            case 'v':
            case 'w':
            case 'x':
            case 'y':
            case 'z':
                $tipoLetra = "Consoante";
                break;
        }

        echo "<div class='resultado'>A letra '$letra' é uma: <strong>$tipoLetra</strong></div>";
        echo "</div>";


        // 11. Status do Pedido
        echo "<div class='exercicio'>";
        echo "<h3>11. Status do Pedido</h3>";
        $statusPedido = "enviado";
        echo "<p>Status do pedido: <code>$statusPedido</code></p>";

        $mensagem = "";

        switch ($statusPedido) {
            case "aguardando":
                $mensagem = "Seu pedido está aguardando processamento. Em breve começaremos o preparo!";
                break;
            case "em_preparacao":
                $mensagem = "Seu pedido está sendo preparado com todo cuidado!";
                break;
            case "enviado":
                $mensagem = "Seu pedido foi enviado! Acompanhe pelo código de rastreamento.";
                break;
            case "concluido":
                $mensagem = "Pedido concluído com sucesso! Obrigado pela preferência!";
                break;
            default:
                $mensagem = "Status desconhecido. Entre em contato com nosso suporte.";
        }

        echo "<div class='resultado'><strong>$mensagem</strong></div>";
        echo "</div>";


        // 12. Lista
        echo "<div class='exercicio'>";
        echo "<h3>12. Lista de 1 a 10</h3>";
        echo "<div class='resultado'>";
        echo "<strong>Números de 1 a 10:</strong><br>";
        for ($i = 1; $i <= 10; $i++) {
            echo "<strong>$i</strong> ";
        }
        echo "</div>";
        echo "</div>";

        // 13. Pares de 1 a 20
        echo "<div class='exercicio'>";
        echo "<h3>13. Pares de 1 a 20</h3>";
        echo "<div class='resultado'>";
        echo "<strong>Números pares de 1 a 20:</strong><br>";
        for ($i = 2; $i <= 20; $i += 2) {
            echo "<strong>$i</strong> ";
        }
        echo "</div>";
        echo "</div>";


        // 14. Tabuada
        echo "<div class='exercicio'>";
        echo "<h3>14. Tabuada</h3>";
        $numero = 8;
        echo "<p>Tabuada do: <code>$numero</code></p>";
        echo "<div class='resultado'>";
        echo "<strong>Tabuada do $numero:</strong><br><br>";
        for ($i = 1; $i <= 10; $i++) {
            $resultado = $numero * $i;
            echo "$numero × $i = <strong>$resultado</strong><br>";
        }
        echo "</div>";
        echo "</div>";

        // 15. Contagem Regressiva
        echo "<div class='exercicio'>";
        echo "<h3>15. Contagem Regressiva</h3>";
        echo "<div class='resultado'>";
        echo "<strong>Contagem regressiva de 10 até 1:</strong><br><br>";
        $contador = 10;
        while ($contador >= 1) {
            echo "<strong>$contador</strong> ";
            $contador--;
        }
        echo "<br> <strong>Fogo!</strong>";
        echo "</div>";
        echo "</div>";


        // 16. Soma até 100
        echo "<div class='exercicio'>";
        echo "<h3>16. Soma até 100</h3>";
        echo "<div class='resultado'>";
        $soma = 0;
        $numero = 1;
        while ($numero <= 100) {
            $soma += $numero;
            $numero++;
        }
        echo "<strong>Soma de todos os números de 1 até 100:</strong><br>";
        echo "1 + 2 + 3 + ... + 100 = <strong>$soma</strong>";
        echo "</div>";
        echo "</div>";

        // 17. Sorteio Simples
        echo "<div class='exercicio'>";
        echo "<h3>17. Sorteio Simples</h3>";
        echo "<div class='resultado'>";
        echo "<strong>Sorteando números até sair o 5:</strong><br><br>";
        $tentativas = 0;
        $numeroSorteado = 0;

        do {
            $numeroSorteado = rand(1, 10);
            $tentativas++;
            echo "Tentativa $tentativas: <strong>$numeroSorteado</strong><br>";
        } while ($numeroSorteado != 5);

        echo "<br>🎯 <strong>Número 5 sorteado após $tentativas tentativas!</strong>";
        echo "</div>";
        echo "</div>";

        // 18. Lista de Frutas
        echo "<div class='exercicio'>";
        echo "<h3>18. Lista de Frutas</h3>";
        $frutas = ["Limão", "Maçã", "Banana", "Laranja", "Uva", "Morango"];
        echo "<p>Array criado: <code>" . implode(", ", $frutas) . "</code></p>";
        echo "<div class='resultado'>";
        echo "<strong>Lista de Frutas:</strong><br>";
        echo "<ul>";
        foreach ($frutas as $fruta) {
            echo "<li><strong>$fruta</strong></li>";
        }
        echo "</ul>";
        echo "Total de frutas: <strong>" . count($frutas) . "</strong>";
        echo "</div>";
        echo "</div>";


        // 19. Soma de Array
        echo "<div class='exercicio'>";
        echo "<h3>19. Soma de Array</h3>";
        $numeros = [15, 23, 8, 42, 12];
        echo "<p>Array criado: <code>" . implode(", ", $numeros) . "</code></p>";
        echo "<div class='resultado'>";
        echo "<strong>Soma dos números do array:</strong><br><br>";

        $soma = 0;
        foreach ($numeros as $indice => $numero) {
            $soma += $numero;
            echo "Posição $indice: $numero<br>";
        }

        echo "<br>Soma total: <strong>$soma</strong><br>";
        echo "Quantidade de elementos: <strong>" . count($numeros) . "</strong><br>";
        echo "Média: <strong>" . number_format($soma / count($numeros), 2) . "</strong>";
        echo "</div>";
        echo "</div>";


        // 20. Array Associativo
        echo "<div class='exercicio'>";
        echo "<h3>20. Array Associativo</h3>";
        $aluno = [
            "nome" => "Bruno Martinho",
            "idade" => 18,
            "curso" => "Engenharia de Software",
            "matricula" => "2023001234"
        ];
        echo "<p>Array associativo criado para representar um aluno</p>";
        echo "<div class='resultado'>";
        echo "<strong> Dados do Aluno:</strong><br><br>";
        echo "<strong>Nome:</strong> " . $aluno["nome"] . "<br>";
        echo "<strong>Idade:</strong> " . $aluno["idade"] . " anos<br>";
        echo "<strong>Curso:</strong> " . $aluno["curso"] . "<br>";
        echo "<strong>Matrícula:</strong> " . $aluno["matricula"] . "<br><br>";

        echo "<em>Array completo:</em><br>";
        echo "<code>";
        print_r($aluno);
        echo "</code>";
        echo "</div>";
        echo "</div>";
        ?>
    </div>
</body>

</html>