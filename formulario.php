<?php


//variaveis
$idade = $_POST['idade'];
$carteira = $_POST['carteira'];

//validação para n mandar em branco
if ($_POST['idade'] && $_POST['carteira']) {
    //validando idade e carteira
    if ($idade >= 16 && $idade <= 65 && $carteira >= 0 && $carteira <= 35 ) {
        //validando sexo
        if ($_POST['sexo'] == 'masculino') {
            //Calculo para homens
            $calculoMascIdade =  65 - $idade;
            $calculoMascCarteira =  35 - $carteira;
            //mostrar na tela homem
            echo '<p>faltam apenas' . $calculoMascIdade . 'anos' . 'para voce se aposentar</p>';
            echo '<p>faltam apenas' . $calculoMascCarteira . 'anos em carteira' . 'para voce se aposentar</p>';
        } else if ($_POST['sexo'] == 'feminino') {
            //Calculo  para mulher
            $calculoFemIdade =  62 - $idade;
            $calculoFemCarteira =  30 - $carteira;
            // mostrar na tela mulher
            echo '<p>faltam apenas' . $calculoFemIdade . 'anos' . 'para voce se aposentar</p>';
            echo '<p>faltam apenas' . $calculoFemCarteira . 'anos em carteira' . 'para voce se aposentar</p>';
        } else {
            //fim validação sexo
            echo 'Nenhum sexo escolhido';
        }
    } else {
        //fim da validação idade
        echo 'digite uma idade compativel';
    }
}
//fim da  validação em branco
else {
    echo '<p>por favor preencha os campos</p>';
}
