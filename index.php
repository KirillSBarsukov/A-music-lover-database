<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Lab 2</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <div class="container">

            <div class="jumbotron">
                <h1 class="display-3">Music lovers</h1>
                <p class="lead">There is a simple web page which take input and displays it in the database below</p>
                <hr class="my-2">
                <p>I have used Bootstrap, PHP, JavaScript, and MySQL</p>
                <form method="POST" class="form-inline" action="submit.php" >
                <div class="form-group">
                <label class="sr-only" for="email">First Name</label>
                    <input type="text" class="form-control" placeholder="First Name"  name="firstName">
                </div>
                <div class="form-group">
                    <label class="sr-only" for="pwd">Last Name</label>
                    <input type="text" class="form-control" placeholder="Last Name" name="lastName">
                </div>
                <div class="form-group">
                    <label class="sr-only" for="pwd">Age</label>
                    <input type="text" class="form-control" placeholder="Age" name="age">
                </div>
                <div class="form-group">
                    <label class="sr-only" for="pwd">Favorite song</label>
                    <input type="text" class="form-control" placeholder="Favorite song" name="song">
                </div>
                <div class="col-1">
                        <div class="btn-group">
                        <button type="submit" class="btn btn-success">Submit</button>
                        <button type="button" class="btn btn-success dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" id="show" href="#">Show</a>
                            <a class="dropdown-item" id="hide" href="#">Hide</a>
                        </div>
                        </div>
                </div>
                <p id="table"><?php include('select.php') ?> </p>
            </div>
    </div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="script.js"></script>
</body>
</html>
