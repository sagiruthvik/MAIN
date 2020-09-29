<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="/create"><button>Create</button></a><br>
    <a href="/show_record"><button>Show record</button></a>
    @foreach ($users as $user)
    <p><b>id:</b> {{$user->id}}</p>
    <p><b>first-name:</b> {{$user->first_name}}</p>
    <p><b>last-name:</b> {{$user->last_name}}</p>
    <p><b>age:</b> {{$user->age}}</p>
    <hr>
    @endforeach
</body>
</html>
