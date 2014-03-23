JBST Masonary Theme
============================
[JBST](http://www.jbst.eu/) is a powerful theme framework that can be used as a standalone website builder or as a framework to create child themes for wordpress build on Twitter's Bootstrap 3. Full customizable with [Less](http://www.lesscss.org/). [Masonry](http://masonry.desandro.com/) is a JavaScript grid layout library. It works by placing elements in optimal position based on available vertical space, sort of like a mason fitting stones in a wall. You've probably seen it in use all over the Internet.

Getting started
---------------
 1. Download, install (do not active) JBST [https://github.com/bassjobsen/jamedo-bootstrap-start-theme/archive/master.zip](https://github.com/bassjobsen/jamedo-bootstrap-start-theme/archive/master.zip)
 2. Copy [JBST Masonary Theme files](https://github.com/bassjobsen/jbst-masonary-theme/archive/master.zip) to `wordpress/wp-content/themes/jbst-masonary-theme/`
 3. rename the folder from step 2 and open 'style.css' and change the theme info (name, author, description, etc) 
 4. activate your child theme in your Dashboard: Appearance > Themes
 5. set the base color in your Dashboard: Appearance > Less Compiler, enter `@masonry-base-color: #578562;` in the text area and press "Recompile Less code" 
 
![Less Compiler](https://raw.github.com/bassjobsen/jbst-masonary-theme/master/compiler.png)
 
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

JBST Masonary Theme's Less variables:

	@masonry-base-color: #028302;
	@navbar-default-bg: black;
	@navbar-default-link-color: white;
	@navbar-default-link-hover-color: white;
	@navbar-default-link-active-color:white;
	@navbar-default-link-hover-bg: @masonry-base-color;
	@navbar-default-link-active-bg: @masonry-base-color;
	@footer-bg-color: black;
	@footer-text-color: white;
	@footer-link-color: white;

You always have to recompile your LESS code into CSS by using the recompile function (Appearance > LESS Compiler) after changing less/custom.less.

Example
-------
![ScreenShot](https://raw.github.com/bassjobsen/jbst-masonary-theme/master/screenshot.png)

