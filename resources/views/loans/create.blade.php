<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Create</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        form {
            background: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        form div {
            margin-bottom: 15px;
            font-family: 'Courier New', Courier, monospace;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input[type="text"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            /*font-family: 'Courier New', Courier, monospace;*/
        }
        input[type="submit"] {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
            
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
   
        }
        h1 {
            text-align: center;
            margin: 20px;
        }
    </style>
</head>
<body>
    <h1>Create a loans</h1>
    <form method="post" action="{{ route('loans.store') }}">
        @csrf	
        @method('post')
        <div>
            <label>Book ID</label>
            <input typpe="text" name="book_id" placeholder="Book ID">
        </div>
        <div>
            <label>Member ID</label>
            <input type="text" name="member_id" placeholder="Member ID">
        </div>
     
        <div>
            <input type="submit" value="create">
        </div>
    </form>
</body>
</html>