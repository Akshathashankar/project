 <?php
 
 include('connection.php');
 if(isset($_POST['submit']))
  {
	
	  function generatePno(){
	  $number=mt_rand(1, 100);
	  $characters = 'LGU'; 
      $randomString = ''; 
  
		for ($i = 0; $i < 1; $i++) { 
			$index = rand(0, strlen($characters) - 1); 
			$randomString .= $characters[$index]; 
		} 
		return $randomString.$number;
	}
	
	
	
	if($_POST['catename'] == "Four Wheeler Vehicle")
	{
	$query1=mysqli_query($con, "select COUNT(*) from tblvehicle where VehicleCategory = 'Four Wheeler Vehicle' AND Status=''");
	$fourcount=mysqli_fetch_array($query1);
	$type="Four Wheeler Vehicle";
	$query2=mysqli_query($con, "select * from tblcategory where VehicleCat= '$type'");
	$result2=mysqli_fetch_array($query2);
		if($fourcount[0] >= $result2['Slot'])
		{
			echo "<script>alert('Four wheeler slots are full');</script>";    
			echo "<script>window.location.href ='add_vehicle.php'</script>";
		}
		else
		{
			$parkingnumber=generatePno();
		$catename=$_POST['catename'];
		$vehreno=$_POST['vehreno'];
		$ownername=$_POST['ownername'];
		$ownercontno=$_POST['ownercontno'];
		
			$query=mysqli_query($con, "insert into  tblvehicle(ParkingNumber,VehicleCategory,RegistrationNumber,OwnerName,OwnerContactNumber) value('$parkingnumber','$catename','$vehreno','$ownername','$ownercontno')");
		if ($query) {
		echo "<script>alert('Vehicle Entry Detail has been added');</script>";
		echo "<script>window.location.href ='manage_incomingvehicle.php'</script>";
		  }
		  else
			{
			 echo "<script>alert('Something Went Wrong. Please try again.');</script>";       
			}
		}
	}
	else
	{
	$query3=mysqli_query($con, "select COUNT(*) from tblvehicle where VehicleCategory = 'Two Wheeler Vehicle' AND Status=''");
	$twocount=mysqli_fetch_array($query3);
	
	$query4=mysqli_query($con, "select * from tblcategory where VehicleCat= 'Two Wheeler Vehicle'");
	$result4=mysqli_fetch_array($query4);	
		if($twocount[0] >= $result4['Slot'] )
		{
			echo "<script>alert('Two wheeler slots are full');</script>";   
            echo "<script>window.location.href ='add_vehicle.php'</script>";			
		}
		else
		{
			$parkingnumber=generatePno();
		$catename=$_POST['catename'];
		$vehreno=$_POST['vehreno'];
		$ownername=$_POST['ownername'];
		$ownercontno=$_POST['ownercontno'];
			$query=mysqli_query($con, "insert into  tblvehicle(ParkingNumber,VehicleCategory,RegistrationNumber,OwnerName,OwnerContactNumber) value('$parkingnumber','$catename','$vehreno','$ownername','$ownercontno')");
		if ($query) {
		echo "<script>alert('Vehicle Entry Detail has been added');</script>";
		echo "<script>window.location.href ='manage_incomingvehicle.php'</script>";
		  }
		  else
			{
			 echo "<script>alert('Something Went Wrong. Please try again.');</script>";       
			}
		}
	}
	
  }
?> 


<html>

<head>


    
  
 <link rel="stylesheet" href="assets/css/bootstrap1.min.css">
       
<link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/style.css">
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
                                    
                                    <li><a href="add_vehicle.php">Back</a></li>
                                    
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
                                <strong>Add Vehicle</strong> 
                            </div>
                            <div class="card-body card-block">
<form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
	<p style="font-size:16px; color:red" align="center"></p>
                                   

    <div class="row form-group">
	<div class="col col-md-3"><label for="select" class=" form-control-label">Select</label></div>
	<div class="col-12 col-md-9">
		<select name="catename" id="catename" class="form-control">
			<option value="0">Select Category</option>
			<?php $query=mysqli_query($con,"select * from tblcategory");
              while($row=mysqli_fetch_array($query))
              {
              ?>    
				 <option value="<?php echo $row['VehicleCat'];?>"><?php echo $row['VehicleCat'];?></option>
                  <?php } ?> 
		</select>
		</div>
	</div>
                                   
                                 
	<div class="row form-group">
	<div class="col col-md-3"><label for="text-input" class=" form-control-label">Registration Number</label></div>
	<div class="col-12 col-md-9"><input type="text" id="vehreno" name="vehreno" class="form-control" placeholder="Registration Number" required="true"></div>
	</div>
	<div class="row form-group">
	<div class="col col-md-3"><label for="text-input" class=" form-control-label">Owner Name</label></div>
	<div class="col-12 col-md-9"><input type="text" id="ownername" name="ownername" class="form-control" placeholder="Owner Name" required="true"></div>
	</div>
	<div class="row form-group">
	<div class="col col-md-3"><label for="text-input" class=" form-control-label">Owner Contact Number</label></div>
	<div class="col-12 col-md-9"><input type="text" id="ownercontno" name="ownercontno" class="form-control" placeholder="Owner Contact Number" required="true" maxlength="10" pattern="[0-9]+"></div>
	</div>



	<p style="text-align: center;"> <button type="submit" class="btn btn-primary btn-sm" name="submit" >Add</button></p>
	</form>
	
	 </div>
                            
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
<script src="assets/js/main.js"></script>
</body>
</html>