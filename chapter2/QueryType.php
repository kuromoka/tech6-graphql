<?php

use GraphQL\Type\Definition\ObjectType;
use GraphQL\Type\Definition\Type;

class QueryType extends ObjectType
{
    public function __construct()
    {
        $config = [
            'name' => 'Query',
            'fields' => [
                'comments' => Type::listOf(Types::comment()),
            ],
        ];
        parent::__construct($config);
    }
}
