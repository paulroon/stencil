<?php

namespace Happycode\Stencil;

class Syntax
{
    public static string $TOK_OPEN_TAG = '{{';
    public static string $TOK_CLOSE_TAG = '}}';
    public static string $TOK_F_SEP = ':';

    public static function setOpenTag(string $TOK_OPEN_TAG): void
    {
        static::$TOK_OPEN_TAG = $TOK_OPEN_TAG;
    }

    public static function setCloseTag(string $TOK_CLOSE_TAG): void
    {
        static::$TOK_CLOSE_TAG = $TOK_CLOSE_TAG;
    }

    public static function setFuncSep(string $TOK_F_SEP): void
    {
        static::$TOK_F_SEP = $TOK_F_SEP;
    }
}