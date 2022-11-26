<?php
 
 include('connection.php');
 ?>

<html>
<head>
<link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="assets/css/bootstrap1.min.css">
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
                                    <li><a href="search.php">Search Vehicle</a></li>
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
                            <strong class="card-title">Search Vehicle</strong>
                        </div>
                        <div class="card-body card-block">
<form action="" method="post" enctype="multipart/form-data" class="form-horizontal" name="search">
		<p style="font-size:16px; color:red" align="center"> 
		
        </p>
	   <div class="row form-group">
        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Search By Parking Number</label></div>
        <div class="col-12 col-md-9"><input type="text" id="searchdata" name="searchdata" class="form-control"  required="required" autofocus="autofocus" ></div>
       </div>
		<p style="text-align: center;"> <button type="submit" class="btn btn-primary btn-sm" name="search" >Search</button></p>
</form>
<?php
if(isset($_POST['search']))
{ 

$sdata=$_POST['searchdata'];
  ?>
  <h4 align="center">"Details of <?php echo $sdata;?>" </h4> 
                       <table border="1" class="table table-bordered mg-b-0" align="center">

                <thead>
                                        <tr>
                                            <tr>
                  <th>S.NO</th>
            
                    <th>Vehicle Type</th>
                    <th>Parking Number</th>
                    <th>Owner Name</th>
                    <th>Vehicle Reg. Number</th>
                   
                          <th>Action</th>
                </tr>
                                        </tr>
                                        </thead>
               <?php
$ret=mysqli_query($con,"select *from   tblvehicle where ParkingNumber like '$sdata%'");
$num=mysqli_num_rows($ret);
if($num>0){
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
 <tr>
                  <td><?php echo $cnt;?></td>
            
                  <td><?php  echo $row['VehicleCategory'];?></td>             
                  <td><?php  echo $row['ParkingNumber'];?></td>
                  <td><?php  echo $row['OwnerName'];?></td>
                  <td><?php  echo $row['RegistrationNumber'];?></td>
                  
                  <td><a href="view_incomingvehicle.php?viewid=<?php echo $row['ID'];?>">View</a></td>
                </tr>
                <?php 
$cnt=$cnt+1;
} } else { ?>
     <tr>
    <td colspan="8"> No record found!</td>

  </tr>
  <?php } }?>
              </table>

                    </div>
                </div>
            </div>



        </div>
    </div>
</div>
<?php include_once('includes/footer.php');?>
<script src="assets/js/main.js"></script>


</body>
</html>

   