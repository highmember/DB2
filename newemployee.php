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
	<center>
		  <h1>เพิ่มพนักงานใหม่</h1></center>
	   <form id="form1" name="form1" method="post" action="success_newemp.php">
       <br><br><br>
	      <p><b>รหัสพนักงาน : </b>
	         <input type="text" name="id" id="id" /></p>
	      <p><b>รหัสงาน : </b>
            <input type="text" name="proj_id" id="proj_id" />
	      </p>
	      <p><b>ชื่อ <tab4>
          : </b>
	         <input type="text" name="name" id="name" /><tab4>
	          <b>นามสกุล : </b>
         <input type="text" name="surname" id="surname" /></p>
      
	      <p><b>เบอร์โทรศัพท์ : </b>
         <input type="text" name="phone" id="phone" /> 
         </p>
	      <p><b>ที่อยู่  : </b>
	        <input type="text" name="address" id="address" />
         </p>
	      <p><b>วันเริ่มงาน : </b>
	        <input type="date" name="frist_date" id="frist_date" />
         </p>
		  <p><b>วันที่ปัจจุบัน : </b>
	        <input type="date" name="curr_date" id="curr_date" />
         </p>
	      <p><b>ค่าแรง/วัน </b><b>: </b>
	        <input type="text" name="inc_day" id="inc_day" />
         </p>
	      <p><b>ค่าแรง/week : </b>
            <input type="text" name="pay_week" id="pay_week" />
	      </p>
<br><br><br>
           <center><input type="submit" name="Add" id="Add" value="บันทึกข้อมูล" /></center>
	</form>
  <br><br><br>
</div>
</body>
</html>
