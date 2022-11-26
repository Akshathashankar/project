<?php 
include('connection.php');
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
                                    
                                    <li><a href="manage_outgoingvehicle.php">View Vehicle</a></li>
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
                            <strong class="card-title">View Outgoing Vehicle</strong>
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
                               <th>Out Time</th>
                                <td><?php  echo $row['OutTime'];?></td>
                            </tr>
     
   <tr>
    <th>Status</th>
    <td><?php echo $row['Status']; ?></td>
  </tr>
<tr>
   <tr>
    <th>Parking Fee</th>
   <td><?php echo $row['ParkingCharge']; ?></td>
  </tr>


                           

</table>

 </div>
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
<?php }  ?>