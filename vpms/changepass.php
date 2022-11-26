<html>
  <head>
   <link rel="stylesheet" href="assets/css/bootstrap1.min.css">
   <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/style.css">
	
	 <script>
        function Validate() {
        var npassword = document.getElementById("npassword").value;
        var confirmPassword = document.getElementById("confirmpassword").value;
        if (npassword != confirmPassword) {
            alert("Passwords do not match.");
            return false;
        }
        return true;
    }
  </script>
	
	
  </head>
  
  <body>
    <?php
include('connection.php');
 
     $email = isset($_POST['email']) ? $_POST['email'] : '';
     $password = isset($_POST['password']) ? $_POST['password'] : '';
     
      $query="select * from register where email='$email' && password='$password'";
      $query_run=mysqli_query($con,$query);
    $row=mysqli_fetch_array($query_run);
  ?>
        
    
    <?php
      if(isset($_POST['submit'])){
        $npassword = $_POST['npassword'];
        $password=$_POST['password'];
        $email=$_POST['email'];
    
    $email=$_REQUEST["email"];
    $password=$_REQUEST["password"];
  $sql="select * from register where email='$email' && password='$password' ";
  $result=mysqli_query($con,$sql); 
  $row=mysqli_fetch_array($result);
  if($row["email"] == $email ){
 
      $sql = "update register set password='$npassword' where email ='$email'";

                  if (mysqli_query($con,$sql))
                echo  "<script>alert('Password updated sucessfully!')</script>";
                  echo "<script>location.replace('changepass.php')</script>";
  }
      
else{
    echo  "<script>alert('Your Email or old password is incorrect. Please try again')</script>";
        echo "<script>location.replace('changepass.php')</script>";
    
}
?>

  <?php
    }
    ?>
	
	
	
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
                                    
                                    <li><a href="changepass.php">Back</a></li>
                                    
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
                                <strong class="card-title">Change Password</strong> 
                            </div>
<div class="card-body card-block">
<form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
	<p style="font-size:16px; color:red" align="center"></p>
	
	<div class="row form-group">
	<div class="col col-md-3"><label for="text-input" class=" form-control-label">Email</label></div>
	<div class="col-12 col-md-9"><input type="text" id="email" name="email" class="form-control" placeholder="Email" required="true"></div>
	</div>
	
	<div class="row form-group">
	<div class="col col-md-3"><label for="text-input" class=" form-control-label">Old Password</label></div>
	<div class="col-12 col-md-9"><input type="password" id="password" name="password" class="form-control" placeholder="Old Password" required="true"></div>
	</div>
	
	
	<div class="row form-group">
	<div class="col col-md-3"><label for="text-input" class=" form-control-label"> New Password</label></div>
	<div class="col-12 col-md-9"><input type="password" id="npassword" name="npassword" class="form-control" placeholder="New Password" required="true"></div>
	</div>
	
	<div class="row form-group">
	<div class="col col-md-3"><label for="text-input" class=" form-control-label">Repeat New Password</label></div>
	<div class="col-12 col-md-9"><input type="password" id="confirmpassword" name="confirmpassword" class="form-control" placeholder="Confirm New Password" required="true"></div>
	</div>
	
	<p style="text-align: center;"> <button type="submit" class="btn btn-primary btn-sm" name="submit" onclick="return Validate()">Submit</button></p>
		
	
    

      
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
