<?php session_start();?>
<html>
<head>
<title>Contoh Pemakaian Session</title>
</head>
<body>
<?php
error_reporting(E_ALL ^(E_NOTICE|E_WARNING));
		if($_SESSION['counter']==""){$_SESSION['counter']=0;}
		$_SESSION['counter']++;
		echo"<h1>Halaman Ini Dipanggil
		".$_SESSION['counter']."kali</h1>";
?>
</body>
</html>
  
