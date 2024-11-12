<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark text-light">
    <div class="container mt-5">
        <div class="d-flex justify-content-between">
            <div>
                <h1 class="display-6">Notes</h1>
            </div>
    
            <div class="d-flex justify-content-center mt-4">
                <!-- Logout Form -->
                <form action="/logout" method="POST" class="mr-2">
                    @csrf
                    <button type="submit" class="btn btn-danger">Logout</button>
                </form>
    
                <!-- Create Post Button -->
                <a href="{{ route('addNote') }}">
                    <button class="btn btn-primary">Create Post</button>
                </a>
            </div>
        </div>
        <div class="mt-4">
            @foreach ($posts as $post)
                <div class="card mb-3 bg-secondary text-light">
                    <div class="card-body">
                        <h3 class="card-title">{{ $post['title'] }}</h3>
                        <p class="card-text">{{ $post['body'] }}</p>
                        
                        <!-- Edit and Delete Buttons -->
                        <div class="d-flex justify-content-start mt-3">
                            <a href="{{ route('editPost', $post['id']) }}" class="btn btn-warning btn-sm mr-2">Edit</a>
                          <form action="/delete-post/{{ $post['id'] }}" method="POST">
                            @csrf
                            @method("Delete")
                            <button class="btn btn-danger btn-sm">Delete</button>
                            
                          </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>
