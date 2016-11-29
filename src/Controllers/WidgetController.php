<?php

namespace Apa\Controllers;

use Psr\Log\LoggerInterface;
use Illuminate\Database\Query\Builder;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

class WidgetController
{
	private $logger;
	protected $table;
	
	public function __construct(
		LoggerInterface $logger,
		Builder $table
	) {
		$this->logger = $logger;
		$this->table = $table;
	}

	public function __invoke(Request $request, Response $response, $args)
	{
		$widgets = $this->table->where('id', 'like', '1')->get();

		$response->getBody()->write($widgets);

	}

	public function quack(Request $request, Response $response, $args) 
	{

		$widgets = $this->table->where('id', 'like', '1')->get();
		$response->getBody()->write($widgets);

	}

}
	
