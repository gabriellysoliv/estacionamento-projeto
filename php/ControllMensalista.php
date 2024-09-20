<?php

 namespace Projeto\projetoestacionamento\php;
 require_once('Mensalista.php');
 require_once('Controllmensalista.php');
 use Projeto\projetoestacionamento\php\Mensalista;
 use Projeto\projetoestacionamento\php\ControllMensalista;
 

 class ControllMensalista{
    private string $nome;
    private string $telefone;
    private string $endereco;
    private string $carro;
    private string $placa;
    private string $cor;
    private float $valormensal;
    private string $datadepagamento;

    public function __construct(string $nome,
                                string $telefone,
                                string $endereco,
                                string $carro,
                                string $placa,
                                string $cor,
                                float $valormensal,
                                string $datadepagamento){

        $this->nome  =$nome;
        $this->telefone  =$telefone;
        $this->endereco  =$endereco;
        $this->carro   =$carro;
        $this->placa   =$placa;
        $this->cor   =$cor;
        $this->valormensal  =$valormensal;
        $this->datadepagemento  =$datadepagamento;
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
        <label>Nome:</label>
        <input type="text" id="nome" name="nome"> <br><br>

        <label>Telefone:</label>
        <input type="number" id="telefone" name="telefone"> <br><br>

        <label>Endereço:</label>
        <input type="text" id="endereco" name="endereco"> <br><br>

        <label>Carro:</label>
        <input type="text" id="carro" name="carro"> <br><br>

        <label>Placa:</label>
        <input type="text" id="placa" name="placa"> <br><br>

        <label>Cor:</label>
        <input type="text" id="cor" name="cor"> <br><br>

        <label>Valor Mensal:</label>
        <input type="number" id="valormensal" name="valormensal"> <br><br>

        <label>Data de Pagamento:</label>
        <input type="number" id="datadepagemento" name="datadepagamento"> <br><br>

        <button>
            cadastrar
        </button>

        <?php
            namespace Projeto\projetoestacionamento\php;
            use Projeto\projetoestacionamento\php\Mensalista;
            use Projeto\projetoestacionamento\php\ControllMensalista;
        
            try{
                session_start();
                $_SESSION ['nome'] = $_POST['nome'];
                $_SESSION ['telefone'] = $_POST['telefone'];
                $_SESSION ['endereco'] = $_POST['endereco'];
                $_SESSION ['carro'] = $_POST['carro'];
                $_SESSION ['placa'] = $_POST['placa'];
                $_SESSION ['cor'] = $_POST['cor'];
                $_SESSION ['valormensal'] = $_POST['valormensal'];
                $_SESSION ['datadepagamento'] = $_POST['datadepagamento'];

                $mensalista1 = new Mensalista($_SESSION['codigo'],
                $_SESSION['telefone'],
                $_SESSION['endereco'],
                $_SESSION['carro'],
                $_SESSION['placa'],
                $_SESSION['cor'],
                $_SESSION['valormensal'],
                $_SESSION['datadepagamento']);

                
                
            }catch(Exception $erro){
                echo $erro;

            }
        ?>
    </form>

    <?php
                    echo $mensalista1->imprimir();
                ?>
</body>
</html>