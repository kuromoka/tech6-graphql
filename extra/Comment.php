<?php

use GraphQL\Utils\Utils;

class Comment
{
    public $id;
    public $body;

    public function __construct(array $data)
    {
        Utils::assign($this, $data);
    }
}
