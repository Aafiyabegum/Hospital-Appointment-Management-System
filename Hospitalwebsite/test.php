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

    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>



    
    <link rel="stylesheet" href="css/side.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
       <link rel="stylesheet" href="css/app_dep.css"/>
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
    <a class="navbar-brand" href="#" style="float: left;">ARS Hospital</a>
<div style="/* float: right; */margin-left: 60%;"><span style="font-size: 20px; color: white;">Hi... <?php echo $fetch_info['names'] ?> </span> 
    <button type="button" class="btn btn-primary" style="margin-left: 10px;"><a href="logout-user.php">Logout</a></button> </div>
    </nav>
<div class="container">
    <div class="row">
        <div class="col-md-1">
<?php include('inc/left-menu.php');?>
</div>
<div class="col-md-11">
     <h1 style=" margin-top: -15px; margin-bottom: 45px; text-align:center; color:black; font-family:georgia,garamond;">Appointment made patient details</h1>
    <table class="table" style="margin-top: 10%;">
     <thead>
                 <th style="font-family:georgia,garamond;">Name</th>
                 <th>Appointment_Date</th>
                 <th>Email</th>
                 <th>Contact No</th>
                 <th>Description</th>
                 <th>Specialist</th>
                 <th style="font-family:georgia,garamond;">App No</th>
                 <th style="font-family:georgia,garamond;">Options</th>
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

                $sql = "SELECT * FROM appoints";
               
                $result = $con->query($sql);
                if ($result->num_rows > 0) 
                {
                
                            // output data of each row
                            while($row = $result->fetch_assoc()) 
                            {
                                $id = $row['id'];
                                
                            echo "<tr>
                                    <td class='riz' style=color:black;>" . $row["Name"] . "</td>
                                    <td style=color:black;>" . $row["Appointment_Date"] ."</td>
                                    <td style=color:black;>" . $row["Email"]. "</td>
                                    <td style=color:black;>" . $row["Phone"] . "</td>
                                    <td style=color:black;>" . $row["Description"] ."</td>
                                    <td style=color:black;>" . $row["Specialist"] . "</td>
                                    <td style=color:black;>" . $row["app_no"]."</td>
                                    <td><button type='button' class='btn btn-danger deleteb'><a href='delete_appoint.php?delete=$id' class='ask'>Delete Appointment</a></button></td>"."</td>
                                    
                                </tr>";
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

</body>
</html>
