/* Rookie Main Style v1.0 */

/* ROOKIE CORE */
.main-content-area {
  margin-bottom: 50px;
  margin-top: 50px;
}

body > section {
  padding:50px 20px;
  overflow:hidden;
  box-shadow:1px 0 1px rgba(50,50,50,0.15) inset
}

.wow { visibility:hidden }

ol.unstyled, 
ul.unstyled {
  list-style: none none;
  margin: 0;
  padding: 0
}

img {
  max-width: 100%;
  height: auto
}

.alignleft {
  display: inline;
  float: left;
}

.alignright {
  display: inline;
  float: right;
}

.aligncenter {
  display: block;
  margin-right: auto;
  margin-left: auto;
}

.alignnone {
   margin: 1em 0 2em
}

blockquote.alignleft,
.wp-caption.alignleft,
img.alignleft {
  margin: 0.4em 1.6em 1.6em 0;
}

blockquote.alignright,
.wp-caption.alignright,
img.alignright {
  margin: 0.4em 0 1.6em 1.6em;
}

blockquote.aligncenter,
.wp-caption.aligncenter,
img.aligncenter {
  clear: both;
  margin-top: 1em;
  margin-bottom: 2em;
}

.wp-caption.alignleft,
.wp-caption.alignright,
.wp-caption.aligncenter {
  margin-bottom: 1.2em;
}

.wp-caption.alignnone {
  margin: 2em 0 2em
}

.screen-reader-text {
  clip: rect(1px,1px,1px,1px);
  position: absolute!important
}

.screen-reader-text:active,
.screen-reader-text:focus,
.screen-reader-text:hover {
  background-color: #f1f1f1;
  border-radius: 3px;
  box-shadow: 0 0 2px 2px rgba(0,0,0,.6);
  clip: auto!important;
  color: #21759b;
  display: block;
  font-size: 14px;
  font-weight: 700;
  height: auto;
  left: 5px;
  line-height: normal;
  padding: 15px 23px 14px;
  text-decoration: none;
  top: 5px;
  width: auto;
  z-index: 100000
}

.wp-smiley {
  max-height:13px;
  margin:0
}

.comment-content img.wp-smiley,
.entry-content img.wp-smiley,
.page-content img.wp-smiley {
  border: none;
  margin-bottom: 0;
  margin-top: 0;
  padding: 0
}

embed,
iframe,
object,
video {
  margin-bottom: 25px;
  max-width: 100%
}

p > embed,
p > iframe,
p > object,
p > video {
  margin-bottom: 0
}

.wp-audio-shortcode,
.wp-video,
.wp-playlist.wp-audio-playlist {
  font-size: 15px;
  font-size: 1.5rem;
  margin-top: 0;
  margin-bottom: 25px
}

.wp-playlist.wp-playlist {
  padding-bottom: 0;
}

.wp-playlist .wp-playlist-tracks {
  margin-top: 0;
}

.wp-playlist-item .wp-playlist-caption {
  border-bottom: 0;
  padding: 10px 0;
}

.wp-playlist-item .wp-playlist-item-length {
  top: 10px;
}

/* GALLERY */ 
.gallery { margin-bottom: 1.6em }

.gallery-item {
  overflow: hidden;
  position: relative;
  text-align: center;
  vertical-align: top;
  display: inline-block
}

.gallery dl {
  float: left;
  margin-top: 10px
}

.gallery dl img {
  border: 2px solid #fff
}

.gallery-caption {
  position: absolute;
  opacity: 0;
  visibility: hidden;
  width: 100%;
  bottom: 0;
  transition: all .4s ease 0s;
  -webkit-transition: all .4s ease 0s;
  transform: scale(0.9);
  padding: 10px
}

.gallery-item:hover .gallery-caption {
  visibility: visible;
  opacity: 1;
  transform: scale(1)
}

.gallery-item .wp-caption-text.gallery-caption {
  font-weight: 500;
  font-size: 12px;
  color: #fff
}

.gallery-item:hover a {
  text-decoration: none
}

.gallery-icon img {
  margin: 0 auto
}

.gallery-icon a:before {
  background: none repeat scroll 0 0 rgba(0, 0, 0, 0.7);
  content: "";
  height: 100%;
  left: 0;
  opacity: 0;
  position: absolute;
  top: 0;
  transition: all 0.2s ease-in-out 0s;
  -webkit-transition: all .2s ease 0s;
  width: 100%
}

.gallery-item:hover .gallery-icon a:before {
  opacity: 1
}

.gallery-columns-2 .gallery-item { max-width: 50% }
.gallery-columns-3 .gallery-item { max-width: 33.33% }
.gallery-columns-4 .gallery-item { max-width: 25% }
.gallery-columns-5 .gallery-item { max-width: 20% }
.gallery-columns-6 .gallery-item { max-width: 16.66% }
.gallery-columns-7 .gallery-item { max-width: 14.28% }
.gallery-columns-8 .gallery-item { max-width: 12.5% }
.gallery-columns-9 .gallery-item { max-width: 11.11% }

.gallery-columns-6 .gallery-caption,
.gallery-columns-7 .gallery-caption,
.gallery-columns-8 .gallery-caption,
.gallery-columns-9 .gallery-caption {
  display:none
}

#image-navigation .nav-next a,#image-navigation .nav-previous a {
  padding: 5px 20px;
  border: 1px solid #E8E8E8;
  border-radius: 4px;
  display: block
}

#image-navigation .nav-next a:hover, #image-navigation .nav-previous a:hover {
  background-color: #DA4453;
  color: #fff
}

#image-navigation .nav-next, #image-navigation .nav-previous {
  margin: 10px 0
}

/* CAPTIONS */
.wp-caption {
  max-width: 100%;
  text-align: center
}

.wp-caption .wp-caption-text {
  margin: 0;
  padding: 5px;
  background: #e23a3e;
  color: #fff;
  font-size: 14px;
  font-style: normal
}

.wp-caption-text.gallery-caption {
  margin: 0
}

.wp-caption .wp-caption-text a {
  color: #fff;
  text-decoration: underline
}

.wp-caption .wp-caption-text a:hover {
  text-decoration: none
}

/* BOOTSTRAP EDIT */
.btn {
  border: 0;
  border-bottom: 0;
  border-left: 0;
  box-shadow: inset 0 -2.2px rgba(0,0,0,.12),inset 2px 0 rgba(0,0,0,.1);
  outline: 0;
  -webkit-outline: 0
}

.btn.active, 
.btn:active {
  outline: 0;
  background-image: none;
  position: relative;
  box-shadow: inset 0 2px 3px rgba(0,0,0,.125)!important;
  -webkit-box-shadow: inset 0 3px 5px rgba(0,0,0,.125)!important;
  top: 1px;
  left: -1px
}

.btn:focus {
  outline: 0;
  -webkit-outline: 0;
}

.btn-xlg {
  padding: 24px 48px;
  font-size: 24px
}

.btn-xlg [class*=" icon-"],
.btn-xlg [class^=icon-] {
  margin-right: 10px
}

.form-control:focus {
  border-color: #644C80;
  outline: 0;
  box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(178,175,232,.6);
  -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(178,175,232,.6)
}

.btn-success {
  background-color: #2ecc5b
}

.btn-default {
  color: #fff;
  background-color: #b2afe8;
  border-color: #644C80
}

.btn-default.active,
.btn-default:active,
.btn-default:focus,
.btn-default:hover,
.open .dropdown-toggle.btn-default {
  color: #fff;
  background-color: #644C80
}

@media screen and (max-width: 768px) {

  #search_dropdown {
    display:none !important
  }

  .container > .navbar-collapse,
  .container > .navbar-header {
    margin-right: auto;
    margin-left: auto
  }
}

img.alignleft {
    float: left;
    margin: 0 1em 1em 0;
}

.navbar {
  padding: 10px;
  z-index: 999;
  background: rgba(255,255,255,.9);
  margin-bottom: 0;
  min-height: 0;
  position: relative;
  border-radius: 0;
  border-color: #eee
}

#desktop-menu .navbar-nav > .open > a, 
#desktop-menu .navbar-nav > .open > a:focus, 
#desktop-menu .navbar-nav > .open > a:hover,

#desktop-menu .navbar-nav > .active > a, 
#desktop-menu .navbar-nav > .active > a:focus, 
#desktop-menu .navbar-nav > .active > a:hover,

#desktop-menu .navbar-nav > li > a:focus, 
#desktop-menu .navbar-nav > li > a:hover,

.nav .open > a, 
.nav .open > a:focus, 
.nav .open > a:hover,

.dropdown-menu > li > a:focus, 
.dropdown-menu > li > a:hover,

.dropdown-menu > .active > a, 
.dropdown-menu > .active > a:focus, 
.dropdown-menu > .active > a:hover {
  background-color: #b2afe8;
  color: #fff
}

.navbar-form input {
  min-width: 220px
}

.dropdown-menu .dropdown-menu {
  top: 0;
  right: 100%;
  margin-top: 0
}

.nav-animation {
  animation: fadeIn .5s;
  -webkit-animation: fadeIn .5s
}

.search-animation {
  animation: zoomIn .2s;
  -webkit-animation: zoomIn .2s
}

@media (max-width: 767px) {
  table {
    table-layout: fixed;
  }
}

/* MOBILE MENU */
#mobile-menu .navbar-collapse {
  max-height: 420px;
  height: 100%;
  overflow-y: auto
}

