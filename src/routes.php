<?php
// Routes

$app->get('/[{name}]', function ($request, $response, $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/' route");

    // Render index view
    return $this->renderer->render($response, 'index.phtml', $args);
});

$app->get('/{name1}/[{name2}]', function ($request, $response, $args) {

	phpinfo();

});

$app->get('/{name1}/{name2}/{name3}', '\Apa\Scripter:shaq');

$app->post('/{name1}/{name2}/{name3}', function ($request, $response, $args) {

	$response->getBody()->write("Post but not least!\n");

});

$app->patch('/{name1}/{name2}/{name3}', function ($request, $response, $args) {

	$response->getBody()->write("A patchy server!\n");

});

$app->put('/{name1}/{name2}/{name3}', function ($request, $response, $args) {

	$response->getBody()->write("Puttin' on the ritz\n");

});

$app->get('/{name1}/{name2}/{name3}/[{name4}]', function ($request, $response, $args) {

	return $this->get('db')->table('dbo.Script')->where('ID', $args['name4'])->pluck('ClientDatabase');

});

$app->add(function ($request, $response, $next) {
	$response = $next($request, $response);
	return $response->withHeader('Access-Control-Allow-Origin', '*')
	->withHeader('Access-Control-Allow-Headers', 'X-Requested-With, Content-Type, Accept, Origin, Authorization')
	->withHeader('Access-Control-Allow-Methods', 'GET, POST, PUT, PATCH, DELETE, OPTIONS');
});
