<?php
/**
 *
 * Description
 *
 * @package        Paystack
 * @category       Source
 * @author         Michael Akanji <matscode@gmail.com>
 * @date           2017-06-26
 *
 */
require_once "../vendor/autoload.php";

use Matscode\Paystack\Transaction;
use Matscode\Utility\Debug;
use Matscode\Utility\Http;

$secretKey = 'sk_test_xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx';

// creating the transaction object
$Transaction = new Transaction($secretKey);

// Set data to post using this method
/*
$response = $Transaction->initialize( [
    'email'  => 'customer@email.com',
    'amount' => 500000
] );
*/

// OR

$response =
    $Transaction
        ->setEmail('matscode@gmail.com')
        ->setAmount(50)
        ->initialize();

// print response
Debug::print_r($response);

// save reference somewhere and do a redirect
Http::redirect($response->authorizationUrl);

