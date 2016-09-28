<?php session_start();
$hostname = "mysql.hostinger.in.th";
$user = "u967435075_joker"; 
$password = "joker11"; 
$dbname = "u967435075_song"; 
$tblname = "project"; 
$field_search = "CUS_ID";
$field_search1 = "proj_id";
$id = $_REQUEST['id'];
$link = mysqli_connect($hostname,$user,$password,$dbname);
mysqli_query($link,"SET NAMES utf8");
$sql = "select * from `" . $tblname . "`;";
$dbquery = mysqli_query($link, $sql);

if($_POST['Add'])
{
	
	$cusid = $_SESSION['cid'];
	$detail = $_POST['detail'];
	$start = $_POST['start'];	
	$end = $_POST['end'];
	$phase = 0;
	$price = $_POST['price'];
	$curr = 0;	
	$payment = 0;
	$net = $_POST['price'];
	$sql_add = "insert into project set 
	CUS_ID = '$cusid' , proj_detail = '$detail' , proj_start = '$start' , proj_end = '$end' , proj_phase_total = '$phase'
	, proj_price = '$price',  proj_curr_income = '$curr', proj_curr_payment = '$payment', proj_net_income = '$net'";
	mysqli_query($link,$sql_add);
	echo $sql_add; 
	echo $_SESSION['cid'];
	$sql2 = "select * from `" . $tblname . "` where `" . $field_search . "` like " . $cusid . " ";	
	$dbquery2 = mysqli_query($link, $sql2);
	$num_rows = mysqli_num_rows($dbquery2);
    $i=0; 
	while($i < $num_rows)
	{
		$result1 = mysqli_fetch_array($dbquery2);
		if($result1[proj_id]>$_SESSION['proid']){
			$_SESSION['proid'] = $result1[proj_id];
		}
		echo $_SESSION['proid'];
		$i++;
	}
}
if($_SESSION['ck']==1){
	
	//$sql2 = "select * from `" . $tblname . "` where `" . $field_search1 . "` like " . $id . " ";	
	//$dbquery2 = mysqli_query($link, $sql2);
	
		//$result1 = mysqli_fetch_array($dbquery2);
				//if($result1[proj_phase_total]>=$_SESSION['phasetotal'] )
				//$_SESSION['phasetotal'] = $result1['proj_phase_total'];
	
	echo $_SESSION['ck'];
	//echo $result1['proj_phase_total'];
echo $_SESSION['phasetotal'];
//echo $sql2;
echo $_SESSION['proid'];
}

?>
<?php
mysqli_close($link);
?>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Construction</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/mobile.css" media="screen and (max-width : 568px)">
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

  <br>  <br>  <br>  <br>  <br>
  		<center><h1>เพิ่มเฟส</h1></center>
      <br>  <br>  <br>
	     <form id="form5" name="form5" method="post" action="<?=$_SERVER['SCRIPT_NAME'];?>">
	      <p><b>รายละเอียดเฟส : </b>
	         <input type="text" name="detail1" id="detail1" /></p>
	      <p><b>วันเริ่มเฟส: </b>
	         <input type="date"  name="start1" id="start1" /><tab4>
	          <b>วันจบเฟส : </b>
	         <input type="date" name="end1" id="end1" /></p>
         <p><b>ราคาต่อเฟส : </b>
	         <input type="text" name="price1" id="price1" /></p>
           <br>  <br>  <br>
           <center><input type="submit" name="Add1" id="Add1" value="บันทึก" /></p></center>
	</form>
	 <form id="form" name="form" method="post" action="successphase.php">
	 <center><input type="submit" name="Add2" id="Add2" value="เสร็จสิ้น" /></p></center>
	 </form>
	</div>
  <br>  <br>  <br>
	</div>
<?php 
$hostname1 = "mysql.hostinger.in.th";
$user1 = "u967435075_joker"; 
$password1 = "joker11"; 
$dbname1 = "u967435075_song"; 
$tblname1 = "phase"; 
$link1 = mysqli_connect($hostname1,$user1,$password1,$dbname1);
mysqli_query($link1,"SET NAMES utf8");
$sql1 = "select * from `" . $tblname1 . "`;";
$dbquery1 = mysqli_query($link1, $sql1);

if($_POST['Add1'])
{
	if($_SESSION['check']==0){
			$_SESSION['phase']++;
		$phaseid = $_SESSION['phase'];
		$projid = $_SESSION['proid'];
		$detail1 = $_POST['detail1'];
		$start1 = $_POST['start1'];	
		$end1 = $_POST['end1'];
		$price1 = $_POST['price1'];
		$income1 = 0;	
		$payment1 = 0;
		$status = "No";
		$sql_add1 = "insert into phase set 
		phase_id = '$phaseid' ,  proj_id = '$projid'  , phase_start = '$start1' , phase_end = '$end1' , phase_detail = '$detail1', phase_price = '$price1'
		, phase_income = '$income1',  phase_payment = '$payment1', phase_status = '$status' ";
		mysqli_query($link1,$sql_add1);
		echo $phaseid;
		echo "put";
	}
	else{
		$_SESSION['phasetotal']++;
		$phaseid = $_SESSION['phasetotal'];
		$projid = $_SESSION['proid'];
		$detail1 = $_POST['detail1'];
		$start1 = $_POST['start1'];	
		$end1 = $_POST['end1'];
		$price1 = $_POST['price1'];
		$income1 = 0;	
		$payment1 = 0;
		$status = "No";
		$sql_add1 = "insert into phase set 
		phase_id = '$phaseid' ,  proj_id = '$projid'  , phase_start = '$start1' , phase_end = '$end1' , phase_detail = '$detail1', phase_price = '$price1'
		, phase_income = '$income1',  phase_payment = '$payment1', phase_status = '$status' ";
		mysqli_query($link1,$sql_add1);
		echo $phaseid;
		echo "test";
	}
	echo $sql_add1; 
	echo $_SESSION['phase'];
	echo $_SESSION['proid'];
	echo $_SESSION['check'];
	echo $_SESSION['ck'];
}

?>
</body>
</html>
<?php
mysqli_close($link1);
?>