<?php

use Ratchet\Tutorials\Chat;
use Ratchet\Server\IoServer;
use Ratchet\Http\HttpServer;
use Ratchet\WebSocket\WsServer;

require dirname( __DIR__ ) . '/vendor/autoload.php';
require dirname( __DIR__ ) . '/src/Tutorials/Chat.php';

$server = IoServer::factory(
	new HttpServer(
		new WsServer(
			new Chat()
		)
	)
	, 7045
);

$server->run();