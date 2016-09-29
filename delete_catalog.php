<!doctype html> //finish
<?php
$hostname = "mysql.hostinger.in.th";
$user = "u967435075_joker";
$password = "joker11";
$dbname = "u967435075_song";
$tblname = "catalog";
$link = mysqli_connect($hostname,$user,$password,$dbname);
mysqli_query($link,"SET NAMES utf8");
$sql = "select * from `" . $tblname . "`;";
$dbquery = mysqli_query($link, $sql);
$num_rows = mysqli_num_rows($dbquery);
$i=0;
if($_REQUEST['id'] != "")
{
$del_id = $_REQUEST['id'];
$sql_del = "delete from catalog where cat_id = '$del_id';";
mysqli_query($link,$sql_del) ;

}
?>

<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Construction</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/mobile.css" media="screen and (max-width : 568px)">
  <script type="text/javascript" src="js/mobile.js"></script>

</head>
<body>
<br><br><br><br><br><br><br><br><br><br>
  <div id="body">

		<center><h1>ลบรายการสำเร็จแล้ว</h1>
		<br><br><br>
		<li><a href="catalog.php">ค้นหาแคทตาล็อค</a></li>
		<li><a href="newcatalog.php">เพิ่มแคทตาล็อคใหม่</a></li>
    <li><a href="index.php">กลับไปหน้าแรก</a></li>
  </center>
	</div>
</body>
</html>
