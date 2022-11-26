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
                                    <li><a href="manage_incomingvehicle.php">Manage Vehicle</a></li>
                                    
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
                            <strong class="card-title">Manage Incoming Vehicle</strong>
                        </div>
                        <div class="card-body">
                    <table border="1" class="table table-bordered mg-b-0" align="center">

                <thead>
                                        <tr>
                                            <tr>
                  <th>S.NO</th>
            
                    <th>Vehicle Type</th>
                    <th>Parking Number</th>
                    <th>Owner Name</th>
                    <th>Vehicle Reg Number</th>
                   
                          <th>Action</th>
                </tr>
                                        </tr>
                                        </thead>
               <?php
$ret=mysqli_query($con,"select *from   tblvehicle where Status=''");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {
?>
              
                <tr>
                  <td><?php echo $cnt;?></td>
            
                  <td><?php  echo $row['VehicleCategory'];?></td>
                  <td><?php  echo $row['ParkingNumber'];?></td>
                  <td><?php  echo $row['OwnerName'];?></td>
                  <td><?php  echo $row['RegistrationNumber'];?></td>
                  
                  <td><a href="view_incomingvehicle.php?viewid=<?php echo $row['ID'];?>">View</a> | 

<a href="print.php?vid=<?php echo $row['ID'];?>" style="cursor:pointer" target="_blank">Print</a>
                  </td>
                </tr>
                <?php 
$cnt=$cnt+1;
}?>
              </table>

                    </div>
                </div>
            

   

    
<div class="clearfix"></div>
<?php include_once('includes/footer.php');?>
<script src="assets/js/main.js"></script>

</body>
</html>