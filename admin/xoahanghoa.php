<?php 
    session_start();
    if (!isset($_SESSION['email']) || $_SESSION['email'] != 'admin@gmail.com') {
        header("location: ../dangnhap.php");
    }
 ?>
<?php 	
	$conn = mysqli_connect("localhost","root","","demo");
    $sql = "DELETE FROM hanghoa WHERE id=".$_GET['id'];
    $ketqua = mysqli_query($conn,$sql);
    header("location: product.php?id=1");
 ?>