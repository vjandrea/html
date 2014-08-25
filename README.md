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

Installation
------------
Add to `composer.json`:

	"vjandrea/html": "dev-master"

and add to the `'providers'` array in `app/config/app.php`

	'Vjandrea\Html\HtmlServiceProvider'	

Run `composer install` and you're ready to use the package.

Usage
-----

### favicon()

Returns a favicon link to the specified image href

	favicon(string $href, string $type) : string
	
**Parameters**

	string	$href	default ''
	string	$type	default 'image/x-icon'

**Returns**

	string



### meta_charset()

Returns a meta charset tag

	meta_charset(string $charset) : string

**Parameters**

	string	$charset	default 'utf-8'

**Returns**

	string



### html()

Returns an html tag with lang parameter
	
	html(string $lang) : string

**Parameters**

	string	$lang	default ''

**Returns**

	string



### title()

Returns a title tag

	title(string $title) : string

**Parameters**

	string	$title	default ''

**Returns**

	string



### h1()

Returns a h1 heading

	h1(string $title, array $attributes) : string

**Parameters**

	string	$title	default ''
	array	$attributes	  default []

**Returns**

	string



### h2()

Returns a h2 heading

	h2(string $title, array $attributes) : string

**Parameters**

	string	$title	default ''
	array	$attributes	  default []

**Returns**

	string



### h3()

Returns a h3 heading

	h3(string $title, array $attributes) : string

**Parameters**

	string	$title	default ''
	array	$attributes	  default []

**Returns**

	string


	
### h4()

Returns a h4 heading

	h4(string $title, array $attributes) : string

**Parameters**

	string	$title	default ''
	array	$attributes	  default []

**Returns**

	string



### h5()

Returns a h5 heading

	h5(string $title, array $attributes) : string

**Parameters**

	string	$title	default ''
	array	$attributes	  default []

**Returns**

	string



### h6()

Returns a h6 heading

	h6(string $title, array $attributes) : string

**Parameters**

	string	$title	default ''
	array	$attributes	  default []

**Returns**

	string



### heading()

Returns a heading

	heading(string $type, string $title, array $attributes) : string

**Parameters**

	string	$type	default 'h1'
	string	$title	default ''
	array	$attributes	 default []

**Returns**

	string