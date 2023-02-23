<?php
	session_start();
	/*hủy session*/
	unset($_SESSION["user"]);
	/*trở lại trang đăng nhập*/
	header("location:trangchu.php");
?>