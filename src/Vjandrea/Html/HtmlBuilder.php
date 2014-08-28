<?php namespace Vjandrea\Html;

use Illuminate\Http\Request;

class HtmlBuilder extends \Illuminate\Html\HtmlBuilder
{
    /**
    * Returns a favicon link to the specified image href
    * 
    * @param string $href default ''
    * @param string $type default 'image/x-icon'  
    * @return string
    */
    public function favicon($href = '', $type = 'image/x-icon') {
        return $href ? '<link rel="icon" type="' . $type . '" href="'. $href . '">' : '';
    }
    
    
    /**
    * Returns a meta charset tag
    * 
    * @param string $charset default 'utf-8'
    * @return string
    */
    public function meta_charset($charset = 'utf-8') {
        return '<meta charset="' . $charset . '">';
    }
    
    
  /**
  * Returns an html with lang parameter
  *
  * @param string $lang default ''
  * @return string
  */
  public function html($lang = '') {
    $output = '<html';
    $output .= ($lang != '') ? ' lang="' . $lang . '"' : '';
    $output .= '>';
    return $output;
  }
  
  
  /**
  * Returns a title tag
  * 
  * @param string $title default ''
  * @return string
  */
  public function title($title = '') {
    return '<title>' . e($title) . '</title>';
  }
  
  /**
  * Returns a h1 heading
  *
  * @param string $title default ''
  * @param array $attributes default []
  * @return string
  **/
  public function h1($title = '', $attributes = []) {
    return $this->heading('h1', $title, $attributes);
  }

  /**
  * Returns a h2 heading
  *
  * @param string $title default ''
  * @param array $attributes default []
  * @return string
  **/
  public function h2($title = '', $attributes = []) {
    return $this->heading('h2', $title, $attributes);
  }
  
  /**
  * Returns a h3 heading
  *
  * @param string $title default ''
  * @param array $attributes default []
  * @return string
  **/
  public function h3($title = '', $attributes = []) {
    return $this->heading('h3', $title, $attributes);
  }
  
  /**
  * Returns a h4 heading
  *
  * @param string $title default ''
  * @param array $attributes default []
  * @return string
  **/
  public function h4($title = '', $attributes = []) {
    return $this->heading('h4', $title, $attributes);
  }

  /**
  * Returns a h5 heading
  *
  * @param string $title default ''
  * @param array $attributes default []
  * @return string
  **/
  public function h5($title = '', $attributes = []) {
    return $this->heading('h5', $title, $attributes);
  }

  /**
  * Returns a h6 heading
  *
  * @param string $title default ''
  * @param array $attributes default []
  * @return string
  **/
  public function h6($title = '', $attributes = []) {
    return $this->heading('h6', $title, $attributes);
  }
  
  /**
  * Returns a heading
  *
  * @param string $type default 'h1'
  * @param string $title default ''
  * @param array $attributes default []
  * @return string
  **/
  public function heading($type = 'h1', $title = '', $attributes = []) {
    if(!in_array($type, ['h1','h2','h3','h4','h5','h6'])) {
      return '';
    } 
    return '<'.$type.$this->attributes($attributes).'>'.e($title).'</'.$type.'>'; 
  }

  /**
   * Returns an <iframe> tag
   *
   * @param string $src default ''
   * @param array $attributes default []
   * @return string
   **/
  public function iframe($src = '', $attributes = [])
  {
    return '<iframe src="'.$src.'"'.$this->attributes($attributes).'></iframe>';
  }

  /**
   * Returns a YouTube <iframe> tag
   * By default it sets frameborder=0 and allowfullscreen
   *
   * @param string $youtube_id default ''
   * @param array $attributes default []
   * @param bool $allow_fullscreen default true
   * @param bool $frameborder default false (deprecated in HTML5)
   * @return string
   **/
  public function youtube_iframe($youtube_id = '', $attributes = [], $allow_fullscreen = true, $frameborder = false)
  {
    $allowfullscreen = $allow_fullscreen ? ['allowfullscreen'] : [];

    return $this->iframe('//www.youtube.com/embed/'.$youtube_id, array_merge($attributes, ['frameborder' => (int) $frameborder], $allowfullscreen));
  }

  /**
   * Returns a Vimeo <iframe> tag
   *
   * @param string $vimeo_id default ''
   * @param array $attributes default ''
   * @param bool $allowfullscreen default true
   * @param bool $frameborder default false (deprecated in HTML5)
   * @param bool $title default false (Vimeo option)
   * @param bool $byline default false (Vimeo option)
   * @param bool $portrait default false (Vimeo option)
   * @return string
   **/
  public function vimeo_iframe($vimeo_id = '', $attributes = [], $allow_fullscreen = true, $frameborder = false, $title = false, $byline = false, $portrait = false)
  {
    $allowfullscreen = $allow_fullscreen ? ['allowfullscreen', 'webkitallowfullscreen', 'mozallowfullscreen'] : [];

    return $this->iframe('//player.vimeo.com/video/'.$vimeo_id.'?title='.(int) $title.'&amp;byline='.(int) $byline.'&amp;portrait='.(int) $portrait,
     array_merge($attributes, ['frameborder' => (int) $frameborder], $allowfullscreen));
  }

  /**
   * Returns a <video> tag
   *
   * @param mixed $src default ''
   * @return string
   * @todo refactor with a generic media method
   **/
  public function video($src = '', $attributes = [])
  {
      return $this->media('video', $src, $attributes);
   }

  /**
   * Returns an <audio> tag
   *
   * @param mixed $src default '' (it may be an array)
   * @param array $attributes default []
   * @return string
   * @todo refactor with a generic media method
   **/
  public function audio($src = '', $attributes = [])
  {
       return $this->media('audio', $src, $attributes);
  }

  /**
   * Returns a <source> tag to be used with <audio> and <video>
   *
   * @param string $src default ''
   * @return string
   **/
  private function source($src = '')
  {
    return '<source src="'.$src.'" />';
  }

  /**
   * Generates an <audio> or <video> tag
   *
   * @param string $type default '', may be 'video' or 'audio'
   * @param mixed $src default '', it may be an array of sources
   * @param array $attributes default []
   * @return string
   * @author 
   **/
  public function media($type = '', $src = '', $attributes = [])
  {
      if(!in_array($type, ['audio', 'video'])) {
        return '';
      }

      $html = '';
      $sources = '';

      if(is_string($src)) {
        $attributes['src'] = $src;
      } elseif(is_array($src)) {
        while(list($k, $source) = each($src)) {
          $sources .= $this->source($source);
        }
      } 
      $html = '<'.$type.$this->attributes($attributes).'>'.$sources;
      $html .= 'Your browser does not support the '.$type.' element.</'.$type.'>';

      return $html;    
  }
}