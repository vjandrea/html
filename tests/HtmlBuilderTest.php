<?php

use Vjandrea\Html\HtmlBuilder;

class HtmlBuilderTest extends \PHPUnit_Framework_TestCase {


  public function testFavicon() {
    $html = new HtmlBuilder;

    $this->assertEquals(
      '<link rel="icon" type="image/x-icon" href="http://www.test.dev/favicon.ico">', 
      $html->favicon('http://www.test.dev/favicon.ico'));

    $this->assertEquals(
      '<link rel="icon" type="image/png" href="http://www.test.dev/favicon.png">', 
      $html->favicon('http://www.test.dev/favicon.png', 'image/png'));

  }


  public function testMetaCharset() {
    $html = new HtmlBuilder;

    $this->assertEquals('<meta charset="utf-8">', $html->meta_charset());

    $this->assertEquals('<meta charset="ISO-8859-1">', $html->meta_charset('ISO-8859-1'));

  }


  public function testHtml() {
    $html = new HtmlBuilder;

    $this->assertEquals('<html>', $html->html());

    $this->assertEquals('<html lang="en">', $html->html('en'));

    $this->assertEquals('<html lang="it">', $html->html('it'));

  }


  public function testTitle() {
    $html = new HtmlBuilder;

    $this->assertEquals('<title></title>', $html->title());

    $this->assertEquals('<title>test</title>', $html->title('test'));

  }


  public function testh1() {
    $html = new HtmlBuilder;

    $this->assertEquals('<h1></h1>', $html->h1());

    $this->assertEquals('<h1>test</h1>', $html->h1('test'));
  }
}