<?php
include('connection.php');  
$result = mysqli_query($con,"SELECT * FROM parkingcharge");
?>


<html>

<head>
<link rel="stylesheet" href="assets/css/bootstrap1.min.css">
       
<link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<div class="content">
            <div class="animated fadeIn">
                <div class="row">
                   
         

                <div class="col-lg-12">
<div class="card">
                        <div class="card-header" align="center">
                            <strong class="card-title">Update Parking Charge</strong>
                        </div>
                        <div class="card-body" align="center">
                             <table border="1" class="table table-bordered mg-b-0" align="center">
                <thead>
                                        <tr>
                                            <tr>
                 
                    <th>Vehicle Type</th>
                    <th>Hours</th>
                    <th>Charge</th>
                    
                   
                              <th>Action</th>
                </tr>
                                        </tr>
                                        </thead>

<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
if($i%2==0)
$classname="even";
else
$classname="odd";
?>
<tr class="<?php if(isset($classname)) echo $classname;?>">
<td><?php echo $row["VehicleType"]; ?></td>
<td><?php echo $row["hours"]; ?></td>
<td><?php echo $row["charge"]; ?></td>
<td><a href="update_parking_charge_process.php?VehicleType	=<?php echo $row["VehicleType"]; ?>">Update</a></td>

</tr>
<?php
$i++;
}
?>
</table>
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