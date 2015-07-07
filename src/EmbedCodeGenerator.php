<?php

namespace VerveSearch\Plugins; 

/*
*
*
*
*/

class EmbedCodeGenerator{

	private $url;
	private $width;
	private $height;

	public function __construct($url,$width,$height){
		$this->url = $url;
		$this->width = $width;
		$this->height = $height;
	}


	/**
	 * Generates embed code from the url, height and width
	 * @param string $url the url to generate the embed code from
	 * @param int $width the  width of the iframe 
	 * @param int $heght the  height of the iframe 
	 * @return string which is the generated embed code
	 */

	public function generateUrl($url,$width,$height){
		 
	}


}