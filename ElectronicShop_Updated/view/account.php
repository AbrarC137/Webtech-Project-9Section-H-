<?php 

	$id = mysqli_fetch_assoc($res);



    $_SESSION['id'] = $name['id'];

    $name = mysqli_fetch_assoc($res);



    $_SESSION['name'] = $name['name'];



    $password = mysqli_fetch_assoc($res);



    $_SESSION['password'] = $name['password'];
	
	$dob = mysqli_fetch_assoc($res);



    $_SESSION['dob'] = $name['dob'];



    $gender = mysqli_fetch_assoc($res);



    $_SESSION['gender'] = $name['gender'];



    $email = mysqli_fetch_assoc($res);



    $_SESSION['email'] = $name['email'];



    $phone = mysqli_fetch_assoc($res);



    $_SESSION['phone'] = $name['phone'];



    $address = mysqli_fetch_assoc($res);



    $_SESSION['address'] = $name['address'];

?>