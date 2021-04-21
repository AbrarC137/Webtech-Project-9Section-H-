<?php 
	
	include ('../db/db.php');
?>	

<!DOCTYPE html>
<html>
<head>
	<title>Personal Info</title>
</head>
<body>
<table>
                    <tr>
                        <td>Name </td>
                        <td>: <?php echo $_SESSION['name']?></td>
                        <td rowspan=8 align="center">
                            <img src="#" height="200px" weidth="200px" alt=""><br>
                       </td>
                    </tr>
                    <tr>
                        <td colspan="2"><hr></td>
                    </tr>
                    <tr>
                        <td>Password </td>
                        <td>: <?php echo $_SESSION['password']?></td>
                    </tr>
                    <tr>
                        <td colspan="2"><hr></td>
                    </tr>
                    <tr>
                        <td>Date Of Birth </td>
                        <td>: <?php echo $_SESSION['dob']?></td>
                    </tr>
                    <tr>
                        <td colspan="2"><hr></td>
                    </tr>

                    <tr>
                        <td>Gender </td>
                        <td>: <?php echo $_SESSION['gender']?></td>
                    </tr>
                    <tr>
                        <td colspan="2"><hr></td>
                    </tr>
					<tr>
                        <td>Email </td>
                        <td>: <?php echo $_SESSION['email']?></td>
                    </tr>
                    <tr>
                        <td colspan="2"><hr></td>
                    </tr>
                    <tr>
                        <td>Phone </td>
                        <td>: <?php echo $_SESSION['phone']?></td>
                    </tr>
                    <tr>
                        <td colspan="2"><hr></td>
                    </tr>
                    <tr>
                        <td>Address </td>
                        <td>: <?php echo $_SESSION['address']?></td>
                    </tr>
                    <tr>
                        <td colspan="2"><hr></td>
                    </tr>
                                       
</table>
</body>
</html>
			
