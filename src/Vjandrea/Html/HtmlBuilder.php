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


}