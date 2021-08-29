<?php 

if($_POST){
    $nome = $_POST['nome'];
    $sobrenome= $_POST['sobrenome'];

    if($nome > 0  && $sobrenome > 0 ){
         if (is_numeric($nome) && is_numeric($sobrenome)){
      $complete = $nome. $sobrenome;
      echo $complete;  
    }
    else{
        echo "<p>Valor invalido</p>";
    }
    }else{
        echo 'numero n divisivel';

    }

   
    
}else{
    echo '<h1>por favor informar os dados</h1>';
}


 
?>