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

        <h1>View Record</h1>
        <form action="{{ route('car.store') }}" method="post" class="form-horizontal">
            {{ csrf_field() }}
            <div class="form-group">
                <label class="col-md-2 control-label" for="name">Name</label>
                <div class="col-md-10">
                    {{ $car->name }}
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label" for="email">Email</label>
                <div class="col-md-10">
                    {{ $car->email }}
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label" for="car">Car</label>
                <div class="col-md-10">
                    {{ $car->car }}
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label" for="car">Created at</label>
                <div class="col-md-10">
                    {{ $car->created_at->format('d/m/Y') }}
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label" for="car">Updated at</label>
                <div class="col-md-10">
                    {{ $car->updated_at->format('d/m/Y') }}
                </div>
            </div>
        </form>
    </div>
</body>
</html>