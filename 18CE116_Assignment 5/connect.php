<?php
	$Name = $_POST['Name'];
	$Profession= $_POST['Profession'];
	$Institute = $_POST['Institute'];
	$Address = $_POST['Address'];
	$City = $_POST['City'];
	$State = $_POST['State'];
	$Country = $_POST['Country'];
	$Mobile = $_POST['Mobile'];
	$Email = $_POST['Email'];

	/*
	if(!empty($Name) || !empty($Profession) || !empty($Institute) || !empty($Address) || !empty($City) || !empty($State) || !empty($Country) || !empty($Mobile) || !empty($Email) )
	{

	}
	else{
		echo "All fields are requried";
		die();
	}*/


	$conn = new mysqli('localhost','root','','test1');
	if($conn->connect_error){
		die("Connection Failed :");
	}
	else{
		$stmt = $conn->prepare("insert into registration(Name,Profession,Institute,Address,City,State,Country,Mobile,Email) values(?, ?, ?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("sssssssis",$Name,$Profession,$Institute,$Address,$City,$State,$Country,$Mobile,$Email);
		$stmt->execute();
		echo "registration Succesfully...";
		$stmt->close();
		$conn->close();
	}

?>