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
    <p><strong>ID:</strong> {{ $books->id }}</p>
    <p><strong>Title</strong> {{ $books->title }}</p>
    <p><strong>Name</strong> {{ $books->author_name }}</p>
    <p><strong>Author lastname</strong> {{ $books->author_lname }}</p>
    <p><strong>Year</strong> {{ $books->year }}</p>

        </div>
</body>
</html>