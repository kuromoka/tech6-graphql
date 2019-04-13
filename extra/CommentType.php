<?php

use GraphQL\Type\Definition\ObjectType;
use GraphQL\Type\Definition\Type;

class CommentType extends ObjectType
{
    public function __construct()
    {
        $config = [
            'fields' => [
                'id' => Type::nonNull(Type::id()),
                'body' => Type::nonNull(Type::string()),
            ],
        ];
        parent::__construct($config);
    }
}
