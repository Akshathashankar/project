
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome!!</title>
    <link rel="stylesheet" href="style.css">
    
  </head>
  <body>

    <input type="checkbox" id="check">
   
    <header>
      <label for="check">
        <i class="fas fa-bars" id="sidebar_btn"></i>
      <div class="left_area">
        <h3><span>Employee</span></h3>
      </div>
      <div class="right_area">
        <a href="welcome.html" class="logout_btn">Logout</a>
      </div>
    </header>
    <i class="fa fa-bars nav_btn"></i>
    <div class="sidebar">
      
      <a target="add" href="dashboard.php"><i class="active"></i><span>Dashboard</span></a>
      <a target="add" href="add_vehicle.php"><i class="active"></i><span>Add Vehicle</span></a>
      
        <a target="add" href="manage_incomingvehicle.php"><i class=""></i><span>Manage Incoming Vehicle</span></a>
		<a target="add" href="manage_outgoingvehicle.php"><i class=""></i><span>Manage Outgoing Vehicle</span></a>

      <a target="add" href="search.php"><i class=""></i><span>Search Vehicle</span></a>
      <a target="add" href="changepass.php"><i class="active"></i><span>Change Password</span></a>
    </div>
    

	<div class="content">
	<iframe name="add" src="" width="100%"  
        height="100%" frameBorder="0"></iframe>
	</div>
  </body>
</html>

