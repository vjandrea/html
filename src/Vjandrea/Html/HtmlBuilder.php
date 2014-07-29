<?php namespace Vjandrea\Html;

use Illuminate\Http\Request;

class HtmlBuilder extends \Illuminate\Html\HtmlBuilder
{
    /**
    * Returns a favicon link for specified url
    * 
    * @param $href string default ''
    * @param $type string default 'image/png'  
    * @return string
    */
    public function favicon($href = '', $type = 'image/png') {
        return $href ? '<link rel="icon" type="'. $type . '" href="'. $href . '">' : '';
    }
    
    
}