<?php

include('connect.php');
include('all_categories.php');

echo "
<form action='filter.php' method='post'>
<table>
    <tr>
    <td>Filter:</td>
    <td>
        <select name='all_cat' required>
        <option value=''>--SELECT CATEGORY--</option>".$options."</select>
    </td>
    <td><input type='submit' name='submit' value='Filter!'></td>
    </tr>
</table>
</form>
";

?>