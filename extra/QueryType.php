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
            'resolveField' => function ($val, $args, $context, $info) {
                return $this->{$info->fieldName}($val, $args, $context, $info);
            }
        ];
        parent::__construct($config);
    }
    
    public function comments()
    {
        return DataSource::get_comments();
    }
}
