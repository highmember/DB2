<!doctype html>
<?php session_start();
$hostname = "mysql.hostinger.in.th";
$user = "u967435075_joker";
$password = "joker11";
$dbname = "u967435075_song";
$tblname = "project";
$link = mysqli_connect($hostname,$user,$password,$dbname);
mysqli_query($link,"SET NAMES utf8");
$sql = "select * from `" . $tblname . "`;";
$dbquery = mysqli_query($link, $sql);
$num_rows = mysqli_num_rows($dbquery);
$i=0;

if($_POST['Add2'])
{
 $id = $_SESSION['proid'];
	if($_SESSION['ck']==1){
		$phasetotal = $_SESSION['phasetotal'];
		echo $_SESSION['phasetotal'];
	}
	else{
		$phasetotal = $_SESSION['phase'];
	}

//$sql_add = "select * from `" . $tblname . "` where `" . $field_search . "` like " . $cusid . " ;";
$sql_add = "Update project Set proj_phase_total ='$phasetotal'  Where proj_id ='$id' ";
mysqli_query($link,$sql_add) ;
echo $sql_add;
echo $id;
echo $_SESSION['phase'];
echo $_SESSION['phasetotal'];
}

/*if($_POST['Edit'])
{
$name = $_POST['name'];
$surname = $_POST['surname'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$id = $_REQUEST['id'];
$sql_edit = "UPDATE oldcustomer SET
CUS_FNAME = '$name' , CUS_LNAME = '$surname' , CUS_ADDRESS = '$address' , CUS_PHONE = '$phone' WHERE CUS_ID = '$id'";
mysqli_query($link, $sql_edit) ;
}*/

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
      <form action="historywork.php">
		    <center><input type="submit" name="historywork" id="historywork" value="ตรวจสอบงาน" /></center></form>
		 <form action="oldcustomers.php">
		    <center><input type="submit" name="newcustomer" id="newcustomer" value="ตรวจสอบข้อมูลลูกค้า" /></center></form>
        <form action="newcustomers.php">
		    <center><input type="submit" name="newcustomer" id="newcustomer" value="เพิ่มลูกค้าใหม่" /></center></form>

    <br><br><br>
	</div>
</body>
</html>
