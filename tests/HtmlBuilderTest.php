<?php

use Vjandrea\Html;

class HtmlBuilderTest extends \PHPUnit_Framework_TestCase {

  public function testFavicon() {
  	echo 'Debugging testFavicon()...';
  	$output = HTML::favicon('http://www.test.dev/favicon.png');
    echo 'done'."\n";
   }
  
}