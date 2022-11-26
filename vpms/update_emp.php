<?php
include('connection.php');  
$result = mysqli_query($con,"SELECT * FROM register where person='e'");
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
                            <strong class="card-title">Update employee data</strong>
                        </div>
                        <div class="card-body" align="center">
                             <table border="1" class="table table-bordered mg-b-0" align="center">
                <thead>
                                        <tr>
                                            <tr>
                 
                    <th>User Name</th>
                    <th>Email ID</th>
                    <th>Password</th>
                    
                   
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
<td><?php echo $row["username"]; ?></td>
<td><?php echo $row["email"]; ?></td>
<td><?php echo $row["password"]; ?></td>
<td><a href="update_process.php?username=<?php echo $row["username"]; ?>">Update</a> |
<a href="delete_emp.php?username=<?php echo $row["username"]; ?>">Delete</a></td>
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