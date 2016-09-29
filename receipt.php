<!doctype html>
<?php
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
<br><br><br><br><br><center><h1>รับเงิน</h1><br><br><br>
<form name="frmSearch" method="post" action="searchreceipt.php">
      <th>ตัวเลือกค้นหา
        <select name="ddlSelect" id="ddlSelect">
          <option>- เลือก -</option>
          <option value="proj_id" <?if($_POST["ddlSelect"]=="proj_id"){echo"selected";}?>>รหัสงาน</option>
          <option value="CUS_ID" <?if($_POST["ddlSelect"]=="CUS_ID"){echo"selected";}?>>รหัสลูกค้า</option>
          <option value="proj_detail" <?if($_POST["ddlSelect"]=="proj_detail"){echo"selected";}?>>รายละเอียดงาน</option>
        </select>
		คำค้นหา
        <input name="txtKeyword" type="text" id="txtKeyword" value="<?=$_POST["txtKeyword"];?>">
      <input type="submit" value="ค้นหา"></th>
</form>
<br><br><br>
<table>
		<th >รหัสงาน</th>
		<th >รหัสลูกค้า</th>
		<th >รายละเอียดงาน</th>
<?php
while ($i < $num_rows)
{
$result = mysqli_fetch_array($dbquery);

echo '<ul>';
echo '<tr>';
echo "<td><a href = 'showprojreceipt.php?id=$result[CUS_ID]'>$result[proj_id]</a></td>" ;
echo "<td><a href = 'showprojreceipt.php?id=$result[CUS_ID]'>$result[CUS_ID]</a></td>" ;
echo "<td><a href = 'showprojreceipt.php?id=$result[CUS_ID]'>$result[proj_detail]</a></td>" ;
echo '</tr>';
echo '</ul>';
$i++;
}
?>
</table>
</center>
</div>
</body>
</html>

<?php
mysqli_close($link);
?>
