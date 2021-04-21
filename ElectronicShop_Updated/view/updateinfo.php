<?php 
			include ('../db/db.php');
            //get the id of selected user
            $id = $_GET['id'];

            //sql to get the id
            $sql = "SELECT * FROM addproduct WHERE id=$id";

            //execuate the cuery
            $res = mysqli_query($conn, $sql);

            //check weather the quary exucation
            if($res==true)
            {
                //check the data 
                $count = mysqli_num_rows($res);

                
                if($count==1)
                {    
                    $row = mysqli_fetch_assoc($res);
                    $name = $row['name'];
                    $catagory = $row['catagory'];
                   	$entrydate = $row['entrydate'];
	              	$model = $row['model'];
	            	$price = $row['price'];
                  	$discount = $row['discount'];
	            	$status = $row['status'];
                }
                else
                {
                    
                }
            }
        
?>
		
<form action="../controller/updateproductcheck.php" method="post">
            <table>
                <tr>
                    <td>Name: </td>
                    <td> <input type="text" name="name" id="" value="<?php echo  $name; ?>"></td>
                </tr>

                <tr>
                    <td>Catagory: </td>
                    <td> <input type="text" name="catagory" id="" value="<?php echo  $catagory; ?>"></td>
                </tr>

                
                <tr>
                    <td>Entry Date: </td>
                    <td> <input type="date" name="entrydate" id="" value="<?php echo  $entrydate; ?>"></td>
                </tr>

                <tr>
                    <td>Model: </td>
                    <td> 
                        <input type="text" name="model" value="<?php echo  $model; ?>">
                    </td>
                </tr>

                <tr>
                    <td>Price: </td>
                    <td> <input type="text" name="price" id="" value="<?php echo  $price; ?>"></td>
                </tr>

                <tr>
                    <td>Discount: </td>
                    <td> <input type="text" name="discount" id="" value="<?php echo  $discount; ?>"></td>
                </tr>

                <tr>
                    <td>Status: </td>
                    <td> <input type="text" name="status" id="" value="<?php echo  $status; ?>"></td>
                </tr>
                      
                <tr>
                    <td colspan="2"> 
                        <input type="hidden" name="id" value=" <?php echo $id; ?>">
                        <input type="submit" name="submit" value="Update">
                    </td>
                </tr>

            </table>

        </form>