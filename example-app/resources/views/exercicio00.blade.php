<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 00</title>
</head>
<body>

    <center>
        <h1>Exercicios 00</h1>

     <p>{{$data}}</p>
     <p>{{$hora}}</p>

     @if(($hora >= 000000) || ($hora < 120000))

           <h1>Bom dia Senhor</h1>

     @elseif(($hora >= 120000) || ($hora < 180000))
        <h1>Boa tarde Semhor!</h1>

     @elseif(($hora >= 180000) || ($hora < 000000))
       <h1>Boa noite Senhor</h1>

     @endif
     

    </center>
    
</body>
</html>