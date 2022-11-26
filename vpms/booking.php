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
                                    
                                    <li><a href="booking.php">Back</a></li>
                                    
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
                                <strong>Book Slot</strong> 
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
	<div class="row form-group">
	<div class="col col-md-3"><label for="text-input" class=" form-control-label">start date</label></div>
	<div class="col-12 col-md-9"><input type="date" id="startdate" name="txtstartdate" class="startdate" placeholder="" required="true"></div>
	</div>
	<div class="row form-group">
	<div class="col col-md-3"><label for="text-input" class=" form-control-label">start time</label></div>
	<div class="col-12 col-md-9"><input type="time" id="starttime" name="intime" class="starttime" placeholder="" required="true"></div>
	</div>
 
<p style="text-align: center;"> <button type="submit" class="btn btn-primary btn-sm"  id="submit" name="submit" >Book</button></p>
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
