<!DOCTYPE html>
<html>
<head>
	<title>Thêm sữa mới</title>
	<style type="text/css">
		table{
			margin: auto;
		}
	</style>
</head>
<body>
	<?php 
		if(isset($_POST["btnthem"])){
			$masua =$_POST["txtma"];
			$tensua = $_POST["txtten"];
			$hangsua= $_POST["slthangsua"];
			$loaisua = $_POST["sltloaisua"];
			$trongluong = $_POST["txttrongluong"];
			$dongia = $_POST["txtdongia"];
			$image = $_POST["flsua"];
			$tpsua = $_POST["txtthanhphan"];
			$lisua = $_POST["txtloiich"];
			$stt = $_POST["txtstt"];
			require("ketnoi.php");
			$sql = "insert thongtinsua(stt,tensua,hangsua,loaisua,trongluongsua,dongiasua,image,thanhphansua,loiichsua)
							value('$stt','$tensua','$hangsua','$loaisua','$trongluong','$dongia','$image','$tpsua','$lisua')";
			$result = mysqli_query($conn,$sql);
			if($result){
				mysqli_close($conn);
				header("location:themsua.php");
			}
			else{
				echo "thêm dữ liệu thất bại";
			}
		}
	 ?>
	<div id="container">
		<form method="POST" >
			<table border="2">
				<tr>
					<th colspan="2" style="background-color: lightblue">Nhập thông tin sữa cần thêm</th>
				</tr>
				<tr>
					<td>STT</td>
					<td><input type="text" name="txtstt"></td>
				</tr>
				<tr>
					<td>Mã sữa</td>
					<td><input type="text" name="txtma"></td>
				</tr>
				<tr>
					<td>Tên sữa</td>
					<td><input type="text" name="txtten"></td>
				</tr>
				<tr>
					<td>Hãng sữa</td>
					<td>
						<select name="slthangsua">
							<option value="Nutifood">Nutifood</option>
							<option value="Vinamilk">Vinamilk</option>
							<option value="Dutch Lady">Dutch Lady</option>
							<option value="Nestle">Nestle</option>
							<option value="TH true milk">TH true milk</option>
							<option value="Abbott">Abbott</option>
							<option value="Mead Jonhson">Mead Jonhson</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Loại sữa</td>
					<td>
						<select name="sltloaisua">
							<option>Sữa bột</option>
							<option>Sữa tươi</option>
							<option>Sữa chua</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Trọng lượng</td>
					<td><input type="text" name="txttrongluong">GR/ML</td>
				</tr>
				<tr>
					<td>Đơn giá</td>
					<td><input type="text" name="txtdongia">(VNĐ)</td>
				</tr>
				<tr>
					<td>Thành phần dinh dưỡng</td>
					<td><input type="textarea" name="txtthanhphan"></td>
				</tr>
				<tr>
					<td>Lợi ích</td>
					<td><input type="textarea" name="txtloiich"></td>
				</tr>
				<tr>
					<td>Hình ảnh</td>
					<td><input type="file" name="flsua"></td>
				<tr>
					<td><input type="submit" name="btnthem" value="Thêm"></td>
					<td><input type="submit" name="btnhuy" value="Hủy"></td>
				</tr>
			</table>
		</form>
	</div>
</body>
</html>