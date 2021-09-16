<?php

$cargos =[
    "empregado",
    "Desenvolvedor",
    "Analista de Sistemas",
];
//Imprimindo uym vetor na tela 
$cargos[]="DevOps";
$cargos[]="DBA";
$cargos[]="QA";
$cargos[]="Gerente de projetos ";
$cargos[]="Gerente de produtos";
$cargos[]="desenvolvedor front-end";
$cargos[]="telemarketing";
$cargos[]="ADM";

// //adicionando um elemento no vetor
// print_r($cargos);

//excluido a posição do vetor
//uset($cargos[0])

// die;

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />
    <title>Fulbank</title>
</head>

<body>
    <form method="POST" action="salario.php">
        <h1>RTI Solution</h1>

        <label for="nome">Nome</label>
        <input id="nome" name= "nome"required placeholder="Nome Completo">


        <label for="salarioAtual">Salario Atual:</label>
        <input id="salarioAtual" name="salarioAtual" required placeholder="R$">

        <label for="genero">Genero</label>
        <div class="input-radio">
            <INPUT TYPE="radio" id="Masculino"  NAME="genero" value= "M">
                <label for="masculino">Masculino</label>
        </div>

        <div class="input-radio">
            
            <INPUT TYPE="radio" id="feminino"  NAME="genero" value="f">
                <label for="feminino">feminino</label>
        </div>
        <div class="input-radio">
            <INPUT TYPE="radio" id="outro"  NAME="genero">
             <label for="outro">Outro</label>
        </div>

        </div>

        <label for="cargo">Cargo</label>

        <select name="cargo">
            <option value="emprego" selected>SELECIONE</option>
            <?php
         $tam = count($cargos)
         $contador = 0;
         while(&contador < $tam){
            echo"<option> . $cargos[$contador]</optio>";
         }
            

         }

            ?>
        </select>

        <button>Fazer Cadastro</button>

</body>

</html>