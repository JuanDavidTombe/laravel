<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>FRM NUMEROS AMIGOS</h1>


<form action="/numerosAmigos" method="POST">
    @csrf
    
    <label>Número 1:</label><br>
    <input type="number" name="num1"><br><br>

    <label>Número 2:</label><br>
    <input type="number" name="num2"><br><br>

    <button type="submit">Calcular Números Amigos</button>
</form>




</body>
</html>