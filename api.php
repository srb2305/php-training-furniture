<?php 
include('db.php');
if(isset($_POST['api_add_product'])){
	$title = $_POST['title'];
	$short_desc = $_POST['short_desc'];
	$long_desc = $_POST['long_desc'];
	$mrp = $_POST['mrp'];
	$msp = $_POST['msp'];
	$qty = $_POST['qty'];
	
	$iamge_name = '';
	if($_FILES['image']) {
		$temp_name = $_FILES['image']['tmp_name'];
		$iamge_name = $_FILES['image']['name'];
		$destinationPath = "product_images/".$iamge_name;
		move_uploaded_file($temp_name,$destinationPath);
	}

	$qry = "insert into products(title,short_desc,long_desc,image,mrp,msp,qty) values ('$title','$short_desc','$long_desc','$iamge_name','$mrp','$msp','$qty')";
	$result = mysqli_query($con,$qry);
	if($result){
		$responce['status'] = true;
		$responce['message'] = "inserted successfully";
	}else{
		$responce['status'] = false;
		$responce['message'] = "data not inserted";
	}

	echo json_encode($responce);
}



?>