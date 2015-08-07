<?php

namespace VerveSearch\Plugins; 

/*
* Generates Embed Code
*
*
*/

class EmbedCodeGenerator{

	private $url;
	private $width;
	private $height;
	private $extra;

	public function __construct(){
		
	}


	/**
	 * Generates embed code from the url, height and width
	 * @param string $url the url to generate the embed code from
	 * @param int $width the  width of the iframe 
	 * @param int $heght the  height of the iframe 
	 * @return string which is the generated embed code
	 */


	public function generateUrl($url,$width,$height,$extra=null,$class=null){
		return '<div class="'.$class.'"><textarea><iframe src="'.$url.'" width="'.$width.'" height="'.$height.'"></iframe>"'.$extra.'"</textarea></div>'; 
	}

}

 