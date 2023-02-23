<!DOCTYPE html>
<html>
<head>
	<title>Thông tin sữa</title>
	<link rel="stylesheet" type="text/css" href="giaodien.css">
	<style type="text/css">
		#left{
			float: left;
		}
		#right{
			float: left;
		}
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
		$sql = "select *from thongtinsua";
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
				<tr>
					<th colspan="7" style="background-color: lightblue"><span id="tt">Thông Tin Sữa</span></th>
				</tr>
				<tr>
					<td>Số TT</td>
					<td>Tên sữa</td>
					<td>Hãng sữa</td>
					<td>Loại sữa</td>
					<td>Trọng lượng</td>
					<td>Đơn giá</td>
					<td colspan="2"></td>
				</tr>
				<?php 
					while($row = mysqli_fetch_assoc($result)){	
				?>
				<tr>
					<td><?php echo $row["stt"] ?></td>
					<td><?php echo $row["tensua"] ?></td>
					<td><?php echo $row["hangsua"] ?></td>
					<td><?php echo $row["loaisua"] ?></td>
					<td><?php echo $row["trongluongsua"] ?></td>
					<td><?php echo $row["dongiasua"] ?></td>
					<td><a href="chitietsua.php?key=<?php echo $row["stt"] ?>" style="color: blue">Xem chi tiết</a></td>
				</tr>
				<?php 
					}
					mysqli_close($conn);
				 ?>
			</table>
			</form>
	</div>
</body>
</html>