<!doctype html>
<?php
$hostname = "mysql.hostinger.in.th";
$user = "u967435075_joker";
$password = "joker11";
$dbname = "u967435075_song";
$tblname = "employee";
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
<div id= "body">
<br><br><br><br><br>
<center><h1>ค้นหาพนักงาน</h1></center>
<br><br><br>
<form name="frmSearch" method="post" action="search_salary.php">
      <center><b> ตัวเลือกค้นหา : </b>
        <select name="ddlSelect" id="ddlSelect">
          <option>- เลือก -</option>
          <option value="emp_id" <?if($_POST["ddlSelect"]=="emp_id"){echo"selected";}?>>รหัส employee</option>
          <option value="emp_fname" <?if($_POST["ddlSelect"]=="emp_fname"){echo"selected";}?>>ชื่อพนักงาน</option>
        </select>
		      <b>คำค้นหา : </b>
        <input name="txtKeyword" type="text" id="txtKeyword" value="<?=$_POST["txtKeyword"];?>">
      <input type="submit" value="ค้นหา">
</form>
<br><br><br>
<center><table>
	<tr>
		<th >รหัส พนักงาน</th>
		<th >ชื่อ - นามสกุล</th>
    <th >เบอร์โทร</th>
	</tr>

<?php
while ($i < $num_rows)
{
$result = mysqli_fetch_array($dbquery);

echo '<tr>';
echo "<td><a href = 'show_salary.php?id=$result[emp_id]'>$result[emp_id]</a></td>" ;
echo "<td><a href = 'show_salary.php?id=$result[emp_id]'>$result[emp_fname]</a>   <a href = 'show_salary.php?id=$result[emp_id]'>$result[emp_lname]</a></td>" ;
echo "<td><a href = 'show_salary.php?id=$result[emp_id]'>$result[emp_tel]</a></td>" ;
echo '</tr>';

$i++;
}
?>
</center></table>
<br>
<br>
<br>
</div>
</body>
</html>

<?php
mysqli_close($link);
?>
