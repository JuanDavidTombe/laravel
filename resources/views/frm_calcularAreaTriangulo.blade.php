<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>FRM CALCULAR ÁREA DE UN TRIÁNGULO</h1>


<form action="{{route('calcularAreaTriangulo.store')}}" method="POST" enctype="multipart/form-data">

@csrf

<label>
    Base:
    <br>
    <input type="number" name="base">
</label>
<br>
<label>
    Altura:
    <br>
    <input type="number" name="altura">
</label>
<br>
<br>

<button type="submit">Calcular Área:</button>
</form>


</body>
</html>