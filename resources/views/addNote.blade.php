<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New Note</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark text-light">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-primary text-white text-center">
                        <h2>Add New Note</h2>
                    </div>
                    <div class="card-body bg-secondary">
                        <form action="/create-post" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="title">Note Title</label>
                                <input type="text" name="title" class="form-control" id="title" placeholder="Enter note title" required>
                            </div>
                            <div class="form-group">
                                <label for="content">Content</label>
                                <textarea class="form-control" name="body" id="content"  rows="5" placeholder="Enter note content" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Save Note</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

   
</body>
</html>
