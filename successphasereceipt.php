<!doctype html>
<?php session_start();
$hostname = "mysql.hostinger.in.th";
$user = "u967435075_joker";
$password = "joker11";
$dbname = "u967435075_song";
$link = mysqli_connect($hostname,$user,$password,$dbname);
mysqli_query($link,"SET NAMES utf8");
$id = $_REQUEST['id'];
$phid = $_SESSION['phid'];
$sql = "SELECT * FROM project where proj_id = '$phid' ";
$dbquery = mysqli_query($link, $sql);
$result = mysqli_fetch_array($dbquery);
if($_POST['Edit'])
{

$income = $_POST['income'];
$in = $income+$result['proj_curr_income'];
$sql_edit = "UPDATE phase SET phase_income = '$income' WHERE proj_id = '$phid' AND phase_id = '$id' ";
$sqlincome = "UPDATE project SET proj_curr_income = '$in' where proj_id = '$phid' ";

mysqli_query($link,$sql_edit);
mysqli_query($link,$sqlincome);
echo $sql_edit;
echo $sqlincome;
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
		<center><h1>บันทึกการรับเงินเสร็จสิ้น</h1></center>
		<br><br><br>
      <form action="receipt.php">
		    <center><input type="submit" name="gotooldcustomer" id="send" value="กลับหน้ารับเงิน" /></center></form>
			 <form action="historywork.php">
		    <center><input type="submit" name="gotooldcustomer" id="send" value="ดูประวัติงาน" /></center></form>
    <br><br><br>
	</div>
</body>
</html>
<?php
mysqli_close($link);
?>
