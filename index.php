<?php
session_start();
$_SESSION['user'] = (isset($_GET['user']) === true) ? (int)$_GET['user'] : 0;


?>

<!DOCTYPE html>
<html>
<head>
	<title>AJAX Chat</title>
	<link rel="stylesheet" href="css/styles.css">
</head>
<body>
	<div class="chat">
		<div class="messages"></div>
		<textarea class="entry" placeholder="Type here"></textarea>
	</div>

	<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
	<script src="js/chat.js"></script>

</body>
</html>
