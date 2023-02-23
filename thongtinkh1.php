<!DOCTYPE html>
<html>
<head>
	<title>Chỉnh sửa thông tin khách hàng</title>
	<link rel="stylesheet" type="text/css" href="admin1.css">
</head>
<body background="image\nen2.jpg" id="nen">
	<?php 
		require("ketnoi.php");
		$sql = "select *from khachhang";
		$result = mysqli_query($conn,$sql);
	 ?>
	<div id="container">
		<?php
		session_start();
		if (isset($_SESSION["user"])){
		?>
		<div id="menu">	
				
			<ul>
				<li><a href="giaodienadmin.php">Trang Chủ</a></li>
				<li><a href="giaodien1.php">Thông Tin Hãng Sữa</a></li>
				<li><a href="thongtinsua1.php">Thông Tin Sữa</a></li>
				<li><a href="thongtinkh1.php">Thông Tin Khách Hàng</a></li>
			</ul>
		</div>
				<form>
					<table border="1">
						<tr><th colspan="8" style="background-color: lightblue"><span id="tt">Thông Tin Khách Hàng</span></th></tr>
						<tr>
							<td>Mã KH</td>
							<td>Tên khách hàng</td>
							<td>Giới tính</td>
							<td>Địa chỉ</td>
							<td>Số điện thoại</td>
							<td>Email</td>
							<th colspan="2"><a href="themkh.php">Thêm khách hàng</a></td>
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
							<th><a href="suakh.php?key=<?php echo $row['id']; ?>">Sửa</a></td>
							<th><a href="xoakh.php?key=<?php echo $row['id']; ?>" onclick="return confirm('Bạn có muốn xóa?');">Xóa</a></td>
						</tr>
						<?php 
							/*đóng lệnh while*/
							} 
							/*đóng kết nối*/
							mysqli_close($conn);
				 		?>
					</table>
				</form>
			</tr>
		</table>
		<?php 
		}
		else{
			echo "bạn phải <a href='login.php'>Đăng nhập </a>";
		}

		 ?>
	</div>
</body>
</html>