 <!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> Hospital Management System Website</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php 
    error_reporting(0);
    ?>
	<style>
	#rizky{
	color:black;
	}
	.rizky{
	color:green;}
	
	.newp{
	
    font-size: 19px;
    font-family: cursive;
    color: black;
}

	</style>
  </head>
  <body>
    <nav>
      <div class="logo"> <a href="index.php" style="text-decoration: none;">ARS <label style="color:blue;">Hospital</label></a> </div>
      <label for="btn" class="icon">
        <span class="fa fa-bars"></span>
      </label>
      <input type="checkbox" id="btn">
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><label for="btn-1" class="show">About Us +</label>
          <a>About Us</a><input type="checkbox" id="btn-1">
          <ul>
              <li><a href="about_us.php">Introduction</a></li>
              <li><a href="rules_regulation.php">Rules & Regulation</a></li>
              <li><a href="staffs.php">Our Doctors</a></li>
          </ul>
        </li>
<li>
          <label for="btn-2" class="show">Departments +</label>
          <a>Departments</a>
          <input type="checkbox" id="btn-2">
          <ul>

<li><a href="paediatrics.php">Paediatrics</a></li>
<li><a href="oncology.php">Oncology</a></li>
<li><a href="cardiology.php">Cardiology</a></li>
<li><a href="surgical.php">Surgery</a></li>
<li><a href="immunology.php">Immunology</a></li>
<li><a href="gynaecology.php">Gynaecology</a></li>

</ul>
</li>
<li><a href="events.php">Events</a></li>
<li><a href="appointments.php">Appointments</a></li>


<li><a href="contact_us.php">Contact Us</a></li>
<li><a href="login.php">Login</a></li>
</ul>
</nav>













<!-- adding style css -->
  <link rel="stylesheet" href="css/pro.css">