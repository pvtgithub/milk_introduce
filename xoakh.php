<?php 
	/*lấy key truyền trên đường dẫn từ file danhsach.php*/
	$key = $_GET["key"];
	/*mở kết nối csdl*/
	require("ketnoi.php");
	/*thực hiện truy vấn*/
	$sql= "delete from khachhang where id = $key";
	$result = mysqli_query($conn,$sql);
	if($result){
		mysqli_close($conn);
		header("location:thongtinkh1.php");
	}
	else{
		echo "xóa thất bại";
	}
 ?>