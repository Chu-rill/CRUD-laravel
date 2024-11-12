<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-dark text-light">
    <div class="container d-flex align-items-center justify-content-center min-vh-100 bg-dark text-light">
        <div class="col-md-6 col-lg-4">
            <h1 class="text-center mb-4">Sign Up</h1>
            <form action="/register" method="POST">
                @csrf
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text"name="name" class="form-control" id="username" placeholder="Enter username" required>
                </div>
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="Enter email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                </div>
                
                <button type="submit" class="btn btn-primary btn-block">Sign Up</button>
                <div class="text-center mt-3">
                    <small>Already have an account? <a href="{{ route('login') }}">Login</a></small>
                </div>
            </form>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies (optional for form validation) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>