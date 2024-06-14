<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    
<h1>Edit a Phone</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>


        @endif
    </div>
    <form method="post" action="{{route('phone.update.admin', ['phone' => $phone])}}">
                            @csrf 
                            @method('put')

                            <div class="form-group">
                                <label for="model">Model</label>
                                <input type="text" class="form-control w-25" id="model" name="model" placeholder="Model" value="{{$phone->model}}" />
                            </div>

                            <div class="form-group">
                                <label for="price">Price</label>
                                <input type="text" class="form-control w-25" id="price" name="price" placeholder="Price" value="{{$phone->price}}" />
                            </div>

                            
                            <div class="form-group">
                                <label for="description">Description</label>
                                <input type="text" class="form-control w-25" id="description" name="description" placeholder="Description" value="{{$phone->name}}" />
                            </div>


                            <div class="form-group">
                                <input type="submit" class="btn btn-primary btn-block" value="Update" />
                            </div>
                        </form>

</body>
</html>