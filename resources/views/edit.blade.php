<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/update/{{$edit->id}}" method="POST">
    @csrf
<input type="text" name="fname" value={{$edit->first_name}} />
<input type="text" name="lname" value={{$edit->last_name}} />
<input type="number" name="age" value={{$edit->age}} />
<button type="submit">Update</button>
    </form>
</body>
</html>
