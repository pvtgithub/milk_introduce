<!DOCTYPE html>
<html>
<head>
	<title>Cập nhật thông tin hãng sữa</title>
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
			$sql="select* from hangsua where id=$key";
			$result = mysqli_query($conn,$sql);
			$row = mysqli_fetch_assoc($result);
		//cập nhật
		if(isset($_POST["btncapnhat"])){
			$mahs=$_POST["txtma"];
			$tenhs=$_POST["txtten"];
			$dienthoaihs=$_POST["txtdienthoai"];
			$diachihs=$_POST["txtdiachi"];
			$emailhs=$_POST["txtemail"];
			/*thực hiện truy vấn update*/
			$sql = "update hangsua set mahs = '$mahs',
										tenhs = '$tenhs',
										diachihs = '$diachihs',
										dienthoaihs = '$dienthoaihs',
										emailhs = '$emailhs'
										where id = $key";
			$result = mysqli_query($conn, $sql);
		if($result){
			/*đóng kết nối*/
			mysqli_close($conn);
			/*quay về trang danhsach.php*/
			header("location:giaodien1.php");
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
					<th colspan="2" style="background-color: lightblue">Cập nhật thông tin hãng sữa</th>
				</tr>
				<tr>
					<td>Mã hãng sữa</td>
					<td><input type="text" name="txtma" value="<?php echo $row['mahs'] ?>"></td>
				</tr>
				<tr>
					<td>Tên hãng sữa</td>
					<td><input type="text" name="txtten" value="<?php echo $row['tenhs']?>"></td>
				</tr>
				<tr>
					<td>Địa chỉ</td>
					<td><input type="text" name="txtdiachi" value="<?php echo $row['diachihs']?>"></td>
				</tr>
				<tr>
					<td>Điện thoại</td>
					<td><input type="text" name="txtdienthoai" value="<?php echo $row['dienthoaihs']?>"></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="text" name="txtemail" value="<?php echo $row['emailhs']?>"></td>
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