<!doctype html>
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
    <br>
  <center>
    <h1>เพิ่ม แคทตาล็อค </h1></center>
  <form id="form1" name="form1" method="post" action="success_newcatalog.php">
    <br><br>
	  <p><b>ven id
        <tab1> : </b>
    <input type="text" name="id" id="id"></p>
	<br>
    <p><b>รายละเอียด
        <tab1> : </b>
    <input type="text" name="descript" id="descript"></p>
    <p><b>ราคา/ชิ้น  : </b>
      <input type="text" name="price_piece" id="price_piece">
      <tab4></p>
    <p><b>ส่วนลด
        <tab3>
        : </b>
    <input type="text" name="discount" id="discount"></p>
    <p><b>วันที่อัปเดท : </b>
      <input type="date" name="date_update" id="date_update"></p>

        <br><br><br>
        <center><input type="submit" name="Add" id="Add" value="บันทึกข้อมูล"></center>
        <br>
        <br>
  </form>
   <center><h1>เลือก vender เก่า </h1><br><br>
     <a href = "newvender.php">เพิ่ม vender ใหม่</a></center><br><br>
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
<center>
<table>
		<th >รหัส vender</th>
		<th >ชื่อบริษัท</th>
		<th >เบอร์โทรศัพท์</th>

<?php
while ($j < $num_rows1)
{
$result1 = mysqli_fetch_array($dbquery1);

echo '<ul>';
echo '<tr>';
echo "<td>$result1[ven_id]</a></td>" ;
echo "<td>$result1[ven_name_company]</a></td>" ;
echo "<td>$result1[ven_phone]</a></td>" ;
echo '</tr>';
echo '</ul>';
$j++;
}
?>
    </table>
  </center>
  </div>
</body>
</html>
