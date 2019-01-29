<?php
/* this below code is implemented to extract URL "http://www.sagepub.com/journals/Journal202702#submission-guidelines" from the HTML markup. */

// Create a stream
$opts = array(
  'http'=>array(
    'method'=>"GET",
    'header'=>"Accept-language: en\r\n" .
              "Cookie: foo=bar\r\n"
  )
);

$context = stream_context_create($opts);

// Abre el fichero usando las cabeceras HTTP establecidas arriba
$html = file_get_contents('https://journals.sagepub.com/home/VRT', true, $context);

$dom = new DOMDocument;
 
//Parse the HTML. The @ is used to suppress any parsing errors
//that will be thrown if the $html string isn't valid XHTML.
@$dom->loadHTML($html);
 
//Get all links. You could also use any other tag name here,
//like 'img' or 'table', to extract other tags.
$links = $dom->getElementsByTagName('a');

//Iterate over the extracted links and display their URLs
foreach ($links as $link){
    //Extract and show the "href" attribute. 
    //echo $link->getAttribute('href'), '<br>';
    if(strcmp("http://www.sagepub.com/journals/Journal202702#submission-guidelines",$link->getAttribute('href'))==0)
    {
        if(strcmp("view-submit-paper", $link->getAttribute('data-item-name'))==0)
        {
            echo $link->getAttribute('href'); 
        } 
    }
    
}