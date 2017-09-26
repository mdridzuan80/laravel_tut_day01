<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Car View</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <nav class="navbar">
            <div class="navbar-header">
                <a href="" class="navbar-brand">home</a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="{{ route('car.index') }}">View all record</a></li>
                <li><a href="{{ route('car.create') }}">Create new record</a></li>
            </ul>
        </nav>

        <h1>List of Car</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Car</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($cars as $key => $car)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $car->name }}</td>
                    <td>{{ $car->email }}</td>
                    <td>{{ $car->car }}</td>
                    <td>
                        <a href="{{ route('car.show',['id'=>$car->id]) }}" class="btn btn-default">View</a>
                        <a href="{{ route('car.edit',['id'=>$car->id]) }}" class="btn btn-primary">Edit</a>
                        {{ Form::open(['route'=>['car.destroy',$car->id],'method'=>'DELETE','onsubmit'=>'return confirm(\'Anda pasti untuk menghapuskan maklumat ini?\')']) }}
                            <button type="submit" class="btn btn-danger">Delete</button>
                        {{ Form::close() }}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>