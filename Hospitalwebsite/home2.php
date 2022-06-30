<?php require_once "controllerUserData.php"; ?>
<?php 
$email = $_SESSION['email'];
if($email == false){
  header('Location: login-user.php');
}
$fetch_data = "SELECT * FROM usertable WHERE email = '$email'";
$run_query = mysqli_query($con, $fetch_data);
$fetch_info = mysqli_fetch_assoc($run_query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $fetch_info['name'] ?> | Home</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
    @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
    nav{
        padding-left: 100px!important;
        padding-right: 100px!important;
        background: black;
        font-family: 'Poppins', sans-serif;
    } 
    nav a.navbar-brand{
        color: #fff;
        font-size: 30px!important;
        font-weight: 500;
    }
    button a{
        color: white;
        font-weight: 500;
    }
    button a:hover{
        color: black;
        text-decoration: none;
    }
    h1{
        position: absolute;
        top: 15%;
        left: 50%;
        width: 100%;
        text-align: center;
        transform: translate(-50%, -50%);
        font-size: 50px;
        font-weight: 600;
    }
    </style>
</head>
<body>
    <nav class="navbar">
    <a class="navbar-brand" href="#">ARS Hospital</a><span style="font-size: 20px; color: white; float: right;">Hi! <?php echo $fetch_info['name'] ?> </span>
    <button type="button" class="btn btn-primary"><a href="logout-user2.php">Logout</a></button>
    </nav>
    <!-- <h2 style="color: blue;"> Welcome <?php echo $fetch_info['name'] ?></h2> -->

    <div style="padding: 25px;">
        <button type="button" class="btn btn-primary"><a href="offers_view_user.php">View Offers</a></button>
    </div>
</body>
</html>
