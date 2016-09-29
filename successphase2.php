<!doctype html>
<?php session_start();
$hostname = "mysql.hostinger.in.th";
$user = "u967435075_joker";
$password = "joker11";
$dbname = "u967435075_song";
$tblname = "phase";
$link = mysqli_connect($hostname,$user,$password,$dbname);
mysqli_query($link,"SET NAMES utf8");
$id = $_REQUEST['id'];
$phid = $_SESSION['phid'];
$sql = "SELECT * FROM phase ";
$dbquery = mysqli_query($link, $sql);

if($_POST['Edit'])
{
$detail = $_POST['detail'];
$start = $_POST['start'];
$end = $_POST['end'];
$price = $_POST['price'];
$note = $_POST['note'];
$status = $_POST['status'];
$sql_edit = "UPDATE phase SET
 phase_detail = '$detail' , phase_start = '$start' ,phase_end = '$end' , phase_price = '$price', phase_note = '$note', phase_status = '$status' WHERE proj_id = '$phid' AND phase_id = '$id' ";
mysqli_query($link,$sql_edit);
echo $sql_edit;
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
		<center><h1>บันทึกการเปลี่ยนแปลงแล้ว</h1></center>
		<br><br><br>
      <form action="oldcustomers.php">
		    <center><input type="submit" name="gotooldcustomer" id="send" value="ค้นหาลูกค้า" /></center></form>
        <br><br><br>
        <center><?echo "<td><a href = 'editproj.php?id=$phid'>แก้ไขงานต่อ</a></td>"  ;?></center>
    <br><br><br>
	</div>
</body>
</html>
<?php
mysqli_close($link);
?>
