<?php
namespace Projeto\ProjetoEstacionamento\PHP;
require_once('entrada.php');
 require_once('ControllEntrada.php');
use Projeto\ProjetoEstacionamento\PHP\ControllEntrada;
use Projeto\ProjetoEstacionamento\PHP\entrada;

class Controllentrada{
        private string $codigo;
       private string $dtEntrada;
       private string $dtSaida;
       private string $hrEntrada;
       private string $hrSaida;
       private string $veiculo;


public function __construct(
                            string $codigo,
                            string $dtEntrada,
                            string $dtSaida,
                            string $hrEntrada,
                            string $hrSaida,
                            string $veiculo)

    {
        $this->codigo = $codigo;
        $this->dtEntrada = $dtEntrada;
        $this->dtSaida = $dtSaida;
        $this->hrEntrada = $hrEntrada;
        $this->hrSaida = $hrSaida;
        $this->veiculo = $veiculo;
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

        <label>Data de Entrada:</label>
        <input type="number" id="dtEntrada" name="dtEntrada"> <br><br>

        <label>Data de Saida:</label>
        <input type="number" id="dtSaida" name="dtSaida"> <br><br>

        <label>Hora de Entrada:</label>
        <input type="number" id="hrEntrada" name="hrEntrada"> <br><br>

        <label>Hora de Saida:</label>
        <input type="number" id="hrSaida" name="hrSaida"> <br><br>

        <label>Veiculo:</label>
        <input type="text" id="veiculo" name="veiculo"> <br><br>

        <button>
            cadastrar
        </button>

        <?php
            namespace Projeto\projetoestacionamento\php;
            use Projeto\ProjetoEstacionamento\PHP\entrada;
            use Projeto\ProjetoEstacionamento\PHP\ControllEntrada;
          
        
            try{

                $codigo = $_POST['codigo'];
                $dtEntrada = $_POST['dtEntrada'];
                $dtSaida = $_POST['dtSaida'];
                $hrEntrada = $_POST['hrEntrada'];
                $hrSaida = $_POST['hrSaida'];
                $veiculo = $_POST['veiculo'];

                
                $entrada = new Entrada($codigo,
                                                    $dtEntrada,
                                                    $dtSaida,
                                                    $hrEntrada,
                                                    $hrSaida,
                                                    $veiculo );
                                           
            }catch(Exception $erro){
                echo $erro;

            }
        ?>
    </form>

    <?php
      echo $entrada->imprimir();
      ?>
</body>
</html>