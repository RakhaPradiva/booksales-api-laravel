<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Author</title>
</head>

<body>
    <h1>Author View</h1>
    @foreach ($authors as $item)
        <ul>
            <li>{{ $item['name'] }}</li>
            <li>{{ $item['photo'] }}</li>
            <li>{{ $item['bio'] }}</li>
        </ul>
    @endforeach
</body>

</html>
