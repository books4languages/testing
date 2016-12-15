/*
Theme Name: Luther
Theme URI: http://pressbooks.com/themes/pressbooks-book
Description: Named after Martin Luther, this is a traditional book theme, good for novels, and text-heavy non-fiction. An earlier version of this theme was commissioned by Fortress Press / Augsburg Fortress.
Author: Pressbooks (Book Oven Inc.)
Author URI: http://pressbooks.com
Copyright 2011-2015 Book Oven Inc. (Pressbooks.com) code@pressbooks.com
Version: 1.6.1
*/
@import url("https://fonts.googleapis.com/css?family=Cardo:400,400italic,700|Oswald|Droid+Serif:400,700,400italic,700italic|Open+Sans+Condensed:300,300italic&subset=latin,cyrillic,greek,cyrillic-ext,greek-ext");
/*
  html5doctor.com Reset Stylesheet (Eric Meyer's Reset Reloaded + HTML5 baseline)
  v1.4 2009-07-27 | Authors: Eric Meyer & Richard Clark
  html5doctor.com/html-5-reset-stylesheet/
*/
html, body, div, span, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
abbr, address, cite, code,
del, dfn, em, img, ins, kbd, q, samp,
small, strong, sub, sup, var,
b, i,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td,
article, aside, canvas, details, figcaption, figure,
footer, header, hgroup, menu, nav, section, summary,
time, mark, audio, video {
  margin: 0;
  padding: 0;
  border: 0;
  outline: 0;
  font-size: 100%;
  vertical-align: baseline;
  background: transparent; }

html,
body {
  height: 100%; }

body {
  background: url("images/bg.png") repeat 0 0 #f9f9f9;
  color: #1F1F1D;
  font-size: 1em;
  line-height: 1.8;
  font-family: "Droid Serif", "Georgia", "Times New Roman", serif;
  margin: 0;
  text-align: left; }

nav,
section {
  display: block; }

a {
  color: #870d0d; }

a:hover {
  text-decoration: none; }

h1, h2, h3, h4, h5, h6 {
  font-weight: normal;
  margin-bottom: 20px;
  line-height: 1.2; }

h1 {
  text-align: center;
  font-size: 1em;
  font-weight: bold;
  font-style: normal;
  font-variant: normal;
  text-transform: uppercase;
  letter-spacing: normal;
  word-spacing: normal;
  page-break-after: avoid;
  hyphens: none;
  -webkit-hyphens: none; }

h2 {
  text-align: center;
  font-size: 1em;
  font-weight: normal;
  font-style: normal;
  font-variant: normal;
  text-transform: uppercase;
  letter-spacing: normal;
  word-spacing: normal;
  page-break-after: avoid;
  hyphens: none;
  -webkit-hyphens: none; }

h3 {
  text-align: center;
  font-size: 1em;
  font-weight: bold;
  font-style: normal;
  font-variant: normal;
  text-transform: none;
  letter-spacing: normal;
  word-spacing: normal;
  page-break-after: avoid;
  hyphens: none;
  -webkit-hyphens: none; }

h4 {
  text-align: left;
  font-size: 1em;
  font-weight: bold;
  font-style: normal;
  font-variant: normal;
  text-transform: none;
  letter-spacing: normal;
  word-spacing: normal;
  page-break-after: avoid;
  hyphens: none;
  -webkit-hyphens: none; }

h5 {
  text-align: left;
  font-size: 1em;
  font-weight: normal;
  font-style: italic;
  font-variant: normal;
  text-transform: none;
  letter-spacing: normal;
  word-spacing: normal;
  page-break-after: avoid;
  hyphens: none;
  -webkit-hyphens: none; }

h6 {
  text-align: left;
  font-size: 0.9em;
  font-weight: normal;
  font-style: italic;
  font-variant: normal;
  text-transform: none;
  letter-spacing: normal;
  word-spacing: normal;
  page-break-after: avoid;
  hyphens: none;
  -webkit-hyphens: none; }

h1 + p,
h2 + p,
h3 + p,
h4 + p,
h5 + p,
h6 + p {
  margin-top: -10px;
  margin-bottom: 30px; }

ul,
ol,
p,
dl {
  margin-bottom: 15px; }

ul {
  list-style: outside none; }

ul ul,
ol ol {
  margin-left: 15px; }

/*
ol {
  list-style: decimal;
}
*/
blockquote {
  background: url("images/blockquote-open.png") no-repeat 10px 10px #f4f4f3;
  padding: 1px 5px 5px 50px;
  margin-bottom: 20px; }

blockquote p {
  font-size: 0.95em;
  margin: 15px;
  padding: 20px 20px 0 10px; }

del {
  text-decoration: line-through; }

table {
  border-collapse: collapse;
  /* tables still need 'cellspacing="0"' in the markup */
  border-spacing: 0;
  max-width: 100%;
  overflow-x: auto;
  display: block; }

pre {
  background: #f7f7f7;
  color: #222;
  line-height: 18px;
  margin-bottom: 18px;
  padding: 1.5em; }

/* Browser specific (not valid) styles to make preformatted text wrap */
pre {
  white-space: pre-wrap;
  /* css-3 */
  white-space: -moz-pre-wrap;
  /* Mozilla, since 1999 */
  white-space: -pre-wrap;
  /* Opera 4-6 */
  white-space: -o-pre-wrap;
  /* Opera 7 */
  word-wrap: break-word;
  /* Internet Explorer 5.5+ */ }

abbr,
acronym {
  border-bottom: 1px dotted #666;
  cursor: help; }

sup,
sub {
  height: 0;
  line-height: 1;
  position: relative;
  vertical-align: baseline; }

sup {
  bottom: 1ex; }

sub {
  top: .5ex; }

hr {
  width: 30%; }

/*
pre {
	font-family: "Courier 10 Pitch", Courier, monospace;
}
code {
	font-family: Monaco, Consolas, "Andale Mono", "DejaVu Sans Mono", monospace;
}
*/
/**********************
	Pressbooks Styles
************************/
hr.break-symbols {
  border: medium none;
  margin: 0 auto 20px;
  padding: 20px 0;
  text-align: center; }

hr.break-symbols:after {
  content: "\2725";
  display: block;
  font-size: 1.2em; }

hr.break-blank {
  border: medium none;
  margin: 0 0 20px;
  padding: 20px 0;
  text-align: center; }

.hanging-indent {
  padding-left: 1em;
  text-indent: -1em; }

/********************
	Structure
*********************/
.wrapper {
  min-height: 100%;
  height: auto !important;
  margin: 0 auto -5em; }

#wrap {
  margin: 0 auto 60px;
  position: relative;
  width: 940px;
  z-index: 20; }

