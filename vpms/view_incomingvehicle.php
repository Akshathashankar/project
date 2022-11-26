<?php 
include('connection.php');
if(isset($_POST['submit']))
  {
    
    $cid=$_GET['viewid'];

    $status=$_POST['status'];
	  
	date_default_timezone_set('Asia/Kolkata');
	  
	$ret=mysqli_query($con,"select * from tblvehicle where ID='$cid'");
	$ret1=mysqli_fetch_array($ret);
  	$intime =strtotime($ret1['InTime']);
	
	$currenttime = strtotime(date('Y-m-d H:i:s')); 
	$hourdiff = abs($currenttime - $intime)/3600;
	$hourdiff = ceil($hourdiff);
	$type = "";
	
	if($ret1['VehicleCategory'] == "Four Wheeler Vehicle"){
			if($hourdiff <= 1)
			{
				$type = "four1";
			}
			else if($hourdiff <= 2 && $hourdiff > 1)
			{
				$type = "four2";
			}
			else 
			{
				
				$type = "four3";
			}
	}
	else
	{
		if($hourdiff <= 1)
			{
				$type = "two1";
			}
			else if($hourdiff <= 2 && $hourdiff > 1)
			{
				$type = "two2";
			}
			else
			{
				$type = "two3";
			}
	}
	
	
	$query1=mysqli_query($con,"select * from parkingcharge where VehicleType='$type'");
	$row1=mysqli_fetch_array($query1);
    
	
    $parkingcharge=$row1['charge'];
     
	if($hourdiff > 3)
	{
		if($ret1['VehicleCategory'] == "Four Wheeler Vehicle")
		{
		$type = "four4+";
		$query2=mysqli_query($con,"select * from parkingcharge where VehicleType='$type'");
		$row2=mysqli_fetch_array($query2);
		$additionalcharge=$row2['charge'];
		$parkingcharge = (($hourdiff-3)*$additionalcharge) + $parkingcharge;
		}
		else
		{
		$type = "two4+";
		$query2=mysqli_query($con,"select * from parkingcharge where VehicleType='$type'");
		$row2=mysqli_fetch_array($query2);
		$additionalcharge=$row2['charge'];
		$parkingcharge = (($hourdiff-3)*$additionalcharge) + $parkingcharge;
		}
	}		
 
    
     
   $query=mysqli_query($con, "update  tblvehicle set Status='$status',ParkingCharge='$parkingcharge' where ID='$cid'");
    if ($query) {
    $msg="All remarks has been updated.";
   }
   else
    {
      $msg="Something Went Wrong. Please try again";
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
                                    
                                    <li><a href="manage_incomingvehicle.php">View Vehicle</a></li>
                                   
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
                   
         

                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">View Incoming Vehicle</strong>
                        </div>
                        <div class="card-body">

 <?php
 $cid=$_GET['viewid'];
$ret=mysqli_query($con,"select * from tblvehicle where ID='$cid'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>                       <table border="1" class="table table-bordered mg-b-0">
   
   <tr>
                                <th>Parking Number</th>
                                   <td><?php  echo $row['ParkingNumber'];?></td>
                                   </tr>                             
<tr>
                                <th>Vehicle Category</th>
                                   <td><?php  echo $row['VehicleCategory'];?></td>
                                   </tr>
                                  
                                <tr>
                                <th>Registration Number</th>
                                   <td><?php  echo $row['RegistrationNumber'];?></td>
                                   </tr>
                                   <tr>
                                    <th>Owner Name</th>
                                      <td><?php  echo $row['OwnerName'];?></td>
                                  </tr>
                                      <tr>  
                                       <th>Owner Contact Number</th>
                                        <td><?php  echo $row['OwnerContactNumber'];?></td>
                                    </tr>
                                    <tr>
                               <th>In Time</th>
                                <td><?php  echo $row['InTime'];?></td>
                            </tr>
                            <tr>
    <th>Status</th>
    <td> <?php  
if($row['Status']=="")
{
  echo "Vehicle In";
}
if($row['Status']=="Out")
{
  echo "Vehicle out";
}

     ;?></td>
  </tr>

</table>

                    </div>
                </div>
                <table class="table mb-0">

<?php if($row['Status']==""){ ?>
        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                                    <p style="font-size:16px; color:red" align="center">
 
<tr>
    <th>Status :</th>
    <td>
   <select name="status" class="form-control" required="true" >
     <option value="Out">Outgoing Vehicle</option>
   </select></td>
  </tr>
                                 
                                    
                                    
                                 <tr>  <p style="text-align: center;"><td> <button type="submit" class="btn btn-primary btn-sm" name="submit" >Update</button></p></td></tr>
                                </form>
                            </table>
<?php } else { ?>
    <table border="1" class="table table-bordered mg-b-0">
  
<tr>
   <tr>
    <th>Parking Fee</th>
   <td><?php echo $row['ParkingCharge']; ?></td>
  </tr>

  

<?php } ?>
</table>


  

  

<?php } ?>
            </div>



        </div>
    </div>
</div>

<div class="clearfix"></div>
<?php include_once('includes/footer.php');?>
<script src="assets/js/main.js"></script>

</body>
</html>