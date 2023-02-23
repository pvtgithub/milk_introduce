<!DOCTYPE html>
<html>
<head>
	<title>Thông tin khách hàng</title>
	<link rel="stylesheet" type="text/css" href="giaodien.css">
	<style type="text/css">
		table{
			margin: auto;
			width: 1000px;
			height: 500px;
		}
		#menu{
		margin-left: 400px;
		height: 100px;
	}
	</style>
</head>
<body background="image\nen.jpg" id="nen">
	<?php 
		require("ketnoi.php");
		$sql = "select *from khachhang";
		$result = mysqli_query($conn,$sql);
	 ?>
	<div id="container">
		<div id="menu">
			<ul>
				<li><a href="trangchu.php">Trang Chủ</a></li>		
				<li><a href="giaodien.php">Thông Tin Hãng Sữa</a></li>
				<li><a href="thongtinsua.php">Thông Tin Sữa</a></li>
				<li><a href="thongtinkh.php">Thông Tin Khách Hàng</a></li>
				<li><a href="login.php">Đăng Nhập</a></li>
			</ul>
		</div>
				<form>
					<table border="1">
						<tr><th colspan="6" style="background-color: lightblue"><span id="tt">Thông Tin Khách Hàng</span></th></tr>
						<tr>
							<td>Mã KH</td>
							<td>Tên khách hàng</td>
							<td>Giới tính</td>
							<td>Địa chỉ</td>
							<td>Số điện thoại</td>
							<td>Email</td>
						</tr>
						<?php 
							/*Lấy từng hàng của bảng $result gán cho biến row*/
							while($row = mysqli_fetch_assoc($result))
							{	
						 ?>
						<tr>
							<td><?php echo $row["makh"] ?></td>
							<td><?php echo $row["tenkh"] ?></td>
							<td><?php echo $row["gioitinhkh"] ?></td>
							<td><?php echo $row["diachikh"] ?></td>
							<td><?php echo $row["dienthoaikh"] ?></td>
							<td><?php echo $row["emailkh"] ?></td>
						</tr>
						<?php 
							/*đóng lệnh while*/
							} 
							/*đóng kết nối*/
							mysqli_close($conn);
				 		?>
				 		<tr><th colspan="6" style="background-color: lightblue"><a href="login.php" style="color: blue">Đăng nhập</a> để thay đổi thông tin khách hàng</th></tr>
					</table>
				</form>
	</div>
</body>
</html>