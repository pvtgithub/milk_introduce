<!DOCTYPE html>
<html>
<head>
	<title>Chỉnh sửa thông tin sữa</title>
	<link rel="stylesheet" type="text/css" href="admin1.css">
	<style type="text/css">
		#left{
			float: left;
		}
		#right{
			float: left;
		}
	</style>
	<script src="sweetalert2.all.min.js"></script>
	<script src="sweetalert2.min.js"></script>
	<script type="text/javascript">
		$('.btn').on('click',function (e) {
			e.preventDefault();
			const href=$(this).attr('href')
			Swal.fire({
  title: 'Are you sure?',
  text: "You won't be able to revert this!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, delete it!'
}).then((result) => {
  if (result.isConfirmed) {
    Swal.fire(
      'Deleted!',
      'Your file has been deleted.',
      'success'
    )
  }
})
		})
	</script>
</head>
<body background="image\nen2.jpg" id="nen">
	<?php 
		require("ketnoi.php");
		$sql = "select *from thongtinsua";
		$result = mysqli_query($conn,$sql);
	 ?>
	<div id="container">
		<?php
	session_start();
	if(isset($_SESSION["user"])){
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
				<tr>
					<th colspan="9" style="background-color: lightblue"><span id="tt">Thông Tin Sữa</span></th>
				</tr>
				<tr>
					<td>Số TT</td>
					<td>Tên sữa</td>
					<td>Hãng sữa</td>
					<td>Loại sữa</td>
					<td>Trọng lượng</td>
					<td>Đơn giá</td>
					<td colspan="3"></td>
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
					<td><a href="suasua.php?key=<?php echo $row['stt']; ?>">Sửa</a></td>
					<td><a href="xoasua.php?key=<?php echo $row['stt']; ?>" onclick="return confirm('bạn có muốn xóa?')">Xóa</a></td>
					<td><a href="chitietsua.php?key=<?php echo $row['stt']; ?>" style="color: blue">Xem chi tiết</a></td>
				</tr>
				<?php 
					}
					mysqli_close($conn);
				 ?>
				 <tr>
				 	<th colspan="9" style="background-color: lightblue"><a href="themsua.php">Thêm sữa mới</a></th>
				 </tr>
			</table>
		</form>
		<?php 
		}
		else{
			echo "bạn phải <a href='login.php'>Đăng nhập </a>";
		}

		 ?>
	</div>
</body>
</html>