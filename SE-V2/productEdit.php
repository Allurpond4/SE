<?php
	include('conn.php');
	$ID = $_GET['TId'];
 	$strSQL = "SELECT * FROM polo WHERE Id=$ID";
	$objQuery = mysql_query($strSQL);
	
?>


<!DOCTYPE html>
<html ><head>
  	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

  
  
  
    <title>แก้ไขข้อมมูลสินค้า</title>
    

  <script>
        window.onload = function(){
            $.get("nav.php", function(data){
                $("#navigation").html(data);
            })
        }
	</script>
	<div id="navigation" ></div>
	<style>
		tr{
			vertical-align: text-top;
			position: relative;
		}
		
	</style>
	
  </head>   
  <body>
	  
	  <center>
			<div class="contentblock">
				<div style="font-size: 16px; text-align:justify;">
		<div class="container-fluid">	
		<table ] height="800" width="600px" align="center">
		<form name="productEdit" method="post" action="product_edit_action.php" enctype="multipart/form-data" >		
				
			 
	<?	while($objResult = mysql_fetch_array($objQuery)) {
			$title=$objResult['Color'];
			if($title=="สีดำ"){
				$a1 = "selected";
			}else if($title=="สีขาว"){
				$a2 = "selected";
			}else if($title=="สีเทา"){
				$a3 = "selected";
			}else if($title=="สีแดง"){
				$a4 = "selected";
			}else if($title=="สีฟ้า"){
				$a5 = "selected";
			}else if($title=="สีเหลือง"){
				$a6 = "selected";
			}else if($title=="สีเขียว"){
				$a7 = "selected";
			}else if($title=="สีน้ำตาล"){
				$a8 = "selected";
			}else if($title=="สีชมพู่"){
				$a9 = "selected";
			}else if($title=="สีม่วง"){
				$a10 = "selected";
			}
						


					?> 
					<tr><td colspan="3" align="center">
						 <input type="hidden" id="tid" name="tid" value="<? echo $objResult['ID']; ?>"/>
						  <input type="hidden" id="oldPic" name="oldPic" value="<? echo $objResult['Img']['name'];?>"/>

						<img src="productimg/<? echo $objResult['Img']; ?>" width="200px"/><br>
						
					</td></tr>
					<tr>
					
					<td colspan="3">
					<p style="margin-left: 100px;margin-top: 15px; margin-bottom: 15px;">Change Picture :
						<input type="file" name="changePic"/>
						</p>
 					
					</td>			
					</tr>
					
					<tr>
						<td> ชื่อ : </td>
						<td><input type="text" name="name" class="form-control"  value="<? echo $objResult['Name']; ?>" required  /></td>
						

					</tr>
					
					<tr>
						<td> หลักสูตรที่อบรม : </td>
						<td colspan="2"><textarea name="des"  cols="40" rows="5" class="form-control" ><? echo $objResult['Description']; ?></textarea></td>
					</tr>
					<tr>
						<td> ประเภทสินค้า : </td>
						<td colspan="2">
						<select name="type" required>
							<option value="1"  <? echo $sel1; ?>>เสื้อโปโล</option>
							  <option value="2"  <? echo $sel2; ?>>ผ้ากันเปื้อน</option>
							  <option value="3"  <? echo $sel3; ?>>หมวก</option>
							<option value="4"  <? echo $sel4; ?>>กางเกง</option>
							  <option value="5"  <? echo $sel5; ?>>ชุดกีฬา</option>
							  <option value="6"  <? echo $sel6; ?>>ชุดสูท</option>
							<option value="7"  <? echo $sel7; ?>>เสื้อยืด</option>
							  <option value="8"  <? echo $sel8; ?>>ร่ม</option>
							  <option value="9"  <? echo $sel9; ?>>เสิ้อแจ็คเก็ต</option>	
						</select>
						</td>
					</tr>
					<tr>
						<td> สี : </td>
						<td colspan="2">
						<select name="color" required>
						<option value="สีดำ" <? echo $a1; ?>>สีดำ</option>
							  <option value="สีขาว"  <? echo $a2; ?>>สีขาว</option>
							  <option value="สีเทา"  <? echo $a3; ?>>สีเทา</option>
							<option value="สีแดง"  <? echo $a4; ?>>สีแดง</option>
							  <option value="สีฟ้า"  <? echo $a5; ?>>สีฟ้า</option>
							  <option value="สีเหลือง"  <? echo $a6; ?>>สีเหลือง</option>
							<option value="สีเขียว"  <? echo $a7; ?>>สีเขียว</option>
							  <option value="สีน้ำตาล"  <? echo $a8; ?>>สีน้ำตาล</option>
							  <option value="สีชมพู่"  <? echo $a9; ?>> สีชมพู่</option>
							  <option value="สีม่วง"  <? echo $a10; ?>>สีม่วง</option>
						</select>
						</td>
					</tr>
					
			<? } ?>
					<tr>
						<td colspan="3" align="center"><input type="submit" name="Save" value="Save" class="btn btn-primary"/> 
						 <input type="reset"  name="Cancle" value="Cancle" class="btn btn-secondary"/> </td>
					</tr>
				</form>
				</table>
				</div>	
				</div>
		  </div>
 </center>

 </body>
</html>