<!doctype html>
<?php
$hostname = "mysql.hostinger.in.th";
$user = "u967435075_joker";
$password = "joker11";
$dbname = "u967435075_song";
$link = mysqli_connect($hostname,$user,$password,$dbname);
mysqli_query($link,"SET NAMES utf8");
if($_POST['Add'])
{

$id = $_POST['id'];
$descript = $_POST['descript'];
$price_piece = $_POST['price_piece'];
$discount = $_POST['discount'];
$date_update = $_POST['date_update'];

$sql_add = "insert into catalog set ven_id = '$id' , cat_descript = '$descript'
, cat_price = '$price_piece' , cat_discount = '$discount',cat_date_update = '$date_update' ";

mysqli_query($link,$sql_add) ;
}


?>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Construction</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
  <div id="header">
  <h1><span>Construction</span></h1>

  </div>
<div id="dropdown">
  <ul>
      <li><a href="#">ลูกค้า</a>
          <ul>
            <li><a href="oldcustomers.php">ลูกค้าเก่า</a></li>
            <li><a href="newcustomers.php">ลูกค้าใหม่</a></li>
          </ul>
      </li>
      <li><a href="#">งาน</a>
        <ul>
          <li><a href="historywork.php">ดูประวัติ</a></li>
          <li><a href="receipt.php">รับเงิน</a></li>
          <li><a href="purchase.php">ซื้อของ</a></li>
		  <li><a href="rent.php">เช่าของ</a></li>
        </ul>
      </li>
      <li><a href="#">พนักงาน</a>
        <ul>
          <li><a href="newemployee.php">เพิ่มพนักงานใหม่</a></li>
          <li><a href="oldemployee.php">ประวัตพนักงานเก่า</a></li>
          <li><a href="drawdown.php">เบิกเงิน</a></li>
          <li><a href="salary.php">เงินเดือน</a></li>
          <li><a href="leave.php">ลา</a></li>
          <li><a href="check.php">เช็คชื่อ</a></li>
        </ul>
      </li>
      <li><a href="#">สินค้า/อุปกรณ์</a>
        <ul>
          <li><a href="catalog.php">แคทตาล็อคสินค้า</a></li>
          <li><a href="warehouse.php">คลังอุปกรณ์(ของบริษัท)</a></li>
        </ul>
      </li>
      <li><a href="#">Vender</a>
        <ul>
          <li><a href="newvender.php">เพิ่ม Vender ใหม่</a></li>
          <li><a href="oldvender.php">แก้ไขข้อมูล Vender</a></li>
        </ul>
      </li>
      <li><a href="show_audit.php">บัญชี</a></li>
  </ul>
</div>
<div id="body">
  <br><br><br><br><br>
  <center><h1>ทำรายการสำเร็จ</h1></center>
  <br><br><br>
  <form action="catalog.php">
    <center><input type="submit" name="gooldvender" id="send" value="ค้นหาแคทตาล็อค" /></center></form>
    <form action="newcatalog.php">
      <center><input type="submit" name="gonewvender" id="send" value="เพิ่มแคทตาล็อคใหม่" /></center></form>
  <br><br><br>

</div>

</body>
</html>
