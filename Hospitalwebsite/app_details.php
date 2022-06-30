<?php include('inc/header_top.php');?>


<link rel="stylesheet" href="css/app_dep.css"/>
<link rel="stylesheet" href="css/scrollup.css">

<meta name="viewport" content="width=device-width, initial-scale=1">
<body>
	<h1 style="text-align:center; color:black; font-family:georgia,garamond;">Appointment made patient details</h1>
   <table class="table">
     <thead>
             	 <th style="font-family:georgia,garamond;">Name</th>
             	 <th>Appointment_Date</th>
             	 <th>Appointment_Time</th>
             	 <th>Email</th>
                 <th>Contact No</th>
                 <th>Description</th>
                 <th>Specialist</th>
     </thead>
     
        <?php
                $con = mysqli_connect("localhost", "root", "", "userform");
                
                // Check connection
                if ($con->connect_error) {
                die("Connection failed: " . $con->connect_error);
                }

                $sql = "SELECT Name, Appointment_Date, Appointment_Time, Email, Phone, Description, Specialist FROM appoints";
               
                $result = $con->query($sql);
                if ($result->num_rows > 0) 
                {
                
                            // output data of each row
                            while($row = $result->fetch_assoc()) 
                            {
                            echo "<tr><td style=color:black;>" . $row["Name"]. "</td><td style=color:black;>" . $row["Appointment_Date"] . "</td><td style=color:black;>" . $row["Appointment_Time"] ."</td><td style=color:black;>" . $row["Email"]. "</td><td style=color:black;>" . $row["Phone"] . "</td><td style=color:black;>" . $row["Description"] ."</td><td style=color:black;>" . $row["Specialist"] . "</td></tr>";
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


 <a class="gotopbtn" href="#"> <i class="fas fa-arrow-up"></i> </a>
</body>

<?php include('inc/footer_top.php');?>