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


  public function testH1() {

    $html = new HtmlBuilder;

    $this->assertEquals('<h1></h1>', $html->h1());

    $this->assertEquals('<h1>test</h1>', $html->h1('test'));

    $this->assertEquals('<h1 class="title">test</h1>', $html->h1('test', ['class' => 'title']));

  }


  public function testH2() {

    $html = new HtmlBuilder;

    $this->assertEquals('<h2></h2>', $html->h2());

    $this->assertEquals('<h2>test</h2>', $html->h2('test'));

    $this->assertEquals('<h2 class="title">test</h2>', $html->h2('test', ['class' => 'title']));

  }


  public function testH3() {

    $html = new HtmlBuilder;

    $this->assertEquals('<h3></h3>', $html->h3());

    $this->assertEquals('<h3>test</h3>', $html->h3('test'));

    $this->assertEquals('<h3 class="title">test</h3>', $html->h3('test', ['class' => 'title']));

  }


  public function testH4() {

    $html = new HtmlBuilder;

    $this->assertEquals('<h4></h4>', $html->h4());

    $this->assertEquals('<h4>test</h4>', $html->h4('test'));

    $this->assertEquals('<h4 class="title">test</h4>', $html->h4('test', ['class' => 'title']));

  }


  public function testH5() {

    $html = new HtmlBuilder;

    $this->assertEquals('<h5></h5>', $html->h5());

    $this->assertEquals('<h5>test</h5>', $html->h5('test'));

    $this->assertEquals('<h5 class="title">test</h5>', $html->h5('test', ['class' => 'title']));

  }


  public function testH6() {

    $html = new HtmlBuilder;

    $this->assertEquals('<h6></h6>', $html->h6());

    $this->assertEquals('<h6>test</h6>', $html->h6('test'));

    $this->assertEquals('<h6 class="title">test</h6>', $html->h6('test', ['class' => 'title']));

  }


  public function testHeading() {

    $html = new HtmlBuilder;

    $this->assertEquals('', $html->heading('h8'));

    $this->assertEquals('<h1 class="title">test</h1>', $html->heading('h1', 'test', ['class' => 'title']));

  }
  
  
  public function testIframe() {
  
  }
  
  
  public function testYoutubeIframe() {
    
  }
  
  
  public function testVimeoIframe() {
    
  }
  
  
  public function testVideo() {
    
  }
  
  
  public function testAudio() {
    
  }

}