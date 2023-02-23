<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Đăng nhập</title>
	<style type="text/css">
		*{
			margin: 0;
			padding: 0;
		}
		#container{
			width: 800px;
			margin: 20px auto;
		}
		table{
			margin: auto;
			width: 600px;
			height: 200px;
		}
	</style>
	<script src="sweetalert2.all.min.js"></script>
	<script src="sweetalert2.min.js"></script>
	<script type="text/javascript">
		function hi() {
			let timerInterval
Swal.fire({
  title: 'Auto close alert!',
  html: 'I will close in <b></b> milliseconds.',
  timer: 2000,
  timerProgressBar: true,
  willOpen: () => {
    Swal.showLoading()
    timerInterval = setInterval(() => {
      const content = Swal.getContent()
      if (content) {
        const b = content.querySelector('b')
        if (b) {
          b.textContent = Swal.getTimerLeft()
        }
      }
    }, 100)
  },
  onClose: () => {
    clearInterval(timerInterval)
  }
}).then((result) => {
  /* Read more about handling dismissals below */
  if (result.dismiss === Swal.DismissReason.timer) {
    console.log('I was closed by the timer')
  }
})
		}
		function err() {
			// body...
			Swal.fire({
			  icon: 'error',
			  title: 'Error',
			  text: 'Sai tên đăng nhập hoặc mật khẩu'
			})
		}
	</script>
</head>
<body>
	<?php
		if (isset($_POST["btnLogin"]))
		{
			/*lấy user và pass*/
			$user = $_POST["txtUser"];
			$pass = $_POST["txtPass"];
			/*kiểm tra thông tin đăng nhập*/
			if ($user=="admin" && $pass=="123456")
			{
				/*tạo phiên làm việc*/
				$_SESSION["user"] = "admin";
				/*chuyển đến trang xem bài viết*/
				header("location:giaodienadmin.php");
			}
			else
				echo("Sai tên đăng nhập hoặc mật khẩu");
		}

	?>
	<div id="container">
		<form method="POST">
			<table border="2">
				<tr>
					<th colspan="2" style="background-color: #abe2f7"><h3>Bạn phải đăng nhập để chỉnh sửa thông tin hệ thống</h3><br>ĐĂNG NHẬP</th>
				</tr>
				<tr>
					<td>Tên đăng nhập</td>
					<td><input type="text" name="txtUser" size="50">
					</td>
				</tr>
				<tr>
					<td>Mật khẩu</td>
					<td><input type="password" name="txtPass" size="50"></td>
				</tr>
				<tr>
					<th colspan="2"><input type="submit" name="btnLogin" value="Đăng nhập" onclick="hi()" ></th>
				</tr>
			</table>
		</form>
	</div>
</body>
</html>