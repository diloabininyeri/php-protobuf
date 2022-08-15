<?php


use Grpc\RpcServer;
use Services\Message;

require_once 'vendor/autoload.php';


$rpcServer = new RpcServer([]);
$rpcServer->addHttp2Port('127.0.0.1:5001');
$rpcServer->handle(new Message());
$rpcServer->run();

