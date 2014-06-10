<?php

class Markup {
    private static $initialized = false;
    private static $rules = array();


    private static function initialize()
    {
        if (self::$initialized)
            return;

        self::addRule(new Rule('code',"<pre class=\"prettyprint lang-{attr}:\">{content}</pre>"));
        self::addRule(new Rule('style',"<span class=\"{attr}\">{content}</span>"));
        self::addRule(new Rule('link',"<a href=\"{attr}\">{content}</a>"));
        self::addRule(new Rule('image',"<div class=\"article-img-container\"><img src=\"{attr}\" alt= \"{content}\" class=\"article-img\"></div>"));

        self::$initialized = true;
    }

    public static function toHtml($markup){
        self::initialize();

        foreach(self::$rules as $rule){
            $markup = $rule->markup($markup);
        }
        
        return str_replace("\n","</br>",$markup);
    }

    public static function addRule(Rule $rule){
        self::$rules[] = $rule;
        
    }
}