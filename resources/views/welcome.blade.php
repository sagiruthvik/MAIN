<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="/store" method="POST">
    @csrf
<input type="text" name="fname" placeholder="first-name"/>
<input type="text" name="lname" placeholder="last-name"/>
<input type="number" name="age" placeholder="age"/>

<button type="submit">store</button>
</form>
</body>
</html>
