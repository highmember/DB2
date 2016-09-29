<!doctype html> //finish
<?php session_start();
$hostname = "mysql.hostinger.in.th";
$user = "u967435075_joker";
$password = "joker11";
$dbname = "u967435075_song";
$tblname = "project";
$link = mysqli_connect($hostname,$user,$password,$dbname);
mysqli_query($link,"SET NAMES utf8");
$id = $_REQUEST['id'];
$sql = "SELECT * FROM project WHERE proj_id = '$id'";
$dbquery = mysqli_query($link, $sql);
$num_rows = mysqli_num_rows($dbquery);
$result = mysqli_fetch_array($dbquery);
$_SESSION['pid'] = $id;
$_SESSION['proid'] = $id;
$_SESSION['check']=1;
$_SESSION['ck'] = 1;
$_SESSION['phasetotal']= $result['proj_phase_total'];
echo $_SESSION['phasetotal'];
echo $sql;
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
  <center><h1>แก้ไขข้อมูลงาน</h1></center>
  <br><br><br>
  <form id='form1' name='form1' method='post' action='successproj.php'>
			<p><b>รหัสลูกค้า  : </b><input type="text" name="cid" id ="readonly" readonly="readonly" value="<?=$result['CUS_ID']?>">
			<p><b>รหัส งาน  : </b><input type="text" name="pid" id ="readonly" readonly="readonly" value="<?=$result['proj_id']?>">
			<p><b>รายละเอียดงาน </b>
			<input name="detail" type="text" id="detail" value="<?=$result['proj_detail']?>" />
			<p><b>วันเริ่มงาน : </b>
	        <input type="date"  name="start" id="start" value="<?=$result['proj_start']?>"/>
	       	<b>วันจบงาน : </b>
	        <input type="date" name="end" id="end" value="<?=$result['proj_end']?>"/></p>
			<p><b>ราคางาน : </b>
	        <input type="text" name="price" id="price" value="<?=$result['proj_price']?>"/></p>
			<p><b>รายได้ปัจจุบัน : </b>
	        <input type="text" name="curr" id="readonly" readonly="readonly" value="<?=$result['proj_curr_income']?>"/></p>
			<p><b>รายจ่ายปัจจุบัน : </b>
            <input type="text" name="payment" id="readonly" readonly="readonly" value="<?=$result['proj_curr_payment']?>"/></p>
			 <p><b>รายได้สุทธิ : </b>
	         <input type="text" name="net" id="readonly" readonly="readonly" value="<?=$result['proj_net_income']?>"/></p>
    <br><br><br>
    <center><input type="submit" name="Edit" id="Edit" value="บันทึกข้อมูล" /></center>
    <input name="id" type="hidden" id="id" value="<?=$_REQUEST['id']?>" />
</form>
<br><br><br>
<?php
mysqli_close($link);
?>

<center><table >
	<tr>
		<th >รหัสงาน</th>
		<th >เฟสที่</th>
		<th >รายละเอียดเฟส</th>
		<th >วันเริ่มเฟส</th>
		<th >วันจบเฟส</th>
		<th >ราคาต่อเฟส</th>
		<th >รายรับต่อเฟส</th>
		<th >รายจ่ายต่อเฟส</th>
		<th >สถานะ</th>
		<th >หมายเหคุ</th>
		<th >แก้ไข</th>
		<th >เพิ่มเฟส</th>
	</tr>
<?php

$hostname1 = "mysql.hostinger.in.th";
$user1 = "u967435075_joker";
$password1 = "joker11";
$dbname1 = "u967435075_song";
$tblname1 = "phase";
$link1 = mysqli_connect($hostname1,$user1,$password1,$dbname1);
mysqli_query($link1,"SET NAMES utf8");
$id1 = $_REQUEST['id'];
$sql1 = "select * from `" . $tblname1 . "`;";
$dbquery1 = mysqli_query($link1, $sql1);
$num_rows1 = mysqli_num_rows($dbquery1);
$i=0;

 while($i < $num_rows1)
 {
	$result1 = mysqli_fetch_array($dbquery1);
	if($result1[proj_id]==$_SESSION['pid'])
	{
		$_SESSION['phid'] = $result1[proj_id];
	echo '<ul>';
	echo '<tr>';
	echo "<td>$result1[proj_id]</td>" ;
	echo "<td>$result1[phase_id]</td>" ;
	echo "<td>$result1[phase_detail]</td>" ;
	echo "<td>$result1[phase_start]</td>" ;
	echo "<td>$result1[phase_end]</td>" ;
	echo "<td>$result1[phase_price]</td>" ;
	echo "<td>$result1[phase_income]</td>" ;
	echo "<td>$result1[phase_payment]</td>" ;
	echo "<td>$result1[phase_status]</td>" ;
	echo "<td>$result1[phase_note]</td>" ;
	echo "<td><a href = 'editphase.php?id=$result1[phase_id]'>แก้ไข</a></td>"  ;
	echo "<td><a href = 'addphase.php?id=$result1[proj_id]'>เพิ่มเฟส</a></td>"  ;
	echo '</tr>';
	echo '</ul>';
	}
	$i++;
 }
 ?>
 </table>
 </center>
</div>

</body>
</html>

<?php
mysqli_close($link1);
?>
