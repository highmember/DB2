<!doctype html>
<?php session_start();
$hostname = "mysql.hostinger.in.th";
$user = "u967435075_joker";
$password = "joker11";
$dbname = "u967435075_song";
$tblname = "oldcustomer";
$field_search = "CUS_FNAME";
$link = mysqli_connect($hostname,$user,$password,$dbname);
mysqli_query($link,"SET NAMES utf8");
$sql = "select * from `" . $tblname . "`;";
$dbquery = mysqli_query($link, $sql);
$num_rows = mysqli_num_rows($dbquery);
$i=0;

if($_POST['Add'])
{
$id = $_POST['id'];
$name = $_POST['name'];
$surname = $_POST['surname'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$sql_add = "insert into oldcustomer set
CUS_ID = '$id' , CUS_FNAME = '$name' , CUS_LNAME = '$surname' , CUS_ADDRESS = '$address' , CUS_PHONE = '$phone'";
mysqli_query($link,$sql_add) ;
$_SESSION['cid'] = $_POST['id'];
$_SESSION['phase'] = 0;
}
else{
	$_SESSION['cid'] = $_GET['id'];
	$_SESSION['phase'] = 0;
}
$_SESSION['check'] = 0;
$_SESSION['ck'] = 0;
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
  <br>  <br>  <br>  <br>  <br>
  		<center><h1>เพิ่มงาน</h1></center>
      <br>  <br>  <br>
	     <form id="form5" name="form5" method="post" action="addphase.php">
	      <p><b>รายละเอียดงาน : </b>
	         <input type="text" name="detail" id="detail" /></p>
	      <p><b>วันเริ่มงาน : </b>
	         <input type="date"  name="start" id="start" /><tab4>
	          <b>วันจบงาน : </b>
	         <input type="date" name="end" id="end" /></p>
			<p><b>ราคางาน : </b>
	         <input type="text" name="price" id="price" /></p>
           <br>  <br>  <br>
           <center><input type="submit" name="Add" id="Add" value="เพิ่ม" /></p></center>
	</form>
	</div>
  <br>  <br>  <br>
</body>
</html>