#mobile-menu .navbar-collapse .navbar-nav > li a {
  color: #777;
  display: block;
  padding: 5px 10px;
  cursor: pointer
}

#mobile-menu .navbar-nav > li a:hover,
#mobile-menu .navbar-nav > li a:focus,
#mobile-menu .navbar-nav > li a:active{
  background-color: #b2afe8;
  color: #fff
}

#mobile-menu .navbar-collapse .navbar-nav > .active > a, 
#mobile-menu .navbar-collapse .navbar-nav > .active > a:focus, 
#mobile-menu .navbar-collapse .navbar-nav > .active > a:hover,

#mobile-menu .navbar-collapse .navbar-nav > li > a:focus, 
#mobile-menu .navbar-collapse .navbar-nav > li > a:hover {
  background-color: #b2afe8;
  color: #fff
}

#mobile-menu .navbar-collapse .navbar-nav ul {
  list-style: none;
  padding: 5px 0 0 20px
}

ul li span.menu-toggler {
  cursor: pointer;
  right: 10px;
  top: 14px;
  position: absolute
}

.nav-tabs {
  margin:20px 0
}

.search-highlight {
  background: #fcf8e3;
  color: #8a6d3b
}

.text-muted {
  color: inherit;
  text-decoration: none;
  font-weight: 700
}

.very-muted {
  text-transform: uppercase;
  color: #aaa!important;
  font-weight: 700;
  display: inline-block;
  font-size: 11px
}

.pager li > a, 
.pager li > span {
  border-radius: 2px;
}

.pager li > a:focus, .pager li > a:hover {
  background-color: #644C80;
  color: #fff
}

.pager > .active > a,
.pager > .active > a:focus,
.pager > .active > a:hover,
.pager > .active > span, 
.pager > .active > span:focus, 
.pager > .active > span:hover {
  background-color: #644C80;
  border-color: #eee;
  color: #fff
}

@media screen and (max-width: 360px) {
  .pager li > a, 
  .pager li > span {
    padding: 3px 8px;
    font-size: 12px
  }
}

/* HEADERS */
.admin-bar .is-sticky {
  margin-top: 28px;
}

#top-bar-wrap {
  font-size: 12px;
  margin-bottom: 0
}

.top-bar-left {
  float: left;
  height: 50px;
  line-height: 50px
}

.top-bar-left span {
  margin-right: 5px
}

.top-bar-left span i {
  margin-right: 5px
}

.top-bar-right {
  float: right;
  height: 50px;
  line-height: 50px
}

#top-bar-social a {
  display: block;
  float: left;
  font-size: 18px;
  margin-left: 10px
}

#top-bar #top-bar-social.top-bar-right a :hover {
  transition: all .3s ease 0s;
  -webkit-transition: all .3s ease 0s
}

#top-bar-social a .fa-facebook:hover { color: #3b559f }
#top-bar-social a .fa-twitter:hover { color: #00acee }
#top-bar-social a .fa-linkedin:hover { color: #007bb6 }
#top-bar-social a .fa-google-plus:hover { color: #dd4c39 }
#top-bar-social a .fa-dribbble:hover { color: #f36798 }
#top-bar-social a .fa-pinterest:hover { color: #cc2127 }
#top-bar-social a .fa-flickr:hover { color: #ff0084 }
#top-bar-social a .fa-instagram:hover { color: #517fa4 }
#top-bar-social a .fa-vimeo-square:hover { color: #0CF }
#top-bar-social a .fa-youtube:hover { color: #bb0000 }
#top-bar-social a .fa-rss:hover { color: #ffac3d }

.logo { margin-top: 10px }
.logo h2.site-title { margin: 5px 0 }

.is-sticky {
  z-index: 9999;
  left: 0;
  position: fixed;
  top: 0;
  width: 100%;
  box-shadow: 0 0 20px 0 rgba(0,0,0,.2);
  border-top: 3px solid #644C80;
  -webkit-animation:fadeIn ease-in 1;
  animation:fadeIn ease-in 1;

  -webkit-animation-fill-mode:forwards;
  animation-fill-mode:forwards;

  -webkit-animation-duration:.5s;
  animation-duration:.5s
}

#sub-header {
  margin-top: 0;
  padding: 28px 0
}

.sub-header-title > h1 {
  font-size: 20px
}

#breadcrumbs {
  text-align: right;
  font-size: 11px;
  font-weight: 500
}

#breadcrumbs a, .current {
  padding: 0 5px
}

@media (max-width: 768px) {
  #breadcrumbs {
    padding: 10px 0
  }
}

/* SLIDER */ 
#main-slider {
  position: relative;
}

.no-margin {
  margin: 0;
  padding: 0;
}

#main-slider .carousel-content {
  margin-top: 140px;
  text-shadow: 0 1px 1px rgba(0, 0, 0, .3);
}

@media only screen and (max-width :767px) {
  #main-slider .carousel-content {
    margin-top: 110px;
  }
}

.slide-margin {
  margin-bottom: 140px;
}

#main-slider .youtube-embed {
  margin: 30px 0;
}

#main-slider .youtube-embed iframe {
  display: block;
  height: 360px;
  max-width: 101%;
  position: relative;
  width: 480px;
}

#main-slider h2 {
  font-size: 40px;
  font-weight: 700;
  text-transform: uppercase;
  color: #fff;
  font-family: inherit;
}

#main-slider .carousel-content .boxed {
  padding: 10px 15px;
  background-color: rgba(0, 0, 0, .4);
}

.btn-min-block {
  min-width: 170px;
  line-height: 26px;
  border-radius: 2px;
}

.btn-clear {
  color: #fff;
  background-color: rgba(0, 0, 0, .1);
  margin: 15px 0;
  text-transform: uppercase;
}

.btn-clear:hover {
  color: #000;
  background-color: rgba(255, 255, 255, .9);
}

#main-slider .carousel .slider-img {
  text-align: right;
  position: absolute;
}

#main-slider .carousel .item {
  background-position: 50%;
  background-repeat: no-repeat;
  background-size: cover;
  left: 0 !important;
  opacity: 0;
  top: 0;
  position: absolute;
  width: 100%;
  display: block !important;
  height: 100%;
  -webkit-transition: opacity ease-in-out 500ms;
  -moz-transition: opacity ease-in-out 500ms;
  -o-transition: opacity ease-in-out 500ms;
  transition: opacity ease-in-out 500ms;
  cursor: move;
}

#main-slider .carousel .item:first-child {
  top: auto;
  position: relative;
}

#main-slider .carousel .item.active {
  opacity: 1;
  -webkit-transition: opacity ease-in-out 500ms;
  -moz-transition: opacity ease-in-out 500ms;
  -o-transition: opacity ease-in-out 500ms;
  transition: opacity ease-in-out 500ms;
  z-index: 1;
}

#main-slider .next, #main-slider .prev {
  position: absolute;
  top: 50%;
  color: #fff;
  display: inline-block;
  margin-top: -25px;
  height: 40px;
  width: 40px;
  line-height: 40px;
  text-align: center;
  border-radius: 4px;
  z-index: 5;
  opacity: .1;
}

#main-slider:hover .next, #main-slider:hover .prev {
  background-color: #000;
  opacity: .4;
}

#main-slider .prev {
  left: 10px;
}

#main-slider .next {
  right: 10px;
}

/* SLIDER EFFECTS */
  #main-slider .active .animation.animated-item-1 {
    -webkit-animation: <?php echo ro_get_option('animated_item_1'); ?>;
    -moz-animation: <?php echo ro_get_option('animated_item_1'); ?>;
    animation: <?php echo ro_get_option('animated_item_1'); ?>;
    -webkit-animation-fill-mode: both;
    -moz-animation-fill-mode: both;
    animation-fill-mode: both;
    -webkit-animation-duration: 1s;
    -moz-animation-duration: 1s;
    animation-duration: 1s;
  }

  #main-slider .active .animation.animated-item-2 {
    -webkit-animation: <?php echo ro_get_option('animated_item_2'); ?>;
    -moz-animation: <?php echo ro_get_option('animated_item_2'); ?>;
    animation: <?php echo ro_get_option('animated_item_2'); ?>;
    -webkit-animation-fill-mode: both;
    -moz-animation-fill-mode: both;
    animation-fill-mode: both;
    -webkit-animation-duration: 1s;
    -moz-animation-duration: 1s;
    animation-duration: 1s;
    -webkit-animation-delay: .5s;
    -moz-animation-delay: .5s;
    animation-delay: .5s;
  }

  #main-slider .active .animation.animated-item-3 {
    -webkit-animation: <?php echo ro_get_option('animated_item_3'); ?>;
    -moz-animation: <?php echo ro_get_option('animated_item_3'); ?>;
    animation: <?php echo ro_get_option('animated_item_3'); ?>;
    -webkit-animation-fill-mode: both;
    -moz-animation-fill-mode: both;
    animation-fill-mode: both;
    -webkit-animation-duration: 1s;
    -moz-animation-duration: 1s;
    animation-duration: 1s;
    -webkit-animation-delay: 1s;
    -moz-animation-delay: 1s;
    animation-delay: 1s;
  }
  #main-slider .active .animation.animated-item-4 {
    -webkit-animation: <?php echo ro_get_option('animated_item_3'); ?>;
    -moz-animation: <?php echo ro_get_option('animated_item_3'); ?>;
    animation: <?php echo ro_get_option('animated_item_3'); ?>;
    -webkit-animation-fill-mode: both;
    -moz-animation-fill-mode: both;
    animation-fill-mode: both;
    -webkit-animation-duration: 2s;
    -moz-animation-duration: 2s;
    animation-duration: 2s;
    -webkit-animation-delay: 1s;
    -moz-animation-delay: 1s;
    animation-delay: 1s;
  }

