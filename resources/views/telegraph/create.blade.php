<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet"/>

    <!-- Styles -->

</head>
<body class="antialiased">

<form action="{{url('telegraph.store')}}" method="POST">
    @csrf
    <fieldset>
        <legend>Контактная информация</legend>
        <p><label for="name">Имя автора<em>*</em></label><input type="text" name="author"></p>
        <p><label for="text">Текст</label><input type="text" name="text"></p>
    </fieldset>
    <p><input type="submit" value="Отправить"></p>
</form>
</body>
</html>