.footer,
.push {
  clear: both;
  min-height: 5em; }

#header {
  margin: 0 auto 40px; }

#content {
  background-color: #ffffff;
  -moz-box-shadow: 2px 2px 2px #dddddd;
  -o-box-shadow: 2px 2px 2px #dddddd;
  -webkit-box-shadow: 2px 2px 2px #dddddd;
  box-shadow: 2px 2px 2px #dddddd;
  margin: 0 auto 60px;
  padding: 30px 60px;
  position: relative;
  width: 520px;
  min-height: 420px;
  z-index: 10; }

.ie8 #content,
.ie7 #content,
.ie8 #booknav,
.ie7 #booknav {
  border-color: #e1e1e1;
  border-style: solid;
  border-width: 0 1px 1px 0; }

.single #content {
  min-height: 350px;
  margin-bottom: 0; }

.buttons {
  height: 40px;
  overflow: hidden;
  margin: 40px auto 20px;
  width: 347px; }

.buttons li {
  display: inline; }

a.button-red {
  background-color: #820808;
  background-image: -webkit-gradient(linear, left top, left bottom, from(#a62c2c), to(#820808));
  background-image: -webkit-linear-gradient(top, #a62c2c, #820808);
  background-image: -moz-linear-gradient(top, #a62c2c, #820808);
  background-image: -o-linear-gradient(top, #a62c2c, #820808);
  background-image: -ms-linear-gradient(top, #a62c2c, #820808);
  background-image: linear-gradient(top, #a62c2c, #820808);
  filter: progid:DXImageTransform.Microsoft.gradient(GradientType=0, StartColorStr='#a62c2c', EndColorStr='#820808');
  -moz-box-shadow: 0 1px 0 0 #C77A7A inset;
  -webkit-box-shadow: 0 1px 0 0 #C77A7A inset;
  box-shadow: 0 1px 0 0 #C77A7A inset;
  border: 1px solid #4d0a0a;
  color: #ffffff;
  cursor: pointer;
  font: 0.75em "Oswald", Arial, Helvetica, sans-serif;
  text-shadow: 0 1px 0 #000;
  -moz-border-radius: 6px;
  -o-border-radius: 6px;
  -webkit-border-radius: 6px;
  border-radius: 6px;
  float: left;
  margin-right: 15px;
  padding: 5px 10px;
  text-decoration: none;
  text-transform: uppercase; }

a.button-red:hover {
  background-color: #5c0102;
  background-image: -webkit-gradient(linear, left top, left bottom, from(#801e1e), to(#5c0102));
  background-image: -webkit-linear-gradient(top, #801e1e, #5c0102);
  background-image: -moz-linear-gradient(top, #801e1e, #5c0102);
  background-image: -o-linear-gradient(top, #801e1e, #5c0102);
  background-image: -ms-linear-gradient(top, #801e1e, #5c0102);
  background-image: linear-gradient(top, #801e1e, #5c0102);
  filter: progid:DXImageTransform.Microsoft.gradient(GradientType=0, StartColorStr='#801e1e', EndColorStr='#5c0102'); }

a.button-red:active {
  background-color: #a62c2c;
  background-image: -webkit-gradient(linear, left top, left bottom, from(#820808), to(#a62c2c));
  background-image: -webkit-linear-gradient(top, #820808, #a62c2c);
  background-image: -moz-linear-gradient(top, #820808, #a62c2c);
  background-image: -o-linear-gradient(top, #820808, #a62c2c);
  background-image: -ms-linear-gradient(top, #820808, #a62c2c);
  background-image: linear-gradient(top, #820808, #a62c2c);
  filter: progid:DXImageTransform.Microsoft.gradient(GradientType=0, StartColorStr='#820808', EndColorStr='#a62c2c'); }

/********************
  Sticky Nav Header
*********************/
.nav-container {
  margin-bottom: 40px; }

nav {
  background: #313131;
  background: none repeat scroll 0 0 rgba(0, 0, 0, 0.8);
  -moz-box-shadow: 2px 2px 2px #aeaeae;
  -o-box-shadow: 2px 2px 2px #aeaeae;
  -webkit-box-shadow: 2px 2px 2px #aeaeae;
  box-shadow: 2px 2px 2px #aeaeae;
  position: relative;
  width: 100%;
  min-height: 50px;
  z-index: 100; }

.sticky {
  position: fixed;
  top: 0;
  animation: thedrop 1s 1;
  -moz-animation: thedrop 1s 1;
  -webkit-animation: thedrop 1s 1; }

.sub-nav-left,
.sub-nav-right {
  position: absolute;
  top: 0; }

.sub-nav-left {
  height: 50px;
  left: 0;
  overflow: hidden; }

.sub-nav-right {
  right: 0;
  width: 130px; }

.pressbooks-logo {
  float: left;
  font: 1em "Oswald", Arial, Helvetica, sans-serif;
  line-height: 2.6em;
  margin: 0;
  padding: 2px 10px 1px 30px;
  text-transform: uppercase; }

.pressbooks-logo a {
  color: #ffffff;
  text-decoration: none; }

h1.book-title {
  font-size: 1.2em;
  line-height: 1.6em;
  font-family: "Cardo", "Times New Roman", Times, serif;
  /* 26px/16px */
  margin: 0 auto;
  padding: 10px 60px 0;
  text-align: center;
  width: 520px; }

h1.book-title a {
  color: #ffffff;
  text-decoration: none;
  text-transform: none; }

/**************
     Sub-Nav
***************/
.sub-nav {
  background: #fdfffa;
  -moz-box-shadow: 2px 2px 2px #dddddd;
  -o-box-shadow: 2px 2px 2px #dddddd;
  -webkit-box-shadow: 2px 2px 2px #dddddd;
  box-shadow: 2px 2px 2px #dddddd;
  margin: -5px 0 0 0;
  min-height: 25px;
  padding: 10px 0 5px;
  position: relative;
  z-index: 1; }

.author-wrap {
  margin: 0 auto;
  padding: 0 60px;
  text-align: center;
  width: 520px; }

.author-wrap h3 {
  display: inline;
  font-weight: normal;
  font-size: 0.75em;
  font-family: "Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", Verdana, Tahoma, sans-serif;
  letter-spacing: 0; }

.instapaper {
  position: absolute;
  right: 5px;
  top: 15px; }

.buy {
  display: block;
  float: right;
  margin: 10px 10px 0 0;
  width: 46px; }

.buy a {
  float: right;
  margin-right: 0; }

.share li.email a {
  background: url("images/sprite.png") -147px -96px no-repeat;
  height: 21px;
  margin: 0 0 0 17px;
  text-indent: -9999px;
  width: 30px;
  display: block; }

/*
.share-wrap {
  float: right;
  margin: 10px 10px 0 0;
  width: 62px;
}
.share-btn {
  background: url($url-base+'images/sprite.png') -150px -250px no-repeat #ffffff;
  -moz-border-radius: 6px;
  -o-border-radius: 6px;
  -webkit-border-radius: 6px;
  border-radius: 6px;
  cursor: pointer;
  height: 32px;
  margin: 0;
  position: relative;
  text-indent: -9999em;
  width: 62px;
  z-index: 100;
}
.share {
  background: #fff;
  -moz-border-radius: 0 0 6px 6px;
  -o-border-radius: 0 0 6px 6px;
  -webkit-border-radius: 0 0 6px 6px;
  border-radius: 0 0 6px 6px;
  -moz-box-shadow: 0px 2px 2px #dddddd;
  -o-box-shadow: 0px 2px 2px #dddddd;
  -webkit-box-shadow: 0px 2px 2px #dddddd;
  box-shadow: 0px 2px 2px #dddddd;
  margin: 0;
  padding: 10px 0;
  position: relative;
  width: 62px;
  z-index: 1;
}
.share-btn.open {
  -moz-border-radius: 6px 6px 0 0;
  -o-border-radius: 6px 6px 0 0;
  -webkit-border-radius: 6px 6px 0 0;
  border-radius: 6px 6px 0 0;
}
.share li.twitter,
.share li.facebook {
  margin: 10px 0 0 3px;
}
.share li.facebook {
  margin-left: 8px;
  float: none; */
/*ie fix - float right on div causing an issue */
/*
}
*/
/********************
	Sidebar
*********************/
#sidebar {
  line-height: 1.1em;
  margin: 10px 74px 0 0;
  padding: 0 0 0 4px;
  position: absolute;
  top: 20px;
  right: 0;
  text-align: center;
  width: 74px; }

.ie7 #sidebar {
  z-index: 11; }

#sidebar a {
  color: #4a4a4a;
  font: 0.6em/1em "Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", Verdana, Tahoma, sans-serif;
  text-decoration: none; }

#booknav {
  background: #ffffff;
  -moz-border-radius: 0 6px 6px 0;
  -o-border-radius: 0 6px 6px 0;
  -webkit-border-radius: 0 6px 6px 0;
  border-radius: 0 6px 6px 0;
  -moz-box-shadow: 2px 2px 2px #dddddd;
  -o-box-shadow: 2px 2px 2px #dddddd;
  -webkit-box-shadow: 2px 2px 2px #dddddd;
  box-shadow: 2px 2px 2px #dddddd;
  margin: -5px 0 0;
  position: relative; }

#booknav li {
  height: 70px; }

#booknav li:hover {
  background: #eeeeee; }

#booknav li:first-child {
  padding-top: 10px; }

#booknav li:last-child {
  padding-bottom: 10px; }

#booknav li a {
  display: block;
  padding-top: 40px;
  height: 20px; }

.admin-btn a,
.home-btn a,
.toc-btn a,
.read-btn a,
.about-btn a,
.authors-btn a {
  background: url("images/sprite.png") 30px -187px no-repeat; }

.home-btn a {
  background-position: -20px -187px; }

.toc-btn a {
  background-position: -121px -187px; }

.read-btn a {
  background-position: -178px -187px; }

.about-btn a {
  background-position: -255px -187px; }

.authors-btn a {
  background-position: -320px -187px; }

#authors .authors-btn,
#about .about-btn,
#tableofcontents .toc-btn {
  background: #eeeeee; }

/****************
   Pop out TOC
*****************/
#toc {
  display: none;
  background: #eeeeee;
  -moz-border-radius: 6px;
  -o-border-radius: 6px;
  -webkit-border-radius: 6px;
  border-radius: 6px;
  -moz-box-shadow: 2px 2px 2px #dddddd;
  -o-box-shadow: 2px 2px 2px #dddddd;
  -webkit-box-shadow: 2px 2px 2px #dddddd;
  box-shadow: 2px 2px 2px #dddddd;
  margin-left: -132px;
  margin-top: 0;
  padding: 10px 10px 10px 20px;
  position: relative;
  width: 180px;
  z-index: 50; }

a.close {
  background: url("images/sprite.png") 0 -50px;
  display: block;
  float: right;
  overflow: hidden;
  text-indent: 100%;
  width: 20px;
  height: 20px;
  white-space: nowrap; }

#toc ul {
  margin-left: 0;
  text-align: left; }

#toc h4 {
  font: 0.8em "Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", Verdana, Tahoma, sans-serif;
  font-style: normal;
  font-weight: bold;
  margin: 5px 0 2px; }

#toc h4 a {
  font: inherit; }

#toc ul ul {
  border-bottom: 1px dotted #999;
  padding-bottom: 5px; }

#toc ul ul:last-of-type {
  border-bottom: none;
  padding-bottom: 0; }

#toc h4, #toc li.chapter {
  padding-left: 10px;
  text-indent: -10px; }

#toc .dashicons {
  color: #aaa; }

#toc h4:hover .dashicons {
  color: #777; }

li.bg-color {
  background: #eeeeee; }

/********************
	Images
*********************/
img.left {
  float: left;
  background-color: #fefefe;
  margin: 10px 12px 6px -8px;
  padding: 7px;
  border: 1px solid #e4e4e4; }

img.right {
  float: right;
  background-color: #fefefe;
  margin: 10px -8px 6px 12px;
  padding: 7px;
  border: 1px solid #e4e4e4; }

img {
  background: #f5f5f5;
  border: 1px solid #eeeeee;
  padding: 5px;
  height: auto;
  max-width: 98%; }

img.wp-smiley {
  background: transparent;
  border: none;
  padding: 0; }

img.author-avatar {
  height: auto;
  width: 96px; }

.wp-caption {
  height: auto;
  max-width: 98%; }

.wp-caption-text {
  color: #000000;
  font-size: 0.75em;
  text-align: center; }

/* theme requirements as per http://codex.wordpress.org/CSS */
.aligncenter,
div.aligncenter {
  display: block;
  margin-left: auto;
  margin-right: auto; }

.aligncenter {
  margin: 10px auto; }

.alignleft {
  float: left;
  margin: 0 10px 10px 0; }

.alignright {
  float: right;
  margin: 0 0 10px 10px; }

/**********************
    Gallery listing
***********************/
.category-gallery .size-thumbnail img {
  border: 10px solid #f1f1f1;
  margin-bottom: 0; }

.category-gallery .gallery-thumb {
  float: left;
  margin-right: 20px;
  margin-top: -4px; }

.home #content .category-gallery .entry-utility {
  padding-top: 4px; }

/*********************
	    Menu
*********************/
#access {
  display: none;
  float: left;
  background: #000;
  margin: 0 auto;
  width: 940px; }

/***********************
	 Page Navigation
************************/
.pagenav {
  border-color: #8d8d8d;
  border-style: solid;
  border-width: 1px 0;
  padding: 0 0 10px; }

.pagenav.top {
  margin-bottom: 40px; }

.pagenav.bottom {
  clear: both;
  margin-top: 40px; }

.nav {
  left: 50%;
  margin-left: -350px;
  position: fixed;
  top: 58%;
  width: 700px; }

.ie8 .nav {
  top: 65%; }

.nav span.previous {
  position: absolute;
  top: 45%;
  left: 0; }

.nav span.next {
  position: absolute;
  top: 45%;
  right: 0; }

.nav span a {
  background: url("images/sprite.png") 0 -573px no-repeat;
  display: block;
  overflow: hidden;
  text-indent: 100%;
  width: 42px;
  height: 43px;
  white-space: nowrap; }

.nav span.next a, .nav-next a {
  background-position: 0 -506px; }

.nav span a:hover {
  background-position: -56px -573px; }

.nav span.next a:hover {
  background-position: -56px -506px; }

/* TITLE, SUB-TITLE, AUTHOR AND APHORIS
==========================================*/
.part-title {
  text-align: right; }

.entry-title {
  font-size: 1.6em;
  font-style: normal;
  font-weight: bold;
  font-variant: normal;
  margin: 10px auto 3em;
  padding-top: 5px;
  text-align: center; }

.entry-title span {
  display: block;
  margin-bottom: 1.4em; }

.page-title {
  font-size: 1.4em;
  font-style: normal;
  font-variant: normal;
  font-weight: bold; }

.chapter_subtitle {
  font-size: 1.3em;
  font-variant: normal;
  margin-top: -10px;
  margin-bottom: 30px; }

.chapter_author {
  font-size: 0.875em;
  font-style: normal;
  font-variant: normal;
  font-weight: 600;
  margin-top: -10px;
  margin-bottom: 30px; }

.chapter_subtitle + .chapter_author {
  margin-top: 0; }

.aphorism {
  background: transparent;
  margin-bottom: 60px;
  padding: 0 45px;
  text-align: center; }

.aphorism p {
  font-size: 0.875em;
  font-style: italic;
  margin: 0;
  padding: 0; }

.aphorism cite {
  float: right;
  font-style: normal;
  font-variant: small-caps; }

/* TEXTBOXES & PULLQUOTES
===============*/
.textbox {
  border: 1px solid #000;
  margin: 10px 0;
  padding: 10px; }
  .textbox p {
    margin-top: 0; }
  .textbox.shaded {
    background-color: #eee; }
  .textbox.learning-objectives {
    border-radius: 4px;
    margin-bottom: 15px;
    padding: 2% 3%;
    margin-inside: auto;
    margin-outside: auto;
    float: none;
    background-color: #F7F7F9; }
    .textbox.learning-objectives h3 {
      color: #fff;
      margin: -2% -3% 15px;
      padding: 15px 0;
      text-align: center; }
    .textbox.learning-objectives h3 {
      border-top-left-radius: 4px;
      border-top-right-radius: 4px;
      background-color: #111111; }
  .textbox.key-takeaways {
    border-radius: 4px;
    margin-bottom: 15px;
    padding: 2% 3%;
    margin-inside: auto;
    margin-outside: auto;
    float: none;
    background-color: #EAF5EA; }
    .textbox.key-takeaways h3 {
      color: #fff;
      margin: -2% -3% 15px;
      padding: 15px 0;
      text-align: center; }
    .textbox.key-takeaways h3 {
      border-top-left-radius: 4px;
      border-top-right-radius: 4px;
      background-color: #3A7A33; }
  .textbox.exercises {
    border-radius: 4px;
    margin-bottom: 15px;
    padding: 2% 3%;
    margin-inside: auto;
    margin-outside: auto;
    float: none;
    background-color: #E3EFF6; }
    .textbox.exercises h3 {
      color: #fff;
      margin: -2% -3% 15px;
      padding: 15px 0;
      text-align: center; }
    .textbox.exercises h3 {
      border-top-left-radius: 4px;
      border-top-right-radius: 4px;
      background-color: #0B6396; }
  .textbox.examples {
    border-radius: 4px;
    margin-bottom: 15px;
    padding: 2% 3%;
    margin-inside: auto;
    margin-outside: auto;
    float: none;
    background-color: #F3E1E3; }
    .textbox.examples h3 {
      color: #fff;
      margin: -2% -3% 15px;
      padding: 15px 0;
      text-align: center; }
    .textbox.examples h3 {
      border-top-left-radius: 4px;
      border-top-right-radius: 4px;
      background-color: #7A333A; }

.textbox-caption {
  display: block;
  font: bold 0.875em Helvetica, Arial;
  margin: 0; }

.pullquote {
  border-color: #000;
  border-style: solid;
  border-width: 1px 0;
  display: block;
  hyphens: none;
  margin: 20px auto;
  overflow: hidden;
  padding: 5px 0;
  text-align: center;
  width: 65%; }

.pullquote-left {
  border-color: #000;
  border-style: solid;
  border-width: 1px 0;
  float: left;
  hyphens: none;
  margin: 15px 15px 15px 0;
  padding: 5px 0;
  text-align: center;
  width: 45%; }

.pullquote-right {
  border-color: #000;
  border-style: solid;
  border-width: 1px 0;
  float: right;
  hyphens: none;
  margin: 15px 0 15px 15px;
  padding: 5px 0;
  text-align: center;
  width: 45%; }

/********************
	  Content
*********************/
aside {
  background-color: #F6F6F6;
  border-color: #ccc;
  border-style: solid;
  border-width: 0 1px 1px 0;
  float: right;
  font-size: 0.85em;
  margin: 15px 0 15px 15px;
  overflow: hidden;
  padding: 10px;
  width: 180px; }

#content code {
  font-size: 13px; }

#content dt,
#content th {
  color: #000; }

#content dt {
  float: left;
  font-weight: bold;
  margin-right: 5px;
  margin-bottom: 0; }

#content dd {
  margin-bottom: 0;
  margin-left: 2em; }

#content table {
  max-width: 100%;
  margin-top: 1.5em;
  margin-bottom: 1.5em;
  border-collapse: collapse;
  text-align: left;
  font-size: 0.9em; }
#content table caption {
  font-weight: bold;
  margin-bottom: 0.5em;
  line-height: 1.1; }
#content table td,
#content table th {
  padding: 5px 5px;
  line-height: 1.1;
  text-align: left;
  vertical-align: middle; }
#content table p {
  text-align: left; }
#content table.lines tr {
  border-top: 1px solid #000;
  border-bottom: 1px solid #000; }
#content table.no-lines tr,
#content table.no-lines td {
  border-top: 0;
  border-bottom: 0; }
#content table.shaded,
#content th.shaded,
#content tr.shaded,
#content td.shaded {
  background-color: #eee; }
#content th.border,
#content tr.border,
#content td.border {
  border: 1px solid #000; }

#content table {
  border: 1px solid #e7e7e7;
  margin: 0 -1px 24px 0;
  text-align: left;
  width: 100%; }

#content tr th,
#content thead th {
  color: #888;
  font-size: 12px;
  font-weight: bold;
  line-height: 18px;
  padding: 9px 24px; }

#content tr td {
  border-top: 1px solid #e7e7e7;
  padding: 6px 24px; }

#content tr.odd td {
  background: #f2f7fc; }

.entry-content ul {
  margin-left: 30px; }

.entry-content ul {
  list-style: outside disc; }

.entry-content ul li li {
  list-style-image: url("images/em-dash.png"); }

.entry-content ul li li li {
  list-style-image: url("images/asterisk.png"); }

ol {
  list-style: none outside;
  counter-reset: level1; }

ol li::before {
  content: counter(level1) ". ";
  counter-increment: level1; }

ol ol {
  list-style: none outside;
  counter-reset: level2; }

ol li li::before {
  list-style-position: outside;
  content: counter(level1) "." counter(level2) " ";
  counter-increment: level2; }

ol ol ol {
  list-style: none outside;
  counter-reset: level3; }

ol li li li::before {
  list-style-position: outside;
  content: counter(level1) ". " counter(level2) ". " counter(level3) " ";
  counter-increment: level3; }

.entry-content fieldset {
  border: 1px solid #e7e7e7;
  margin: 0 0 24px 0;
  padding: 24px; }

.entry-content fieldset legend {
  background: #fff;
  color: #000;
  font-weight: bold;
  padding: 0 24px; }

.entry-content input {
  margin: 0 0 24px 0; }

.entry-content input.file,
.entry-content input.button-red {
  margin-right: 24px; }

.entry-content label {
  color: #888;
  font-size: 12px; }

.entry-content select {
  margin: 0 0 24px 0; }

.entry-content sup,
.entry-content sub {
  font-size: 10px; }

.edit-link {
  border-color: #ccc;
  border-style: solid;
  border-width: 1px 0 0 1px;
  float: left;
  width: 50px;
  margin: 120px 0 0 -98px;
  text-align: center;
  text-transform: uppercase;
  font: bold 13px "Open Sans Condensed", Arial, Helvetica, sans-serif;
  -webkit-transform: rotate(-90deg);
  -moz-transform: rotate(-90deg);
  filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=3); }

.edit-link a {
  display: block;
  background-color: #fcfcfc;
  text-decoration: none;
  padding: 5px 0;
  color: #c03; }

.edit-link a:hover {
  background-color: #c12328;
  color: #fcfcfc; }

.indented {
  text-indent: 1em; }

.footnotes ol li {
  list-style: decimal outside;
  margin-bottom: 15px; }

/* Endnotes
=========== */
.endnotes {
  margin-top: 2em; }

.endnotes hr {
  border: none; }

.endnotes h3 {
  font-variant: normal;
  font-size: 1.3em;
  font-style: normal;
  font-weight: bold;
  text-align: center; }

.endnotes ol {
  font-size: 0.75em; }

/* single-share */
.share-wrap-single {
  margin: 2px auto 40px;
  width: 620px; }

.share-single {
  background: transparent;
  box-shadow: none;
  overflow: hidden;
  padding-top: 5px;
  position: relative;
  width: auto; }

.share-single li {
  float: left;
  line-height: 1;
  margin: 0 10px 0 0;
  padding: 5px 5px 5px 17px; }

.share-single li.twitter {
  margin: 3px 10px 0 0;
  padding: 3px 0 0 15px; }

.share-single li.facebook {
  float: left;
  margin: 3px 10px 0 0;
  padding: 3px 0 0 15px;
  width: 90px; }

.share-single li.email a {
  margin: 0; }

.share-single li.twitter iframe {
  width: 87px !important;
  /* need to override Twitter's inline width*/ }

.instapaper {
  float: right; }

/* BLANK PAGE DIV USED FOR GENERATING A BLANK PAGE IN PDF SHOULD BE IGNORED */
.blank-page {
  display: none; }

/* FOOTNOTES
============== */
.footnotes {
  font-size: 0.75em; }

.footnotes ol li {
  list-style: decimal outside; }

.footnotes ol li::before {
  content: none; }

/****************
   Author page
*****************/
#authors .author-block-wrap {
  overflow: hidden; }

.author-block {
  overflow: hidden; }

h3.author-name {
  font-style: normal;
  font-weight: bold; }

/*
.bio {
  float: left;
  margin-right: 20px;
  width: 70%;
}
*/
.author-profile {
  float: left;
  width: 26%; }

.social-media-profile {
  margin: 20px 0; }

.social-media-profile li {
  margin-bottom: 5px; }

.social-media-profile li a {
  background: url("images/sprite.png") 0 -296px no-repeat;
  color: #4a4a4a;
  display: block;
  font: 1em/2em "Open Sans Condensed", Arial, Helvetica, sans-serif;
  height: 30px;
  padding-left: 30px; }

.social-media-profile li.facebook a {
  background-position: 0 -348px; }

.social-media-profile li.linkedin a {
  background-position: 0 -398px; }

.social-media-profile li.website a {
  background-position: 0 -449px;
  word-wrap: break-word; }

/****************
    Buy Page
*****************/
.buy-book {
  font-size: 0.875em;
  margin-top: 30px; }

.buy-page li {
  margin: 0 0 20px 0;
  padding: 5px 10px; }

.buy-page img {
  background: transparent;
  border: none;
  max-width: 100%;
  padding: 0;
  vertical-align: middle; }

.logo {
  display: inline-block;
  margin-right: 30px;
  text-align: right;
  width: 100px; }

/******************
	TOC Page
*******************/
#inline-toc h4 {
  font: 1.2em "Oswald", Arial, Helvetica, sans-serif;
  font-style: normal;
  margin: 25px 0 5px;
  text-align: center; }

#inline-toc ul {
  margin-left: 0; }

/*******************
	 Access Denied
********************/
.denied-title {
  color: #4d0a0a;
  font-size: 1.4em;
  margin-bottom: 15px; }

.denied-text a {
  background: #eeeeee;
  -moz-border-radius: 6px;
  -o-border-radius: 6px;
  -webkit-border-radius: 6px;
  border-radius: 6px;
  color: #4a4a4a;
  font: 0.7em "Oswald", Arial, Helvetica, sans-serif;
  padding: 5px;
  text-decoration: none; }

.denied-text a:hover {
  background: #aaaaaa; }

.sign-up {
  margin-top: 15px; }

/****************
	 Footer
*****************/
.footer {
  background: url("images/footer-shadow.png") 0 0 repeat-x #8d8d8d;
  color: #ffffff;
  font: 0.75em/1.5em "Open Sans Condensed", Arial, Helvetica, sans-serif;
  font-weight: bold; }

.footer .inner {
  margin: auto;
  padding: 30px 60px;
  width: 520px; }

.footer .inner table {
  margin: 0 auto 40px;
  overflow: hidden;
  text-align: left; }

.footer .inner td {
  width: 48%;
  padding: 0 10px; }

.footer .inner tr td:first-child {
  text-align: right; }

.cie-name {
  font-family: "Oswald", Arial, Helvetica, sans-serif;
  text-align: center;
  font-weight: normal; }

.cie-name a {
  color: #ffffff;
  text-decoration: none; }

.footer div.license-attribution p {
  font-size: 80%;
  text-align: center; }

.footer div.license-attribution p a {
  color: #ffffff;
  text-decoration: none; }

.footer div.license-attribution img {
  border: none;
  background: none; }

/********************
	Comments
*********************/
#comments {
  margin: 0 auto;
  padding: 30px 60px;
  width: 520px; }

h3#reply-title {
  font-size: 1.1em;
  font-style: normal;
  font-variant: normal;
  font-weight: bold;
  margin-bottom: 10px; }

h3#comments-title {
  font-size: 1.1em;
  font-style: normal;
  font-variant: normal;
  font-weight: bold; }

ol.commentlist {
  list-style: decimal; }

ol.commentlist li {
  background: #eeeeee;
  border: 1px solid;
  border-color: #FFF #CCC #CCC #DEDEDE;
  padding: 10px 15px; }

ol.commentlist li.odd {
  background: #ffffff;
  border-left: 1px solid #dedede; }

.comment-author {
  font-size: 0.8em; }

img.avatar {
  float: left;
  margin: 0 10px 10px 0;
  width: auto; }

cite.fn {
  display: block;
  font: 1.2em "Open Sans Condensed", Arial, Helvetica, sans-serif;
  font-style: normal; }

.comment-body {
  clear: both; }

.reply a {
  background-color: #222;
  border: 1px solid #000;
  color: #fff;
  cursor: pointer;
  font: 0.75em "Oswald", Arial, Helvetica, sans-serif;
  text-shadow: 0 1px 0 #000;
  -moz-border-radius: 6px;
  -o-border-radius: 6px;
  -webkit-border-radius: 6px;
  border-radius: 6px;
  padding: 2px 3px;
  text-decoration: none; }

.reply a:hover {
  background-color: #000000;
  background-image: -webkit-gradient(linear, left top, left bottom, from(#2c2c2c), to(#000000));
  background-image: -webkit-linear-gradient(top, #2c2c2c, #000000);
  background-image: -moz-linear-gradient(top, #2c2c2c, #000000);
  background-image: -o-linear-gradient(top, #2c2c2c, #000000);
  background-image: -ms-linear-gradient(top, #2c2c2c, #000000);
  background-image: linear-gradient(top, #2c2c2c, #000000);
  filter: progid:DXImageTransform.Microsoft.gradient(GradientType=0, StartColorStr='#2c2c2c', EndColorStr='#000000'); }

.reply a:active {
  background-color: #434343;
  background-image: -webkit-gradient(linear, left top, left bottom, from(#222222), to(#434343));
  background-image: -webkit-linear-gradient(top, #222222, #434343);
  background-image: -moz-linear-gradient(top, #222222, #434343);
  background-image: -o-linear-gradient(top, #222222, #434343);
  background-image: -ms-linear-gradient(top, #222222, #434343);
  background-image: linear-gradient(top, #222222, #434343);
  filter: progid:DXImageTransform.Microsoft.gradient(GradientType=0, StartColorStr='#222222', EndColorStr='#434343'); }

/********************
	Comment Form
*********************/
.required {
  color: #870d0d; }

.comment-notes {
  font-size: 0.875em; }

.comment-form-author,
.comment-form-email,
.comment-form-url,
.comment-form-comment {
  margin-bottom: 30px;
  overflow: hidden; }

.comment-form-author {
  margin-top: 40px; }

.comment-form-comment {
  margin-bottom: 10px; }

#commentform label {
  font: 1em "Oswald", Arial, Helvetica, sans-serif;
  float: left;
  padding-right: 5px;
  text-align: right;
  width: 115px; }

#commentform input,
#commentform textarea {
  -moz-border-radius: 6px;
  -o-border-radius: 6px;
  -webkit-border-radius: 6px;
  border-radius: 6px;
  float: right;
  width: 350px; }

#commentform input {
  font-size: 0.875em;
  height: 30px; }

#respond .form-allowed-tags {
  color: #bbb;
  font-size: 0.7em;
  line-height: 1.2em;
  margin: 10px 0 0 170px;
  width: 350px; }

.form-submit {
  margin: 10px 0 0 170px; }

input#submit {
  background-color: #820808;
  background-image: -webkit-gradient(linear, left top, left bottom, from(#a62c2c), to(#820808));
  background-image: -webkit-linear-gradient(top, #a62c2c, #820808);
  background-image: -moz-linear-gradient(top, #a62c2c, #820808);
  background-image: -o-linear-gradient(top, #a62c2c, #820808);
  background-image: -ms-linear-gradient(top, #a62c2c, #820808);
  background-image: linear-gradient(top, #a62c2c, #820808);
  filter: progid:DXImageTransform.Microsoft.gradient(GradientType=0, StartColorStr='#a62c2c', EndColorStr='#820808');
  -moz-box-shadow: 0 1px 0 0 #C77A7A inset;
  -webkit-box-shadow: 0 1px 0 0 #C77A7A inset;
  box-shadow: 0 1px 0 0 #C77A7A inset;
  border: 1px solid #4d0a0a;
  color: #ffffff;
  cursor: pointer;
  font: 0.75em "Oswald", Arial, Helvetica, sans-serif;
  text-shadow: 0 1px 0 #000;
  float: none;
  padding-bottom: 2px;
  width: 72px; }

input#submit:hover {
  background-color: #5c0102;
  background-image: -webkit-gradient(linear, left top, left bottom, from(#801e1e), to(#5c0102));
  background-image: -webkit-linear-gradient(top, #801e1e, #5c0102);
  background-image: -moz-linear-gradient(top, #801e1e, #5c0102);
  background-image: -o-linear-gradient(top, #801e1e, #5c0102);
  background-image: -ms-linear-gradient(top, #801e1e, #5c0102);
  background-image: linear-gradient(top, #801e1e, #5c0102);
  filter: progid:DXImageTransform.Microsoft.gradient(GradientType=0, StartColorStr='#801e1e', EndColorStr='#5c0102'); }

input#submit:active {
  background-color: #a62c2c;
  background-image: -webkit-gradient(linear, left top, left bottom, from(#820808), to(#a62c2c));
  background-image: -webkit-linear-gradient(top, #820808, #a62c2c);
  background-image: -moz-linear-gradient(top, #820808, #a62c2c);
  background-image: -o-linear-gradient(top, #820808, #a62c2c);
  background-image: -ms-linear-gradient(top, #820808, #a62c2c);
  background-image: linear-gradient(top, #820808, #a62c2c);
  filter: progid:DXImageTransform.Microsoft.gradient(GradientType=0, StartColorStr='#820808', EndColorStr='#a62c2c'); }

/*************************************************
	Mobile Safari ( iPad, iPhone and iPod Touch )
**************************************************/
pre {
  -webkit-text-size-adjust: 140%; }

code {
  -webkit-text-size-adjust: 160%; }

#access,
.entry-meta,
.entry-utility,
.navigation,
.widget-area {
  -webkit-text-size-adjust: 120%; }

#site-description {
  -webkit-text-size-adjust: none; }

/*
 * Media queries for responsive design
 * These follow after primary styles so they will successfully override.
 */
@media screen and (max-width: 1024px) {
  /* Style adjustments for portrait mode goes here */
  #content {
    font-size: 1.1em; }

  nav.sticky.mobile {
    position: static; }

  #toc {
    background: #E0E0E0;
    margin-left: -130px;
    margin-top: -10px; } }
@media screen and (max-width: 768px) {
  /* Style adjustments for portrait mode goes here */
  .h1.book-title {
    width: auto; }

  .pressbooks-logo {
    padding: 15px 0 0 20px; }

  .pressbooks-logo a {
    background: url("images/sprite.png") -200px -50px no-repeat;
    display: block;
    text-indent: -9999em;
    width: 40px; }

  #wrap,
  #content,
  .footer .inner,
  #comments {
    width: auto; }

  #wrap {
    padding-top: 50px; }

  #content {
    border-top: 1px solid #f5f5f5;
    margin: 0 10px 60px; }

  #sidebar {
    margin: 0;
    padding: 0;
    right: 12px;
    top: 0;
    width: auto; }

  #booknav {
    background-color: transparent;
    float: right;
    margin-top: 0; }

  #booknav li:first-child {
    padding-top: 0; }

  #booknav li {
    background: #ffffff;
    border-right: 1px solid #E1E1E1;
    -moz-border-radius: 6px 6px 0 0;
    -o-border-radius: 6px 6px 0 0;
    -webkit-border-radius: 6px 6px 0 0;
    border-radius: 6px 6px 0 0;
    float: left;
    padding-bottom: 10px;
    height: 40px;
    width: 70px; }

  #booknav li a {
    text-indent: -9999em; }

  .admin-btn a {
    background-position: 28px -184px; }

  .home-btn a {
    background-position: -24px -184px; }

  .toc-btn a {
    background-position: -124px -182px; }

  .read-btn a {
    background-position: -181px -187px; }

  .authors-btn a {
    background-position: -326px -183px; }

  .about-btn a {
    background-position: -258px -185px; }

  a.logout {
    background-position: 9px -32px; }

  a.login {
    background-position: 9px 18px; }

  /* Side nav*/
  #toc h4 {
    margin: 25px 0 2px; }

  a.close {
    background-position: 160px -50px;
    width: 100%; }

  .share-single li.facebook {
    margin: 0; }

  #wrapper,
  #toc {
    position: relative; }

  #toc {
    margin-top: 47px;
    margin-left: 0;
    z-index: 100; }

  /*page nav*/
  .nav {
    left: 0;
    margin-left: 0;
    width: 100%; } }
@media screen and (max-device-width: 480px) {
  h1.book-title,
  .author-wrap {
    width: auto; }

  #content {
    padding: 20px 10px 10px; }

  .nav {
    background-color: rgba(250, 250, 250, 0.8);
    bottom: 0;
    box-shadow: -1px -1px 1px #CCC;
    height: 43px;
    left: 0;
    margin-left: 0;
    overflow: hidden;
    padding: 2px 0;
    top: auto;
    width: 100%; }

  .nav span.previous {
    left: 3px;
    top: 2px; }

  .nav span.next {
    right: 3px;
    top: 2px; }

  /* Cover page */
  img.featured {
    display: block;
    float: none;
    margin: 0 auto; }

  .about140 {
    margin-left: 0;
    padding: 20px 0 0 0; }

  /* Cover Page */
  .buttons {
    overflow: visible;
    height: auto;
    width: auto; }

  .buttons li {
    display: block;
    margin-bottom: 20px;
    text-align: center; }

  .buttons li a.button-grey,
  .buttons li a.button-black {
    display: block;
    float: none;
    margin: auto;
    width: auto; }

  /* Navigation */
  #toc {
    position: absolute;
    right: 0; }

  /* Share btns*/
  .share-wrap {
    display: none; }

  .share-wrap-single {
    margin: 0 10px 30px;
    width: auto; }

  /* Book read nav*/
  .entry-title {
    width: auto; }

  .pagenav.top {
    margin-bottom: 20px; }

  .pagenav.bottom {
    margin-top: 20px;
    margin-bottom: 10px; }

  /* Comments */
  #commentform textarea,
  #commentform input {
    float: none;
    width: 100%; }

  #commentform label {
    float: none;
    text-align: left;
    width: auto; }

  .comment-form-author,
  .comment-form-email,
  .comment-form-url,
  .comment-form-comment {
    overflow: visible; }

  #respond .form-allowed-tags {
    margin: 0 auto;
    width: auto; }

  .form-submit {
    margin: 10px auto 0; }

  /* About the Author page */
  h3.author-name {
    margin: 0; }

  .bio {
    float: none;
    margin-right: 0;
    width: 100%; } }
@media screen and (max-device-width: 320px) {
  #wrap {
    padding-top: 40px; }

  /* Nav */
  #booknav li {
    height: 30px;
    margin: 0 0 20px;
    text-align: center;
    width: 40px; }

  a.log {
    text-indent: -9999em;
    display: block;
    padding: 15px 0;
    width: 40px; }

  .admin-btn a {
    background-position: 12px -187px; }

  .home-btn a {
    background-position: -38px -187px; }

  .toc-btn a {
    background-position: -139px -186px; }

  .read-btn a {
    background-position: -195px -190px; }

  .authors-btn a {
    background-position: -340px -187px; }

  .about-btn a {
    background-position: -271px -189px; }

  a.logout {
    background-position: 13px -37px; }

  a.login {
    background-position: 13px 14px; }

  /* Side nav*/
  #toc h4 {
    margin: 25px 0 2px; }

  a.close {
    background-position: 160px -50px;
    width: 100%; }

  .share-single li.facebook {
    margin: 0; }

  .entry-title {
    width: auto; }

  /* Layout */
  blockquote {
    padding-left: 30px; }

  blockquote p {
    padding: 5px; }

  aside {
    float: none;
    width: auto; }

  #content tr td {
    padding: 6px 14px; }

  pre {
    padding: .5em;
    font-size: 0.7em; }

  /* Imgages */
  img {
    background: transparent;
    border: none;
    padding: 0;
    width: auto; }

  #commentform textarea,
  #commentform input {
    width: 90%; }

  /* Comments */
  #comments {
    padding: 30px 10px; } }
/* Grade-A Mobile Browsers (Opera Mobile, iPhone Safari, Android Chrome)
   Consider this: www.cloudfour.com/css-media-query-for-mobile-is-fools-gold/ */
/********************
	Print
*********************/
@media print {
  body {
    background: none !important; }

  a {
    color: #1f1f1d !important; }

  #wrap {
    clear: both !important;
    display: block !important;
    float: none !important;
    position: relative !important;
    margin: 0 auto !important; }

  #header {
    border-bottom: 2pt solid #000;
    padding-bottom: 18pt; }

  .entry-content {
    font-size: 14pt;
    line-height: 1.6em; }

  .entry-title {
    font-size: 21pt; }

  #access,
  #branding img,
  #respond,
  #comments,
  #searchform,
  .comment-edit-link,
  .edit-link,
  .navigation,
  .page-link,
  .widget-area,
  .nav,
  .share-wrap-single,
  .sidebar {
    display: none !important; }

  #container,
  #header,
  .footer {
    margin: 0;
    width: 100%; }

  .footer,
  nav {
    background: #ffffff none !important;
    color: #1f1f1d; }

  #content,
  .one-column #content {
    margin: 24pt 0 0;
    width: 100%;
    padding: 10px; }

  .wp-caption p {
    font-size: 11pt; }

  #site-info,
  #site-generator {
    float: none;
    width: auto; }

  #colophon {
    width: auto; }

  img#wpstats {
    display: none; }

  #site-generator a {
    margin: 0;
    padding: 0; }

  #entry-author-info {
    border: 1px solid #e7e7e7; }

  #main {
    display: inline; }

  .home .sticky {
    border: none; }

  .wrapper {
    height: auto !important;
    min-height: 100px;
    margin: 0 auto; } }

/* =Debug Stuff (PL)
-------------------------------------------------------------- */
div#debug {
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 150px;
  background-color: #EEEEEE;
  display: none;
  overflow: auto; }

body > div#debug {
  position: fixed; }

* html body {
  overflow: hidden; }

* html div#wrap {
  height: 100%;
  overflow: auto; }
