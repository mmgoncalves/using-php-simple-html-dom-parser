<?php

require '/vendor/autoload.php';

use Sunra\PhpSimple\HtmlDomParser as Html;
$url = 'http://php.net';
$html = Html::file_get_html($url);

echo '<h1>Images</h1>';
foreach($html->find('img') as $element){
	echo '<p><img src="' . $url . $element->src . '" width="46px"/></p>';
}

echo '<hr/><h1>Links</h1>';
foreach($html->find('a') as $element){
	echo '<p><a href="' . $url . $element->href . '">' . $element->href . '</a></p>';
}
