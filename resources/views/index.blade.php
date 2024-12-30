<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>
        body {
            background-color: black;
            margin: 0;
            padding: 0;
            overflow: hidden;
        }

        .form-container {
            background-image: url('https://png.pngtree.com/thumb_back/fh260/background/20200804/pngtree-minimal-geometric-podium-scene-with-geometrical-forms-image_383579.jpg');
            background-size: cover;
            background-position: center;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.5);
            max-width: 400px;
            width: 100%;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form-group label {
            color: white;
        }

        .form-container input {
            margin-bottom: 15px;
        }

        .form-container button {
            margin-top: 10px;
        }

        .btn-container {
            display: flex;
            justify-content: space-between;
        }

        .btn-container button {
            width: 48%;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="form-container">
            <form action="{{route('login')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="btn-container">
                    <button type="submit" class="btn btn-primary">Login</button>
                    <a href="{{ route('register.show') }}" class="btn btn-success">Sign up</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
