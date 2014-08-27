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
  
    $html = new HtmlBuilder;

    $this->assertEquals('<iframe src="test.php"></iframe>', $html->iframe('test.php'));

    $this->assertEquals(
      '<iframe src="anothertest.php" width="640" height="320"></iframe>', 
      $html->iframe('anothertest.php', ['width' => 640, 'height' => 320])
    );

    $this->assertEquals(
      '<iframe src="paltest.php" width="720" height="576" allowfullscreen="allowfullscreen"></iframe>', 
      $html->iframe('paltest.php', ['width' => 720, 'height' => 576, 'allowfullscreen'])
    );

  }
  
  
  public function testYoutubeIframe() {

    $html = new HtmlBuilder;
    
    $this->assertEquals(
      '<iframe src="//www.youtube.com/embed/dQw4w9WgXcQ" width="420" height="315" frameborder="0" allowfullscreen="allowfullscreen"></iframe>',
      $html->youtube_iframe('dQw4w9WgXcQ', ['width' => 420, 'height' => 315])
    );

    $this->assertEquals(
      '<iframe src="//www.youtube.com/embed/dQw4w9WgXcQ" width="420" height="315" frameborder="0" allowfullscreen="allowfullscreen"></iframe>',
      $html->youtube_iframe('dQw4w9WgXcQ', ['width' => 420, 'height' => 315], true, false)
    );

    $this->assertEquals(
      '<iframe src="//www.youtube.com/embed/dQw4w9WgXcQ" width="420" height="315" frameborder="1"></iframe>',
      $html->youtube_iframe('dQw4w9WgXcQ', ['width' => 420, 'height' => 315], false, true)
    );

  }
  
  
  public function testVimeoIframe() {

    $html = new HtmlBuilder;

    $this->assertEquals(
      '<iframe src="//player.vimeo.com/video/45196609?title=0&amp;byline=0&amp;portrait=0" width="500" height="281" frameborder="0" allowfullscreen="allowfullscreen" webkitallowfullscreen="webkitallowfullscreen" mozallowfullscreen="mozallowfullscreen"></iframe>',
      $html->vimeo_iframe('45196609', ['width' => 500, 'height' => 281])
    );

  }
  
  
  public function testVideo() {

    $html = new HtmlBuilder;
    
    $this->assertEquals(
      '<video autoplay="autoplay" controls="controls"><source src="movie.mp4" /><source src="movie.ogg" />Your browser does not support the video element.</video>',
      $html->video(['movie.mp4','movie.ogg'], ['autoplay', 'controls'])
    );

    $this->assertEquals(
      '<video controls="controls" src="video.mp4">Your browser does not support the video element.</video>', 
      $html->video('video.mp4', ['controls'])
    );
  }
  
  
  public function testAudio() {
    
    $html = new HtmlBuilder;

    $this->assertEquals(
      '<audio autoplay="autoplay" controls="controls"><source src="example.ogg" /><source src="example.mp3" />Your browser does not support the audio element.</audio>',
      $html->audio(['example.ogg','example.mp3'], ['autoplay', 'controls'])
    );

    $this->assertEquals(
      '<audio controls="controls" src="test.ogg">Your browser does not support the audio element.</audio>', 
      $html->audio('test.ogg', ['controls'])
    );

  }

}