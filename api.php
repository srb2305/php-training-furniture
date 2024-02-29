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

if(isset($_POST['add_to_cart'])){
	$qty = $_POST['qty'];
	$product_id = $_POST['product_id'];
	$user_id = $_POST['user_id'];
	$temp_id = $_POST['temp_id'];

	$qry = "insert into add_to_cart(qty,product_id,user_id,temp_user_id) values ($qty,$product_id,$user_id,$temp_id)";
	$result = mysqli_query($con,$qry);
	if($result){
		$responce['status'] = true;
		$responce['message'] = 'Add to cart successfully.';
		$responce['total_qty'] = rand(0,10);
	}else{
		$responce['status'] = false;
		$responce['message'] = 'Not added to cart';
		$responce['total_qty'] = rand(0,10);
	}
	echo json_encode($responce);
}

if(isset($_POST['send_mail'])){
	$to = $_POST['to'];
	$cc = $_POST['cc'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];
	$headers = "From: srbitsolution@gmail.com" ."\r\n" . "CC: ".$cc;
	mail($to, $subject, $message,$headers);

	echo "Mail Send Successfully";
}

?>