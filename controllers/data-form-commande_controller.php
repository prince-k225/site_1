<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if($_POST['action'] === 'send-shipping-data') {

        $fistName = $_POST['first-name'];
        $lastName = $_POST['last-name'];
        $number = $_POST['number'];
        $city = $_POST['city'];
        send_shipping();
 
    }

}