.carousel .carousel-indicators {
  bottom: 0;
  margin-bottom: 25px;
  opacity: 0;
}

.carousel:hover .carousel-indicators {
  opacity: 1;
}

/* CONTENT */
.single-featured {
  -webkit-transition: opacity .3s linear;
  transition: opacity .3s linear;
  display: block;
  margin: auto
}

.single-featured:hover {
  opacity: .8;
  box-shadow: 0 0 0 5px #644C80 inset
}

.hentry {
  padding: 20px 25px 5px;
  border-radius: 3px;
  box-shadow: 0 1px 0 #ccc;
  margin-bottom: 3em;
  position: relative
}

.hentry:after {
  border-bottom-color: #ccc!important;
  border-left: 5px solid transparent;
  border-right: 5px solid transparent;
  border-style: solid;
  border-top: 5px solid transparent;
  border-width: 5px;
  bottom: 0;
  content: "";
  height: 0;
  left: 50%;
  margin-left: -3px;
  position: absolute;
  width: 0
}

.sticky {
  display: block;
  border-color: rgba(178,175,232,.5);
  background: #f7fcf7!important;
  border-style: solid;
  border-width: 1px;
}

.sticky-pin:before {
  background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAwAAAAMCAMAAABhq6zVAAAAdVBMVEUAAAD///8AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABnRQBiQQAAAAAAAAAAAAAAAAAAAAAAAAA7JwDcmADtogDlnADTkADXkwDNjQDsoQDLjADroADelwDclgDalQDlnADkmwDhmQDwpADwpADwpACYC0YSAAAAJnRSTlMAAAMFCQsOERUhJCUlJygqLzA8QUFocqGjsrq6vMPL0NLZ2t3z/XhFW2IAAABJSURBVAjXY2BEAgxMrOKqakCgIsbAyMDCKacGBtJADpuAAoQjC+IIkslRlkFwlESEpSAcAXlFXg5+IUkwh0+Ch5mJnZtLlIERAJzKC8yA9G2GAAAAAElFTkSuQmCC);
  background-repeat: no-repeat;
  content: "";
  padding: 10px;
  position: absolute;
  top: -5px;
  right:-5px
}

.updated-on, 
.updated:not(.published) { display: none }

.group-blog .byline, .single .byline { display: inline }

.page-links {
  margin: 0 0 25px;
}

.page-links span {
  background-color: #644c80;
  border: 1px solid #ccc;
  border-radius: 3px;
  color: #fff;
  display: inline-block;
  padding: 3px 10px
}

.page-links a span {
  background-color: #fff;
  color: #333;
  transition: all .5s ease 0s;
  -webkit-transition: all .5s ease 0s
}

.page-links a:hover span {
  background-color: #644c80;
  color: #fff
}

.edit-link { 
  opacity: 0; 
  transition: all .5s ease 0s;
  -webkit-transition: all .5s ease 0s;
}
.hentry:hover .edit-link { opacity: 1 }

.page-title:before {
  border-bottom: 1px solid #b2afe8;
  bottom: -1px;
  content: "";
  position: absolute;
  width: 40px
}

.page-title {
  border-bottom: 1px solid #eee;
  padding: 10px 0;
  position: relative
}

.entry-meta:before {
  border-bottom: 1px solid #ccc;
  bottom: -1px;
  content: "";
  height: 0;
  left: 0;
  position: absolute;
  width: 25px
}

.entry-meta {
  border-bottom: 1px solid #eee;
  border-top: 1px solid #eee;
  font-size: 10px;
  font-weight: 700;
  position: relative;
  text-transform: uppercase
}

.entry-meta:after {
  border-bottom: 1px solid #ccc;
  content: "";
  height: 0;
  left: 0;
  position: absolute;
  top: -1px;
  width: 25px
}

.entry-content {
  padding: 25px 0
}

.entry-content,
.comment-content {
  -webkit-hyphens: auto;
  hyphens: auto;
  word-wrap: break-word;
}

.entry-content dd {
  font-size: .9em;
  color: #787878;
  margin-bottom: 1.5em
}

.entry-content pre {
  background: #eee;
  border: 1px solid #cecece;
  padding: 10px
}

.entry-footer {
  border-top: 1px solid #eee;
  font-size: 10px;
  font-weight: 700;
  position: relative;
  text-transform: uppercase
}

.entry-footer:after {
  border-bottom: 1px solid #ccc;
  content: "";
  height: 0;
  left: 0;
  position: absolute;
  top: -1px;
  width: 25px
}

.entry-meta, 
.entry-footer { padding: 10px 0 }

.entry-meta i, 
.entry-footer i { padding-right: 1px }

.sticky-post, 
.byline, 
.cat-links, 
.comments-link, 
.posted-on, 
.tags-links, 
.post-views, 
.updated-on, 
.vcard {
  margin-right: 5px
}

.bypostauthor { display:block }

ul.post-share-buttons {
  border-top: 1px solid rgba(0,0,0,.07);
  padding: 15px 10px 0 0;
  margin: 2em 0 0;
  width: 100%;
  float: left
}

ul.post-share-buttons li { 
  float: left; 
  margin: 0 15px 0 0
}

ul.post-share-buttons li.social-question { width: auto}
ul.post-share-buttons li.twitter { width: 80px}
ul.post-share-buttons li.facebook { width: 125px}
ul.post-share-buttons li.google { width: 75px}
ul.post-share-buttons li.pinterest { width: 80px}
ul.post-share-buttons li.twitter iframe { margin:0}

@media (max-width:480px) {
  ul.post-share-buttons li {
    float: none;
    margin: 10px 0
  }
}

.entry-attachment img { width:100% }

.format-chat .entry-content > p {
  clear: both;
  font-size: 14px;
  line-height: 20px;
  padding: 6px 12px;
  margin-top: 10px;
  position: relative
}

.format-chat .entry-content > p:nth-child(2n+1) {
  background: none repeat scroll 0 0 #f6f6f6;
  border-radius: 0 12px 12px 12px;
  float: left;
  -webkit-box-shadow: inset 1px -1px rgba(0,0,0,.15);
  box-shadow: inset 1px -1px rgba(0,0,0,.15);
}

.format-chat .entry-content > p:nth-child(2n) {
  background: none repeat scroll 0 0 #e4f5e4;
  border-radius: 12px 0 12px 12px;
  float: right;
  -webkit-box-shadow: inset 0 -1px rgba(0,0,0,.15);
  box-shadow: inset 0 -1px rgba(0,0,0,.15);
}

/* AUTHOR BOX */
.author-box {
  margin-top: 3em;
  margin-bottom: 3em;
  padding: 20px;
  box-shadow: 0 1px 0 #ccc
}

.author-box .author-box-info { padding: 1em 0.5em }
.author-description { margin-top: 10px }
.author-description h3.author-name { margin-top: 0}
.author-social-bar {
  display: inline-block;
  padding: 0;
  font-size: 13px
}

.author-social-bar-text {
  margin: 0 5px;
  margin-left: 0;
  font-size: 11px;
  text-transform: uppercase
}

ul.author-social-bar li {
  display: inline-block;
  margin: 0 3px
}

ul.author-social-bar li a {
  border-radius: 2px;
  color: #fff;
  display: inline-block;
  height: 20px;
  line-height: 20px;
  text-align: center;
  width: 20px;
  transition: all .5s ease 0s;
  -webkit-transition: all .5s ease 0s
}

