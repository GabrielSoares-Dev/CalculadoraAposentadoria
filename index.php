<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href="./style/index.css" />
    <title>Calculo aposentadoria</title>
</head>

<body>
    <div>
        <p>Aplicação para calculo da aposentadoria feito em php</p>
    </div>
    <div class="container--form">
        <form action='formulario.php' method='POST'>
            <div class="container--style">
            <div class="input--container">
                <label>Digite sua idade</label>
                <input name='idade' type='number' min='16' max='65' />
            </div>
            <div  class="input--container">
                <label> tempo contribuição em carteira</label>
                <input name='carteira' type='number' min='0' max='35' />
            </div>
            <div>
                <input type='radio' value='masculino' name='sexo' checked />
                <label>Masculino</label>
                <input type='radio' value='feminino' name='sexo' />
                <label>Feminino</label>
            </div>
            <div>
                <button type='submit'>enviar</button>
            </div>

        </form>
    </div>
    </div>
</body>

</html>