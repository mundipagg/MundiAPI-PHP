<?php

\MundiAPILib\Configuration::$basicAuthPassword = '';

$apiClient = new \MundiAPILib\MundiAPIClient(
    'YOUR SECRET KEY',
    ''
);

$orderController = $apiClient->getOrders();

$customer = new \MundiAPILib\Models\CreateCustomerRequest();
$customer->name = "sdk customer test";

$debitCard = new \MundiAPILib\Models\CreateDebitCardPaymentRequest();
$debitCard->statementDescriptor = "test descriptor";
$debitCard->card = new \MundiAPILib\Models\CreateCardRequest();
$debitCard->card->number = "4000000000000010";
$debitCard->card->holderName = "Tony Stark";
$debitCard->card->expMonth = 1;
$debitCard->card->expYear = 2025;
$debitCard->card->cvv = "123";

$request = new \MundiAPILib\Models\CreateOrderRequest();

$request->items = [new \MundiAPILib\Models\CreateOrderItemRequest()];
$request->items[0]->description = "Tesseract Bracelet";
$request->items[0]->quantity = 3;
$request->items[0]->amount = 1490;

$request->payments = [new \MundiAPILib\Models\CreatePaymentRequest()];
$request->payments[0]->paymentMethod = "debit_card";
$request->payments[0]->debitCard = $debitCard;
$request->customer = $customer;

$result = $orderController->createOrder($request);

echo json_encode($result, JSON_PRETTY_PRINT);