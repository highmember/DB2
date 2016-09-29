<!doctype html>
<html>
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

  <div id = "body">
    <br><br><br><br><br>
    <center><h1>ค้นหาลูกค้า</h1></center>
    <br><br><br>
<form name="frmSearch" method="post" action="<?=$_SERVER['SCRIPT_NAME'];?>">
      <center><b>ตัวเลือกค้นหา : </b>
        <select name="ddlSelect" id="ddlSelect">
          <option> - เลือก - </option>
          <option value="CUS_ID" <?if($_POST["ddlSelect"]=="CUS_ID"){echo"selected";}?>>รหัสลูกค้า</option>
          <option value="CUS_FNAME" <?if($_POST["ddlSelect"]=="CUS_FNAME"){echo"selected";}?>>ชื่อ</option>
          <option value="CUS_LNAME" <?if($_POST["ddlSelect"]=="CUS_LNAME"){echo"selected";}?>>นามสกุล</option>
        </select><tab3>
		        <b>คำค้นหา : </b>
        <input name="txtKeyword" type="text" id="txtKeyword" value="<?=$_POST["txtKeyword"];?>">
      <input type="submit" value="ค้นหา"></center>
</form>
<br><br><br>
<?

	$hostname = "mysql.hostinger.in.th";
	$user = "u967435075_joker";
	$password = "joker11";
	$dbname = "u967435075_song";
	$tblname = "oldcustomer";
	$link = mysqli_connect($hostname,$user,$password,$dbname);
	mysqli_query($link,"SET NAMES utf8");
	$strSQL = "SELECT * FROM oldcustomer ";
	if($_POST["ddlSelect"] != "" and  $_POST["txtKeyword"]  != '')
	{
	  $strSQL .= " WHERE ".$_POST["ddlSelect"]." LIKE '%".$_POST["txtKeyword"]."%'  ";
	}


	$dbquery = mysqli_query($link, $strSQL) or die ("กรุณาเลือกตัวเลือกค้นหา");

	$i=0;

	while($objResult = mysqli_fetch_array($dbquery))
	{
	 if($i==0){
		 ?>
		 <center><table>
	  <tr>
		<th>รหัสพนักงาน </th>
		<th>ชื่อ - นามสกุล </th>
		<th>เบอร์โทรศัพท์ </th>
	  </tr>
		 <?
		 $i++;
	 }
	  echo "<tr>";
		echo "<td><a href = 'show.php?id=$objResult[CUS_ID]'><div align='center'>$objResult[CUS_ID] </div></a></td>" ;
		echo "<td><a href = 'show.php?id=$objResult[CUS_ID]'>$objResult[CUS_FNAME]  $objResult[CUS_LNAME]</a></td>" ;
		echo "<td><a href = 'show.php?id=$objResult[CUS_ID]'><div align='center'>$objResult[CUS_PHONE]</a></td>" ;
	  echo "<tr>";

	}
	?>
</center></table>
	 <?
	if($i==0){
		echo "ไม่พบข้อมูลที่ค้นหา";
	}

	mysqli_close($link);
?>
<br><br><br>
</div>
</body>
</html>
