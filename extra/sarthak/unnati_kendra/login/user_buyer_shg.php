<?php
include('connect.php');
$path='../';
include('../header.php');
?>
    <!DOCTYPE html>
    <html>

    <head>
        <title>Login</title>
    </head>

    <body>
        <form action="login_main.php" method="post">
            <table>
                <tr>
                    <td>
                        <label for="email_id">Email ID:</label>
                    </td>
                    <td>
                        <input type="text" name="email_id"> </td>
                </tr>
                <tr>
                    <td>
                        <label for="password">Password:</label>
                    </td>
                    <td>
                        <input type="password" name="password"> </td>
                </tr>
                
                  
                <tr>
                    <td>
                        <label for="type">Select Type:</label>
                    </td>
                    <td><button type="submit" name="buyer" value="Buyer">Buyer</button></td>
                    <td><button type="submit" name="supplier" value="Supplier">Supplier</button></td>
                    <td><button type="submit" name="shg" value="SHG">SHG</button></td>
                </tr>                
            </table>
        </form>
    </body>

    </html>
    <?php
include('../footer.php');
?>