<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <title>Hola Mundo!</title>
    <link rel='stylesheet' href="{{asset('css/app.css')}}">
</head>
<body>
<h1>Hola Mundo!</h1>
{{$nombre}}{{$subnom}}

<?php
$animales = [
    "Muffinhead" => 12,
    "Peter" => 4,
    "Monnie" => 7,
    "Banh" => 10
];
echo $animales["Muffinhead"] . PHP_EOL; // Devuelve 14
echo $animales["Monnie"] . PHP_EOL; // Devuelve 7
$records=['uno'=>'hilo','dos'=>'aguja'];

?>

@isset($records)
    Existen datos
@endisset

@foreach($records as $animal)
<p>{{$animal}}</p>
@endforeach
@if (count($records) === 1)
    I have one record!
@elseif (count($records) > 1)
    I have multiple records!
@else
    I don't have any records!
@endif
    <div class="container">
        <form action="#" method="get">
            <p>Nombre: <input type="text" name="nombre" size="40"></p>
            <p>Año de nacimiento: <input type="number" name="nacido" min="1950"></p>
            <p>Sexo:
                <input type="radio" name="hm" value="h"> Hombre
                <input type="radio" name="hm" value="m"> Mujer
            </p>
            <p> <button type="button" class="btn btn-primary" value="Enviar">Enviar</button>
                <input type="submit" value="Enviar">
                <input type="reset" value="Borrar">
            </p>
        </form>
    <button type="button" class="btn btn-primary">{{$records['uno']}}</button>
    <button type="button" class="btn btn-secondary">Secondary</button>
    <button type="button" class="btn btn-success">Perfecto</button>
    <button type="button" class="btn btn-danger">Peligro</button>
        <button type="button" class="btn btn-outline-primary">Primary</button>
        <button type="button" class="btn btn-outline-secondary">Secondary</button>
        <button type="button" class="btn btn-outline-success">Success</button>
        <button type="button" class="btn btn-outline-danger">Danger</button>
        <button type="button" class="btn btn-outline-warning">Warning</button>
        <button type="button" class="btn btn-outline-info">Info</button>
        <button type="button" class="btn btn-outline-light">Light</button>
        <button type="button" class="btn btn-outline-dark">Dark</button>
    </div>

</body>
</html>
