<?php
// Routes

$app->get('/[{name}]', function ($request, $response, $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/' route");

    // Render index view
    return $this->renderer->render($response, 'index.phtml', $args);
});

$app->get('/{name1}/[{name2}]', function ($request, $response, $args) {

	$response->getBody()->write("Well this works at least...");

});

$app->get('/{name1}/{name2}/{name3}', '\Apa\Bapa:writeHello');


