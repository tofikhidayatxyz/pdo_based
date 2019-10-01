<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Learn pdo</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <div class="col-md-4">
          <form action="action/login.php" method="post">
                <h1>Login</h1>
                <div class="form-group">
                    <label for="email">email</label>
                     <input id="email" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                     <input id="password" type="password" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
          </form>
        </div>
    </div>
</body>
</html>