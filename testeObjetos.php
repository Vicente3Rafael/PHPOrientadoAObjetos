<?php
    class Funcionario
    {
        var $Codigo;
        var $Nome;
        var $Salario = 586;
        var $Departamento = 'Contabilidade';
        function setSalario()
        {

        }

        function getSalario()
        {

        }

        function setNome()
        {

        }

        function getNome()
        {

        }

        function meuMetodo(){
            echo 'Meu método! <br>';
        }
    }

    class Estagiario extends Funcionario{
        var $Salario;
        var $Bolsa;
    }

    function minhaFuncao(){
        echo 'Minha função! <br>';
    }

    $maria = new Estagiario;

    $jose = new Funcionario();
    $jose->Codigo =  44;
    $jose->Nome = 'José da Silva';
    $jose->Salario += 100;
    $jose->Departamento = 'Financeiro'; 

    print_r(get_class_methods('Funcionario')); //retorna um vetor com todos os métodos da classe
    echo '<br>';
    print_r(get_class_vars('Funcionario')); //retorna um vetor com todas as variáveis que não são privadas da classe
    echo '<br>';
    print_r(get_object_vars($jose)); //retorna um vetor com as propriedades do objeto
    echo '<br>';
    echo get_class($jose); //retorna o nome da classe que o objeto pertence
    echo '<br>';
    echo get_parent_class($maria); //retorna o nome da classe ancestral(classe-pai) 
    echo '<br>';
    echo get_parent_class('estagiario'); //retorna o nome da classe ancestral passada como parametro
    echo '<br>';
    if(is_subclass_of($maria, 'Funcionario')){  //Indica se um determinado objeto ou classe é derivado de uma determinada classe.
        echo "Classe do objeto Jose é derivada de Funcionario";
    }

    echo '<br>';

    if(is_subclass_of('Estagiario', 'Funcionario')){//Indica se um determinado objeto ou classe é derivado de uma determinada classe.
        echo "Classe Estágiario é derivada de Funcionario";
    }

    echo '<br>';

    if(method_exists($jose, 'setNome')){ //verifica se um determinado objeto possui o método descrito.
        echo 'Objeto Jose possui método setNome() <br>';
    }
    if(method_exists($jose, 'setSalario')){
        echo 'Objeto Jose possui método setSálario() <br>';
    }

    call_user_func('minhaFuncao'); //chamada de função
    call_user_func(array('Funcionario', 'meuMetodo')); //chamada de método estático

    $obj = new Funcionario();
    call_user_func(array($obj, 'meuMetodo'));
?>