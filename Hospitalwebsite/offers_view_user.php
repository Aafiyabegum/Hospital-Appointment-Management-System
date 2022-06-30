<?php require_once "controllerUserData.php"; ?>
<?php 
error_reporting(0);
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


    <link rel="stylesheet" href="css/app_depo_user.css"/>
    <link rel="stylesheet" href="css/scrollup.css">


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
    <a class="navbar-brand" href="#">ARS Hospital</a> <span style="font-size: 20px; color: white; float: right;">Hi! <?php echo $fetch_info['name'] ?> </span>
    <button type="button" class="btn btn-primary"><a href="logout-user2.php">Logout</a></button>
    </nav>
   
    <br><br><br>

    <h1 style=" margin-top: 35px; margin-bottom: 45px; text-align:center; color:black; font-family:georgia,garamond;">Offers From ARS Hospital</h1>
   <table class="table" style="margin-top: 45px;">
     <thead>
                 <th style="font-family:georgia,garamond;">Offer Messages</th>
                 
     </thead>
     
        <?php
                $con = mysqli_connect("localhost", "root", "", "userform");
                
                // Check connection
                if ($con->connect_error) {
                die("Connection failed: " . $con->connect_error);
                }

                $sql = "SELECT * FROM offer";
               
                $result = $con->query($sql);
                if ($result->num_rows > 0) 
                {
                
                            // output data of each row
                            while($row = $result->fetch_assoc()) 
                            {
                                $id = $row['id'];
                            echo "<tr><td style=color:black;>" . $row["message"]. "</td></tr>";
                            }
                            echo "</table>";
                } 

                else 
                { 
                    echo "0 results"; 
                }

                $con->close();
        ?>



   </table>
</br>
</br>

<script>
function myFunction() {
  confirm("Are you Sure, Do you want to Delete it?");
}
</script>
 
</body>
</html>
