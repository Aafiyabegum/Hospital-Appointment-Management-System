<?php require_once "../controllerUserData.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login to ARS</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/aqm.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form login-form">
                <form action="../login.php" method="POST" autocomplete="">
                    <h2 class="text-center" style="color: #1560bd;">Admin Login to ARS Hospital</h2>
                    <p class="text-center">Login with your email and password</p>
<?php
                    if(count($errors) > 0){
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
<?php
                    }
                    ?>
                    <div class="form-group">
                    <input class="form-control" type="email" name="email" placeholder="Email Address" required value="<?php echo $email ?>"></div>
                    <div class="form-group">
                    <input class="form-control" type="password" name="password" placeholder="Password" required></div>
                    
                    <input class="form-control" type="hidden" name="utype" value="admin">
                    
                    <div class="form-group">
                    <input class="form-control button" type="submit" name="login" value="Login"></div>
</form>
</div>
</div>
</div>
</body>
</html>
