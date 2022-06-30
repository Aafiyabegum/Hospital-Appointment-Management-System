<?php include('inc/header_top.php');?>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- adding font awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- adding style css -->
  <link rel="stylesheet" href="css/pro.css">
   <link rel="stylesheet" href="css/scrollup.css">
 
              <?php
                  $con=new mysqli('localhost','root','','userform');

                  if($con->connect_errno)
                  {
                    echo $con->connect_error;
                    die();
                  }
                  else
                  {
                    /*echo "Database Succesfully Connected";*/
                  }

               ?>
 
<body>
  

  




<section id="fancy-form">
   <div class="container">
        <div class="form-sections">
              <!-- Form left -->
            <div class="Form-left">


                      <?php
                                if(isset($_POST['submit']))
                                {   $id=$_POST['id'];
                                    $name=$_POST['name'];
                                    $appointment_date=$_POST['appointment_date'];
                                    $email=$_POST['email'];
                                    $phone=$_POST['phone'];
                                    $description=$_POST['description'];
                                    $specialist=$_POST['specialist'];
                                    $active=$_POST['active'];
                                    $orcount=0;
                                     
                                  $abc= "SELECT COUNT(Specialist)as count FROM appoints WHERE Specialist='$specialist' AND Appointment_Date ='$appointment_date' ";
                                   $query_result = mysqli_query($con, $abc);

                                   while($row = mysqli_fetch_assoc($query_result)){

                                    $orcount= $row['count'];

                                   }
                                   $orcount=$orcount+1;
                                  

                                    if($name!=""&&$appointment_date!=""&&$email!=""&&$phone!=""&&$description!=""&&$specialist!="")
                                    {
                                        $sql="Insert into appoints (id,Name,Appointment_Date,Email,Phone,Description,Specialist,active,usertable_id, app_no) values (NULL,'$name','$appointment_date','$email','$phone','$description','$specialist','1', '1', '$orcount')";
                                    
                                        if($con->query($sql))
                                        {
                                         
                                            echo "<h3 style=color:red;> Your Appointment has been Succesfully Booked & </br> Your Appointment Number is ".$orcount."</h3>";
                                            echo "</br>";
                                            echo"

                                            <script>
                                                    url = 'appointments.php';

                                                    // Simulate an HTTP redirect:
                                                    setTimeout(function() { // timer
                                                    window.location.replace(url);
                                                    }, 15000); // 10000 ms = 10 seconds
                                            </script>


                                            ";
                                           
                                        }
                                        else
                                        {
                                            echo "<h3 style=color:red;>*Fail to Book</h3>";
                                             echo "</br>";
                                            echo"

                                            <script>
                                                    url = 'appointments.php';

                                                    // Simulate an HTTP redirect:
                                                    setTimeout(function() { // timer
                                                    window.location.replace(url);
                                                    }, 10000); // 10000 ms = 10 seconds
                                            </script>


                                            ";
                                        }
                                    }
                                  else
                                  {
                                      echo "<h3 style=color:red;>*All the fileds needed</h3>";
                                       echo "</br>";
                                            echo"

                                            <script>
                                                    url = 'appointments.php';

                                                    // Simulate an HTTP redirect:
                                                    setTimeout(function() { // timer
                                                    window.location.replace(url);
                                                    }, 10000); // 10000 ms = 10 seconds
                                            </script>


                                            ";
                                  }
                                }
                                else
                                {
                                    echo "<h3 style=color:red;>*All the fields should be fill by user to make an Appointment</h3>";
                                    echo "</br>";
                                }

                          ?> 



                        <h2 style="color:blue; font-family:georgia,garamond;">Make an Appoinment</h2>
                        <div class="line"></div>
                        
                        <!-- Appointment form -->
                        <form action="appointments.php" method="POST">

                          <h3 style="font-family:Trebuchet MS;  color: #0c0c0c;">Patient Name</h3>
                          <input type="text" name="name"  style="display: block; color: black;" placeholder="Type your Name" autocomplete="off"><br>

                          <h3 style="font-family:Trebuchet MS;  color: #0c0c0c;"> Prefered date for Appoinment</h3>
                          <input type="date" name="appointment_date"  style="display: block; color:black;"><br>

                          <!-- <h3 style="font-family:Trebuchet MS;  color: #0c0c0c;">Prefered Time</h3>
                          <input type="time" name="appointment_time"  style="display: block; color:black;"><br> -->
                          
                      <h3 style="font-family:Trebuchet MS;  color: #0c0c0c;">Email</h3>
                          <input type="email" name="email" style="display: block; color: black;" placeholder="Type your Email" autocomplete="off"><br>
                          
                      <h3 style="font-family:Trebuchet MS;  color: #0c0c0c;">Contact No</h3>
                          <input type="number" name="phone" style="display: block; color: black;" placeholder="Type your Mobile Number" autocomplete="off"><br>
                          
                      <h3 style="font-family:Trebuchet MS;  color: #0c0c0c;">Appoinment Description</h3>
                          <textarea name="description" id="" cols="50" rows="7" style="display: block; color: black;" placeholder="Type your Message"></textarea><br>

                     <div style="display: inline-flex;">
                      <h3 for="Drs" style="display: block; font-family: Trebuchet MS; color: #0c0c0c;">Select the Specialist:</h3>
                            <select name="specialist" id="Drs" style="display: block; color: black;  display: block; color: black; padding: 0.6rem; width: 15rem; margin-left: 10px;  border-radius: 15px; outline: 0px; border: aliceblue; ">
                              <option value="Dr. V S Hettiarachchi" style="display: block; color: black;">Dr. V S Hettiarachchi</option>
                              <option value="Dr. S.Mithrakumar" style="display: block; color: black;">Dr. S.Mithrakumar</option>
                              <option value="Dr. Mahboob Niraj" style="display: block; color: black;">Dr. Mahboob Niraj</option>
                              <option value="Dr. Lalaniperera" style="display: block; color: black;">Dr. Lalaniperera</option>
                              <option value="Dr. Najimudeen" style="display: block; color: black;">Dr. Najimudeen</option>
                              <option value="Dr. Rani Sandhirapillai" style="display: block; color: black;">Dr. Rani Sandhirapillai</option>
                              <option value="Prof.Suranjith Seneviratna" style="display: block; color: black;">Prof.Suranjith Seneviratna</option>
                              <option value="Prof.Anura Weerasinghe" style="display: block; color: black;">Prof.Anura Weerasinghe</option>
                              <option value="Dr. Ravindran" style="display: block; color: black;">Dr. Ravindran</option>
                              <option value="Dr. Randima Nanayakkara" style="display: block; color: black;">Dr. Randima Nanayakkara</option>
                              <option value="Dr. Mahanada Udukala" style="display: block; color: black;">Dr. Mahanada Udukala</option>
                              <option value="Dr. Jaliya Jayasekera" style="display: block; color: black;">Dr. Jaliya Jayasekera</option>
                              <option value="Prof. Dulani Gunasekera" style="display: block; color: black;">Prof. Dulani Gunasekera</option>
                              <option value="Dr. R. Ajanthan" style="display: block; color: black;">Dr. R. Ajanthan</option>
                              <option value="Dr. Hashir Ariff" style="display: block; color: black;">Dr. Hashir Ariff</option>
                              <option value="Dr. Lalantha Ranasinghe" style="display: block; color: black;">Dr. Lalantha Ranasinghe</option>
                              <option value="Dr. S. Sivaganesh" style="display: block; color: black;">Dr. S. Sivaganesh</option>
                              <option value="Prof. A.H Sherifdeen" style="display: block; color: black;">Prof. A.H Sherifdeen</option>
                            </select>
                          </div>

                          
                      <div class="btn" style="padding: 15px;">
                                <button type="submit" name="submit"  style="font-family:Trebuchet MS; height: 40px; width: 70%; border: none; outline: none; background: #3f20f1; font-size: 1.0625rem; font-weight: 500; cursor: pointer; transition: .3s; border-radius: 15px;">Book Appointment</button>
                              </div>
                        </form>
                      </br>


                        
                
            </div>

                    <!-- form right -->
                    <div class="Form-right">
                      <img src="image/appointment_pic.jpg" style="width: 100%;">
                    </div>
        </div>
    </div>

         

</section>
      <a class="gotopbtn" href="#"> <i class="fas fa-arrow-up"></i> </a>

<?php include('inc/footer_top.php');?>