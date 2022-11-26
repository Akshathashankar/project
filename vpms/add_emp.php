<?php
include('connection.php');  
 if(isset($_POST['submit']))
  {
	$username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    
	$query=mysqli_query($con,"INSERT INTO register(username,email,password,person) value('$username','$email','$password','e')");
   if ($query) {
	echo "<script>alert('Employee Entry Detail has been added');</script>";
	echo "<script>window.location.href ='add_emp.php'</script>";
  }
  else
    {
     echo "<script>alert('Something Went Wrong. Please try again.');</script>";       
    }
  }
?>

<html> 
   
     <head>
   <link rel="stylesheet" href="assets/css/bootstrap1.min.css">
   <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/style.css">
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
	
	
        <div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1></h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    
                                    <li><a href="add_emp.php">Back</a></li>
                                    
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content">
            <div class="animated fadeIn">


                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            
                           
                        </div> 

                    </div>

              

                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <strong>Add Employee</strong> 
                            </div>
	
<div class="card-body card-block">
<form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
	<p style="font-size:16px; color:red" align="center"></p>
	
	<div class="row form-group">
	<div class="col col-md-3"><label for="text-input" class=" form-control-label">Username:</label></div>
	<div class="col-12 col-md-9"><input type="text" id="username" name="username" class="form-control" placeholder="Username" required="true"></div>
	</div>
	
	<div class="row form-group">
	<div class="col col-md-3"><label for="text-input" class=" form-control-label">Email:</label></div>
	<div class="col-12 col-md-9"><input type="text" id="email" name="email" class="form-control" placeholder="Email" pattern="^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$" required="true"></div>
	</div>
	
	<div class="row form-group">
	<div class="col col-md-3"><label for="text-input" class=" form-control-label">Password:</label></div>
	<div class="col-12 col-md-9"><input type="password" id="password" name="password" class="form-control" placeholder="Password" required="true"></div>
	</div>
	
	
	<div class="row form-group">
	<div class="col col-md-3"><label for="text-input" class=" form-control-label"> Confirm Password</label></div>
	<div class="col-12 col-md-9"><input type="password" id="confirmpassword" name="confirmpassword" class="form-control" placeholder="Confirm Password" required="true"></div>
	</div>	
	
	<p style="text-align: center;"> <button type="submit" class="btn btn-primary btn-sm" name="submit" onclick="return checkPassword(form)">Submit</button></p>
	
   </div>
                        
                    </div>

                    <div class="col-lg-6">
                        
                  
                </div>

           

            </div>


        </div>
    </div>

    <div class="clearfix"></div>

   <?php include_once('includes/footer.php');?>

</div>
</form>
</body>
</html>