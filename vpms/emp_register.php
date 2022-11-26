

<html> 
    <head> 
	<link rel="stylesheet" href="emp_register.css">
        <script> 
          
            function checkPassword(form) { 
                password = form.password.value; 
                confirmpassword = form.confirmpassword.value;       
                if (password != confirmpassword) { 
                    alert ("\nPassword did not match: Please try again...") 
                    return false; 
                }  
                else{  
                    return true; 
                } 
            } 	
        </script> 
	</head>	
	<body>
     <form method="post" action="connect.php">
	 <div class="register-page">
      <div class="form">
        <div class="register">
          <div class="register-header">
		  <div class="container">
    <h1>Register</h1>
    <p>Please fill this form to register.</p>

    <hr>
	<input type="text" placeholder="Enter Username" name="username" id="username" required>

    <input type="text" placeholder="Enter Email" name="email" id="email" pattern="^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$" required>

    
    <input type="password" placeholder="Enter Password" name="password" id="password" required>

    
    <input type="password" placeholder="Confirm Password" name="confirmpassword" id="confirmpassword" required>
    <hr>
 <input type="text" placeholder=" Enter AGE" name="Age" id="Age" required>
    <hr>

    <button type="submit" class="registerbtn" onclick="return checkPassword(form)"  >Register</button>
  </div>
  </div>
</div>

</div>
</div>
</form>
</body>
</html>