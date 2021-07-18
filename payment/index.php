<?php
require_once '../vendor/autoload.php';

use CoinbaseCommerce\ApiClient;
use CoinbaseCommerce\Resources\Checkout;
use CoinbaseCommerce\Resources\Charge;

session_start();

/// initalizing database
include('../database/connection.php');

$buy_amount  = isset($_POST['buy_amount']) ? $_POST['buy_amount'] : 0;
$buy_cost  = isset($_POST['buy_cost']) ? $_POST['buy_cost'] : 0;
$wallet_address  = isset($_POST['wallet_address']) ? $_POST['wallet_address'] : '';

if (!$buy_amount || !$buy_cost || !$wallet_address) {
    echo 'Parameter issue';
} else {
    create_charge($buy_amount, $buy_cost, $wallet_address, $db);
}

function create_charge($buy_amount, $buy_cost, $wallet_address, $db) {
    var_dump($buy_cost);
    $user_id = $_SESSION['user_id'];
    //Make sure you don't store your API Key in your source code!
    ApiClient::init('dbdb8d5a-97fa-4f9d-a75c-bbbd9a6b0798');

    $chargeData = [
        'name' => 'Elon Token Purchase',
        'description' => 'Purcahse token',
        'local_price' => [
            'amount' => $buy_cost,
            'currency' => 'USD'
        ],
        'pricing_type' => 'fixed_price'
    ];
    $result = Charge::create($chargeData);

    $payment_code = $result['code'];
    $time = date("Y-m-d H:i:s");

    $query = "INSERT INTO purchases 
        (user_id, payment_code, token_amount, wallet_address, buy_cost, payment_status, purchase_status, time) 
        VALUES($user_id, '$payment_code', '$buy_amount', '$wallet_address', $buy_cost, 'pending', 'pending', '$time')";
    mysqli_query($db, $query);

    // var_dump($result);

    $url = $result['hosted_url'];

    header('location: ' . $url);
}

?>