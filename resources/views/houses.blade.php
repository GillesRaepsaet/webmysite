<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Je suis une la nouvelle page de ce projet</h1>

    <h2>
        @foreach (houses as house)
            <a>{{house->$id}}</a>
        @endforeach
    </h2>
</body>
</html>
