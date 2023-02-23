<!DOCTYPE html>
<html>
<head>
	<title>Sửa thông tin sữa</title>
	<style type="text/css">
		table{
			margin: auto;
			border-collapse: collapse;
			text-align: center;
		}
	</style>

</head>
<body>
	<?php 
			$key = $_GET["key"];
			require("ketnoi.php");
			$sql="select* from thongtinsua where stt=$key";
			$result = mysqli_query($conn,$sql);
			$row = mysqli_fetch_assoc($result);
		//cập nhật
		if(isset($_POST["btncapnhat"])){
			$stt=$_POST["txtstt"];
			$tensua=$_POST["txtten"];
			$hangsua=$_POST["txthangsua"];
			$loaisua=$_POST["txtloaisua"];
			$trongluong=$_POST["txttrongluong"];
			$dongia=$_POST["txtdongia"];
			$thanhphan = $_POST["txttp"];
			$loiich = $_POST["txtli"];
			$image = $_POST["txtha"];
			/*thực hiện truy vấn update*/
			$sql = "update thongtinsua set stt = '$stt',
										tensua = '$tensua',
										hangsua = '$hangsua',
										loaisua = '$loaisua',
										trongluongsua = '$trongluong',
										dongiasua = '$dongia',
										thanhphansua ='$thanhphan',
										loiichsua = '$loiich',
										image = '$image' 
										where stt = $key";
			$result = mysqli_query($conn, $sql);
		if($result){
			/*đóng kết nối*/
			mysqli_close($conn);
			/*quay về trang danhsach.php*/
			header("location:thongtinsua1.php");
		}
		else{
			echo "update dữ iệu thất bại";
		}
		}
	 ?>
	<div id="container">
		<form action="" method="POST">
			<table border="1">
				<tr>
					<th colspan="2" style="background-color: lightblue">Cập nhật thông tin sữa</th>
				</tr>
				<tr>
					<td>Số thứ tự</td>
					<td><input type="number" name="txtstt" value="<?php echo $row['stt'] ?>"></td>
				</tr>
				<tr>
					<td>Tên sữa</td>
					<td><input type="text" name="txtten" value="<?php echo $row['tensua']?>"></td>
				</tr>
				<tr>
					<td>Hãng sữa</td>
					<td><input type="text" name="txthangsua" value="<?php echo $row['hangsua']?>"></td>
				</tr>
				<tr>
					<td>Loại sữa</td>
					<td><input type="text" name="txtloaisua" value="<?php echo $row['loaisua']?>"></td>
				</tr>
				<tr>
					<td>Trọng lượng</td>
					<td><input type="text" name="txttrongluong" value="<?php echo $row['trongluongsua']?>"></td>
				</tr>
				<tr>
					<td>Đơn giá</td>
					<td><input type="text" name="txtdongia" value="<?php echo $row['dongiasua']?>"></td>
				</tr>
				<tr>
					<td>Thành phần dinh dưỡng</td>
					<td><input type="text" name="txttp" value="<?php echo $row['thanhphansua'] ?>"></td>
				</tr>
				<tr>
					<td>Lợi ích</td>
					<td><input type="text" name="txtli" value="<?php echo $row['loiichsua'] ?>"></td>
				</tr>
				<tr>
					<td>Hình ảnh</td>
					
					<td><input type="file" name="txtha" value="<?php echo "<img src='image/".$row["image"]."'>"; ?>"></td>
				</tr>

				<tr>
					<td><input type="submit" name="btncapnhat" value="Cập nhật"></td>
					<td><input type="submit" name="btnhuy" value="Hủy"></td>
				</tr>
			</table>
		</form>
	</div>
</body>
</html>