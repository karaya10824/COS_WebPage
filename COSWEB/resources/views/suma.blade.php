<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/suma" method="POST">
        @csrf
        <input type="text" name="num1">
        <input type="text" name="num2">
        <button type="submit">Sumar</button>
    </form>

    @if (isset($res))
        <h2>El resultado de la suma es: {{$res}}</h2>
    @endif
    
</body>
</html>