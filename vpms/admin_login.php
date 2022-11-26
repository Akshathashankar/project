<?php      
    include('connection.php'); 
	if(isset($_POST['login']))
    {
		$username = $_POST['username'];  
		$password = $_POST['password'];  
      
		
		$sql = "select * from register where username = '$username' and password = '$password'";  
		$result = mysqli_query($con, $sql);  
		$row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
		  
		
	
			
			if($row>0 && $row["person"] == "a")
			{  
				echo"<script>alert('welcome! you have successfully logged in.')</script>";
				echo"<script>location.replace('index.html')</script>";
			}  
			else
			{  
			  echo"<script>alert('your username or  password is incorrect. please try again.')</script>";
			  echo"<script>location.replace('admin_login.php')</script>";
			}
		
    }		
?>  


<html>
<head>
<link rel="stylesheet" href="admin.css">
<title> Floor Parking Management System </title>
</head>
<body>
  <body>
    <div class="login-page">
      <div class="form">
        <div class="login">
         <div class="login-header">
            <h3>ADMIN</h3>
            <p>Please enter your details to login.</p>
          </div>
        </div>
        <form method="post" class="login-form" >
          <input type="text" placeholder="username" id="username" name="username" required>
          <input type="password" placeholder="password" id="password" name="password" required>
          <button type="submit" name="login">login</button>
          <p class="message">Are you an employee? <a href="emp_login.php">login</a></p>
        </form>
      </div>
    </div>
</body>
</body>
</html>