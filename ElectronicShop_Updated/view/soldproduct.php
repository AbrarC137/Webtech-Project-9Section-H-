<?php
	$title = "Dashboard";
	include ('../db/db.php');
	
?>

	<form action="">
		<fieldset>
			
			
			
			<table border="5" " width="100%" align="center">
				<tr align="center">
					<td width="100px">
						
					</td>
			
					<td colspan="0" height="80px" align="right">
						<div> 
							<h2><a href="sellerDashboard.php"> Back</a></h2>
						</div>
					</td>
				</tr>
				<tr align="left" height="500px" width="1000px">
					<td>
						<div class="menu">
							<a href="#"><h4>Sold Items</h4></a> 
							 
							
						  </div>
					</td>
					<td colspan="0" height="80px" align="center">
				<table border= "1">
						   
                <tr>
                    
                    <th>Name </th>
                    <th>Catagory </th>
                    <th>Entry Date </th>
                    <th>Model </th>
                    <th>Price </th>
                    <th>Discount</th>
					<th>Status</th>
                      
                </tr>

                <?php
                    
                    $sql = "SELECT * FROM addproduct WHERE status = 'Sold'";
                    
                    $res = mysqli_query($conn, $sql);
                    
                    
                    if($res==TRUE)
                    {
                       
                        $count = mysqli_num_rows($res);

                        
                        $sn=1; 

                        
                        if($count>0)
                        {
                            
                            while($rows=mysqli_fetch_assoc($res))
                            {
                                
                                
                                $name = $rows['name'];
		                        $catagory = $rows['catagory'];
								$entrydate = $rows['entrydate'];
	                        	$model = $rows['model'];
								$price = $rows['price'];
	                        	$discount = $rows['discount'];
								$status = $rows['status'];
                                //display the values in table
                                ?>

                                    <tr>
                                        <td><?php echo  $name; ?></td>
                                        <td><?php echo  $catagory; ?> </td>
                                        <td><?php echo  $entrydate; ?></td>
                                        <td><?php echo  $model; ?></td>
                                        <td><?php echo  $price; ?></td>
                                        <td><?php echo  $discount; ?></td>
										<td><?php echo  $status; ?></td>
										
                                        
                                        
                
                                    </tr>

                                <?php
                            }
                        }
                        else
                        {
                            
                        }

                    }
                
								?>
            </table>
					
					</td>
				</tr>
			
				<tr align="center" >
					<td colspan="3" height="50px">
						
						
					</td>
				</tr>
			</table>
	</fieldset>
	</form>