ul.author-social-bar li a:hover { color: #fff }
.author-social-bar a.facebook { background-color: #3b5998 }
.author-social-bar .facebook:hover { background-color: #2d4373 }
.author-social-bar a.google_plus { background-color: #dd4b39 }
.author-social-bar a.google_plus:hover { background-color: #c23321 }
.author-social-bar a.twitter { background-color: #55acee }
.author-social-bar a.twitter:hover { background-color: #2795e9 }
.author-social-bar .linkedin { background-color: #007bb6 }
.author-social-bar a:hover { background-color: #005983 }

/* COMMENTS */
#comments { margin-top: 3em }
.comment-reply-title { margin-top: 2em }
.comments-header { margin-top: 1em }

.commentlist {
  list-style-type: none;
  margin-left: 0;
  padding-left: 0
}

.commentlist li .comment-body {
  background: #fff;
  font-size: 14px;
  overflow: hidden;
  padding: 25px 25px 15px;
  margin-bottom: 15px;
  margin-top: 1em;
  position: relative;
  border: 1px solid #e8e8e8;
  border-bottom: 1px solid #dadada;
  border-radius: 4px
}

.commentlist .children li { list-style:none }
.commentlist .children li.comment > div[id*=comment-] { background:#f7fcf7 }
#reviews #comments ol.commentlist li img,
.commentlist > li .photo {
  display: block;
  float: left;
  height: 64px;
  line-height: 0;
  margin-right: 15px;
  overflow: hidden;
  width: 64px
}

.commentlist > li .comment-author {
  font-size: 13px;
  font-weight: 700
}

.commentlist > li .comment-meta { font-size: 12px }
.commentlist > li .comment-meta a { color: #999 }
.commentlist > li .comment-meta a:hover { color: #644C80 }

.commentlist > li .reply {
  position: absolute;
  right: 0;
  bottom: 0
}

.commentlist > li .comment-reply-link {
  font-size: 10px;
  padding: 3px 7px;
  border-radius: 4px 0 4px;
  text-transform: uppercase
}

.commentlist > li .comment-meta .comment-edit-link {
  background-color: #f5f5f5;
  border: 1px solid #ddd;
  border-radius: 0 4px;
  color: #9da0a4;
  font-size: 10px;
  font-weight: 700;
  padding: 3px 7px;
  position: absolute;
  right: -1px;
  top: -1px
}

.commentlist > li .comment-meta a.comment-edit-link:hover {
  color: #222
}

.wpbs-textarea { margin-top: 15px }

.form-allowed-tags code {
  white-space: inherit;
  word-wrap: break-word
}


/* RELATED POSTS */
.related-posts {
  margin-top: 30px
}

.related-posts ul {
  list-style: none;
  padding-left: 5px
}

.related-posts li:before {
  content: "\f105";
  font-family: FontAwesome;
  margin-right: 5px
}

.related-posts ul li a:hover {
  position: relative;
  top: 1px
}


/* RECENT AND POPULAR POSTS */
#blog-after {
  border-radius: 3px;
  box-shadow: 0 1px 0 #ccc;
  margin-bottom: 20px;
  padding: 10px;
  background: #fff;
  position: relative
}

#blog-after .recent-title:before {
  border-bottom: 1px solid #b2afe8;
  bottom: -1px;
  content: "";
  height: 0;
  left: 0;
  position: absolute;
  width: 25px
}

#blog-after .recent-title {
  margin-bottom: 10px;
  border-bottom: 1px solid rgba(119, 119, 119, .2);
  padding: 10px 0;
  position: relative
}

#blog-after .recent-posts-wrapper .recents {
  border-bottom: 1px solid rgba(119, 119, 119, .1);
  padding: 5px 0
}

#blog-after .recent-posts-wrapper .recents:last-child {
  border: 0
}

/* COMMON RECENTS */
.recents .recents-body {
  display: table-cell;
  vertical-align: top
}

.recents .pull-left { 
  margin-right: 5px;
  padding: 5px
}

.recents img {
  opacity: 1;
  transition: opacity 0.5s ease 0s
}

.recents img:hover { 
  opacity: 0.6 
}

.recents-body small {
  display: block
}

/* FEEDBACK */
.feedback-wrap {
  border-color: rgba(0, 0, 0, .07);
  border-style: solid;
  border-width: 1px 0;
  margin: 20px 0;
  background-color: #FFF;
  padding: 15px
}

.article-vote-question {
  float: left;
  padding: 10px
}

.article-vote-controls {
  display: inline-block;
  padding: 10px
}

.article-vote-controls a {
  box-shadow: 0 -2px rgba(0, 0, 0, .03) inset;
  font-weight: 700;
  font-size: 12px;
  font-family: Helvetica, Arial, sans-serif;
  padding: 4px 5px;
  margin-right: 4px
}

.feedback-wrap a.negative, .feedback-wrap a.positive {
  color: #777;
  border: 1px solid #ddd
}

.feedback-wrap a.positive:hover {
  color: #6a9c1f
}

.feedback-wrap a.negative:hover {
  color: #ac2d22
}

/* SIDEBAR */
#sidebar { border-radius: 3px }

.sidebar-padder ul {
  list-style: none;
  padding: 5px
}

.widget-area { padding: 20px }

.widget { margin-bottom: 20px }

#sidebar .widget_archive li:before,#sidebar .widget_categories li:before {
  content: '\f105';
  font-family: FontAwesome;
  color: #888;
  margin-right: 5px
}

#sidebar .widget_archive li a:hover,
#sidebar .widget_categories li a:hover {
  position: relative;
  top: 1px
}

.widget-title:before {
  border-bottom: 1px solid #b2afe8;
  bottom: -1px;
  content: "";
  position: absolute;
  width: 40px
}

.widget-title {
  border-bottom: 1px solid rgba(119,119,119,.1);
  padding: 10px 0;
  position: relative
}

.tagcloud { padding: 10px }

.cat-count-span {
  float: right;
  color: #777
}

.facebook-box, .google-box {
  text-align: center
}

.flickr-widget {
  margin-right: -10px
}

.flickr-widget .flickr_badge_image {
  display: block;
  width: 22%;
  float: left;
  margin-right: 2%;
  margin-bottom: 7px;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box
}

.flickr-widget .flickr_badge_image img {
  display: block;
  width: 100%
}

.flickr-widget .flickr_badge_image:hover {
  opacity: .8
}

.widget .twitter-container {
  margin-bottom: 10px
}

.rookie-twitter .tweet {
  font-size: 13px;
  opacity: .7;
  line-height: 20px
}

.rookie-twitter .tweet:hover {
  transition: all .2s ease-in-out 0;
  opacity: 1;
}

.rookie-twitter .tweet p:before {
  content: "\f099";
  font-family: FontAwesome;
  margin-right: 5px;
  color: #00acee;
}

.rookie-comments .recents-heading {
  font-size: 13px
}


/* ADVERTISEMENT */
.ads-container {
  margin-top: 2em;
  text-align: center
}
.ads-lg .col-xs-12,
.ads-sm .col-xs-6 {
  padding: 0 5px;
  margin: 0
}

/* FOOTER */
img.footer-logo {
  float: left;
  margin: 0 10px
}

.footer-wrapper {
  border-top: 3px solid #b2afe8;
  color: #aaa;
  padding: 20px;
  font-size: 13px
}

.footer-widgets { margin: 15px 0 }

.footer-widget-title:before {
  border-bottom: 1px solid #b2afe8;
  bottom: -1px;
  content: "";
  position: absolute;
  width: 40px
}

.footer-widget-title {
  font-size: 18px;
  font-family: inherit;
  font-weight: 300;
  border-bottom: 1px solid rgba(255,255,255,.2);
  padding: 10px 0;
  margin: 0 0 20px;
  position: relative;
  text-transform: uppercase
}

.footer-content .footer-widgets ul {
  list-style: none;
  padding-left: 5px
}

.footer-content .footer-widgets li:before {
  content: "\f105";
  font-family: FontAwesome;
  padding-right: 5px
}

#footer-socials {
  background: #222;
  margin: 0;
  padding: 0
}

.social-bar {
  padding: 10px;
  margin: 0 5px;
  text-align: left
}

.social-bar-text {
  color: #aaa;
  margin-right: 5px;
  text-transform: uppercase;
  font-size: 12px
}

.social-bar a {
  color: #aaa;
  border: 1px solid rgba(255,255,255,.07);
  border-radius: 50%;
  line-height: 26px;
  width: 28px;
  display: inline-block;
  font-size: 12px;
  text-align: center;
  margin-right: 3px;
  transition: all .9s ease 0s;
  -webkit-transition: all .9s ease 0s
}

.social-bar a:hover { color: #fff }
.social-bar .twitter:hover { background: #00acee }
.social-bar .facebook:hover { background: #3b559f }
.social-bar .google_plus:hover { background: #dd4c39 }
.social-bar .pinterest:hover { background: #cc2127 }
.social-bar .dribbble:hover { background: #00acee }
.social-bar .linkedin:hover { background: #007bb6 }
.social-bar .flickr:hover { background: #ff0084 }
.social-bar .vimeo:hover { background: #0CF }
.social-bar .fyoutube:hover { color: #fff }
.social-bar .rss:hover { background: #ffac3d }

.footer-bottom-wrapper {
  background: #111;
  font-size: 13px;
  padding: 10px 0;
  color: #777;
}

.footer-nav ul {
  padding-left: 0
}

.footer-nav { 
  text-align: right
}

.footer-nav li {
  display: inline-block;
  border-left: 1px solid #777;
  line-height: 10px;
  margin-left: 4px
}

.footer-nav li:first-child { border-left: none }

.footer-nav li a {
  padding-left: 8px;
  transition: all .4s ease 0s;
  -webkit-transition: all .2s ease 0s;
  color: #777
}

.footer-nav li a:hover, 
.footer-nav li a:active, 
.footer-nav li a:focus {
  color: #908dbd
}

@media (max-width: 767px) {
  .copyright-text, .footer-nav {
    text-align: center !important;
    padding: 5px 0
  }
}

/* TO TOP */
.to-top {
  display: none;
  border-radius: 10%;
  text-align: center;
  padding-top: 12px;
  position: fixed;
  bottom: 4rem;
  right: 2rem;
  width: 4.2rem;
  height: 4.2rem;
  color: #fff;
  background-color: rgba(0,0,0,.1);
  cursor: pointer
}

.to-top:hover {
  color: #fff!important;
  background-color: #111;
  text-decoration: none
}

/* ERROR 404 */
.error-404 {
  background: #fff;
  padding: 20px
}

.error-404-box {
  margin: 0 0 50px;
  padding: 0;
  text-align: center
}

.error-message {
  font-size: 40px;
  text-shadow: 1px 1px 0 rgba(0,0,0,.12);
  color: #999;
  margin: 20px 0;
  padding: 20px
}

.error-message:before {
  content: "\f05a";
  font-family: FontAwesome;
  margin-right: 15px;
  color: #999
}

@media (max-width: 767px) {
  .error-message {
    font-size: 30px
  }
}

/* Shortcodes */

/* SHARRRE */
.post-social-wrap {
  border-top: 1px solid rgba(0,0,0,.07);
  padding: 15px 10px 0 0;
  margin: 2em 0 0;
  width: 100%;
  float: left
}

.sharrre-social-question {
  float:left;
  width: auto;
  margin: 0 15px 0 0
}

.sharrre {
  display: inline-block;
  font-family: Helvetica, Arial, sans-serif;
  font-weight: 400;
  margin: 2px;
  overflow: hidden;
  position: relative;
  -webkit-transition: all .3s ease-in-out;
  -moz-transition: all .3s ease-in-out;
  -o-transition: all .3s ease-in-out;
  transition: all .3s ease-in-out
}

.share-before {
  margin-bottom: 25px
}

.share-after {
  display: block;
  margin-top: 2em
}

.sharrre .count, .sharrre .share {
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  border: 0;
  padding: 0;
  text-decoration: none !important;
  -webkit-transition: all .3s ease-in-out;
  -moz-transition: all .3s ease-in-out;
  -o-transition: all .3s ease-in-out;
  transition: all .3s ease-in-out
}

.sharrre .share {
  color: #fff;
  float: left;
  text-decoration: none
}

.sharrre:hover .share {
  border: 0;
  color: #fff;
  text-decoration: none
}

.sharrre .count {
  background-color: #fff;
  font-weight: 700;
  position: relative;
  text-align: center
}

.share-small .count, .share-small .share {
  font-size: 12px;
  height: 20px;
  line-height: 20px
}

.share-small .share {
  border-top-left-radius: 2px;
  border-bottom-left-radius: 2px;
  padding: 0 0 0 24px;
  width: 20px
}

.share-small .sharrre:hover .share {
  width: 60px
}

.share-small .facebook:hover .share {
  width: 50px
}

.share-small .pinterest:hover .share {
  width: 45px
}

.share-small .googlePlus:hover .share {
  width: 40px
}

@media (max-width:480px) {
  .share-small .sharrre:hover .share,
  .share-small .facebook:hover .share,
  .share-small .pinterest:hover .share,
  .share-small .googlePlus:hover .share {
    width: 0;
  }
}

.share-small .count {
  border-top-right-radius: 2px;
  border-bottom-right-radius: 2px;
  float: right;
  width: 42px
}

.share-small .no-count .share {
  border-top-right-radius: 2px;
  border-bottom-right-radius: 2px;
  width: 65px
}

.share-small .share:before {
  line-height: 1;
  display: block;
  font-family: FontAwesome;
  font-size: 13px;
  height: 20px;
  top: 4px;
  left: 6px;
  text-indent: 0;
  -webkit-font-smoothing: antialiased;
  position: absolute;
  width: 20px
}

.twitter .share:before {
  content: '\f099'
}
.facebook .share:before {
  content: '\f09a'
}
.googlePlus .share:before {
  content: '\f0d5'
}
.youtube .share:before {
  content: '\f167'
}
.digg .share:before {
  content: '\f1a6'
}
.delicious .share:before {
  content: '\f1a5'
}
.pinterest .share:before {
  content: '\f0d2'
}
.linkedin .share:before {
  content: '\f0e1'
}
.stumbleupon .share:before {
  content: '\f1a4'
}
.share-small .pinterest .share:before {
  font-size: 12px
}

.share-small .linkedin .share:before {
  font-size: 16px;
  top: 1px
}

.share-small .stumbleupon .share:before {
  font-size: 16px;
  top: 3px
}

.share-filled .twitter .share {
  background: #09b0ed
}

.share-filled .twitter .count, .share-filled .twitter .count:hover {
  color: #09b0ed;
  border: 1px solid #09b0ed
}

.share-filled .facebook .share {
  background: #3d5a98
}

.share-filled .facebook .count, .share-filled .facebook .count:hover {
  color: #3d5a98;
  border: 1px solid #3d5a98
}

.share-filled .googlePlus .share {
  background: #dd4c39
}

.share-filled .googlePlus .count, .share-filled .googlePlus .count:hover {
  color: #dd4c39;
  border: 1px solid #dd4c39
}

.share-filled .linkedin .share {
  background: #035a87
}

.share-filled .linkedin .count, .share-filled .linkedin .count:hover {
  color: #035a87;
  border: 1px solid #035a87
}

.share-filled .youtube .share {
  background: #cc181e
}

.share-filled .youtube .count, .share-filled .youtube .count:hover {
  color: #cc181e;
  border: 1px solid #cc181e
}

.share-filled .pinterest .share {
  background: #cb2127
}

.share-filled .pinterest .count, .share-filled .pinterest .count:hover {
  color: #cb2127;
  border: 1px solid #cb2127
}

.share-filled .stumbleupon .share {
  background: #eb4923
}

.share-filled .stumbleupon .count, .share-filled .stumbleupon .count:hover {
  color: #eb4923;
  border: 1px solid #eb4923
}

.share-filled .twitter:hover .count {
  background: #09b0ed !important
}

.share-filled .facebook:hover .count {
  background: #3d5a98 !important
}

.share-filled .googlePlus:hover .count {
  background: #dd4c39 !important
}

.share-filled .linkedin:hover .count {
  background: #035a87 !important
}

.share-filled .youtube:hover .count {
  background: #cc181e !important
}

.share-filled .pinterest:hover .count {
  background: #cb2127 !important
}

.share-filled .stumbleupon:hover .count {
  background: #eb4923 !important
}

.share-filled .sharrre:hover .count {
  color: #fff
}

.share-outlined .twitter .count, .share-outlined .twitter .count:hover, .share-outlined .twitter .share {
  border: 1px solid #09b0ed;
  color: #09b0ed
}

.share-outlined .facebook .count, .share-outlined .facebook .count:hover, .share-outlined .facebook .share {
  border: 1px solid #3d5a98;
  color: #3d5a98
}

.share-outlined .googlePlus .count, .share-outlined .googlePlus .count:hover, .share-outlined .googlePlus .share {
  border: 1px solid #dd4c39;
  color: #dd4c39
}

.share-outlined .linkedin .count, .share-outlined .linkedin .count:hover, .share-outlined .linkedin .share {
  border: 1px solid #035a87;
  color: #035a87
}

.share-outlined .youtube .count, .share-outlined .youtube .count:hover, .share-outlined .youtube .share {
  border: 1px solid #cc181e;
  color: #cc181e
}

.share-outlined .pinterest .count, .share-outlined .pinterest .count:hover, .share-outlined .pinterest .share {
  border: 1px solid #cb2127;
  color: #cb2127
}

.share-outlined .stumbleupon .count, .share-outlined .stumbleupon .count:hover, .share-outlined .stumbleupon .share {
  border: 1px solid #eb4923;
  color: #eb4923
}

.share-outlined.share-medium .share, .share-outlined.share-small .share {
  border-right: none !important
}

.share-outlined.share-tall .share {
  border-top: none !important
}

.share-outlined .twitter:hover .count, .share-outlined .twitter:hover .share {
  background: #09b0ed
}

.share-outlined .facebook:hover .count, .share-outlined .facebook:hover .share {
  background: #3d5a98
}

.share-outlined .googlePlus:hover .count, .share-outlined .googlePlus:hover .share {
  background: #dd4c39
}

.share-outlined .linkedin:hover .count, .share-outlined .linkedin:hover .share {
  background: #035a87
}

.share-outlined .youtube:hover .count, .share-outlined .youtube:hover .share {
  background: #cc181e
}

.share-outlined .pinterest:hover .count, .share-outlined .pinterest:hover .share {
  background: #cb2127
}

.share-outlined .stumbleupon:hover .count, .share-outlined .stumbleupon:hover .share {
  background: #eb4923
}

.share-outlined .sharrre:hover .count, .share-outlined .sharrre:hover .share {
  color: #fff
}

/* Dividers */
.divider-default:after {
  background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAgYAAAAbBAMAAAD1xlr/AAAAJFBMVEUAAADOzs7Nzc3Nzc3Nzc3Nzc3Nzc3MzMzNzc3Nzc3Nzc3Nzc1fDZ7lAAAADHRSTlMAgPEIGcyPtrNuQXwpUajNAAAAhElEQVRYw+3WLQ7CUBBF4SNwGLoFfjZAAgkoQlgBGIJFoDHdAQJdU9/Ud4l9aeqqm7xkzueunWRmLpIkSZk53XcVsS2ezfl3IbRDB8sHQR3Xb6Am+Y8xnM+tBF4k7RC/5KiY05YrsCHZAykWc1qRoekMCGeyCyXheBP9jXYku7IkSZnrAYdmI2BvwhPxAAAAAElFTkSuQmCC");
  background-repeat: no-repeat;
  background-position: center top;
  content: "";
  height: 32px;
  position: relative;
  width: 100%;
  margin-bottom: 2.5em;
  margin-top: 2.5em;
  display: block
}

.divider-shadow:after {
  background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAhIAAAAUBAMAAAAq1cm4AAAAMFBMVEUAAAATJS8TJS8TJS8TJS8TJS8TJS8TJS8TJS8TJS8TJS8TJS8TJS8TJS8TJS8TJS/SQYXrAAAAEHRSTlMAAgcECw8UGB0nLzgiQUtVMQwLlAAAAkxJREFUWMPt1t1t4kAUBWDoYEd0MDsNwHQwGjrA20HsDmA7CA/bgC0asLeDWH5PJDqwoIOQDtidv+s7eBgrEXkIij+BEEJYnHOvR0xGnikhhPMF1YS0Eie1smxj/N5af/ZWDoqq87dGzcFzPHXezv8GnU/ogNq681SB3Nntteet8bgxUisxVtIQjGo/OedEm3iIqYJTgwkhnWUCUidbb7ASv5PdS26VSteJURtte2jV03p9PSoQ9ey8nZyjBuHbQwPhn9TVKqMsiyK39i97bYsNeBU8JFCCJYSgBteI9mMSVKFRh1HpWSUoRVnYirPLnTKvkL8tupTW1aK2xXRzsPFbHb+tG5u+rtX3bPpKXQ7iW1tnY62zNTZgLSVgUlCHhz2A6ZQoM24sKIAVQSuvlIdfaWeDtmCvmIHhtuQldFLhtqjMbdM0+tVSH1aOnnxxmf65Fz9LNYgPK7DCBqiPO8SaXEEsjmiPpILKS8vE4y2Lty7A7krXS6GfRVFdUZQFjj6YvZGixIu/lIj1KwBz0hk4N9GM+xY0JGFZ0GUvCPcluI/yTmTyj97ow+w+xvzscCoicmkyhERwgMWEhBAs2kx8YbAczB7c9ZHwVIUXYfaB+HA2fAyJmvE+GpSjWqE02gweMWuV2CVXb1KA0Zd+dKkLp5e4b04iPu0PxzDeFxbDZLAxUdLH6ODcMfsN47+tmaF+ZvPe2tA+psmrBFOP+A0/n81jqc3P+hpIVLAzw/i7bvf7MXTSDCOhLzTwz0Di7n3st/nW4Uej0ehu/QegDnys37+zlAAAAABJRU5ErkJggg==");
  background-repeat: no-repeat;
  background-position: center top;
  content: "";
  height: 32px;
  position: relative;
  width: 100%;
  margin-top: 2.5em;
  margin-bottom: 2.5em;
  display: block
}

.divider-line:after {
  background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAssAAAAaCAYAAABB9RF4AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyFpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNS1jMDIxIDc5LjE1NDkxMSwgMjAxMy8xMC8yOS0xMTo0NzoxNiAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIChXaW5kb3dzKSIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDo1NzE0RTQwNkE5QjcxMUU0QjY4MUM1RDA5OTFFRDdCMSIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDo1NzE0RTQwN0E5QjcxMUU0QjY4MUM1RDA5OTFFRDdCMSI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOjU3MTRFNDA0QTlCNzExRTRCNjgxQzVEMDk5MUVEN0IxIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjU3MTRFNDA1QTlCNzExRTRCNjgxQzVEMDk5MUVEN0IxIi8+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+qOxIQwAAA99JREFUeNrsm1mO5CAQRInquVuduQ9XMPNZgwBDksbbe1KpDaQXIBLClloppeDJ7+/va+L0l6G9p+61cdyqU6H+tVGnQtsru+Z33Ui5dvyT1amj/ruuFPddVyvn8ao8Y6tO2XVfWXmrvRVb+uXnhkJbaJRD5bqh0R4q5VCJCR1xoVAfOo6V5YcKOdQT09PmeQ7AN2nnc1NH3VbMyHHP39G2VClv1cVKe+2Xx8eN9lpMXo6G9tiI+VSuETvqPpV7fSr3/xTq8vNK9ZbjvBwqMaESV2oPhbjW35SVSzGtY0u5t62nfcqcDvN+v2ceKC46Z/Ya0TjpsbEox84kSJXr1NpTpT4WFrFYWMRjYRFNhYUxZItLqCyUPYvoaHkrNnRuEGHjvNImNbKJlco9m2foaEsDRqBnwx8xFxbTkgKA3eg+0SiHwbbUaaZbdb2/mTW7ZcBH2kOHAS8Z+tG6WKiPnXttaZ+t7eE9xy2PUoopPVucWJdnzOtWfHR6DhdfK+8vy4Yv0V6XEvHEE0+8Uzzs89JDPPHEE38K/png7tg/D1/kZZx0GUQig6hkFKEMopVB5DIkhRYlkXV+ZVwEVs2vFulh5fzKqAcM8L2N9cx5iedjzOnT4c93G+5klkfNkcUAz5w3apYsBmjmvFHzZDFE1oTTwkRNBj14aUJGHc3o4ShNyKijlS9ccC7TfNRGn+grz8vcPNtc3+3LssUwe5okDwPtYaRnDZCHOfYyNnJIdDkkuhZowjqnVmN7pCZmFlK+KD/XLHttwol+MJb049T9wCyf2DDPmqQtochRbHIWqxwFr5MlzYxp9tLFzIuRhyGefdnxmE/PL8IY5mca5Stc6yn95Fr08xFG+a5m2csctSZeO4lIOwlSOwpcOyWLdkpi7bQgyFljV9aFnDV21pcwOOemynUZC8b4XmOMWb6Qae4RhRaKTYtErIUJooUJfRVNjIyFdtTbnTUB9zXOR96LPnEv+oRZvuxCrINFo4MFqhMkgg5OuiP+YXAvHax42dpjnnSg/gBTzf0ZA8YAg4xZHphkXURkuoDIr2CAFK6x2OqkOjyT4V6dO3DtjTPxjIwlz4g5xiz7i0A3F6tunlC6cNIfbaav8uLFQo/xpn/0jf7RP8zyRcQjkuMUhv0Jya/Awn0mnbFGAmPGmDFumGU4iSjFuD0W/tENnQG6BOYeMMtAch1qQpl7AADWH4D/jUJK5AAAAAAAAGYZAAAAAACzDAAAAACAWQYAAAAAwCwDAAAAAGCWAQAAAAAwywAAAAAAmGUAAAAAAMwyAAAAAABmGQAAAAAAswwAAAAA8Fz+CjAATy7aT9H3yowAAAAASUVORK5CYII=");
  background-repeat: no-repeat;
  background-position: center top;
  content: "";
  height: 32px;
  position: relative;
  width: 100%;
  margin-top: 2.5em;
  margin-bottom: 2.5em;
  display: block
}

/* ACCORDION */
#accordion {
  margin-top: 25px
}

.panel-heading.active .accordion-toggle:after {
  color: #fff
}

.panel-heading.active {
  background: #644c80
}

.panel-heading.active a {
  color: #fff
}

.panel-heading.active a:hover {
  color: #eee
}

.panel-heading.active .panel-title {
  color: #fff
}

.panel-heading a:focus {
  outline: 0
}

.panel-heading .accordion-toggle:after {
  font-family: FontAwesome;
  content: "\f068";
  float: right;
  color: #666
}

.panel-heading .accordion-toggle.collapsed:after {
  content: "\f067"
}

/* PORTFOLIO */
.portfolio {
  padding: 1em 2.5em 2em
}

.portfolio-content {
  margin-top: 50px
}

.project-thumb {
  margin: 2em 0;
  padding: 0
}

.project-sidebar {
  margin: 3em 0;
  padding: 0 0 0 2em
}

.project-sidebar h3.page-title {
  margin-top: 0;
  padding-top: 0
}

.project-tags {
  padding-right: 5px
}

.project-info {
  padding: 10px 0
}

.project-button {
  margin-top: 20px;
}

.project-socials .social-bar {
  padding: 0;
  margin: 0
}

.project-socials .social-bar a {
  border-radius: 50px;
  font-size: 14px
}

.project-socials .social-bar a.facebook {
  color: #fff;
  background-color: #3b5998
}

.project-socials .social-bar .facebook:hover {
  color: #fff;
  background-color: #2d4373
}

.project-socials .social-bar a.google_plus {
  color: #fff;
  background-color: #dd4b39
}

.project-socials .social-bar a.google_plus:hover {
  color: #fff;
  background-color: #c23321
}

.project-socials .social-bar a.pinterest {
  color: #fff;
  background-color: #cb2027
}

.project-socials .social-bar a.pinterest:hover {
  color: #fff;
  background-color: #9f191f
}

.project-socials .social-bar a.twitter {
  color: #fff;
  background-color: #55acee
}

.project-socials .social-bar a.twitter:hover {
  color: #fff;
  background-color: #2795e9
}

.project-socials .social-bar .linkedin {
  color: #fff;
  background-color: #007bb6
}

.project-socials .social-bar a:hover {
  color: #fff;
  background-color: #005983
}

ul.project-details li {
  font-size: 13px;
  color: #888;
  line-height: inherit;
  padding: 5px 0
}

ul.project-details li strong {
  font-size: 11px;
  text-transform: uppercase;
  margin: 0 5px
}

ul.project-details li span {
  border-bottom:1px dotted #ccc;
  padding-bottom: 6px
}

.project-socials .post-social-wrap .share-filled.share-small .post-share {
  display: block !important;
  float: left
}

.project-views {
  color: #777;
  padding: 5px 0
}

.portfolio-filter {
  text-align: center
}

.portfolio-filter > li {
  display: inline-block;
  position: relative;
  margin-bottom: 2em;
  padding-left: 0.2em
}

.portfolio-items.col-2 > li {
  width: 50%;
  float: left
}

.portfolio-items.col-3 > li {
  width: 33.3333%;
  float: left
}

.portfolio-items.col-4 > li {
  width: 25%;
  float: left
}

@media(max-width:640px) {
  .portfolio-items.col-2 > li, 
  .portfolio-items.col-3 > li, 
  .portfolio-items.col-4 > li {
    width: 100%;
    float: none
  }
}

.portfolio-item .item-main {
  margin: 5px;
  text-align: center;
  background: #eee;
  padding: 4px;
  border: 1px solid #ccc
}

.portfolio-item img {
  width: 100%;
  background-size: cover;
  height: auto
}

.portfolio-item .portfolio-image {
  position: relative
}

.portfolio-item h5 {
  margin: 0;
  padding: 10px 0;
  white-space: nowrap;
  text-overflow: ellipsis;
  overflow: hidden;
  text-transform: uppercase;
  background: #fff;
  color: #333 !important;
  font-size: 13px;
  -webkit-box-shadow: inset 0 0 12px 1px rgba(0, 0, 0, .15);
  box-shadow: inset 0 0 12px 1px rgba(0, 0, 0, .15)
}

.portfolio-item .overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  opacity: 0;
  background-color: rgba(255, 255, 255, .7);
  text-align: center;
  vertical-align: middle;
  transition: all .4s ease 0s;
  transform: scale(0.8)
}

.portfolio-item:hover .overlay {
  opacity: 1;
  box-shadow: 0 0 5px rgba(0, 0, 0, .2);
  transform: scale(1)
}

.portfolio-item .overlay .preview-link,
.portfolio-item .overlay .preview {
  position: relative;
  top: 50%;
  display: inline-block;
  margin-left: auto;
  background: #644c80;
  color: #fff;
  border-radius: 50%;
  width: 35px;
  height: 35px;
  line-height: 35px
}

.portfolio-item .overlay .preview-link:hover,
.portfolio-item .overlay .preview:hover {
  background: #6d6c8e
}

/* ISOTOPE */
.isotope-item {
  z-index: 2
}

.isotope-hidden.isotope-item {
  z-index: 1
}

.isotope, .isotope .isotope-item {
  -webkit-transition-duration: .8s;
  -moz-transition-duration: .8s;
  -o-transition-duration: .8s;
  transition-duration: .8s
}

.isotope {
  -webkit-transition-property: height, width;
  -moz-transition-property: height, width;
  -o-transition-property: height, width;
  transition-property: height, width
}

.isotope .isotope-item {
  -webkit-transition-property: -webkit-transform, opacity;
  -moz-transition-property: -moz-transform, opacity;
  -o-transition-property: -moz-transform, opacity;
  transition-property: transform, opacity
}

.isotope .isotope-item.no-transition, .isotope.no-transition, .isotope.no-transition .isotope-item {
  -webkit-transition-duration: 0;
  -moz-transition-duration: 0;
  -o-transition-duration: 0;
  transition-duration: 0
}

.isotope.infinite-scrolling {
  -webkit-transition: none;
  -moz-transition: none;
  -o-transition: none;
  transition: none
}

/* RECENT WORK */
#recent-works {
  padding: 20px 0
}

.recent-work-inner {
  margin: 0;
  padding: 0 0 20px
}

.recent-work-inner h3 {
  margin: 0 0 10px
}

.btn-group i {
  color: #fff
}

/* Pricing table */
.pricing-tables {
  margin: 30px 0
}

.pricing-tables .plan {
  font-family: 'Open Sans';
  background: rgba(255, 255, 255, .5);
  padding: 40px 0;
  margin: 30px 0;
  text-align: center;
  list-style: none none;
  transition: all .25s ease 0s;
  transform: scale(1.04)
}

.pricing-tables .plan:hover {
  box-shadow: 0 0 10px 2px rgba(0, 0, 0, .15);
  transform: scale(1.07)
}

.pricing-tables .plan .plan-name {
  background: #644c80;
  border-bottom: 3px solid #3b3860;
  padding: 10px 0;
  border-top: 1px solid rgba(0, 0, 0, .15)
}

.pricing-tables .plan li ul {
  list-style: none none;
  padding: 0;
  margin: 0
}

.pricing-tables .plan li.plan-name h3 {
  text-transform: uppercase;
  margin: 0;
  font-size: 21px;
  padding: 5px 0;
  color: #fff
}

.pricing-tables .plan li.plan-price {
  background-color: #fff;
  color: #666;
  font-weight: 900;
  padding: 20px 0;
  letter-spacing: 0;
  line-height: 1;
  font-size: 40px;
  text-shadow: 1px 1px 0 rgba(0, 0, 0, .2);
  border-bottom: 2px solid #f1f1f1
}

.pricing-tables .plan li.plan-price>div sup {
  font-size: 11px;
  line-height: 10px
}

.pricing-tables .plan li.plan-price>div>small {
  display: block;
  font-size: 12px;
  margin-top: 5px
}

.pricing-tables .plan .plan-details li {
  background: #f1f1f1;
  font-size: 12px;
  line-height: 2;
  margin: 0;
  padding: 8px 0;
  border-top: 1px solid #fff
}

.pricing-tables .plan .plan-details li:nth-child(2n) {
  background: #e1e1e1
}

.plan-button-box {
  padding-top: 30px;
  margin: 0;
  border-top: 3px solid #585490
}

.plan.featured {
  transform: scale(1.04);
  box-shadow: 0 0 10px 2px rgba(0, 0, 0, .15)
}

.pricing-tables .plan.featured .plan-price div {
  color: #444
}

.pricing-tables .plan.featured .plan-name {
  background: #333;
  color: #fff
}

/* TEAM */
.team-member {
  margin: 30px 0;
  clear: both
}

.team-member-name {
  margin-bottom: 0;
  font-size: 20px;
  font-weight: 600
}

.team-member-job-title {
  margin: 0 0 10px;
  font-size: 13px;
  color: #777
}

.team-img-container {
  position: relative;
  overflow: hidden;
  border-radius: 3px;
  margin-bottom: 10px
}

.team-img-container img {
  width: 100%
}
.team-member .team-social {
  border: 5px solid rgba(0, 0, 0, .1);
  position: absolute;
  background: rgba(255, 255, 255, .8);
  opacity: 0;
  visibility: hidden;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  border-radius: 3px;
  transition: all .4s ease 0s;
  transform: scale(0.9)
}

.team-img-container:hover .team-social {
  visibility: visible;
  opacity: .9;
  transform: scale(1);
  font-size: 14px
}

.team-social-bar {
  display: inline-block;
  list-style: outside none none;
  margin: 0;
  padding: 0;
  top: 60%;
  position: absolute;
  text-align: center;
  left: 0;
  right: 0
}

ul.team-social-bar li {
  display: inline-block;
  margin: 0 2px
}

ul.team-social-bar li a {
  background: none repeat scroll 0 0 #404040;
  border-radius: 2px;
  color: #fff;
  display: inline-block;
  height: 25px;
  line-height: 27px;
  text-align: center;
  width: 25px;
  box-shadow: 0 -2.2px rgba(0, 0, 0, 0.12) inset, 2px 0 rgba(0, 0, 0, 0.1) inset;
  transition: all .5s ease 0s
}

ul.team-social-bar li a:hover {
  color: #fff
}
.team-social-bar a.facebook {
  background-color: #3b5998
}

.team-social-bar .facebook:hover {
  background-color: #2d4373
}

.team-social-bar a.google_plus {
  background-color: #dd4b39
}

.team-social-bar a.google_plus:hover {
  background-color: #c23321
}

.team-social-bar a.pinterest {
  background-color: #cb2027
}

.team-social-bar a.pinterest:hover {
  background-color: #9f191f
}

.team-social-bar a.twitter {
  background-color: #55acee
}

.team-social-bar a.twitter:hover {
  background-color: #2795e9
}

.team-social-bar .linkedin {
  background-color: #007bb6
}

.team-social-bar a:hover {
  background-color: #005983
}

/* PROGRESS BARS */
.progress-bar-wrapper {
  margin-top: 20px;
  position: relative
}

.progress-bar {
  position: relative;
  -webkit-transition: width 2s ease-in-out;
  -moz-transition: width 2s ease-in-out;
  -o-transition: width 2s ease-in-out;
  transition: width 2s ease-in-out
}

.progress-header {
  background: rgba(0, 0, 0, .1);
  font-size: 12px;
  height: 20px;
  line-height: 20px;
  right: 0;
  padding: 0 8px;
  position: absolute;
  z-index: 2
}

.well {
  -webkit-box-shadow: none;
  -moz-box-shadow: none;
  box-shadow: none;
  border: 0
}

/* DROPCAP */
.dropcap {
  overflow: hidden
}

.dropcap:first-letter {
  color: #666;
  display: block;
  float: left;
  font-size: 50px;
  line-height: 40px;
  padding: 4px 8px 0 0;
  text-transform: uppercase;
  font-weight: 700
}

/* SECTIONS STYLE */
.alizarin, .alizarin h1, .alizarin h2, .alizarin h3, .alizarin h4, .alizarin h5, .alizarin h6, .amethyst, .amethyst h1, .amethyst h2, .amethyst h3, .amethyst h4, .amethyst h5, .amethyst h6, .asbestos, .asbestos h1, .asbestos h2, .asbestos h3, .asbestos h4, .asbestos h5, .asbestos h6, .belize-hole, .belize-hole h1, .belize-hole h2, .belize-hole h3, .belize-hole h4, .belize-hole h5, .belize-hole h6, .bg-section, .bg-section h1, .bg-section h2, .bg-section h3, .bg-section h4, .bg-section h5, .bg-section h6, .carrot, .carrot h1, .carrot h2, .carrot h3, .carrot h4, .carrot h5, .carrot h6, .concrete, .concrete h1, .concrete h2, .concrete h3, .concrete h4, .concrete h5, .concrete h6, .emerald, .emerald h1, .emerald h2, .emerald h3, .emerald h4, .emerald h5, .emerald h6, .green-sea, .green-sea h1, .green-sea h2, .green-sea h3, .green-sea h4, .green-sea h5, .green-sea h6, .midnight-blue, .midnight-blue h1, .midnight-blue h2, .midnight-blue h3, .midnight-blue h4, .midnight-blue h5, .midnight-blue h6, .nephritis, .nephritis h1, .nephritis h2, .nephritis h3, .nephritis h4, .nephritis h5, .nephritis h6, .orange, .orange h1, .orange h2, .orange h3, .orange h4, .orange h5, .orange h6, .peter-river, .peter-river h1, .peter-river h2, .peter-river h3, .peter-river h4, .peter-river h5, .peter-river h6, .pomegranate, .pomegranate h1, .pomegranate h2, .pomegranate h3, .pomegranate h4, .pomegranate h5, .pomegranate h6, .pumkin, .pumkin h1, .pumkin h2, .pumkin h3, .pumkin h4, .pumkin h5, .pumkin h6, .rookie, .rookie h1, .rookie h2, .rookie h3, .rookie h4, .rookie h5, .rookie h6, .silver, .silver h1, .silver h2, .silver h3, .silver h4, .silver h5, .silver h6, .sun-flower, .sun-flower h1, .sun-flower h2, .sun-flower h3, .sun-flower h4, .sun-flower h5, .sun-flower h6, .turquoise, .turquoise h1, .turquoise h2, .turquoise h3, .turquoise h4, .turquoise h5, .turquoise h6, .wet-asphalt, .wet-asphalt h1, .wet-asphalt h2, .wet-asphalt h3, .wet-asphalt h4, .wet-asphalt h5, .wet-asphalt h6, .wisteria, .wisteria h1, .wisteria h2, .wisteria h3, .wisteria h4, .wisteria h5, .wisteria h6 {
  color: #fff
}

.bg-section {
  min-height: 250px
}

.bg-section p {
  padding: 20px 0
}

.white {
  color: #333;
  background-color: #fff
}

.turquoise {
  background-color: #1abc9c
}

.green-sea {
  background-color: #16a085
}

.sun-flower {
  background-color: #f1c40f
}

.orange {
  background-color: #f39c12
}

.emerald {
  background-color: #2ecc71
}

.nephritis {
  background-color: #27ae60
}

.carrot {
  background-color: #e67e22
}

.pumkin {
  background-color: #d35400
}

.peter-river {
  background-color: #3498db
}

.belize-hole {
  background-color: #2980b9
}

.alizarin {
  background-color: #e74c3c
}

.pomegranate {
  background-color: #c0392b
}

.amethyst {
  background-color: #9b59b6
}

.wisteria {
  background-color: #7a4792
}
.clouds {
  background-color: #ecf0f1;
  color: #777
}
.rookie {
  background: #644c80
}

.rookie a {
  color: #fff
}

.rookie a:hover {
  color: #b2afe8
}

.clouds h1, .clouds h2, .clouds h3, .clouds h4, .clouds h5, .clouds h6 {
  color: #888
}

.silver {
  background-color: #bdc3c7
}

.wet-asphalt {
  background-color: #34495e
}

.wet-asphalt a {
  color: #bdc3c7
}

.wet-asphalt a:hover {
  color: #d9534f
}

.alizarin a, .orange a {
  color: #fff
}

.alizarin a:hover, .orange a:hover {
  color: #eee
}

.midnight-blue {
  background-color: #2c3e50
}

.concrete {
  background-color: #95a5a6
}

.asbestos {
  background-color: #7f8c8d
}

/* GETTING STARTED */
.get-started {
  background: #f3f3f3;
  border-bottom: 1px solid rgba(255, 255, 255, .9);
  border-radius: 2px;
  padding: 20px 20px 10px
}

.get-started p {
  padding-bottom: 20px
}

.request {
  bottom: -17px;
  position: relative;
  z-index: 9999;
  width: auto;
  height: auto
}

.request a {
  background: #b2afe8;
  color: #fff;
  padding: 5px 16px;
  text-shadow: 1px 1px 0 rgba(0, 0, 0, .4);
  font-size: 16px;
  font-weight: 500
}

.request a:hover {
  color: #eee
}

.get-started-2 {
  background: #f1f1f1;
  border-bottom: 1px solid rgba(255, 255, 255, .9);
  border-radius: 2px;
  padding: 20px;
  border-left: 6px solid #644c80;
  width: 100%
}

.circlebtn {
  width: 110px;
  height: 110px;
  text-align: center;
  color: #fff;
  font-size: 18px;
  margin-top: 10px;
  display: table;
  line-height: 1.4;
  background-color: #644c80;
  position: relative;
  font-weight: 700;
  -webkit-border-radius: 50%;
  -moz-border-radius: 50%;
  border-radius: 50%;
  -webkit-box-shadow: 3px 3px 1px rgba(0, 0, 0, .5);
  -moz-box-shadow: 3px 3px 1px rgba(0, 0, 0, .5);
  box-shadow: 3px 3px 1px rgba(0, 0, 0, .5)
}

.circlebtn span {
  display: table-cell;
  vertical-align: middle;
  position: relative;
  z-index: 1
}

.circlebtn:hover {
  -webkit-transform: scale(1.1);
  -moz-transform: scale(1.1);
  -o-transform: scale(1.1);
  -ms-transform: scale(1.1);
  transform: scale(1.1);
  -webkit-box-shadow: 5px 5px 1px rgba(0, 0, 0, .2);
  -moz-box-shadow: 5px 5px 1px rgba(0, 0, 0, .2);
  box-shadow: 5px 5px 1px rgba(0, 0, 0, .2)
}

.circlebtn {
  float: right
}

.circlebtn.with-symbol>span.symbol {
  opacity: 0;
  position: absolute;
  display: block;
  left: 0;
  top: 0;
  bottom: 0;
  right: 0;
  text-align: center;
  line-height: 110px
}

.circlebtn.with-symbol:hover>.text {
  opacity: 0
}

.circlebtn.with-symbol:hover>.symbol {
  opacity: 1
}

/* ICON BOX */
.icons-center { margin: 0 auto }

.default-service-box {
  margin: 15px 0
}

.default-service-icon-content {
  font-size: 13px
}

.default-service-icon h4 {
  letter-spacing: 1px;
  margin: 0 0 15px;
  overflow: hidden;
  padding: 0 5px;
  position: relative;
  text-transform: uppercase
}

.circle-service-box {
  margin-top: 20px
}

.circle-service-box .circle-service-icon .content-container {
  margin: 15px 0
}

.circle-box-icon {
  margin-bottom: 25px;
  padding: 10px;
  overflow: hidden
}

.circle-box-icon i {
  background: #fff;
  border: 3px solid #fff;
  border-radius: 100%;
  box-shadow: 0 0 0 5px #f2f2f2 inset;
  color: #644c80;
  height: 110px;
  line-height: 110px;
  transition: all 500ms ease 0s;
  width: 110px
}

.circle-box-icon i:hover {
  background: #644c80;
  border: 3px solid #644c80;
  box-shadow: 0 0 0 5px #fff inset;
  color: #fff
}

.boxed-service-box {
  background: #f8f8f8;
  border-radius: 4px;
  margin: 15px 0 20px;
  padding: 30px;
  transition: all 500ms ease 0s
}

.boxed-service-box:hover {
  background: #644c80;
  color: #fff
}

.boxed-service-box i {
  padding: 10px 0
}

.boxed-service-box a span.read-more, .circle-service-box a span.read-more, .default-service-icon a span.read-more {
  font-size: 13px
}

.boxed-service-box a span.read-more:after, .circle-service-box a span.read-more:after, .default-service-icon a span.read-more:after {
  content: "\f105";
  font-family: FontAwesome;
  margin-left: 5px
}

.boxed-service-box:hover a span.read-more {
  color: #fff
}

/* LATEST NEWS */
.latest-blog-list {
  margin: 15px 0 25px;
  width: 100%
}

.latest-blog-list .blog-list-item-date {
  border-radius: 2px;
  overflow: hidden;
  background: #f9f9f9;
  color: #666;
  float: left;
  font-size: 20px;
  font-weight: 700;
  line-height: 20px;
  padding: 10px 0 0;
  text-align: center;
  width: 50px
}

.latest-blog-list .blog-list-item-date span {
  background: #666;
  color: #fff;
  display: block;
  font-size: 11px;
  font-weight: 700;
  line-height: 11px;
  margin: 10px 0 0;
  padding: 5px 0;
  text-transform: uppercase
}

.blog-list-item-description {
  margin-top: 0
}

.latest-blog-list .blog-list-item-description {
  margin-left: 70px
}

.latest-blog-list .blog-list-item-description span {
  color: #ccc
}

.latest-blog-list .blog-list-item-description .read-more-link {
  display: block
}

.latest-blog-list-thumb {
  float: right;
  margin: 5px;
  padding-left: 5px;
  width: 60px;
  height: 60px;
  display: block
}

.blog-list-item-excerpt {
  float: left
}

/* ALERT */
.alert i {
  float: left;
  margin-right: 32px;
  margin-left: 16px;
  display: block
}

.alert {
  font-weight: 500
}

.alert-default {
  background-color: #f1f1f1
}

/* ARROW LIST */ 
ul.list-arrow {
  padding-left: 20px
}

ul.list-arrow li:before {
  content: "\f00c";
  font-family: FontAwesome;
  margin-right: 5px;
  color: green
}