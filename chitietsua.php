<!DOCTYPE html>
<html>
<head>
	<title>chi tiết sữa</title>
	<link rel="stylesheet" type="text/css" href="giaodien.css">
	<style type="text/css">
		table{
				text-align: center;
				width: 1000px;
				height: 300px;
		}
	</style>
</head>
<body background="image\nen.jpg" id="nen">
	<?php 
		$key = $_GET["key"];
		require("ketnoi.php");
		$sql = "select *from thongtinsua where stt = $key";
		$result = mysqli_query($conn,$sql);
	 ?>
	<div id="container">
		<form method="POST">
			<table border="1">
				<?php 
					while($row = mysqli_fetch_assoc($result)){	
				?>
				<tr>
					<td colspan="3"><span id="tt"><?php echo $row["tensua"] ?></span></td>
				</tr>
				<tr>
					<td><?php echo "<img src='image/".$row["image"]."'>"; ?></td>
					<td><span style="color: blue;">THÀNH PHẦN SỮA:</span><br><?php echo $row["thanhphansua"];?></td>
					<td><span style="color: blue;">LỢI ÍCH:</span><br><?php echo $row["loiichsua"];?></td>
				</tr>
				<?php 
					}
					mysqli_close($conn);
				 ?>
				<tr>
					<td colspan="3"><a href="#" style="color: blue;" onclick="quaylai()">Quay về</a></td>
				</tr>
			</table>
		</form>
	</div>
	 <script>
      function quaylai(){
          history.back();
      }
 	 </script>

</body>
</html>