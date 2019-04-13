<?php

class Types
{
    private static $comment;

    public static function comment()
    {
        return self::$comment ?: (self::$comment = new CommentType());
    }
}
