<?php

class Markdown {
    private static $initialized = false;

    private static function initialize()
    {
        if (self::$initialized)
            return;

        self::$initialized = true;
    }

    public static function toHtml($markdown){
        self::initialize();
        $html = $markdown;
        return $html;
    }
}