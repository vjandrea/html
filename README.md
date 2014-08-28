HtmlBuilder extension
==============
[![Build Status](https://travis-ci.org/vjandrea/html.svg?branch=master)](https://travis-ci.org/vjandrea/html)

This packages adds some missing methods to Illuminate/Html for Laravel 4

Methods
-------

* favicon()
* meta_charset()
* html()
* title()
* h1()
* h2()
* h3()
* h4()
* h5()
* h6()
* heading()
* iframe()
* youtube_iframe()
* vimeo_iframe()
* video()
* audio()

Installation
------------
Add to `composer.json`:

    "vjandrea/html": "dev-master"

and add to the `'providers'` array in `app/config/app.php`

    'Vjandrea\Html\HtmlServiceProvider' 

Run `composer install` and you're ready to use the package.

Usage
-----

### favicon

Returns a favicon link to the specified image href

    HTML::favicon($href, $type)

**Parameters**

    string  $href   default ''
    string  $type   default 'image/x-icon'

**Returns**

    string

### meta_charset

Returns a meta charset tag

    HTML::meta_charset($charset)

**Parameters**

    string  $charset    default 'utf-8'

**Returns**

    string

### html

Returns an html with lang parameter

    HTML::html($lang)

**Parameters**

    string  $lang   default ''

**Returns**

    string

### title

Returns a title tag

    HTML::title($title)

**Parameters**

    string  $title  default ''

**Returns**

    string

### h1

Returns a h1 heading

    HTML::h1($title, $attributes)

**Parameters**

    string  $title  default ''
    array   $attributes default []

**Returns**

    string

### h2

Returns a h2 heading

    HTML::h2($title, $attributes)

**Parameters**

    string  $title  default ''
    array   $attributes default []

**Returns**

    string

### h3

Returns a h3 heading

    HTML::h3($title, $attributes)

**Parameters**

    string  $title  default ''
    array   $attributes default []

**Returns**

    string

### h4

Returns a h4 heading

    HTML::h4($title, $attributes)

**Parameters**

    string  $title  default ''
    array   $attributes default []

**Returns**

    string

### h5

Returns a h5 heading

    HTML::h5($title, $attributes)

**Parameters**

    string  $title  default ''
    array   $attributes default []

**Returns**

    string

### h6

Returns a h6 heading

    HTML::h6($title, $attributes)

**Parameters**

    string  $title  default ''
    array   $attributes default []

**Returns**

    string

### heading

Returns a heading

    HTML::heading($type, $title, $attributes)

**Parameters**

    string  $type   default 'h1'
    string  $title  default ''
    array   $attributes default []

**Returns**

    string

### iframe

Returns an &lt;iframe&gt; tag

    HTML::iframe($src, $attributes)

**Parameters**

    string  $src    default ''
    array   $attributes default []

**Returns**

    string

### youtube_iframe

Returns a YouTube &lt;iframe&gt; tag
By default it sets frameborder=0 and allowfullscreen

    HTML::youtube_iframe($youtube_id, $attributes, $allow_fullscreen, $frameborder)

**Parameters**

    string  $youtube_id default ''
    array   $attributes default []
    boolean $allow_fullscreen   default true
    boolean $frameborder    default false (deprecated in HTML5)

**Returns**

    string

### vimeo_iframe

Returns a Vimeo &lt;iframe&gt; tag

    HTML::vimeo_iframe($vimeo_id, $attributes, $allow_fullscreen, $frameborder, $title, $byline, $portrait)

**Parameters**

    string  $vimeo_id   default ''
    array   $attributes default ''
    boolean $allowfullscreen    default true
    boolean $frameborder    default false (deprecated in HTML5)
    boolean $title  default false (Vimeo option)
    boolean $byline default false (Vimeo option)
    boolean $portrait   default false (Vimeo option)

**Returns**

    string

### video

Returns a &lt;video&gt; tag

    HTML::video($src, $attributes)

**Parameters**

    mixed   $src    default ''

**Returns**

    string

### audio

Returns an &lt;audio&gt; tag

    HTML::audio($src, $attributes)

**Parameters**

    mixed   $src    default '' (it may be an array)
    array   $attributes default []

**Returns**

    string

