<?php

$settings = array(
	'driver' => 'sqlsrv',
	'host' => '172.16.6.70\SQLEXPRESS',
	'database' => 'tempdb',
	'username' => 'sa',
	'password' => 'ILuvMonty9!',
	'prefix' => ''
);

$connFactory = new \Illuminate\Database\Connectors\ConnectionFactory();
$conn = $connFactory->make($settings);
$resolver = new \Illuminate\Database\ConnectionResolver();
$resolver->addConnection('default', $conn);
$resolver->setDefaultConnection('default');
\Illuminate\Database\Eloquent\Model::setConnectionResolver($resolver);



