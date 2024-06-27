<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Page</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header bg-secondary text-white text-center">
                <h1>User Page</h1>
            </div>
            <div class="card-body">
                <form action="{{ route('logout') }}" method="post" class="mt-3 d-flex justify-content-center">
                    @csrf
                    <button type="submit" class="btn btn-danger w-25">Logout</button>
                </form>
                <div class="text-center mt-4">
                    <a href="{{ route('user_phone') }}" class="btn btn-outline-primary">Go to Table</a>
                </div>


                <form action="{{url('send')}}" method="POST">

                    @csrf


                    <div>
                        <label>Greeting</label>
                        <input class="form-control" type="text" name="greeting">

                    </div>

                    <div>
                        <label>Body</label>
                        <input class="form-control" type="text" name="body">
                    </div>
                    
                    <div>
                        <label>Action Text</label>
                        <input class="form-control" type="text" name="actiontext">
                    </div>  
                    
                    <div>
                        <label>Url</label>
                        <input class="form-control" type="text" name="url">
                    </div>  
                    
                    <div>
                        <label>Last Line</label>
                        <input class="form-control" type="text" name="lastline">
                        <label></label>
                    </div>  

                    
                    <div>
                        
                        <input type="submit" class="btn btn-success" >
                    </div>  

                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>


