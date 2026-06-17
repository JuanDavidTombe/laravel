<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>FRM VERIFICAR PRIMO</h1>


<form action="{{route('verificarPrimo.store')}}" method="POST" enctype="multipart/form-data">

@csrf

<label>
    Numero 1:
    <br>
    <input type="number" name="numero">
</label>

<br>

<button type="submit">Verificar:</button>
</form>


</body>
</html>