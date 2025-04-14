<html>
    <head>
        <title>Library</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-k6RqeWeci5ZR/Lv4MR0sA0FfDOM8z4+2e5c7e5a5b5e5a5b5e5a5b5e5a5b5e5" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-k6RqeWeci5ZR/Lv4MR0sA0FfDOM8z4+2e5c7e5a5b5e5a5b5e5a5b5e5a5b5e5" crossorigin="anonymous">

        <style>
      
            
            .card{
                margin-left: auto;
                margin-right: auto;
                width: 50%;
                
                float: left;
                padding: 20px;
            }

            .custom-card {
    transition: background-color 0.3s ease, transform 0.2s ease;
    width: 420px;
    height: 150px;
}

.custom-card:hover {
    background-color:rgb(165, 47, 52) !important; 
    transform: scale(1.02); 
    cursor: pointer;
}

        </style>
            
    </head>
    <body>
    <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Library') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                    <br><br>
                   
                </div>
            </div>
        </div>
    </div>
    <div  class="d-flex justify-content-center flex-wrap gap-3">
    <a href="{{route('books.index')}}">
    <div  class="card bg-primary text-white mb-3 custom-card" style="max-width: 18rem;">
                         <div class="card-header">Books</div>
                            <div class="card-body">
                            <h5 class="card-title">List of all books</h5>
                                    
                            </div>
                    </div></a>

                    <a href="{{route('members.index')}}">
                    <div class="card text-bg-success mb-3 custom-card" style="max-width: 18rem;">
                    <div class="card-header">Members</div>
                    <div class="card-body">
                    <h5 class="card-title">List of all members</h5>
                   
                    </div>
                    </div>
                </a>
                <a href="{{route('loans.index')}}">
                <div class="card text-bg-warning mb-3 custom-card" style="max-width: 18rem;">
                    <div class="card-header" style="color: white;">Loans</div>
                    <div class="card-body">
                        <h5 class="card-title" style="color: white;">List of currently rented books</h5>
                        
                    </div>
                    </div>
                </a>

    </div>    

</x-app-layout>
    </body>
</html>