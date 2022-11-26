<?php      
    include('connection.php');  
    if(isset($_POST['submit']))
  {
	$username = $_POST['username'];  
    $password = $_POST['password'];  
      
         
        $username = $_REQUEST["username"];  
        $password = $_REQUEST["password"];  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select * from register where username = '$username' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            echo"<script>alert('welcome! you have successfully logged in.')</script>";
			echo"<script>location.replace('emp_dashboard.php')</script>";
        }  
        else{  
          echo"<script>alert('your username or  password is incorrect. please try again.')</script>";
		echo"<script>location.replace('emp_login.html')</script>";
        }
  }		
?>  

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="employee.css">
<title> Floor Parking Management System </title>
</head>
<body>
  <body>
    <div class="login-page">
      <div class="form">
        <div class="login">
          <div class="login-header">
            <h3>EMPLOYEE LOGIN</h3>
            <p>Please enter your details to login.</p>
          </div>
        </div>
        <form method="post" class="login-form" >
          <input type="text" placeholder="username" name="username" required>
          <input type="password" placeholder="password" name="password" required>
          <button type="submit">login</button>
          <p class="message">Are you a admin? <a href="admin_validate.php">admin</a></p>
        </form>
      </div>
    </div>
</body>
</body>
</html>