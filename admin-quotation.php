<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin Quotation</title>
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
 
	 <br><br><h2>ใบเสนอราคา</h2>
	
	  <!----------------------------- Form ------------------------------>
	<form action="admin-quotation-print.php" method="post">
		<table border="0" width="800px" align="center">
			<tr height="100">
				<td><img src="Top.png" width="800px" ></td>
			</tr>
			<tr>
				<td>
					<h5 style="color: #000138" align="center">ใบเสนอราคา (Quotation)</h5>
			
				<!---------------ส่วนหัว--------------->
					<table border="1" width="800px">
						<tr align="center">
							<td colspan="3"><h5>ชื่อลูกค้า</h5><b><input type="text" class="input-sm" name="Customer" value=" " size="50" placeholder="ชื่อลูกค้า"><br></b><br></td>
							<td><h5>วันที่</h5><? echo date("d/m/Y"); ?></td>
						</tr>
						<tr align="center" bgcolor="#6C95EC">
							<td><b>ผู้ดูแลลูกค้า<br>Customer Service Advisor</b></td>
							<td><b>เงื่อนไขการชำระเงิน<br>Term of payment</b></td>
							<td><b>วันถึงกำหนดจ่าย<br>Due Date</b></td>
							<td><b>รหัสลูกค้า<br>Customer Code</b></td>
						</tr>
						<tr align="center" height="60">
							<td><input type="text" class="input-sm" name="CustomerService" placeholder="ผู้ดูแลลูกค้า"></td>
							<td><input type="text" class="input-sm" name="payment" placeholder="เงื่อนไขการชำระเงิน"></td>
							<td><input type="date" id="start" name="Duedate"></td>
							<td><input type="text" class="input-sm" name="CustomerNumber" placeholder="รหัสลูกค้า"></td> 
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
						<tr align="center" valign="middle" height="60px">
							<td width="60px"><input type="text" class="input-sm" name="item1" size="2" ></td>
							<td width="100px"><input type="text" class="input-sm" name="description1" size="50" placeholder="รายการสินค้า"></td>	
							<td width="50px"><input type="text" class="input-sm" name="quantity1" placeholder="จำนวนสินค้า"></td>
							<td width="50px"><input type="text" class="input-sm" name="price1" placeholder="ราคาสินค้า/หน่วย"></td>
						</tr>
						<tr align="center" valign="middle" height="60px">
							<td width="60px"><input type="text" class="input-sm" name="item2" size="2" ></td>
							<td width="100px"><input type="text" class="input-sm" name="description2" size="50" placeholder="รายการสินค้า"></td>	
							<td width="50px"><input type="text" class="input-sm" name="quantity2" placeholder="จำนวนสินค้า"></td>
							<td width="50px"><input type="text" class="input-sm" name="price2" placeholder="ราคาสินค้า/หน่วย"></td>
						</tr>	
						<tr align="center" valign="middle" height="60px">
							<td width="60px"><input type="text" class="input-sm" name="item3" size="2" ></td>
							<td width="100px"><input type="text" class="input-sm" name="description3" size="50" placeholder="รายการสินค้า"></td>	
							<td width="50px"><input type="text" class="input-sm" name="quantity3" placeholder="จำนวนสินค้า"></td>
							<td width="50px"><input type="text" class="input-sm" name="price3" placeholder="ราคาสินค้า/หน่วย"></td>
						</tr>	
						<tr align="center" valign="middle" height="60px">
							<td width="60px"><input type="text" class="input-sm" name="item4" size="2" ></td>
							<td width="100px"><input type="text" class="input-sm" name="description4" size="50" placeholder="รายการสินค้า"></td>	
							<td width="50px"><input type="text" class="input-sm" name="quantity4" placeholder="จำนวนสินค้า"></td>
							<td width="50px"><input type="text" class="input-sm" name="price4" placeholder="ราคาสินค้า/หน่วย"></td>
						</tr>	
						<tr align="center" valign="middle" height="60px">
							<td width="60px"><input type="text" class="input-sm" name="item5" size="2" ></td>
							<td width="100px"><input type="text" class="input-sm" name="description5" size="50" placeholder="รายการสินค้า"></td>	
							<td width="50px"><input type="text" class="input-sm" name="quantity5" placeholder="จำนวนสินค้า"></td>
							<td width="50px"><input type="text" class="input-sm" name="price5" placeholder="ราคาสินค้า/หน่วย"></td>
						</tr>	
						
						<tr valign="middle" height="60px">
							<td colspan="2" style="color: crimson"><b>***หมายเหตุ : </b><input type="text" name="Comment" size="55" class="input-sm"></td>
							<td colspan="2"><b>มัดจำ (Deposit) : </b><input type="text" name="Deposit" size="33" class="input-sm" value="0"></b></td>
						</tr>
						
					</table>
			<tr>
				<td colspan="8" align="center"><input type="submit" value="ตกลง" class="btn btn-info" size="10">
				<input type="reset" value="ยกเลิก" class="btn btn-info"><br><br></td>
			</tr>
		</center>
	</form>
  </body>
</html>
