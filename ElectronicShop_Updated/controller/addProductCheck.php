<?php 

	include ('../db/db.php');
    if(isset($_POST['create'])){
        if(empty($_POST['name']) || empty($_POST['catagory']) || empty($_POST['entrydate']) || empty($_POST['model']) || empty($_POST['price'])){
            echo"Plaese fill out all the field";
        }
        else{
         
				$name= $_POST['name'];
				$catagory= $_POST['catagory'];
                $entrydate=$_POST['entrydate'];
                $model=$_POST['model'];
                $price= $_POST['price'];
				$discount= $_POST['discount'];
				$status= $_POST['status'];
                
              
				 $sql = "INSERT INTO addproduct SET

                    id = '',

                    name = '$name',
					
					catagory = '$catagory',

                    entrydate = '$entrydate',

                    model = '$model',

                    price = '$price',
					
					discount = '$discount',
					
					status = '$status'

                    ";



                    //Executing quary and saving data into data base

                    $res = mysqli_query($conn, $sql) or die(mysqli_error());

                    

                    //check whether the data 

    

                    if($res==TRUE)

                    {

                        echo "data inserted";
    

                    }

                    else

                    {

                        echo "failed";

                    }
              

           

            
        }
    }

?>