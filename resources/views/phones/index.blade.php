<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script src="https://kit.fontawesome.com/1154e1d6ee.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
</head>
<body>
    <h1>Phones</h1>

    <div>
        @if(session()->has('success'))
            <div>
                {{session('success')}}
            </div>
        @endif
    </div>


    <div>
        @if(session()->has('success'))
            <div>
                {{session('success')}}
            </div>
        @endif
    </div>
    <div>
        <div>
            <!-- <a href="">Create a Product</a> -->

            <a class="btn btn-primary" href="{{route('product.create')}}" role="button">Create &nbsp <i class="fa-solid fa-plus"></i></a>
            <a class="btn btn-secondary" href="{{route('user')}}" role="button">Go Back</a>

        </div>

        <table table class="table table-bordered">
            <tr>
                
                <th>Model</th>
                <th>Price</th>
                <th>Description</th>

            </tr>
            @foreach($phones as $phone )
                <tr>
                    
                    <td>{{$phone->model}}</td>
                    <td>{{$phone->price}}</td>
                    <td>{{$phone->description}}</td>

                     <td>

                     <!-- <a href="{{route('product.edit',['car' => $car])}}">Edit</a> -->

                     

                    

                </tr>
            @endforeach
        </table>
    </div>








</body>
</html>