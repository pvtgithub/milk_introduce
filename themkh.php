<!DOCTYPE html>
<html>
<head>
	<title>Thêm khách hàng</title>
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
		if(isset($_POST["btnthem"])){
			$makh =$_POST["txtma"];
			$tenkh = $_POST["txtten"];
			$gioitinhkh = $_POST["txtgt"];
			$diachikh= $_POST["txtdiachi"];
			$dienthoaikh = $_POST["txtdienthoai"];
			$emailkh = $_POST["txtemail"];
			require("ketnoi.php");
			$sql = "insert khachhang(makh,tenkh,gioitinhkh,diachikh,dienthoaikh,emailkh)
							value('$makh','$tenkh','$gioitinhkh','$diachikh',$dienthoaikh,'$emailkh')";
			$result = mysqli_query($conn,$sql);
			if($result){
				mysqli_close($conn);
				header("location:thongtinkh1.php");
			}
			else{
				echo "thêm dữ liệu thất bại";
			}
		}
	 ?>
	<div id="container">
		<form method="POST">
			<table border="1"> 
				<tr>
					<th colspan="2" style="background-color: lightblue">Nhập thông tin khách hàng cần thêm</th>
				</tr>
				<tr>
					<td>Mã khách hàng</td>
					<td><input type="text" name="txtma"></td>
				</tr>
				<tr>
					<td>Tên khách hàng</td>
					<td><input type="text" name="txtten"></td>
				</tr>
				<tr>
					<td>Giới tính</td>
					<td>
						<input type="radio" name="txtgt" value="Nam"><label>Nam</label>
						<input type="radio" name="txtgt" value="Nữ"><label>Nữ</label></td>
				</tr>
				<tr>
					<td>Địa chỉ</td>
					<td><input type="text" name="txtdiachi"></td>
				</tr>
				<tr>
					<td>Điện thoại</td>
					<td><input type="number" name="txtdienthoai"></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="text" name="txtemail"></td>
				</tr>
				<tr>
					<td><input type="submit" name="btnthem" value="Thêm"></td>
					<td><input type="submit" name="btnhuy" value="Hủy"></td>
				</tr>
			</table>
		</form>
	</div>
</body>
</html>