<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Product</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
  <div class="container mt-5">
    <h1 class="mb-4">Product</h1>
    <div>
      @if(session()->has('success'))
        <div class="alert alert-success">
          {{session('success')}}
        </div>
      @endif
    </div>
    
    <div class="mb-3">
      <a href="{{route('phone.create')}}" class="btn btn-primary">Create A Product</a>
    </div>
    <table class="table table-bordered"> 
      <thead class="thead-dark">
        <tr>
          <th>ID</th>
          <th>Model</th>
          <th>Price</th>
          <th>Description</th>
          <th>Edit</th>
          <th>Delete</th>
        </tr>
      </thead>
      <tbody>
        @foreach($phones as $phone)
          <tr>
            <td>{{$phone->id}}</td>
            <td>{{$phone->model}}</td>
            <td>{{$phone->price}}</td>
            <td>{{$phone->description}}</td>
            <td>
              <a href="{{route('phone.edit', ['phone' => $phone])}}" class="btn btn-warning">Edit</a>
            </td>
            <td>
                <form method="post" action="{{route('phone.destroy', ['phone' => $phone])}}">
                  @csrf
                  @method('delete')
                  <input type="submit" value="Delete" class="btn btn-danger" />
                </form>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
