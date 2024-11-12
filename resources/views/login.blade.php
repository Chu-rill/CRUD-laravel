<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-dark text-light">
    <div class="container d-flex align-items-center justify-content-center min-vh-100 ">
        <div class="col-md-6 col-lg-4">
            <h1 class="text-center mb-4">Login</h1>
            <form action="/login" method="POST">
                @csrf
                <div class="form-group">
                    <label for="email">Username</label>
                    <input type="text" name="loginname" class="form-control" id="name" placeholder="Enter Username" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password"name="loginpassword" class="form-control" id="password" placeholder="Password" required>
                </div>
                <div class="form-check mb-3">
                    <input type="checkbox" class="form-check-input" id="rememberMe">
                    <label class="form-check-label" for="rememberMe">Remember me</label>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Login</button>
                <div class="text-center mt-3">
                    <a href="#">Forgot password?</a>
                </div>
                <div class="text-center mt-2">
                    <small>Don't have an account? <a href="{{ route('signup') }}">Sign up</a></small>
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