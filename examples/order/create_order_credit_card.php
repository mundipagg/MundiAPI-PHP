<?php

\MundiAPILib\Configuration::$basicAuthPassword = '';

$apiClient = new \MundiAPILib\MundiAPIClient(
    'YOUR SECRET KEY',
    ''
);

$orderController = $apiClient->getOrders();

$customer = new \MundiAPILib\Models\CreateCustomerRequest();
$customer->name = "sdk customer test";

$creditCard = new \MundiAPILib\Models\CreateCreditCardPaymentRequest();
$creditCard->capture = true;
$creditCard->installments = 2;
$creditCard->card = new \MundiAPILib\Models\CreateCardRequest();
$creditCard->card->number = "4000000000000010";
$creditCard->card->holderName = "Tony Stark";
$creditCard->card->expMonth = 1;
$creditCard->card->expYear = 2025;
$creditCard->card->cvv = "123";

$request = new \MundiAPILib\Models\CreateOrderRequest();

$request->items = [new \MundiAPILib\Models\CreateOrderItemRequest()];
$request->items[0]->description = "Tesseract Bracelet";
$request->items[0]->quantity = 3;
$request->items[0]->amount = 1490;

$request->payments = [new \MundiAPILib\Models\CreatePaymentRequest()];
$request->payments[0]->paymentMethod = "credit_card";
$request->payments[0]->creditCard = $creditCard;
$request->customer = $customer;

$result = $orderController->createOrder($request);

echo json_encode($result, JSON_PRETTY_PRINT);