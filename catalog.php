<!doctype html>
<?php
$hostname = "mysql.hostinger.in.th";
$user = "u967435075_joker";
$password = "joker11";
$dbname = "u967435075_song";
$tblname = "catalog";
$link = mysqli_connect($hostname,$user,$password,$dbname);
mysqli_query($link,"SET NAMES utf8");
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
<center><h1>สินค้า</h1></center>
<br><br><br>
<form name="frmSearch" method="post" action="searchcatalog.php">
      <center><b>ตัวเลือกค้นหา :</b>
        <select name="ddlSelect" id="ddlSelect">
          <option>- เลือก -</option>
          <option value="cat_id" <?if($_POST["ddlSelect"]=="cat_id"){echo"selected";}?>>รหัสแคทตาล็อก</option>
          <option value="cat_descript" <?if($_POST["ddlSelect"]=="cat_descript"){echo"selected";}?>>รายละเอียดสินค้า</option>
          <option value="ven_id" <?if($_POST["ddlSelect"]=="ven_id"){echo"selected";}?>>รหัส ven</option>
        </select>
	<b>	คำค้นหา :</b>
        <input name="txtKeyword" type="text" id="txtKeyword" value="<?=$_POST["txtKeyword"];?>">
      <input type="submit" value="ค้นหา"><br><br><br>
      <a href = 'newcatalog.php?id=$result[cat_id]'>เพื่มสินค้า</a>
</form>
</center>
<br>
<br>
<center><table >
<tr>
		<th >รหัส แคทตาล็อค</th>
		<th >รหัส vender</th>
        <th >รายละเอียด</th>
        <th >ราคา/ชิ้น</th>
		<th >ส่วนลด</th>
  </tr>

<?php
while ($i < $num_rows)
{
$result = mysqli_fetch_array($dbquery);

echo '<ul>';
echo '<tr>';
echo "<td><a href = 'show_catalog.php?id=$result[cat_id]'>$result[cat_id]</a></td>" ;
echo "<td><a href = 'show_catalog.php?id=$result[cat_id]'>$result[ven_id]</a></td>" ;
echo "<td><a href = 'show_catalog.php?id=$result[cat_id]'>$result[cat_descript]</a></td>" ;
echo "<td><a href = 'show_catalog.php?id=$result[cat_id]'>$result[cat_price]</a></td>" ;
echo "<td><a href = 'show_catalog.php?id=$result[cat_id]'>$result[cat_discount]</a></td>" ;
echo '</tr>';
echo '</ul>';
$i++;
}
?>
</center></table>
<br>
<br>
</div>
</body>
</html>

<?php
mysqli_close($link);
?>
