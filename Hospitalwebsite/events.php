<?php include('inc/header_top.php');?>


<link rel="stylesheet" href="css/event.css"/>
<link rel="stylesheet" href="css/scrollup.css">

<meta name="viewport" content="width=device-width, initial-scale=1">
<body>
   <h1 style="text-align:center; color:blue;">Events From ARS Hospital</h1>
   <table class="table" style="margin-top: 5px;">
     <thead>
                <th style="font-family:georgia,garamond;" width="5%">S.No</th>
                 <th style="font-family:georgia,garamond;" width="55%">Eents Title</th>
                <th style="font-family:georgia,garamond;" width="20%">Date of uploading</th>
                 <th style="font-family:georgia,garamond;" width="20%">Date of closing</th>

                 
     </thead>
     
        <?php
                $con = mysqli_connect("localhost", "root", "", "userform");
                
                // Check connection
                if ($con->connect_error) {
                die("Connection failed: " . $con->connect_error);
                }

                $sql = "SELECT * FROM event";
               
                $result = $con->query($sql);
                if ($result->num_rows > 0) 
                {
                
                            // output data of each row
                            while($row = $result->fetch_assoc()) 
                            {
                                $id = $row['id'];
                            echo "<tr><td style=color:black;>" . $row["id"]. "</td><td style=color:black;>" . $row["event_title"]. "</td><td style=color:black;>" . $row["date_of_uploading"] . "</td><td style=color:black;>" . $row["date_of_closing"]."</td></tr>";
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