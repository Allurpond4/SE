<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin Teamporary Delivery</title>
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body><center>
    <table border="2" align="center">
		<a href="admin-add-product.html">เพิ่มข้อมูลสินค้า</a> 
       	<a href="admin-quotation.php">ใบเสนอราคา</a>
      	<a href="Temporary Delivery.php">บิลส่งของชั่วคราว</a>
       	<a href="admin-login.html">Logout</a><br>
	  </table>
 
	 <br><br><h2>บิลส่งของชั่วคราว (สำเนา)</h2>
	
	  <!----------------------------- Form ------------------------------>
	<form action="Teamporary Delivery Print.php" method="post">
		<table border="0" width="800px" align="center">
			<tr height="100">
				<td><img src="Top.png" width="800px" ></td>
			</tr>
			<tr>
				<td>
					<h5 style="color: #000138" align="center">บิลส่งของชั่วคราว (สำเนา)</h5>
			
				<!---------------ส่วนหัว--------------->
					<table border="1" width="800px">
						<tr align="center" height="150px">
							<td colspan="3"><h5>ชื่อลูกค้า</h5><b><input type="text" class="input-sm" name="Customer" value=" " size="50" placeholder="ชื่อลูกค้า"><br></b><br></td>
							<td><h5>วันที่</h5><? echo date("d/m/Y"); ?></td>
						</tr>

					</table>
					<table border="1" width="800px"><br>
						<tr align="center" bgcolor="#49D6F2">
							<td width="60px"><b>ลำดับที่<br>Item</b></td>
							<td width="100px"><b>รายการ<br>Description</b></td>
							<td width="50px"><b>จำนวน<br>Quantity</b></td>
							<td width="50px"><b>ราคา/หน่วย<br>Price/ Unit</b></td>
						</tr>
						<!---------------ดึงค่ามาจากฟอร์ม--------------->
						<tr align="center" valign="top" height="300px">
							<td width="60px"><input type="text" class="input-sm" name="item1" size="2" value="1" ></td>
							<td width="100px"><textarea class="input-sm" rows="20" cols="50" name="description1" placeholder="รายการสินค้า"></textarea></td>	
							<td width="50px"><input type="text" class="input-sm" name="quantity1" placeholder="จำนวนสินค้า"></td>
							<td width="50px"><input type="text" class="input-sm" name="price1" placeholder="ราคาสินค้า/หน่วย"></td>
						</tr>
						
						
						<tr valign="middle" height="60px">
							<td colspan="3" style="color: crimson"><b> สินค้ารับไปแล้วเงินยังไม่ชำระ (Received in good not yet Palment) </b></td>
							<td></b></td>
						</tr>
					</table>
		
					<table border="1" width="800px"><br>
						<tr align="center" height="80px" >
							<td width="400px"valign="bottom"><b>ลงชื่อ(________________________________)ผู้รับสินค้า<br>วันที่ : <input type="date" class="input-sm" id="start" name="Duedate1"></b></td>
							<td width="400px"valign="bottom"><b>ลงชื่อ(________________________________)ผู้ส่งสินค้า<br>วันที่ : <input type="date" class="input-sm" id="start" name="Duedate2"></b></td>
						</tr>
						
					</table><br>
			<tr>
				<td colspan="8" align="center"><input type="submit" value="ตกลง" class="btn btn-info" size="10">
				<input type="reset" value="ยกเลิก" class="btn btn-info"><br><br></td>
			</tr>
		</center>
	</form>
  </body>
</html>
