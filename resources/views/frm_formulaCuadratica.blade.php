<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>FRM FORMULA CUADRATICA</h1>


<form action="{{route('formulaCuadratica.store')}}" method="POST" enctype="multipart/form-data">

@csrf

<label>
    Numero 1:
    <br>
    <input type="number" name="numero1">
</label>
<br>
<label>
    Numero 2:
    <br>
    <input type="number" name="numero2">
</label>
<br>
<label>
    Numero 3:
    <br>
    <input type="number" name="numero3">
</label>
<br>
<br>

<button type="submit">Calcular Fórmula Cuadrática:</button>
</form>


</body>
</html>