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
    <div class="container--form">
        <form action='formulario.php' method='POST'>
            <div class="container--style">
                <div class="container--align">
                <div class="input--container">
                    <label>Digite sua idade</label>
                    <input name='idade' type='number' min='16' max='65' required />
                </div>
                <div class="input--container">
                    <label>Tempo contribuição </label>
                    <input name='carteira' type='number' min='0' max='35' required />
                </div>
                <div>
                    <input type='radio' value='masculino' name='sexo' checked />
                    <label>Masculino</label>
                    <input type='radio' value='feminino' name='sexo' />
                    <label>Feminino</label>
                </div>
                <div class="container--button">
                    <button type='submit'>Calcular</button>
                </div>
            
            </div>
            </div>
        </form>
    </div>
    </div>
</body>

</html>