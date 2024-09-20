<?php
    namespace Projeto\estacionamento\PHP;
    require_once('Calculo.php');
    require_once('controllentrada.php');

    Use Projeto\estacionamento\PHP\Calculo;
    Use Projeto\estacionamento\PHP\controllEntrada;
    use Projeto\estacionamento\PHP\controllCalculo;


    class Calculo{
        private string $codigo;
       private string $hrEntrada;
       private string $hrSaida;
       private string $veiculo;


        public function __construct(
                            string $codigo,
                            string $hrEntrada,
                            string $hrSaida,
                            string $veiculo)

    {
        $this->codigo = $codigo;
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
        <label>Hora de Entrada:</label>
        <input type="number" id="hrEntrada" name="hrEntrada"> <br><br>

        <label>Hora de Saida:</label>
        <input type="number" id="hrSaida" name="hrSaida"> <br><br>

        <label>Veiculo:</label>
        <input type="text" id="veiculo" name="veiculo"> <br><br>

        <button>
            Calculo
        </button>

        <?php
          
        
            try{

                $codigo = $_POST['codigo'];
                $hrEntrada = $_POST['hrEntrada'];
                $hrSaida = $_POST['hrSaida'];
                $veiculo = $_POST['veiculo'];

                
                $calculo = new Calculo($codigo,
                                                    $hrEntrada,
                                                    $hrSaida,
                                                    $veiculo );
                                           
            }catch(Exception $erro){
                echo $erro;

            }
        ?>
    </form>

    <?php
      echo $calculo->imprimir();
      ?>
</body>
</html>

 
 
?>