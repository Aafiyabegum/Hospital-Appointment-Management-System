<!-- <header>
      <label for="check">
        <i class="fas fa-bars" id="sidebar_btn"></i>
      </label>
      <div class="left_area">
      <a class="navbar-brand" href="#">ARS Hospital</a><span style="font-size: 20px; color: white; float: right;">Hi... <?php echo $fetch_info['names'] ?> </span>
      </div>
      <div class="right_area">
      <button type="button" class="btn btn-primary"><a href="logout-user.php" class="logout_btn">Logout</a></button>
      </div>
    </header> -->
    

    <nav class="navbar"> 
    <a class="navbar-brand" href="#">ARS Hospital</a><span style="font-size: 20px; color: white; float: right;">Hi... <?php echo $fetch_info['names'] ?> </span> 
    <button type="button" class="btn btn-primary"><a href="logout-user.php">Logout</a></button> 
    </nav> 
    <!-- <h2 style="color: blue;"> Welcome <?php echo $fetch_info['names'] ?></h2> -->
    
    <div class="mobile_nav">
      <div class="nav_bar">
        <!-- <img src="1.png" class="mobile_profile_image" alt=""> -->
        <i class="fa fa-bars nav_btn"></i>
      </div>
      <div class="mobile_nav_items">
        <a href="appointments_details.php" style="text-decoration: none;"><i class="fas fa-desktop"></i><span>Appointment's Details</span></a>
        <a href="set_offers.php" style="text-decoration: none;"><i class="fas fa-cogs"></i><span>Set Offers</span></a>
        <a href="offers_view.php" style="text-decoration: none;"><i class="fas fa-table"></i><span>View Offers</span></a>
        <a href="set_events.php" style="text-decoration: none;"><i class="fas fa-cogs"></i><span>Set Events</span></a>
        <a href="events_view.php" style="text-decoration: none;"><i class="fas fa-table"></i><span>View Events</span></a>
        <!-- <a href="#"><i class="fas fa-sliders-h"></i><span>Settings</span></a> -->
      </div>
    </div>

    <div class="sidebar">
      <!-- <div class="profile_info">
        <img src="1.png" class="profile_image" alt="">
         <h4>Jessica</h4>
      </div> -->
        <a href="appointments_details.php"  style="text-decoration: none;"><i class="fas fa-desktop"></i><span>Appointment's Details</span></a>
        <a href="set_offers.php" style="text-decoration: none;"><i class="fas fa-cogs"></i><span>Set Offers</span></a>
        <a href="offers_view.php" style="text-decoration: none;"><i class="fas fa-table"></i><span>View Offers</span></a>
        <a href="set_events.php" style="text-decoration: none;"><i class="fas fa-cogs"></i><span>Set Events</span></a>
        <a href="events_view.php" style="text-decoration: none;"><i class="fas fa-table"></i><span>View Events</span></a>
      <!-- <a href="#"><i class="fas fa-sliders-h"></i><span>Settings</span></a> -->
    </div>


    <!-- <div style="padding: 25px;">
        <button type="button" class="btn btn-primary"><a href="appointments_details.php">Appointment's Details</a></button>
        <button type="button" class="btn btn-primary"><a href="set_offers.php">Set Offers</a></button>
        <button type="button" class="btn btn-primary"><a href="offers_view.php">View Offers</a></button>
        <button type="button" class="btn btn-primary"><a href="set_events.php">Set Events</a></button>
        <button type="button" class="btn btn-primary"><a href="events_view.php">View Events</a></button>

    </div> -->

    <script type="text/javascript">
    $(document).ready(function(){
      $('.nav_btn').click(function(){
        $('.mobile_nav_items').toggleClass('active');
      });
    });
    </script>