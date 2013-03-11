<?php

class String{

    private $string;

	public function __construct($string){

		$this->string = $string;

	}

	public function getUrlsFromString($string = null) {
	 	
	 	$regex = '/https?\:\/\/[^\" ]+/i';
	 	
	 	preg_match_all($regex, $string, $matches);
	 	
	 	return $matches[0];

	}

	public function transformUrls($string = null) {
	 	
	 	$urls = $this->getUrlsFromString($string);

	 	$newUrls = array();

	 	foreach ($urls as $url) {
	 		$newUrls[] = "<a href='$url' target='_blank'>$url</a>";
	 	}

	 	return str_replace($urls, $newUrls, $string);

	 		 		 	
	}

}


