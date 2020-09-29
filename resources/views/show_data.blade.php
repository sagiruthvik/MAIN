<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><b>id:</b> {{$user->id}}</p>
    <p><b>first-name:</b> {{$user->first_name}}</p>
    <p><b>last-name:</b> {{$user->last_name}}</p>
    <p><b>age:</b> {{$user->age}}</p>
    <a href="/edit/{{ $user->id }}"><button type="submit">Edit</button></a>
    <a href="/delete/{{ $user->id }}"><button type="submit">Delete</button></a>
    <hr>
</body>
</html>
