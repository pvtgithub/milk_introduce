<?php 
	$key = $_GET["key"];
	require("ketnoi.php");
	$sql= "delete from thongtinsua where stt = $key";
	$result = mysqli_query($conn,$sql);
	if($result){
		mysqli_close($conn);
		header("location:thongtinsua1.php");
	}
	else{
		echo "xóa thất bại";
	}
 ?>