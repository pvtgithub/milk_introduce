<!DOCTYPE html>
<html>
<head>
	<title>Sửa Khách Hàng</title>
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
			$sql="select* from khachhang where id=$key";
			$result = mysqli_query($conn,$sql);
			$row = mysqli_fetch_assoc($result);
		//cập nhật
		if(isset($_POST["btncapnhat"])){
			$makh=$_POST["txtma"];
			$tenkh=$_POST["txtten"];
			$gioitinh=$_POST["txtgt"];
			$diachikh=$_POST["txtdiachi"];
			$dienthoaikh=$_POST["txtdienthoai"];
			$emailkh = $_POST["txtemail"];
			/*thực hiện truy vấn update*/
			$sql = "update khachhang set makh = '$makh',
										tenkh = '$tenkh',
										gioitinhkh = '$gioitinh',
										diachikh = '$diachikh',
										dienthoaikh = '$dienthoaikh',
										emailkh = '$emailkh'
										where id = $key";
			$result = mysqli_query($conn, $sql);
		if($result){
			/*đóng kết nối*/
			mysqli_close($conn);
			/*quay về trang danhsach.php*/
			header("location:thongtinkh1.php");
		}
		else{
			echo "update dữ iệu thất bại";
		}
		}
	 ?>
	<div id="container">
		<form method="POST">
			<div id="menu">
				<table border="2">
				<tr><th colspan="2" style="background-color: lightblue">Cập nhật thông tin khách hàng</th></tr>
				<tr>
					<td>Mã khách hàng</td>
					<td><input type="text" name="txtma" value="<?php echo $row['makh'] ?>"></td>
				</tr>
				<tr>
					<td>Tên khách hàng</td>
					<td><input type="text" name="txtten" value="<?php echo $row['tenkh'] ?>"></td>
				</tr>
				<tr>
					<td>Giới tính</td>
					<td>
						<input type="radio" name="txtgt" value="Nam" <?php if ($row['gioitinhkh']='Nam') {
							echo "selected";
						} ?>><label>Nam</label>
						<input type="radio" name="txtgt" value="Nữ" <?php if ($row['gioitinhkh']='Nữ') {
							echo "selected";
						} ?>><label>Nữ</label></td>
				</tr>
				<tr>
					<td>Địa chỉ</td>
					<td><input type="text" name="txtdiachi" value="<?php echo $row['diachikh'] ?>"></td>
				</tr>
				<tr>
					<td>Điện thoại</td>
					<td><input type="number" name="txtdienthoai" value="<?php echo $row['dienthoaikh'] ?>"></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="text" name="txtemail" value="<?php echo $row['emailkh'] ?>"></td>
				</tr>
				<tr>
					<td><input type="submit" name="btncapnhat" value="Cập nhật"></td>
					<td><input type="submit" name="btnhuy" value="Hủy"></td>
				</tr>
			</table>
			</div>
		</form>
	</div>
</body>
</html>