<?php session_start();
$hostname = "mysql.hostinger.in.th";
$user = "u967435075_joker";
$password = "joker11";
$dbname = "u967435075_song";
$tblname = "employee"; 
$link = mysqli_connect($hostname,$user,$password,$dbname);
mysqli_query($link,"SET NAMES utf8");
$phid = $_SESSION['phid'];
$sql = "select * from `" . $tblname . "`;";
$dbquery = mysqli_query($link, $sql);
$num_rows = mysqli_num_rows($dbquery);
$i=0; 
if($_POST['Edit'])
{
	
	
	$date = $_POST['curr'];
	
	while ($i < $num_rows)
	{
		$status = $_POST['status' . $i];
		echo $status;
	 $result = mysqli_fetch_array($dbquery);
	 $id = $result['emp_id'];
	 $phid = $result['proj_id'];
	 $sql1 = "SELECT * FROM project where proj_id = '$phid' ";
	 $dbquery1 = mysqli_query($link, $sql1);
	 $result1 = mysqli_fetch_array($dbquery1);
	 $num = $result['emp_tot_work'];
	 $pay = $result['emp_inc_day'] + $result1['proj_curr_payment'];
	 $price = $result1['proj_price'] - $pay; 
	 $sqlincome = "UPDATE project SET proj_curr_payment = '$pay' , proj_net_income = '$price' where proj_id = '$phid' ";
	 mysqli_query($link,$sqlincome);
	 
	 if($status==1){
		 $num++;
		  $sql_edit = "UPDATE employee SET emp_come_work = '$status' , emp_curr_date = '$date' , emp_tot_work = '$num' WHERE emp_id = '$id' ";
	 }
	 else{
		  $sql_edit = "UPDATE employee SET emp_come_work = '0' , emp_curr_date = '$date' WHERE emp_id = '$id' ";
	 }
	 mysqli_query($link,$sql_edit);
	 $i++;
	 	
	}
	
	
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
    <br><br><br><br><br>
		<center><h1>บันทึกการเปลี่ยนแปลงแล้ว</h1></center>
		<br><br><br>
		<a href="showcheck.php">ตรวจสอบชั่วโมงงาน</a>
    <br><br><br>
	</div>
</body>
</html>
<?php
mysqli_close($link);
?>