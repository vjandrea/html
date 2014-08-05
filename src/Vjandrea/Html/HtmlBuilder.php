<?php namespace Vjandrea\Html;

use Illuminate\Http\Request;

class HtmlBuilder extends \Illuminate\Html\HtmlBuilder
{
    /**
    * Returns a favicon link to the specified image href
    * 
    * @param string $href default ''
    * @param string $type default 'image/png'  
    * @return string
    */
    public function favicon($href = '', $type = 'image/png') {
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
  * @param string $lang default 'en'
  * @return string
  */
  public function html_lang($lang = 'en') {
    return '<html lang="' . $lang . '">';
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
  
  // refactor con metodo heading('h1', $title, $properties)
  public function h1($title = '', $properties = []) {
    return '<h1>' . e($title) . '</h1>';
  }

  public function h2($title = '', $properties = []) {
    return '<h2>' . e($title) . '</h2>'; 
  }
  
  public function h3($title = '', $properties = []) {
    return '<h3>' . e($title) . '</h3>'; 
  }

}