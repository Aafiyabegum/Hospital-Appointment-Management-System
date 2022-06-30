<?php require_once "controllerUserData.php"; ?>
<?php 
error_reporting(0);
$email = $_SESSION['email'];
if($email == false){
  header('Location: login-user.php');
}
$fetch_data = "SELECT * FROM admin WHERE email = '$email'";
$run_query = mysqli_query($con, $fetch_data);
$fetch_info = mysqli_fetch_assoc($run_query);

if($_GET['delete']){
    

                $sql = "DELETE FROM offer WHERE id=$_GET[delete]";
            $data_check = mysqli_query($con, $sql);
                                    

}

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
    <link rel="stylesheet" href="css/app_depo.css"/>
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
     <h1 style=" margin-top: -55px; margin-bottom: 45px; text-align:center; color:black; font-family:georgia,garamond;">Offers From ARS Hospital</h1>
        
        <table class="table" style="margin-top: 8%;">
            <thead>
                 <th style="font-family:georgia,garamond;" width="80%">Offer Message</th>
                 <th style="font-family:georgia,garamond;" width="20%">Options</th>    
            </thead>

     <style type="text/css">
         .riz{
            font-size: 45px;
         }
     </style>

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
                            echo "<tr>
                                        <td class='riz' style=color:black;>" . $row["message"]."</td>
                                        <td><button type='button' class='btn btn-danger deleteb' onclick='myFunction()'><a href='?delete=$id' class='ask'>Delete Offer</a></button></td></tr>";
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
</div>
</div>
</div>


                        <script>
                        function myFunction() {
                        confirm("Are you Sure, Do you want to Delete it?");
                        }
                        </script>

 <a class="gotopbtn" href="#"> <i class="fas fa-arrow-up" style="color: white;"></i> </a>
</body>
</html>
