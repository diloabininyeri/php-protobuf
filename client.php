<?php


use Grpc\ChannelCredentials;
use Hello\App\HelloClient;
use Hello\App\Request;
use Hello\App\Response;

require_once 'vendor/autoload.php';


$client = new HelloClient('127.0.0.1:5001', [
    'credentials' => ChannelCredentials::createInsecure()
]);
$request = new Request();
$request->setQuery('ı am dılo');
$call = $client->say($request);

[$response, $status] = $call?->wait();


/**
 * @var $response Response
 */
echo $response?->getOutput();
