<?php

include('connect.php');
include('all_categories.php');

?>
    <!DOCTYPE html>
    <html>

    <head>
        <title>Add Items</title>
    </head>

    <body>
        <form action="add_category_main.php" method="post">
            <table>
                <tr><td><label for="add_category"/>1.Add Category</td>
                <td>    <input type="text" name="add_category"> </td>
                    <td><input type="submit" name="submit_item" value="Add Category!"></td></tr>
            </table>
        </form>
        <form action="add_item_main.php" method="post">
            <table>
                <tr><td>  <label for="add_item"/>2.Add Items</td>
                <td><select name="all_cat" required>
                           <option value="">--SELECT CATEGORY--</option>
                           <?php echo $options; ?>
                        </select></td>
                <td>     <input type="text" name="add_item"> </td>
                    <td><input type="submit" name="submit_item" value='Add Item!'></td></tr>
            </table>
        </form>
    </body>

    </html>