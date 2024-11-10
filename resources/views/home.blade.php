<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="d-flex justify-content-between">
            <div >
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
    </div>

    <!-- Bootstrap JavaScript and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
