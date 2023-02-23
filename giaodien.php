<!DOCTYPE html>
<html>
<head>
	<title>Thông tin hãng sữa</title>
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
	</s
	</style>
</head>
<body background="image\nen.jpg" id="nen">
	<?php 
		require("ketnoi.php");
		/*truy vấn csdl*/
		$sql = "select *from hangsua";
		/*thự hiện câu truy vấn $sql rồi trả về kết quả nằm trong biến $result
		$result là 1 table có nhiều dòng dữ liệu*/
		$result = mysqli_query($conn,$sql);
		/*Lấy từng hàng của bảng $result gán cho biến row*/
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
		<div id="tb">
				<form>
				<table border="1">
					<tr>
						<th colspan="5" style="background-color: lightblue"><span id="tt">THÔNG TIN HÃNG SỮA</span></th>
					</tr>
					<tr style="text-align: center;">
						<td>Mã hãng sữa</td>
						<td>Tên hãng sữa</td>
						<td>Địa chỉ</td>
						<td>Điện thoại</td>
						<td>Email</td>
					</tr>
					<?php 
						/*Lấy từng hàng của bảng $result gán cho biến row*/
						while($row = mysqli_fetch_assoc($result))
						{	
					 ?>
					<tr style="text-align: center;">
						<td><?php echo $row["mahs"] ?></td>
						<td><?php echo $row["tenhs"] ?></td>
						<td><?php echo $row["diachihs"] ?></td>
						<td><?php echo $row["dienthoaihs"] ?></td>
						<td><?php echo $row["emailhs"] ?></td>
					</tr>
					<?php 
						/*đóng lệnh while*/
						} 
						/*đóng kết nối*/
						mysqli_close($conn);
			 		?>
			 		<tr>
			 			<td colspan="5" style="text-align: center;background-color: lightblue" ><a style="color: blue" href="login.php">Đăng nhập</a> để thay đổi thông tin hãng sữa</td>
			 		</tr>
				</table>
			</form>
		</div>
	</div>
</body>
</html>