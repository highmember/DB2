<?php session_start();
$hostname = "mysql.hostinger.in.th";
$user = "u967435075_joker";
$password = "joker11";
$dbname = "u967435075_song";
$link = mysqli_connect($hostname,$user,$password,$dbname);
mysqli_query($link,"SET NAMES utf8");
$id = $_SESSION['rent'];
$sql = "SELECT * FROM project where proj_id = '$id' ";
$dbquery = mysqli_query($link, $sql);
$result = mysqli_fetch_array($dbquery);

if($_POST['Add'])
{
$id = $_SESSION['rent'];
$descript = $_POST['descript'];
$price = $_POST['price'];
$date = $_POST['date'];
$pay = $price + $result['proj_curr_payment'];
$price = $result['proj_price'] - $pay; 
$sql_add = "insert into rent set
proj_id = '$id' , rent_descript = '$descript' , rent_price = '$price' , rent_date = '$date'";

$sqlincome = "UPDATE project SET proj_curr_payment = '$pay' , proj_net_income = '$price' where proj_id = '$id' ";

mysqli_query($link,$sqlincome);
mysqli_query($link,$sql_add) ;
}


?>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Construction</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
  <script type="text/javascript" src="js/mobile.js"></script>
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
      <li><a href="#">Vander</a>
        <ul>
          <li><a href="newvender.php">เพิ่ม Vender ใหม่</a></li>
          <li><a href="oldvender.php">แก้ไขข้อมูล Vender</a></li>
        </ul>
      </li>
      <li><a href="show_audit.php">บัญชี</a></li>
  </ul>
</div>
<div id="body">
  <h1>ทำรายการสำเร็จ</h1>
  <br />
  <li><a href="rent.php">ค้นหารายการเช่า</a></li>
  </br>
</div>
<p>&nbsp;</p>
</body>
</html>