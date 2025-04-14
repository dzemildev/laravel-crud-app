<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loans</title>
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
           
            margin: 25px;
        }
        h1 {
            text-align: center;
            margin: 20px;
        }
        .navbar {
    display: flex;
    align-items: center;
    justify-content: center;
}


.navbar-brand {
    margin-right: auto;
}


.navbar-nav {
    display: flex;
    flex-direction: row;
    gap: 25px;
    padding-left: 0;
    margin-bottom: 0;
    list-style: none;
}


.nav-link {
    color: white;
    font-weight: bold;
    text-decoration: none;
}

.nav-link:hover {
    text-decoration: underline;
}
        </style>
</head>
<body>
<nav class="navbar navbar-dark bg-primary">
<div class="container-fluid">
<a class="navbar-brand" href="{{ route('dashboard') }}"><img src="{{asset('logo/icona.png')}}" width="50" height="50" class="d-inline-block align-text-top"></a>

    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('dashboard') }}">Home<span class="sr-only"></span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('books.index')}}">Books</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('members.index')}}">Members</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('loans.index')}}">Loans</a>
      </li>
    </ul>
</div>


</nav>
    <h1>Loans</h1>
    <a href="{{ route('loans.create') }}" type="button" class="btn btn-primary">Add a loans</a>
    <br><br>
    <div>
        <table border="1" class="table table-striped table-hover">
            <tr>
                <th>ID</th>
                <th>Book ID</th>
                <th>Member ID</th>
                <th>Edit</th>
                <th>Delete</th>

            </tr>
            @foreach($loans as $loans)
            <tr>
                 <td>{{ $loans->id }}</td>
                <td>{{ $loans->book_id }}</td>
                <td>{{ $loans->member_id }}</td>
                <td>
                    <a href="{{ route('loans.edit', ['loans' => $loans]) }}" type="button" class="btn btn-primary">Edit</a> 
                  
                </td>
                <td>
                    <form method="post" action="{{route('loans.delete', ['loans' => $loans])}}">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Delete" class="btn btn-danger">
                    </form>
                </td>

            </tr>
            @endforeach
        </table>
    </div>
</body>
</html>