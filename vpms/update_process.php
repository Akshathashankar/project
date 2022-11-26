<?php
include('connection.php');  
if(count($_POST)>0) {
mysqli_query($con,"UPDATE register set username='" . $_POST['username'] . "', email='" . $_POST['email'] . "', password='" . $_POST['password'] . "' WHERE username='" . $_POST['username'] . "'");
echo "<script>alert('sucessfully updated');</script>";
	echo "<script>window.location.href ='retrieve.php'</script>";
}
$result = mysqli_query($con,"SELECT * FROM register WHERE username='" . $_GET['username'] . "'");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
<link rel="stylesheet" href="assets/css/bootstrap1.min.css">
<link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/style.css">

</head>
<body>
  <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    
                                    <li><a href="retrieve.php">Employee List</a></li>
                                </ol>
                            </div>
                        </div>
                    </div>



<div class="content">
            <div class="animated fadeIn">
                <div class="row">
                   
         

                <div class="col-lg-12">
<div class="card">
                        <div class="card-header" align="center">
                            <strong class="card-title">Update employee data</strong>
                        </div>
                        <div class="card-body" align="center">
                             

<form name="frmUser" method="post" action="">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
                    
<input type="hidden" name="username" class="txtField" value="<?php echo $row['username']; ?>">
<div class="row form-group">
	<div class="col col-md-3"><label for="text-input" class=" form-control-label">Email</label></div>
	<div class="col-12 col-md-9"><input type="text" name="email" class="txtField" value="<?php echo $row['email']; ?>"></div>
	</div>
<br>
<div class="row form-group">
	<div class="col col-md-3"><label for="text-input" class=" form-control-label">Password</label></div>
	<div class="col-12 col-md-9"><input type="text" name="password" class="txtField" value="<?php echo $row['password']; ?>"></div>
</div>
<br>
<p style="text-align: center;"><input type="submit" name="submit" value="Submit" class="btn btn-primary btn-sm">


</form>
</div>
                </div>

        </div>
    </div>
</div>       
<div class="clearfix"></div>
<?php include_once('includes/footer.php');?>
<script src="assets/js/main.js"></script>
</body>
</html>