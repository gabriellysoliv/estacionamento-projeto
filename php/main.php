<?php
 namespace Projeto\projetoestacionamento\php;
 require_once('Mesalista.php');
 require_once('controllMensalista.php');
 require_once('Cadastro.php');
 require_once('entrada.php');
 require_once('controllEntrada.php');
 require_once('Funcionario.php');
 require_once('Gerente.php');
 require_once('ControllGerente')

 use Projeto\projetoestacionamento\php\Mensalista;
 use Projeto\projetoestacionamento\php\controllMensalista;
 use Projeto\projetoestacionamento\php\Cadastro;
 use Projeto\ProjetoEstacionamento\PHP\entrada;
 use Projeto\ProjetoEstacionamento\PHP\ControllEntrada;
 use Projeto\ProjetoEstacionamento\PHP\Funcionario;
 use Projeto\projetoestacionamento\php\Gerente;
 use Projeto\projetoestacionamento\php\ControllGerente;

 $mensalista1 = new Mensalista ("grazzy",1234567,"ffffff",1,2,300,77);
 echo $mensalista1->imprimir();

 $entrada = new entrada 
 echo $entrada->imprimir();

 $funcionario = new Fucionario(1,"fff","ffff","ffff","ffffff","f","fff")
 echo $funcionario->imprimir();

 $gerente = new Gerente(1,"fff","ffff")
 echo $gerente->imprimir();

 $calculo = new Calculo(000)
 return "o valor ser pago é"
echo $calculo->imprimir();

 ?>