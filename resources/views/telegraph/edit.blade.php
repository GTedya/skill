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
<form  method="POST" action="{{route('telegraph.update',$telegraph->id)}}">
    @method('PATCH')
    @csrf
    <fieldset>
{{--       @dd($telegraphText)--}}
        <legend>Изменить контактную информацию</legend>
        <p><label for="name">Имя автора<em>*</em></label><input type="text" name="author" value="{{$telegraph->author}}"></p>
        <p><label for="text">Текст</label><input type="text" value="{{$telegraph->text}}" name="text"></p>
    </fieldset>
    <p><input type="submit" value="Отправить"></p>
</form>
</body>
</html>
