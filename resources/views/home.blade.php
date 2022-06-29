<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


    <h1>test list</h1>

    <ul>
        @foreach ($homes as $home )
            <a>{{$home['title']}}</a>
        @endforeach
    </ul>
</body>
</html>
