<?php
include('connection.php');

if(isset($_POST['payment_id']) && isset($_POST['amount']) && isset($_POST['name'])){

    $payment_id = $_POST['payment_id'];
    $amount = $_POST['amount'];
    $name = $_POST['name'];

    $payment_status = "success";

    $query = "insert into razorpay (name, amount, payment_status, payment_id) values('$name ','$amount','$payment_status','$payment_id')";

    mysqli_query($con, $query);
}


?>