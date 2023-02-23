<!DOCTYPE html>
<html>
<head>
	<title>Thêm hãng sữa</title>
	<style type="text/css">
		table{
			margin: auto;
		}
	</style>
</head>
<body>
	<?php 
		if(isset($_POST["btnthem"])){
			$mahs =$_POST["txtma"];
			$tenhs = $_POST["txtten"];
			$diachihs= $_POST["txtdiachi"];
			$dienthoaihs = $_POST["txtdienthoai"];
			$emailhs = $_POST["txtemail"];
			require("ketnoi.php");
			$sql = "insert hangsua(mahs,tenhs,diachihs,dienthoaihs,emailhs)
							value('$mahs','$tenhs','$diachihs','$dienthoaihs','$emailhs')";
			$result = mysqli_query($conn,$sql);
			if($result){
				mysqli_close($conn);
				header("location:giaodien1.php");
			}
			else{
				echo "thêm dữ liệu thất bại";
			}
		}
	 ?>
	<div id="container">
		<form method="POST">
			<table border="1">
				<tr><th style="background-color: lightblue" colspan="2">Nhập thông tin hãng sữa cần thêm</th></tr>
				<tr>
					<td>Mã hãng sữa</td>
					<td><input type="text" name="txtma"></td>
				</tr>
				<tr>
					<td>Tên hãng sữa</td>
					<td><input type="text" name="txtten"></td>
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