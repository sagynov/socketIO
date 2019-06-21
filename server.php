<?php 
require 'vendor/autoload.php';
use Workerman\Worker;
use PHPSocketIO\SocketIO;

// listen port 2021 for socket.io client
$io = new SocketIO(3000);
$io->on('connection', function($socket){
  $socket->on('message', function($data)use($socket){
    $socket->broadcast->send($data);
  });
});

Worker::runAll();