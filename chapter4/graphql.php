<?php

require_once './vendor/autoload.php';
require_once './Types.php';
require_once './QueryType.php';
require_once './Comment.php';
require_once './CommentType.php';
require_once './DataSource.php';

use GraphQL\GraphQL;
use GraphQL\Type\Schema;
use GraphQL\Server\StandardServer;

\DataSource::init();

$schema = new Schema([
    'query' => new QueryType(),
]);
$server = new StandardServer([
    'schema' => $schema,
    'debug' => 1,
]);
$server->handleRequest();
