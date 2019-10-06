<?php session_start(); ?><?
include('conn.php');

 if(isset($_POST['Save']))
 {
	 	$update ="";
	 	$image = $_FILES['changePic']['name'];
		$id =$_POST['tid'];
		$name = $_POST['name'];
		$des = $_POST['des'];
		$type = $_POST['type'];
		$color = $_POST['color'];
		
		switch ($type) {
			case 1:
				$w = polo;
				break;
			case 2:
				$w = apron;
				break;
			case 3:
				$w = hat;
				break;
			case 4:
				$w = pants;
				break;	
			case 5:
				$w = sport;
				break;
			case 6:
				$w = suits;
				break;
			case 7:
				$w = tshirt;
				break;
			case 8:
				$w = umbrella;
				break;
			case 9:
				$w = jacket;
				break;		
			
			default:
				exit;
		}
	if(isset($_FILES['changePic']['name'])&&($_FILES['changePic']['name'])!="")
	{
		// Delete Old pic
		$target = "productimg/".basename($image);
		move_uploaded_file($_FILES['changePic']['tmp_name'], $target);
	
		$update ="UPDATE $w SET Name='$name',Description='$des',Color='$color',Img='$image' WHERE ID=$id";	
  	}
	else {
		$update ="UPDATE $w SET Name='$name',Description='$des',Color='$color' WHERE ID=$id ";
		
		}
	
	$result = mysql_query($update)or die(mysql_error());
	 
	if($result) {
		echo "<script>alert('Update Successful');window.location.href='product.php';</script>";
	}else{
		echo "<script>alert('Update Failed');</script>";
	}

 }
?>
