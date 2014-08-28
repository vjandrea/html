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

    favicon(string $href = '', string $type = 'image/x-icon')

**Parameters**

    string	$href	default ''
    string	$type	default 'image/x-icon'

**Returns**

    string

### meta_charset

Returns a meta charset tag

    meta_charset(string $charset = 'utf-8')

**Parameters**

    string	$charset	default 'utf-8'

**Returns**

    string

### html

Returns an html with lang parameter

    html(string $lang = '')

**Parameters**

    string	$lang	default ''

**Returns**

    string

### title

Returns a title tag

    title(string $title = '')

**Parameters**

    string	$title	default ''

**Returns**

    string

### h1

Returns a h1 heading

    h1(string $title = '', array $attributes = array())

**Parameters**

    string	$title	default ''
    array	$attributes	default []

**Returns**

    string

### h2

Returns a h2 heading

    h2(string $title = '', array $attributes = array())

**Parameters**

    string	$title	default ''
    array	$attributes	default []

**Returns**

    string

### h3

Returns a h3 heading

    h3(string $title = '', array $attributes = array())

**Parameters**

    string	$title	default ''
    array	$attributes	default []

**Returns**

    string

### h4

Returns a h4 heading

    h4(string $title = '', array $attributes = array())

**Parameters**

    string	$title	default ''
    array	$attributes	default []

**Returns**

    string

### h5

Returns a h5 heading

    h5(string $title = '', array $attributes = array())

**Parameters**

    string	$title	default ''
    array	$attributes	default []

**Returns**

    string

### h6

Returns a h6 heading

    h6(string $title = '', array $attributes = array())

**Parameters**

    string	$title	default ''
    array	$attributes	default []

**Returns**

    string

### heading

Returns a heading

    heading(string $type = 'h1', string $title = '', array $attributes = array())

**Parameters**

    string	$type	default 'h1'
    string	$title	default ''
    array	$attributes	default []

**Returns**

    string

### iframe

Returns an &lt;iframe&gt; tag

    iframe(string $src = '', array $attributes = array())

**Parameters**

    string	$src	default ''
    array	$attributes	default []

**Returns**

    string

### youtube_iframe

Returns a YouTube &lt;iframe&gt; tag
By default it sets frameborder=0 and allowfullscreen

    youtube_iframe(string $youtube_id = '', array $attributes = array(), boolean $allow_fullscreen = true, boolean $frameborder = false)

**Parameters**

    string	$youtube_id	default ''
    array	$attributes	default []
    boolean	$allow_fullscreen	default true
    boolean	$frameborder	default false (deprecated in HTML5)

**Returns**

    string

### vimeo_iframe

Returns a Vimeo &lt;iframe&gt; tag

    vimeo_iframe(string $vimeo_id = '', array $attributes = array(),  $allow_fullscreen = true, boolean $frameborder = false, boolean $title = false, boolean $byline = false, boolean $portrait = false)

**Parameters**

    string	$vimeo_id	default ''
    array	$attributes	default ''
    boolean	$allowfullscreen	default true
    boolean	$frameborder	default false (deprecated in HTML5)
    boolean	$title	default false (Vimeo option)
    boolean	$byline	default false (Vimeo option)
    boolean	$portrait	default false (Vimeo option)

**Returns**

    string

### video

Returns a &lt;video&gt; tag

    video(mixed $src = '',  $attributes = array())

**Parameters**

    mixed	$src	default ''

**Returns**

    string

### audio

Returns an &lt;audio&gt; tag

    audio(mixed $src = '', array $attributes = array())

**Parameters**

    mixed	$src	default '' (it may be an array)
    array	$attributes	default []

**Returns**

    string
