<!DOCTYPE html>
<html>
<head>
    <title>Shark App</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">


    <h1>Showing {{ $telegraph->author }} text</h1>

    <div class="jumbotron text-center">
        <p>
            <strong>Author:</strong> {{ $telegraph->author }}<br>
            <strong>Text:</strong> {{ $telegraph->text }}
        </p>
    </div>

</div>
</body>
</html>
