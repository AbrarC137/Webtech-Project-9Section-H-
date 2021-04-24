<?php
	include ('../db/db.php');

	if(isset($_POST['submit'])){

		$username = $_POST['username'];
		$password = $_POST['password'];
				
            $sql = "SELECT * FROM users WHERE username= '$username' AND password='$password'"; 
            $res = mysqli_query($conn, $sql);
            $count = mysqli_num_rows($res);

            if($count==1)
            {
			$name = mysqli_fetch_assoc($res);
			
			$_SESSION['username'] = $name['username'];
					
			$_SESSION['password'] = $name['password'];
		
			$_SESSION['gender'] = $name['gender'];
			
			$_SESSION['email'] = $name['email'];

			$_SESSION['type'] =$name['type'];
			
			$_SESSION['verification'] =$name['verification'];

			
            header('location: ../view/seller.php');

            }
            else
            {
                header('location: ../view/login.php');
            }
	}
		
?>