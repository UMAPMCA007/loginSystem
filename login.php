<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
    <title>Registration system PHP and MySQL</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div class=" text-center">
    <h2>Login</h2>
</div>
<div class="row">
     <div class="col-md-6 offset-md-3">
         <form method="post" action="loginAction.php">
             <div class=" form-group ">
                 <label>Username</label>
                 <input type="text" name="username" class="form-control" >
             </div>
             <div class="form-group">
                 <label>Password</label>
                 <input type="password" name="password" class="form-control">
             </div>
             <div>
                 <button type="submit" class="btn" name="login_user">Login</button>
             </div>
             <p>
                 Not yet a member? <a href="register.php">Sign up</a>
             </p>
         </form>
     </div>
</div>

</body>
</html>