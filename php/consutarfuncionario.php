<?php
 namespace Projeto\ProjetoEstacionamento\PHP;
 use Projeto\ProjetoEstacionamento\PHP\Funcionario;
 use Projeto\ProjetoEstacionamento\PHP\consutarfuncionario;
// require_once('../html/index.html');
 //require_once('../html/funcionario.html');



?>

<html>
    <head>

    </head>
    <body>
        <button>Consultar</button>
        <?php
            session_start();
            echo $_SESSION['codigo'];
            echo $_SECTION['codigo'];  
            echo $_SECTION['nome'];
            echo $_SECTION['dtNascimento'];
            echo $_SECTION['telefone'];
            echo $_SECTION['endereco'];
            echo $_SECTION['salario'] ;
            echo $_SECTION['cargo'] ;

        ?>
        </button>
    </body>
</html>