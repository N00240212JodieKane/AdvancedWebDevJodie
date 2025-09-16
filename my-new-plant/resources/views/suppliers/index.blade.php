<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suppliers</title>
</head>
<body>
    <h1>All Suppliers</h1>
    <ul>
        @foreach ( $suppliers as $supplier )
        <li>{{ $supplier->name }} - {{ $supplier->address }}</li>
        @endforeach
    </ul>
</body>
</html>