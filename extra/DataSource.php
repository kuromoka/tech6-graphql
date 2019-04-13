<?php

class DataSource
{
    private static $comments = [];

    public static function init()
    {
        self::$comments = [
            '1' => new Comment([
                'id' => '1',
                'body' => 'apple',
            ]),
            '2' => new Comment([
                'id' => '2',
                'body' => 'banana',
            ]),
            '3' => new Comment([
                'id' => '3',
                'body' => 'chocolate',
            ]),
        ];
    }

    public static function get_comments()
    {
        return self::$comments;
    }
}
