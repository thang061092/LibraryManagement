<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-2.1.3.min.js"></script>
</head>
<body>
<form method="post" action="checkRegister.php">
    <div class="container">
        <form class="form-horizontal" role="form">
            <h2>Registration</h2>
            <div class="form-group">
                <label for="lastName" class="col-sm-3 control-label">Full Name *</label>
                <div class="col-sm-9">
                    <input type="text" id="lastName" placeholder="Full Name" class="form-control" autofocus name="name">
                </div>
            </div>
            <div class="form-group">
                <label for="email" class="col-sm-3 control-label">Email * </label>
                <div class="col-sm-9">
                    <input type="email" id="email" placeholder="Email" class="form-control" name= "email">
                </div>
            </div>
            <div class="form-group">
                <label for="password" class="col-sm-3 control-label">Password*</label>
                <div class="col-sm-9">
                    <input type="password" id="password" placeholder="Password" class="form-control" name="pass">
                </div>
            </div>
            <div class="form-group">
                <label for="phoneNumber" class="col-sm-3 control-label">Phone number </label>
                <div class="col-sm-9">
                    <input type="number" id="phoneNumber" placeholder="Phone number" class="form-control" name="phone">
                </div>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Register</button>
        </form>
    </div>

</body>
</html>