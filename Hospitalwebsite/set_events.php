<?php require_once "controllerUserData.php"; ?>
<?php 
$email = $_SESSION['email'];
if($email == false){
  header('Location: login-user.php');
}
$fetch_data = "SELECT * FROM admin WHERE email = '$email'";
$run_query = mysqli_query($con, $fetch_data);
$fetch_info = mysqli_fetch_assoc($run_query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $fetch_info['names'] ?> | Home</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">

    <link rel="stylesheet" href="css/side.css">
    <link rel="stylesheet" href="css/scrollup.css">

    <style>
    @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
    
    .deleteb{
        font-size: 17px;
    }
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
    <a class="navbar-brand" href="#" style=" float: left;">ARS Hospital</a>
    <div style="margin-left: 60%;"><span style="font-size: 20px; color: white;">Hi... <?php echo $fetch_info['names'] ?> </span> 
    <button type="button" class="btn btn-primary deleteb" style="margin-left: 10px;"><a href="logout-user.php">Logout</a></button> </div>
    </nav>
    
    <div class="container">
    <div class="row">
    <div class="col-md-1">

  <?php include('inc/left-menu.php');?>
</div>
<div class="col-md-11">
   
   <h1 style=" margin-top: -45px; margin-bottom: 45px; text-align:center; color:black; font-family:georgia,garamond;">Events Creation</h1>

    <?php

                        if(isset($_POST['submit']))
                        {
                            $event=$_POST['event'];
                            $date_upload=$_POST['date_upload'];
                            $date_close=$_POST['date_close'];

                            if($event!=""&&$date_upload!=""&&$date_close!="")
                            {
                                $message = mysqli_real_escape_string($con, $_POST['event']);

                                $insert_data = "INSERT INTO event values (NULL, '$event', '$date_upload','$date_close', '1')";
                                            
                                $data_check = mysqli_query($con, $insert_data);

                                echo "<h4 style=color:red;>Event Created Successfully...</h4>";
                                echo "</br>";
                                            echo"

                                            <script>
                                                    url = 'set_events.php';

                                                    // Simulate an HTTP redirect:
                                                    setTimeout(function() { // timer
                                                    window.location.replace(url);
                                                    }, 5000); // 10000 ms = 10 seconds
                                            </script>


                                            ";
                            }
                            else
                            {
                                echo "<h4 style=color:red;>Message box cannot be empty</h4>";
                                echo "</br>";
                                            echo"

                                            <script>
                                                    url = 'set_events.php';

                                                    // Simulate an HTTP redirect:
                                                    setTimeout(function() { // timer
                                                    window.location.replace(url);
                                                    }, 3000); // 10000 ms = 10 seconds
                                            </script>


                                            ";
                            }
                        }

                        ?>

    <div style="padding: 50px;">
                
                <form action="" method="POST">     
                          
                <h3 style="font-family:Trebuchet MS;  color: #0c0c0c;">Event Message</h3>
                <textarea name="event" id="" cols="50" rows="7" style="display: block; border: 2px solid blue; border-radius: 10px;color: black;" placeholder="Type the Event Details"></textarea><br>

                 <h3 style="font-family:Trebuchet MS;  color: #0c0c0c;"> Date of Uploading</h3>
                <input type="date" name="date_upload"  style="display: block; color:black;"><br>

                 <h3 style="font-family:Trebuchet MS;  color: #0c0c0c;"> Date of Closing</h3>
                <input type="date" name="date_close"  style="display: block; color:black;"><br>
                                  
                 <div class="btn" style="padding: 15px;">
                
                 <button type="submit" name="submit" class="btn btn-primary deleteb">Create Events</button></div>
                </form>
    </div>
                       
<a class="gotopbtn" href="#"> <i class="fas fa-arrow-up" style="color: white;"></i> </a>
</body>
</html>
