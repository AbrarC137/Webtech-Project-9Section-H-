<?php
	include ('../db/db.php');

	if(isset($_POST['submit'])){

		$username = $_POST['username'];
		$password = $_POST['password'];
				
            $sql = "SELECT * FROM alluser WHERE name= '$username' AND password='$password'"; 
            $res = mysqli_query($conn, $sql);
            $count = mysqli_num_rows($res);

            if($count==1)
            {
			$name = mysqli_fetch_assoc($res);
			
			$_SESSION['name'] = $name['name'];
					
			$_SESSION['password'] = $name['password'];

			$_SESSION['dob'] = $name['dob'];

			$_SESSION['gender'] = $name['gender'];
			
			$_SESSION['email'] = $name['email'];

			$_SESSION['phone'] = $name['phone'];

			$_SESSION['address'] = $name['address'];

			
            header('location: ../view/seller.php');

            }
            else
            {
                header('location: ../view/login.php');
            }
	}
		
?>