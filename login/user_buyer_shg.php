<?php
include('connect.php');
$path='../';
include('../header.php');
?>

    <div class="row col-md-12" style="margin:1%">
    </div>
        <div class="col-md-4">
        </div>

        <div class="panel panel-success col-md-5" style="padding:5%">
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
                    <td><br/></td>
                </tr>

                <tr>
                    <td>
                        <label for="type">Select Type:</label>

                    </td>

                    <td><button type="submit" class="btn btn-primary" name="buyer" value="Buyer">Buyer</button>
                    <button type="submit" class="btn btn-danger" name="supplier" value="Supplier">Supplier</button>
                    <button type="submit" class="btn btn-success" name="tourist" value="Tourist">Tourist</button>
                    <button type="submit" class="btn btn-warning" name="guide" value="Guide">Guide</button></td>
                </tr>
            </table>
        </form>
    </div>
    <div class="col-md-4">
    </div>
<?php
include('../footer.php');
?>
