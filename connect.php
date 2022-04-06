<?php
    $emailaddress = $_post['email address']
    $_password = $_post['password']
    $_confirmpassword =$_post['confrim password']
    
    $conn = new mysqli('localhost','root','','test');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration( email address, password, confrim password) values(?, ?, ?)");
		$stmt->bind_param("sss" , $emailaddress, $password, $confrimpasword);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>
