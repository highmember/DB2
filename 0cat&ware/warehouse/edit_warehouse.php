<?php
$hostname = "mysql.hostinger.in.th";
$user = "u967435075_joker";
$password = "joker11";
$dbname = "u967435075_song";
$tblname = "warehouse";
$link = mysqli_connect($hostname,$user,$password,$dbname);
mysqli_query($link,"SET NAMES utf8");
$id = $_REQUEST['id'];
$sql = "SELECT * FROM warehouse WHERE wh_id = '$id'";
$dbquery = mysqli_query($link, $sql);
$num_rows = mysqli_num_rows($dbquery);
$result = mysqli_fetch_array($dbquery);

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
<br>
<br>
<br>
<br>
<br>
  <center>
    <h1>แก้ไขข้อมูลคลังสินค้า</h1></center>
  <br><br><br>
  <form id='form1' name='form1' method='post' action='success_editwarehouse.php'>
    <p><b>รหัสคลังสินค้า  
        <tab2>: </b><input type="readonly" name="id" id ="readonly" readonly="readonly" readonly value="<?=$result['wh_id']?>">    
    <p><b>รายละเอียด
        <tab2>
        : </b>
      <input type="text" name="descript" id ="descript" value="<?=$result['wh_descript']?>">
    
    <p><b>จำนวน
        <tab2>
: </b>
      <input type="text" name="num" id ="num" value="<?=$result['wh_num']?>">
    
    <p><br>
    </p>
    <center>
    <input type="submit" name="Edit" id="Edit" value="บันทึกข้อมูล" /></center>
    <input name="id" type="hidden" id="id" value="<?=$_REQUEST['id']?>" />
</form>
<br><br><br>
</div>

</body>
</html>

<?php
mysqli_close($link);
?>
