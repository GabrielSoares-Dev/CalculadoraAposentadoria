<?php

//variaveis
$idade = $_POST['idade'];
$carteira = $_POST['carteira'];
$mensagem = "";

//validação para n mandar em branco
if ($_POST['idade'] && $_POST['carteira']) {
    //validando idade e carteira
    if ($idade >= 16 && $idade <= 65 && $carteira >= 0 && $carteira <= 35) {
        //validando sexo
        if ($_POST["sexo"] == "masculino") {
            //Calculo para homens
            $calculoMascIdade =  65 - $idade;
            $calculoMascCarteira =  35 - $carteira;
            //mostrar na tela homem
            $mensagem .= "<div class='sucesso'>";
            $mensagem .= "<p> Faltam   $calculoMascIdade anos  de idade </p>";
            $mensagem .= "<p>ou</p>";
            $mensagem .= "<p> Faltam  $calculoMascCarteira anos em carteira</p>";
            $mensagem .= "</div>";
        } elseif ($_POST["sexo"] == "feminino") {
            //Calculo  para mulher
            $calculoFemIdade =  62 - $idade;
            $calculoFemCarteira =  30 - $carteira;
            // mostrar na tela mulher
            $mensagem .= "<div class='sucesso'>";
            $mensagem .= "<p> Faltam  $calculoFemIdade anos  de idade </p>";
            $mensagem .= "<p>ou</p>";
            $mensagem .= "<p> Faltam   $calculoFemCarteira anos em carteira</p>";
            $mensagem .= "</div>";
        } else {
            //fim validação sexo
            $mensagem .= "<div class='erro'>";
            $mensagem .= "<h2>ERRO!</h2>";
            $mensagem .= '<p>Nenhum sexo escolhido</p>';
            $mensagem .= "</div>";
        }
    } else {
        //fim da validação idade
        $mensagem .= "<div class='erro'>";
        $mensagem .= "<h2>ERRO!</h2>";
        $mensagem .=  "<p>Digite uma idade compativel</p>";
        $mensagem .= "</div>";
    }
}
//fim da  validação em branco
else {
    $mensagem .= "<div class='erro'>";
    $mensagem .= "<h2>ERRO!</h2>";
    $mensagem .= "<p>Por favor preencha os campos</p>";
    $mensagem .= "</div>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href="./style/formulario.css" />
    <title>Mostrando resultado</title>
</head>

<body>
    <div class="container">
        <?php
        echo $mensagem ?>
        <div class="container--button">
            <a href='./index.php'>
                <button>Voltar</button>
            </a>
        </div>
    </div>

</body>

</html>