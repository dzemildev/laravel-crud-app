<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Edit</title>
    <style>
         body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            flex-direction: column; 
        }
        form {
            background: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        h1 {
            margin-bottom: 20px; 
            text-align: center; 
        }
    </style>
</head>
<body>
    <h1>Edit a loans</h1>
    <form method="post" action="{{ route('loans.update', ['loans' => $loans ]) }}" class="form">
        @csrf	
        @method('put')
        <div class="mb-3">
            <label class="form-label">Book ID</label>
            <input class="form-control" type="text" name="book_id" placeholder="Book ID" value="{{ $loans->book_id }}">
        </div>
        <div class="mb-3">
            <label class="form-label">Member ID</label>
            <input class="form-control" type="text" name="member_id" placeholder="Member ID" value="{{ $loans->member_id }}">
        </div>

        <div class="mb-3">
            <input type="submit" value="update"  class="btn btn-primary">
        </div>
    </form>
</body>
</html>