<!DOCTYPE html>
<html>
<head>
	<title>Giao diện thay đổi thông tin</title>
		<style type="text/css">
		*{
			margin: 0;
			padding: 0;
		}
		#container{
			height: 700px;
		}
		ul{
		list-style-type: none; 
		}
		li{
		width: 160px;
		height: 40px;
		line-height: 40px;
		background-color: green;
		border-right: 1px solid grey;
		float: left;
		text-align: center;
		position: relative;
		}
		a{		
		color: white;		
		text-decoration: none;	
		display: block;
		}
		li:hover{
			background-color: yellow;
		}
		li:hover a{
			color: white;
		}
		#menu{
		margin-left: 400px;
		height: 200px;
		}
		#nen{
			height: 600px;
			background-position: center;
			background-size: cover;
			background-repeat: no-repeat;		
		}
		#ad{
			color: white;
			font-size: 35px;
			font-weight: 700;
			font-family: garamond;

		}
		#gd{
			margin-left: 400px;
			width: 100%;
			height: 120px;
			line-height: 120px;
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
	</script>
</head>
<body background="image\nen3.jpg" id="nen">
	<div id="container">
		<?php
		session_start();
		if (isset($_SESSION["user"])){
		?>
		<div id="gd">
			<span id="ad">GIAO DIỆN THAY ĐỔI THÔNG TIN CHO ADMIN</span>
		</div>
		<div id="menu">		
			<ul>		
				<li><a href="trangchu.php">Trang Chủ</a></li>
				<li><a href="giaodien1.php">Thông Tin Hãng Sữa</a></li>
				<li><a href="thongtinsua1.php">Thông Tin Sữa</a></li>
				<li><a href="thongtinkh1.php">Thông Tin Khách Hàng</a></li>
				<li><a href="logout.php" onclick="hi()" >Đăng xuất</a></li>
			</ul>
		</div>
		<?php 
		}
		else{
			echo "bạn phải <a href='login.php'>Đăng nhập</a>";
		}

		 ?>
	</div>
</body>
</html>