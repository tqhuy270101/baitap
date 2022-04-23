<?php 
    session_start();
    if (!isset($_SESSION['email']) || $_SESSION['email'] != 'admin@gmail.com') {
        header("location: ../dangnhap.php");
    }
 ?>
<?php 
	$conn = mysqli_connect("localhost", "root", "", "demo");
	$sql = "DELETE FROM users WHERE id=".$_GET['id'];
	$ketqua = mysqli_query($conn, $sql);
	header("location:accounts.php?id=32");

	 ?>