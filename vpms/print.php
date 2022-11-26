<?php 
include('connection.php');
?>
<link rel="stylesheet" href="assets/css/bootstrap1.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/style.css">
<?php
 $cid=$_GET['vid'];
$ret=mysqli_query($con,"select * from tblvehicle where ID='$cid'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {
  ?>        
    
<div  id="exampl">

	<table border="1" class="table table-bordered mg-b-0">
	<tr>
	  <th colspan="4" style="text-align: center; font-size:22px;"> Vehicle Parking receipt</th>

	</tr>
   
   <tr>
	<th>Parking Number</th>
	<td><?php  echo $row['ParkingNumber'];?></td>
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
       <th>Owner Contact Number</th>
		<td><?php  echo $row['OwnerContactNumber'];?></td>
	</tr>
	<tr>
	<th>In Time</th>
	<td><?php  echo $row['InTime'];?></td>
    <th>Status</th>
    <td> <?php  
				if($row['Status']=="")
				{
				  echo "Incoming Vehicle";
				}
				if($row['Status']=="Out")
				{
				  echo "Outgoing Vehicle";
				}

				;?></td>
	</tr>
		
		<tr>
		<th>Out time</th>
		<td><?php  echo $row['OutTime'];?></td>
		<th>Parking Charge</th>
		<td><?php  echo $row['ParkingCharge'];?></td>
		</tr>
		


	
	  <tr>
		<td colspan="4" style="text-align:center; cursor:pointer"><i class="fa fa-print fa-2x" aria-hidden="true" OnClick="CallPrint(this.value)"  ></i></td>
	  </tr>

	</table>
            <?php }  ?>
          </div>
            <script>
function CallPrint(strid) {
var prtContent = document.getElementById("exampl");
var WinPrint = window.open('', '', 'left=0,top=0,width=800,height=900,toolbar=0,scrollbars=0,status=0');
WinPrint.document.write(prtContent.innerHTML);
WinPrint.document.close();
WinPrint.focus();
WinPrint.print();
WinPrint.close();
}
</script> 