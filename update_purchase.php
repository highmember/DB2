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
$sql = "SELECT * FROM phase WHERE proj_id = '$phid' AND phase_id = '$id' ";
$dbquery = mysqli_query($link, $sql);
$result = mysqli_fetch_array($dbquery);
$_SESSION['pr'] = $id;
$_SESSION['ph'] = $phid;
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
      <br>
      <br>
      <br>
      <br>
      <br>
      <center><h1>ซื้อของ</h1></center>
      <form id="form1" name="form1" method="post" action="successphasepurchase.php">
        <br>
        <p><b>รหัสงาน: </b><input type="text" name="cid" id ="readonly" readonly="readonly" value="<?=$result['proj_id']?>">
		<p><b>รหัสเฟส: </b><input type="text" name="pid" id ="readonly" readonly="readonly" value="<?=$result['phase_id']?>">
        <p><b>รายละเอียด : </b><input type="text" name="descript" id="descript">
        <p><b>วันที่ลงบิล : </b><input type="date" name="start" id="start" >
        <p><b>จำนวนเงิน : </b><input type="int" name="price" id="price" ><b>บาท</b>
        <p><b>รหัส vender : </b><input type="int" name="vid" id="vid" >
        <p><center><input type="submit" name="Add" id="Add" value="บันทึก"></center></p>
      </form>
<br><br><br>
	  <center><h1>เลือก vender เก่า </h1></center>
	  <br><br><br><center><b><a href = "newvender.php">เพิ่ม vender ใหม่</a></b></center>
<br>
<br>
<br>
<?php
$hostname = "mysql.hostinger.in.th";
$user = "u967435075_joker";
$password = "joker11";
$dbname = "u967435075_song";
$tblname1 = "vender";
$link1 = mysqli_connect($hostname,$user,$password,$dbname);
mysqli_query($link1,"SET NAMES utf8");
$sql1 = "select * from `" . $tblname1 . "`;";
$dbquery1 = mysqli_query($link1, $sql1);
$num_rows1 = mysqli_num_rows($dbquery1);
$j=0;
?>
<center><table>
	<tr>
		<th >รหัส vender</th>
		<th >ชื่อบริษัท</th>
		<th >เบอร์โทรศัพท์</th>
	</tr>

<?php
while ($j < $num_rows1)
{
$result1 = mysqli_fetch_array($dbquery1);


echo '<tr>';
echo "<td>$result1[ven_id]</a></td>" ;
echo "<td>$result1[ven_name_company]</a></td>" ;
echo "<td>$result1[ven_phone]</a></td>" ;
echo '</tr>';

$j++;
}
?>
</center></table>
<br>
<br>
<br>
  </div>
</body>
</html>
