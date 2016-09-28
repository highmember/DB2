<?php 
$hostname = "mysql.hostinger.in.th";
$user = "u967435075_joker"; 
$password = "joker11"; 
$dbname = "u967435075_song"; 
$tblname = "project"; 
$link = mysqli_connect($hostname,$user,$password,$dbname);
mysqli_query($link,"SET NAMES utf8");
$id = $_REQUEST['id'];
$sql = "select * from `" . $tblname . "`;";
$dbquery = mysqli_query($link, $sql);
$num_rows = mysqli_num_rows($dbquery);
$i=0; 
?>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Construction</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/mobile.css" media="screen and (max-width : 568px)">
  <link rel="stylesheet" type="text/css" href="css/dropdown.css">
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
	<br />
	<br />
  </div>
  
<ul>
<br />
<br />
<table border="1">
	<tr>
		<th scope="col">รหัสลูกค้า</th>
		<th scope="col">รหัสงาน</th>
		<th scope="col">รายละเอียดงาน</th>
		<th scope="col">วันเริ่มงาน</th>
		<th scope="col">วันจบงาน</th>
		<th scope="col">จำนวนเฟส</th>
		<th scope="col">ราคางาน</th>
		<th scope="col">รายได้ปัจจุบัน</th>
		<th scope="col">รายจ่ายปัจจุบัน</th>
		<th scope="col">รายได้สุทธิ</th>
		<th scope="col">แก้ไข</th>
		<th scope="col">เพิ่มงาน</th>
	</tr>
<?php
 while($i < $num_rows)
 {
	$result = mysqli_fetch_array($dbquery);
	if($result[CUS_ID]==$_GET['id'])
	{
	echo '<ul>';
	echo '<tr>';
	echo "<td>$result[CUS_ID]</td>" ;
	echo "<td>$result[proj_id]</td>" ;
	echo "<td>$result[proj_detail]</td>" ;
	echo "<td>$result[proj_start]</td>" ;
	echo "<td>$result[proj_end]</td>" ;
	echo "<td>$result[proj_phase_total]</td>" ;
	echo "<td>$result[proj_price]</td>" ;
	echo "<td>$result[proj_curr_income]</td>" ;
	echo "<td>$result[proj_curr_payment]</td>" ;
	echo "<td>$result[proj_net_income]</td>" ;
	echo "<td><a href = 'editproj.php?id=$result[proj_id]'>แก้ไข</a></td>"  ;
	echo "<td><a href = 'addproject.php?id=$result[CUS_ID]'>เพิ่มงาน</a></td>"  ;
	echo '</tr>'; 
	echo '</ul>';
	}
	$i++;
 }
 ?>
 </table>
</ul>

</body>
</html>

<?php
mysqli_close($link);
?>