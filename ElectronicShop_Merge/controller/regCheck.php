<?php 
	include ('../db/db.php');
    if(isset($_POST['signup'])){
        if(empty($_POST['username']) || empty($_POST['password']) || empty($_POST['repass']) || empty($_POST['gender']) || empty($_POST['email']) || empty($_POST['type'])){
            echo"Plaese fill out all the field";
        }
        
            else{

                $username= $_POST['username'];
                $password=$_POST['password'];
                $repass=$_POST['repass'];               
                $gender = $_POST['gender'];
                $email=$_POST['email'];               
                $type=$_POST['type'];
                

                $user=['username'=> $username, 'password'=> $password, 'gender' => $gender, 'email'=>$email, 'type' => $type ];
				$formdata = array(
					'username'=> $_POST["username"],					
					'password'=> $_POST["password"],	
					'gender' => $_POST['gender'],
					'email'=> $_POST["email"],									
					'type' => $_POST['type']
					
				 );

                if ($password!=$repass) {
                    echo"please check your password and confirm password";
                }
                else{
                    
                    $sql = "INSERT INTO users SET

                    id = '',

                    username = '$username',

                    password = '$password',
                  
                    gender = '$gender',

                    email = '$email',
              					
					type = '$type'

                    ";



                    //Executing quary and saving data into data base

                    $res = mysqli_query($conn, $sql) or die(mysqli_error());

                    

                    //check whether the data 

    

                    if($res==TRUE)

                    {

                        //echo "data inserted";

                        $_SESSION['add'] = " Signup Successfully <br>";

    

                        header('location: ../view/login.php');

                    }

                    else

                    {

                        echo "failed";

                    }
                }

            }

            
        
    }

?>