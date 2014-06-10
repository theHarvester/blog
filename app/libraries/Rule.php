<?php

class Rule {	
	private $pattern;
	private $replace;

	public function __construct($tag, $replace){
		$this->pattern = $pattern = "/\{".$tag.":(?P<attr>[^}]+)\}(?P<content>.*?)\{".$tag."\}/s";
		$this->replace = $replace;

	}

	public function markup($content){
		preg_match_all($this->pattern, $content, $matches, PREG_OFFSET_CAPTURE, 0);

		$before = array();
		$after = array();

		foreach($matches[0] as  $key => $match){
			$string  = $this->replace;
			$search  =  array('{attr}','{content}');
			
			$replace = array(	
								$matches['attr'][$key][0],
								$matches['content'][$key][0]
							);

			$before[] = $match[0];
			$after[] = str_replace($search,$replace , $string);
		}

		return str_replace($before,$after ,$content);
	}

}