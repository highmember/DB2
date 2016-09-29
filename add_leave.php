<!doctype html> 
<?php
$hostname = "mysql.hostinger.in.th";
$user = "u967435075_joker";
$password = "joker11";
$dbname = "u967435075_song";
$link = mysqli_connect($hostname,$user,$password,$dbname);
mysqli_query($link,"SET NAMES utf8");
$id = $_REQUEST['id'];
$sql = "select * from employee WHERE emp_id = '$id'";
$dbquery = mysqli_query($link, $sql);
$objResult = mysqli_fetch_array($dbquery);
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
  <div id="body"> <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <center>
      <h1>เพิ่ม ข้อมูลการลา</h1>
    </center>
    <form name="frmSearch" method="post" action="success_addleave.php"><br>
     <br>
      <p><b>รหัสพนักงาน
        <tab2>
        : </b>
        <input type="readonly" name="eid" id ="readonly" value=<?=$id?> >
      <p><b>วันที่ปัจจุุบัน
        <tab2>
        : </b>
        <input name="date" type="date" id="date"  >
      <p><b>หมายเหตุ :</b></p>
      <p><b>ลากิจ </b>
        <input name="bus" type="text" id="bus" value=<?=$objResult['emp_lea_bus']?> >
      </p>
      <p><b>ลาป่วย </b>
        <input name="sick" type="text" id="sick" value=<?=$objResult['emp_lea_sick']?>>
      </p>
      <p><b>ลาพักร้อน </b>
        <input name="special" type="text" id="special" value=<?=$objResult['emp_lea_special']?>>
      </p>
      <p><br>
      </p>
      <center>
        <input type="submit" name="Edit" id="Edit" value="บันทึกข้อมูล">
		<input name="id" type="hidden" id="id" value="<?=$_REQUEST['id']?>" />
      </center>
      <br>
      <br>
    </form>
  </div>
</body>
</html>
