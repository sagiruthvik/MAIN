<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="/test_route" method="POST">
    @csrf
<input type="text" name="input" placeholder="name"/>
<button type="submit">CLICK ME</button>
</form>
</body>
</html>
