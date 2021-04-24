<?php include('../db/db.php'); ?>
<?php 
	
    if(isset($_POST['submit']))
	{
        $id = $_POST['id'];
		$name = $_POST['name'];
		$catagory = $_POST['catagory'];
		$entrydate = $_POST['entrydate'];
		$model = $_POST['model'];
		$price = $_POST['price'];
		$discount = $_POST['discount'];
		$status = $_POST['status'];
		

		$sql = "UPDATE addproduct SET
			
			name = '$name',
			catagory = '$catagory',
			entrydate = '$entrydate',
			model = '$model',
			price = '$price',
			discount = '$discount',
			status = '$status'
			
            WHERE id='$id'
		";
		
		//Executing quary and saving data into data base
		$res = mysqli_query($conn, $sql);

		if($res==TRUE)
		{
			echo "data inserted";			
		}
		else
		{
			echo "data not updated";
		}


	}

?>