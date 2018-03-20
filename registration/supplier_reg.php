<?php
include('connect.php');
include('all_districts.php');
$path='../';
include('../header.php');
?>


<!DOCTYPE html>
    <html>

    <head>
        <title>Supplier's Registration</title>
    </head>

    <body>
       <?php include('all_registration.php');?>
   
        <form action="supplier_reg_main.php" method="post">
            <table>
                <tr>
                    <td>
                        <label for='name'>Name:</label>
                    </td>
                    <td>
                        <input type="text" name="name"> </td>
                </tr>
                 <tr>
                    <td>
                        <label for='email'>Email ID:</label>
                    </td>
                    <td>
                        <input type="email" name="email"> </td>
                </tr>
                
                 <tr>
                    <td>
                        <label for='password'>Password:</label>
                    </td>
                    <td>
                        <input type="password" name="password"> </td>
                </tr>
                
                 <tr>
                    <td>
                        <label for='contact'>Contact:</label>
                    </td>
                    <td>
                        <input type="text" name="contact"> </td>
                </tr>
                
                
                <tr>
                    <td>
                        <label for='district'>District:</label>
                    </td>
                    <td>
                        <select name='district' required>
                            <option value="" disabled selected>Select District</option>
                            <?php echo $options;?>
                        </select>
                        
                        
                    </td>
                    
                    
                </tr>
                
                
                
                
               <tr>
                    <td></td><td><input type="submit" name="submit" value="Register!"</td>
                </tr>
            </table>
        </form>
    </body>

    </html>
    <?php
include('../footer.php');
?>