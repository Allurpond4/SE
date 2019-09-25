<?php
//fetch.php
$connect = mysqli_connect("localhost", "root", "123456789", "e-commerce");
 session_start();
if($_SESSION['UserID']!=""){
	if($_SESSION['status']=="ADMIN"){
		 $hid = "false";
	 }else $hid = "hidden";
}else $hid = "hidden";
	 
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
  SELECT * FROM polo 
  WHERE Name LIKE '%".$search."%'
  OR Color LIKE '%".$search."%' 
  

 ";
}
else
{
 $query = "
  SELECT * FROM polo  ORDER BY Name
 ";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
 while($row = mysqli_fetch_array($result))
 {
	
	 $img ="";
	 if($row['Img']=="")
	 {
		 $img="Avata.png";
	 }else
		 $img = $row['Img'];
  $output .= ' <div class="col-sm-4 >
				   <div class="cardTrainer" style="position:relative;
													max-width:270px;
													height:410px;
													background:#63C5CE;
													border-radius:15px;
													margin-right:50px;
													margin-left:50px;
													margin-bottom:30px ;
													padding:20px 5px;
													box-shadow:0 5px  10px;
													font-size: 14px;">'.
                '<div class="title">' .
                  '<h5>'. $row['Name'].'</h5>'.
					'<img src="./productimg/'.$img.'" style="width:140px; height: 180px"/><br><br>'.
 				 '</div>'. 
                  
					'<div class="pop" style="margin-top: 10px;">'.
					 '<button type="button" class="btn btn-info"   data-toggle="modal" data-target="#myModal'.
	  				$row['ID'].'"> ดูรายละเอียดเพิ่มเติม </button> '.
					 '<button type="button" style="width:120px;" class="btn btn-danger" onclick="window.location.href=\'productEdit.php?TId='.$row['ID'].' \'" id="btnEdit" '.$hid.' >Edit</button>'.
				'</div>
			</div>'.
			'<div id="myModal'.$row['ID'].'" class="modal fade bd-example-modal-xl" role="dialog" >'.
					'<div class="modal-dialog modal-xl">'.
								'<div class="modal-content">'.
									'<div class="modal-header">
										<div style="padding-left:480px;font-size:20px;font-weight:bold;">ข้อมูลสินค้า<br>
										<img src="./productimg/'. $row['Img'].'" style="width:200px;padding-top:10px;"/>
									</div>'.
	  									'<button type="button" class="close" data-dismiss="modal">&times;</button>'.
									'</div>'.
									'<div class="modal-body">'.
										'<table border="0" >'.
										'<tr style="padding-top:15px; ">'. 
											'<td width="15%" > ชื่อ : </td>'.
												'<td >'. $row['Name'].'</td>	
										</tr>'.
										'<tr style="padding-top:30px; ">'.  
											'<td>คำอธิบาย : </td>'.
											 '<td>'.$row['Description'].'</td>
										</tr>'.
										''.
										'<tr style="padding-top:30px; ">' .
											'<td>สี :</td>'.
											'<td>'. nl2br($row['Color']).'</td>
										</tr>'.
										'
										</table>'.	
									'</div>
								</div>
							</div>
						</div>'.
		'</div>';
							
		} 
 echo $output;
}
else
{
 echo '<h1>Data Not Found<h1><br><br><br><br><br><br><br>';
}

?>
