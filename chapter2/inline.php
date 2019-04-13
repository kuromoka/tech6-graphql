<?php

use GraphQL\Type\Definition\ObjectType;
use GraphQL\Type\Definition\Type;

$myType = new ObjectType([
    'name' => 'Comment',
    'fields' => [
        'id' => Type::nonNull(Type::id()),
        'body' => Type::nonNull(Type::string()),
    ]
]);
