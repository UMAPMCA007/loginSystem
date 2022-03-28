<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
    <title>Registration system PHP and MySQL</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div class="header text-center">
    <h2>Register</h2>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <form method="post" action="register.php" class="form-group">

                <div class=" form-group ">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
                </div>
                <div class="form-group ">
                    <label>Email</label>
                    <input type="email" name="email"  class="form-control" value="<?php echo $email; ?>">
                </div>
                <div class="form-group ">
                    <label>Password</label>
                    <input type="password" name="password_1" class="form-control">
                </div>
                <div class="form-group ">
                    <label>Confirm password</label>
                    <input type="password" name="password_2" class="form-control">
                </div>
                <div >
                    <button type="submit" class="btn btn-success" name="reg_user">Register</button>
                </div>
                <p>
                    Already a member? <a href="login.php">Sign in</a>
                </p>
            </form>
        </div>

    </div>

</div>

</body>
</html>