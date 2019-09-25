<?
include('conn.php');

 if(isset($_POST['Save'])){
	 	$update ="";
	 	$image = $_FILES['changePic']['name'];
		$id =$_POST['tid'];
		$name = $_POST['name'];
		$des = $_POST['des'];
		$type = $_POST['type'];
		$color = $_POST['color'];
		
	if(isset($_FILES['changePic']['name'])&&($_FILES['changePic']['name'])!=""){
		// Delete Old pic
		$target = "productimg/".basename($image);
		move_uploaded_file($_FILES['changePic']['tmp_name'], $target);
	
		$update =" UPDATE $type SET Name='$name',Description='$des',Color='$color',Img='$image' WHERE ID=$id";	
  	}
	else {
		$update ="UPDATE $type SET Name='$name',Description='$des',Color='$color' WHERE ID=$id;	
	}
	
	$result = mysql_query($update)or die(mysql_error());
	 
	if($result){
		echo "<script>alert('Update Successful');window.location.href='admin-product-management1.html';</script>";
	}else{
		echo "<script>alert('Update Failed');</script>";
	}

}
?>
