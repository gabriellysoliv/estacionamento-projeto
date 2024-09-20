<?php
namespace Projeto\ProjetoEstacionamento\PHP;
require_once('Funcionario.php');
use Projeto\ProjetoEstacionamento\PHP\ControllFuncionaro;
use Projeto\ProjetoEstacionamento\PHP\Funcionario;

class ControllFuncionario {
    private string $nome;
    private string $dtNascimento;
    private string $telefone;
    private string $endereço;
    private float $salario;
    private string $cargo;

     public function __construct(
     string $codigo,
     string $nome,
     string $dtNascimento,
     string $telefone,
     string $endereço,
     float $salario,
     string $cargo
     )

     {
         $this->codigo = $codigo;
         $this->nome = $nome;
         $this->dtNascimento = $dtNascimento;
         $this->telefone = $telefone;
         $this->endereço = $endereço;
         $this->salario = $salario;
         $this->cargo = $cargo;
     }

     
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <label>Codigo:</label>
        <input type="number" id="codigo" name="codigo"> <br><br>

        <label>Nome:</label>
        <input type="text" id="nome" name="nome"> <br><br>

        <label>Data de Nascimento:</label>
        <input type="text" id="dtNascimento" name="dtNascimento"> <br><br>

        <label>telefone:</label>
        <input type="number" id="telefone" name="telefone"> <br><br>

        <label>Endereço:</label>
        <input type="text" id="endereco" name="endereco"> <br><br>

        <label>Salario:</label>
        <input type="number" id="salario" name="salario"> <br><br>

        <label>Cargo:</label>
        <input type="text" id="cargo" name="cargo"> <br><br>

        <button>
            cadastrar
            </button>
        

        <?php
            namespace Projeto\projetoestacionamento\php;
            use Projeto\projetoestacionamento\php\Funcionario;
            use Projeto\projetoestacionamento\php\ControllFuncionario;
        
            try{
               session_start();
               $_SESSION['codigo'] = $_POST ['codigo'];
               $_SESSION['nome'] = $_POST['nome'];
               $_SESSION['dtNascimento'] = $_POST['dtNascimento'];
               $_SESSION['telefone'] = $_POST['telefone'];
               $_SESSION['endereco'] = $_POST['endereco'];
               $_SESSION['salario'] = $_POST['salario'];
               $_SESSION['cargo'] = $_POST['cargo'];


                
                $funcionario = new funcionario($_SESSION['codigo'],
                                               $_SESSION['nome'],
                                               $_SESSION['dtNascimento'],
                                               $_SESSION['telefone'],
                                               $_SESSION['endereco'],
                                               $_SESSION['salario'],
                                               $_SESSION['cargo']);
            }catch(Exception $erro){
                echo $erro;

            }
        ?>
       
    </form>

    <?php  


      echo $funcionario->imprimir();
                ?>
</body>
</html>