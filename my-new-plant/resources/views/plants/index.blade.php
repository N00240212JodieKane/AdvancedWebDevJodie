<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plants</title>
</head>
<body>
    <h1>All Plants</h1>
    <ul>
        @foreach ( $plants as $plant )
        <li>{{ $plant->name }} - {{ $plant->description }}</li>
        @endforeach
    </ul>
</body>
</html>