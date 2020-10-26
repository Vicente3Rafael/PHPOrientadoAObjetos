<?php
    //declaração de funções
    function Fatorial($numero){
        if ($numero == 1)
        return $numero;
        else
        return $numero * Fatorial($numero - 1);
    }

    echo Fatorial(5) . "<br>"; 
    echo Fatorial(7) . "<br>";

    echo "========================================= <br>";

    //percorrendo cada uma das posições do array
    $frutas['cor'] = 'vermelha';
    $frutas['sabor'] = 'doce'; 
    $frutas['formato'] = 'redonda';
    $frutas['nome'] = 'maça';
    foreach ($frutas as $chave => $fruta)
    {
        echo "$chave => $fruta <br>";
    }

    echo "========================================= <br>";

    //alteração de valores de um array
    $minha_multa['carro'] = 'Pálio';
    $minha_multa['valor'] = 178.00;

    $minha_multa['carro'] .= ' ED 1.0';
    $minha_multa['valor'] += 20;

    print_r($minha_multa);

    echo "<br>";
    $comidas[] = 'Lazanha';
    $comidas[] = 'Pizza';
    $comidas[] = 'Macarrão';

    $comidas[1] = 'Pizza Calabresa';
    
    print_r($comidas);

    echo '<br>';

    echo "========================================= <br>";

    //matrizes

    $carros = array('Palio' => array('cor' => 'azul',
                                'potência' => '1.0',
                                'opcionais' => 'Ar Cond.'),
                    'Corsa' => array('cor' => 'cinza',
                                    'potência' => '1.3',
                                    'opcionais' => 'MP3'),
                    'Gol' => array('cor' => 'branco',
                                    'potência' => '1.0',
                                    'opcionais' => 'Metalica')                
                    );

                    echo $carros['Palio']['opcionais'];

                    echo '<br>';

    //interação entre matrizes
    //percorrendo a matriz

    foreach ($carros as $modelo => $caracteristicas)
    {
        echo "Modelo $modelo <br>";
        foreach ($caracteristicas as $caracteristica => $valor)
        {
            echo "caracterísca $caracteristica => $valor <br>";
        }
    }

    echo "========================================= <br>";
    //funções entre matrizes
    echo 'array_push <br>'; //adiciona um valor ao array
    $a = array('verde', 'azul', 'vermelho');
    array_push($a, 'amarelo');
    var_dump($a);

    echo '<br> array_pop <br>'; //remove o ultimo valor do array
    array_pop($a);
    var_dump($a);

    echo '<br> array_shift <br>'; //remove o primeiro valor do arrays
    array_shift($a);
    var_dump($a);

    echo '<br> array_unshift <br>'; //adiciona um elemento ao array
    array_unshift($a, 'amarelo');
    var_dump($a);

    echo '<br> array_pad <br>'; //preenche o array com um dado valor, determinada quantidade de posições
    $a = array_pad($a, 6, 'branco');
    var_dump($a);

    echo '<br> array_reverse <br>';//inverte o array
    $b = array_reverse($a, true);//valor true inverte completamente o array, false inverte apenas os valores
    var_dump($b);

    echo '<br> array_merge <br>';//mescla dois array
    $a = array('roxo', 'rosa');
    $b = array('marrom', 'caramelo');
    $c = array_merge($a, $b);
    var_dump($c);

    echo '<br> array_keys <br>';
    $exemplo = array('cor' => 'vermelho', 'volume' => '5', 'animal' => 'cachorro');
    $indices = array_keys($exemplo);
    var_dump($indices);
    
    echo '<br> array_values <br>';
    $valores = array_values($exemplo);
    var_dump($valores);

    echo '<br array_slice <br>';
    $a[0] = 'green';
    $a[1] = 'yellow';
    $a[2] = 'red';
    $a[3] = 'blue';
    $a[4] = 'gray';
    $a[5] = 'white';
    $b = array_slice($a, 2, 3);
    print_r($b);
    echo '<br>';
    print_r($a);

    echo '<br> count <br>'; //conta quantos valores há no array
    echo 'O array $a contém '. count($a) . ' posições!';

    echo '<br> array_in <br>'; // verifica se tem um determinado valor no array
    if(in_array('green',$a)){
        echo 'green color found';
    }

    echo '<br> sort <br>'; //ordena um array pelo seu valor nao mantendo os indices
    sort($a);
    print_r($a);

    echo '<br> rsort <br>'; //ordena um array em ordem reversa pelo seu nao mantendo os indices
    rsort($a);
    print_r($a);

    echo '<br> asort <br>'; //ordena um array pelo seu valor mantendo os indices
    asort($a);
    print_r($a);

    echo '<br> arsort <br>'; //ordena um array em ordem reversa pelo seu valor mantendo os indices
    arsort($a);
    print_r($a);

    echo '<br> ksort <br>'; //ordena um array pelos seus indices. Para ordem reversa usar krsort
    $carro['potência'] = '1.0';
    $carro['cor'] = 'branco';
    $carro['modelo'] = 'Celta';
    $carro['opcionais'] = 'ar quente';
    ksort($carro);
    print_r($carro);

    echo '<br> explode <br>'; //converte uma string em array
    $string = "31/12/2004";
    print_r(explode('/',$string));

    echo '<br> implode <br>'; //converte um array em uma string
    $array = array('A vida', 'é', 'Foda', 'mas', 'eu sou bem mais');
    $resultado = implode('+', $array);
    print_r($resultado);
?>