JBST Masonry
============================
[JBST](http://www.jbst.eu/) is a powerful theme framework that can be used as a standalone website builder or as a framework to create child themes for wordpress build on Twitter's Bootstrap 3. Full customizable with [Less](http://www.lesscss.org/). [Masonry](http://masonry.desandro.com/) is a JavaScript grid layout library. It works by placing elements in optimal position based on available vertical space, sort of like a mason fitting stones in a wall. You've probably seen it in use all over the Internet.

Getting started
---------------
 1. Download, install (do not active) JBST [https://github.com/bassjobsen/jamedo-bootstrap-start-theme/archive/master.zip](https://github.com/bassjobsen/jamedo-bootstrap-start-theme/archive/master.zip)
 2. Copy [JBST Masonry Theme files](https://github.com/bassjobsen/jbst-masonry-theme/archive/master.zip) to `wordpress/wp-content/themes/jbst-masonry-theme/`
 3. rename the folder from step 2 and open 'style.css' and change the theme info (name, author, description, etc) 
 4. activate your child theme in your Dashboard: Appearance > Themes
 5. set the base color in your Dashboard: Appearance > Less Compiler, enter `@masonry-base-color: #578562;` in the text area and press "Recompile Less code" 
 
![Less Compiler](https://raw.github.com/bassjobsen/jbst-masonry-theme/master/compiler.png)
 
LESS Compiler
-------------
The built-in LESS compiler (Appearance > LESS Compiler) plays an important role in JBST childtheming:

Use the built-in compiler to: 
- set any [Bootstrap](http://getbootstrap.com/customize/) variable or use Bootstrap's mixins:
	-`@navbar-default-color: blue;`
        - create a custom button: `.btn-custom {
  .button-variant(white; red; blue);
}`
- set any built-in LESS variable: for example `@footer_bg_color: black;` sets the background color of the footer to black
- use built-in mixins: - add a custom font: `.include-custom-font(@family: arial,@font-path, @path: @custom-font-dir, @weight: normal, @style: normal);

Alternatively you can also add the LESS code mentioned above to less/custom.less in your child theme's folder.

JBST Masonry Theme's Less variables:
------------------------------------

	@masonry-base-color: #028302;
	@masonry-header-backgroundcolor: @masonry-base-color;
	@masonry-header-fontcolor: contrast(@masonry-header-backgroundcolor);
	@masonry-article-box-shadow: "7px 7px 5px 0px rgba(50, 50, 50, 0.75)";
	@masonry-article-backgroundcolor: white;
	@masonry-article-fontcolor: contrast(@masonry-article-backgroundcolor);
	@navbar-default-bg: black;
	@navbar-default-link-color: contrast(@navbar-default-bg);
	@navbar-default-link-hover-color: contrast(@masonry-base-color);
	@navbar-default-link-active-color: contrast(@masonry-base-color);
	@navbar-default-link-hover-bg: @masonry-base-color;
	@navbar-default-link-active-bg: @masonry-base-color;
	@footer-bg-color: black;
	@footer-text-color: contrast(@footer-bg-color);
	@footer-link-color: contrast(@footer-bg-color);

You always have to recompile your LESS code into CSS by using the recompile function (Appearance > LESS Compiler) after changing less/custom.less.

Credits
-------

* [JBST](http://jbst.eu/)
* [WordPress](http://wordpress.org/)
* [Bootstrap](http://twitter.github.com/bootstrap/)
* [jQuery](http://www.jquery.com/)
* [Less.js](http://www.lesscss.org/)
* [less.php](http://lessphp.gpeasy.com/)
* [jQuery](http://masonry.desandro.com/)‎, Masonry is a JavaScript grid layout library


Example
-------
![ScreenShot](https://raw.github.com/bassjobsen/jbst-masonry-theme/master/screenshot.png)

