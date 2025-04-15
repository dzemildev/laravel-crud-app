<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>

    <div class="container mt-5">
    <p><strong>ID:</strong> {{ $members->id }}</p>
    <p><strong>Name</strong> {{ $members->name }}</p>
    <p><strong>Member lastname</strong> {{ $members->l_name }}</p>
    <p><strong>Email</strong> {{ $members->email }}</p>
    <p><strong>Phone</strong> {{ $members->phone }}</p>
        </div>
</body>
</html>