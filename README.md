# embed-code-php

Simple class that generates the embed code, giver the url, width and height.


## Usage

$embedCode = new EmbedCodeGenerator(); 
$embedCode->generateUrl('http://www.vervesearch.com', 500, 600, '<small>Verve</small>','ola');