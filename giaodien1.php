<!DOCTYPE html>
<html>
<head>
	<title>Thông tin hãng sữa</title>
	<link rel="stylesheet" type="text/css" href="admin1.css">
	<script src="sweetalert2.all.min.js"></script>
	<script src="sweetalert2.min.js"></script>
		<script type="text/javascript">
			function cfi() {
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
			}
		</script>
</head>			
<body background="image\nen2.jpg" id="nen" >
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
		<div id="tb">
				<form>
				<table border="1">
					<tr>
						<th colspan="7" style="background-color: lightblue"><span id="tt">THAY ĐỔI THÔNG TIN HÃNG SỮA</span></th>
					</tr>
					<?php 
						/*Lấy từng hàng của bảng $result gán cho biến row*/
						while($row = mysqli_fetch_assoc($result))
						{	
					 ?>
					<tr>
						<td><?php echo $row["mahs"] ?></td>
						<td><?php echo $row["tenhs"] ?></td>
						<td><?php echo $row["diachihs"] ?></td>
						<td><?php echo $row["dienthoaihs"] ?></td>
						<td><?php echo $row["emailhs"] ?></td>
						<td><a href="capnhat.php?key=<?php echo $row['id']; ?>">Sửa</a></td>
						<td><a href="xoa.php?key=<?php echo $row['id']; ?>" onclick="return confirm('bạn có muốn xóa?')">Xóa</a></td>

					</tr>
					
					<?php 
						/*đóng lệnh while*/
						} 
						/*đóng kết nối*/
						mysqli_close($conn);
			 		?>
			 		<th colspan="7" style="background-color: lightblue"><a href="them.php">Thêm Hãng Sữa</a></th>
				</table>
			</form>
		</div>
		<?php 
		}
		else{
			echo "bạn phải <a href='login.php'>Đăng nhập </a>";
		}
		 ?>
	</div>
</body>
</html>