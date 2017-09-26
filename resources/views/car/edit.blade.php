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

        <h1>Create Record</h1>
        <form action="{{ route('car.update',['id'=>$car->id]) }}" method="post" class="form-horizontal">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <div class="form-group">
                <label class="col-md-2 control-label" for="name">Name</label>
                <div class="col-md-10">
                    <input type="text" name="name" class="form-control" value="{{ $car->name }}">

                    @if($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label" for="email">Email</label>
                <div class="col-md-10">
                    <input type="text" name="email" class="form-control" value="{{ $car->email }}">

                    @if($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label" for="car">Car</label>
                <div class="col-md-10">
                    <input type="text" name="car" class="form-control" value="{{ $car->car }}">

                    @if($errors->has('car'))
                        <span class="help-block">
                            <strong>{{ $errors->first('car') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-10 col-md-offset-2">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>