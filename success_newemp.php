<!doctype html>
<?php
$hostname = "mysql.hostinger.in.th";
$user = "u967435075_joker";
$password = "joker11";
$dbname = "u967435075_song";
$tblname = "employee";
$link = mysqli_connect($hostname,$user,$password,$dbname);
mysqli_query($link,"SET NAMES utf8");
$sql = "select * from `" . $tblname . "`;";
$dbquery = mysqli_query($link, $sql);


if($_POST['Add'])
{
$id = $_POST['id'];
$proj_id = $_POST['proj_id'];
$name = $_POST['name'];
$surname = $_POST['surname'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$frist_date = $_POST['frist_date'];
$inc_day = $_POST['inc_day'];
$num_work = 0;
$pay_week = $_POST['pay_week'];
$last_pay = 0;
$come_work = 0;
$curr_date = $_POST['curr_date'];
$tot_work = 0;
$lea_bus = 0;
$lea_sick = 0;
$lea_special = 0;
$tot_lea = 0;
$sql_add = "insert into employee set emp_id = '$id' , proj_id = '$proj_id' , emp_fname = '$name' , emp_lname = '$surname' , emp_tel = '$phone' , emp_address = '$address' , emp_frist_date = '$frist_date' , emp_inc_day = '$inc_day', emp_num_work = '$num_work', emp_pay_week = '0', emp_come_work = '0'
,emp_curr_date = '$curr_date' , emp_tot_work = '$tot_work', emp_lea_bus = '$lea_bus', emp_lea_sick = '$lea_sick', emp_lea_special = '$lea_special', emp_tot_lea = '$tot_lea'";
mysqli_query($link,$sql_add) or "lost";
echo $sql_add;
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
    <center><h1>  ทำรายการสำเร็จ !!</h1></center>
<br><br><br>
<form action="oldemployee.php">
  <center><input type="submit" name="gooldvender" id="send" value="จัดการพนักงาน" /></center></form>
  <form action="newemployee.php">
    <center><input type="submit" name="gonewvender" id="send" value="เพิ่มพนักงานใหม่" /></center></form>
  <br><br><br>
</div>

</body>
</html>
<?php
mysqli_close($link);
?>
