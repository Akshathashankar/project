<?php
include('connection.php');  
if(count($_POST)>0) {
mysqli_query($con,"UPDATE tblcategory set ID='" . $_POST['ID'] . "', VehicleCat='" . $_POST['VehicleCat'] . "', Slot='" . $_POST['Slot'] . "' WHERE ID='" . $_POST['ID'] . "'");
echo "<script>alert('sucessfully updated');</script>";
	echo "<script>window.location.href ='update_total_Slots.php'</script>";
}
$result = mysqli_query($con,"SELECT * FROM tblcategory WHERE ID='" . $_GET['ID'] . "'");
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
                                    
                                    <li><a href="update_total_Slots.php">Back</a></li>
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
                            <strong class="card-title">Update Parking Slot</strong>
                        </div>
                        <div class="card-body" align="center">
             

<form name="frmUser" method="post" action="">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
<br>
<input type="hidden" name="ID" class="txtField" value="<?php echo $row['ID']; ?>">
<br>
<div class="row form-group">
<div class="col col-md-3"><label for="text-input" class=" form-control-label">VehicleCat</label></div>
<div class="col-12 col-md-9"><input type="text" name="VehicleCat" class="txtField" value="<?php echo $row['VehicleCat']; ?>"></div>
</div>
<br>
<br>
<div class="row form-group">
<div class="col col-md-3"><label for="text-input" class=" form-control-label">Slots</label></div>
<div class="col-12 col-md-9"><input type="text" name="Slot" class="txtField" value="<?php echo $row['Slot']; ?>"></div>
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