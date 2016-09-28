<html>
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
  </div>
<form name="frmSearch" method="post" action="<?=$_SERVER['SCRIPT_NAME'];?>">
  <table width="599" border="1">
    <tr>
      <th>ตัวเลือกค้นหา 
        <select name="ddlSelect" id="ddlSelect">
          <option>- เลือก -</option>
          <option value="ven_id" <?if($_POST["ddlSelect"]=="ven_id"){echo"selected";}?>>รหัส vender</option>
          <option value="ven_name_company" <?if($_POST["ddlSelect"]=="ven_name_company"){echo"selected";}?>>ชื่อบริษัท</option>
        </select>
		คำค้นหา
        <input name="txtKeyword" type="text" id="txtKeyword" value="<?=$_POST["txtKeyword"];?>">
      <input type="submit" value="ค้นหา"></th>
    </tr>
  </table>
</form>

<?

	$hostname = "mysql.hostinger.in.th";
	$user = "u967435075_joker"; 
	$password = "joker11"; 
	$dbname = "u967435075_song"; 
	$link = mysqli_connect($hostname,$user,$password,$dbname);
	mysqli_query($link,"SET NAMES utf8");
	$strSQL = "SELECT * FROM vender ";
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
		 <table width="600" border="1">
	  <tr>
		<th width="91"> <div align="center">รหัส  vender</div></th>
		<th width="98"> <div align="center">ชื่อบริษัท</div></th>
		<th width="97"> <div align="center">เบอร์โทรศัพท์ </div></th>
	  </tr>
		 <?
		 $i++;
	 }
	  echo "<tr>";
		echo "<td><a href = 'show_vender.php?id=$objResult[ven_id]'>$objResult[ven_id]</a></td>" ;
		echo "<td><a href = 'show_vender.php?id=$objResult[ven_id]'>$objResult[ven_name_company]</a></td>" ;
		echo "<td><a href = 'show_vender.php?id=$objResult[ven_id]'>$objResult[ven_phone]</a></td>" ;
	  echo "<tr>";
	  
	}
	?>
	 </table>
	 <?
	if($i==0){
		echo "ไม่พบข้อมูลที่ค้นหา";
	}
	
	mysqli_close($link);
?>

</body>
</html>