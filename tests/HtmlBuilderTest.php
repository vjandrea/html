<?php

use Vjandrea\Html;

class HtmlBuilderTest extends \PHPUnit_Framework_TestCase {
// class HtmlbuilderTest extends \Illuminate\Foundation\Testing\TestCase {

	public function setUp() {
		parent::setUp();
		include(__DIR__ . './../vendor/autoload.php');
	}



  public function testFavicon() {
  	echo 'testFavicon()'."\n";
  	$output = HTML::favicon('http://www.test.dev/favicon.png');
    echo 'done'."\n";
    //$this->assertEquals('<link rel="favicon" href="http://www.test.dev/favicon.png">', $output);
    echo '"' . $output . '"';

    $this->assertEquals(0,1);
  }
  
}