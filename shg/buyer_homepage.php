<?php
/**
 * Created by PhpStorm.
 * User: Avinash Maurya
 * Date: 02-04-2017
 * Time: 03:08
 */
include 'buyer_header.php';
$buyer_id = $_SESSION['buyer_id'];

$sql_buyer_adv_post = "SELECT * FROM buyer_adv_post WHERE buyer_id=$buyer_id";


?>