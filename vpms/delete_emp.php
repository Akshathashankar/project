<?php
include('connection.php'); 
$sql = "DELETE FROM register WHERE username='" . $_GET["username"] . "'";
if (mysqli_query($con, $sql)) {
    echo "<script>alert('sucessfully deleted');</script>";
	echo "<script>window.location.href ='retrieve.php'</script>";
} else {
    echo "<script>alert('something went wrong');</script>" . mysqli_error($con);
}
mysqli_close($con);
?>
