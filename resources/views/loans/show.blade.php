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
    <p><strong>ID:</strong> {{ $loans->id }}</p>
    <p><strong>Book ID</strong> {{ $loans->book_id }}</p>
    <p><strong>Member ID</strong> {{ $loans->member_id }}</p>
        </div>
</body>
</html>