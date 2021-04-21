<?php 
	include ('../db/db.php');
    if(isset($_POST['signup'])){
        if(empty($_POST['username']) || empty($_POST['password']) || empty($_POST['repass']) || empty($_POST['dob']) || empty($_POST['gender']) || empty($_POST['address']) || empty($_POST['email']) || empty($_POST['phone']) || empty($_POST['address']) || empty($_POST['type'])){
            echo"Plaese fill out all the field";
        }
        else{
            
            $target_file = basename($_FILES["profilePicture"]["name"]);
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
                echo "only jpeg, jpg & png files are allowed.";
            }
            if ($temp_dob[0]>2002) {
                echo"Please select year before 2005.";
            }
            else{

                $username= $_POST['username'];
                $password=$_POST['password'];
                $repass=$_POST['repass'];
                $dob= $_POST['dob'];
                $gender = $_POST['gender'];
                $email=$_POST['email'];
                $phone = $_POST['phone'];
                $address=$_POST['address'];
                $type=$_POST['type'];
                

                $user=['username'=> $username, 'profilePicture'=> $profilePicture, 'password'=> $password, 'dob' => $dob, 'gender' => $gender, 'email'=>$email, 'phone' => $phone, 'address' => $address, 'type' => $type ];
				$formdata = array(
					'username'=> $_POST["username"],
					'profilePicture'=> $_POST['profilePicture'],
					'password'=> $_POST["password"],
					'dob' => $_POST['dob'],
					'gender' => $_POST['gender'],
					'email'=> $_POST["email"],
					'phone' => $_POST['phone'],
					'address' => $_POST['address'],
					'type' => $_POST['type']
					
				 );

                if ($password!=$repass) {
                    echo"please check your password and confirm password";
                }
                else{
                    
                    $sql = "INSERT INTO alluser SET

                    id = '',

                    name = '$username',

                    password = '$password',

                    dob = '$dob',

                    gender = '$gender',

                    email = '$email',

                    phone = '$phone',

                    address = '$address',
					
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
    }

?>