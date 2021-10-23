<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); ?>

<?php if ( astra_page_layout() == 'left-sidebar' ) : ?>

	<?php get_sidebar(); ?>

<?php endif ?>

	<div id="primary" <?php astra_primary_class(); ?>>

		<?php astra_primary_content_top(); ?>

		<?php astra_content_page_loop(); ?>

		<?php astra_primary_content_bottom(); ?>

	</div><!-- #primary -->

<?php if ( astra_page_layout() == 'right-sidebar' ) : ?>

	<?php get_sidebar(); ?>

<?php endif ?>

<?php get_footer(); ?>

<html lang="en-US" class="js-focus-visible" data-js-focus-visible=""><head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="https://gmpg.org/xfn/11">

<title>Locations – Mid-Century Canberra</title>
<meta name="robots" content="max-image-preview:large">
<link rel="dns-prefetch" href="//api.mapbox.com">
<link rel="dns-prefetch" href="//fonts.googleapis.com">
<link rel="dns-prefetch" href="//s.w.org">
<link rel="alternate" type="application/rss+xml" title="Mid-Century Canberra » Feed" href="http://clairem8.sg-host.com/feed/">
<link rel="alternate" type="application/rss+xml" title="Mid-Century Canberra » Comments Feed" href="http://clairem8.sg-host.com/comments/feed/">
		<script>
			window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/13.1.0\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/13.1.0\/svg\/","svgExt":".svg","source":{"concatemoji":"http:\/\/clairem8.sg-host.com\/wp-includes\/js\/wp-emoji-release.min.js?ver=5.8.1"}};
			!function(e,a,t){var n,r,o,i=a.createElement("canvas"),p=i.getContext&&i.getContext("2d");function s(e,t){var a=String.fromCharCode;p.clearRect(0,0,i.width,i.height),p.fillText(a.apply(this,e),0,0);e=i.toDataURL();return p.clearRect(0,0,i.width,i.height),p.fillText(a.apply(this,t),0,0),e===i.toDataURL()}function c(e){var t=a.createElement("script");t.src=e,t.defer=t.type="text/javascript",a.getElementsByTagName("head")[0].appendChild(t)}for(o=Array("flag","emoji"),t.supports={everything:!0,everythingExceptFlag:!0},r=0;r<o.length;r++)t.supports[o[r]]=function(e){if(!p||!p.fillText)return!1;switch(p.textBaseline="top",p.font="600 32px Arial",e){case"flag":return s([127987,65039,8205,9895,65039],[127987,65039,8203,9895,65039])?!1:!s([55356,56826,55356,56819],[55356,56826,8203,55356,56819])&&!s([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]);case"emoji":return!s([10084,65039,8205,55357,56613],[10084,65039,8203,55357,56613])}return!1}(o[r]),t.supports.everything=t.supports.everything&&t.supports[o[r]],"flag"!==o[r]&&(t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&t.supports[o[r]]);t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&!t.supports.flag,t.DOMReady=!1,t.readyCallback=function(){t.DOMReady=!0},t.supports.everything||(n=function(){t.readyCallback()},a.addEventListener?(a.addEventListener("DOMContentLoaded",n,!1),e.addEventListener("load",n,!1)):(e.attachEvent("onload",n),a.attachEvent("onreadystatechange",function(){"complete"===a.readyState&&t.readyCallback()})),(n=t.source||{}).concatemoji?c(n.concatemoji):n.wpemoji&&n.twemoji&&(c(n.twemoji),c(n.wpemoji)))}(window,document,window._wpemojiSettings);
		</script><script src="http://clairem8.sg-host.com/wp-includes/js/wp-emoji-release.min.js?ver=5.8.1" type="text/javascript" defer=""></script>
		<style>
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
	<link rel="stylesheet" id="dashicons-css" href="http://clairem8.sg-host.com/wp-includes/css/dashicons.min.css?ver=5.8.1" media="all">
<link rel="stylesheet" id="admin-bar-css" href="http://clairem8.sg-host.com/wp-includes/css/admin-bar.min.css?ver=5.8.1" media="all">
<link rel="stylesheet" id="astra-theme-css-css" href="http://clairem8.sg-host.com/wp-content/themes/astra/assets/css/minified/main.min.css?ver=3.7.3" media="all">
<style id="astra-theme-css-inline-css">
html{font-size:100%;}a,.page-title{color:#bc6a3c;}a:hover,a:focus{color:var(--ast-global-color-1);}body,button,input,select,textarea,.ast-button,.ast-custom-button{font-family:Helvetica,Verdana,Arial,sans-serif;font-weight:400;font-size:16px;font-size:1rem;}blockquote{color:var(--ast-global-color-3);}h1,.entry-content h1,h2,.entry-content h2,h3,.entry-content h3,h4,.entry-content h4,h5,.entry-content h5,h6,.entry-content h6,.site-title,.site-title a{font-family:'Lora',serif;font-weight:400;}.ast-site-identity .site-title a{color:#ffffff;}.site-title{font-size:35px;font-size:2.1875rem;display:block;}header .custom-logo-link img{max-width:68px;}.astra-logo-svg{width:68px;}.ast-archive-description .ast-archive-title{font-size:40px;font-size:2.5rem;}.site-header .site-description{font-size:15px;font-size:0.9375rem;display:none;}.entry-title{font-size:30px;font-size:1.875rem;}h1,.entry-content h1{font-size:48px;font-size:3rem;font-weight:normal;font-family:'Lora',serif;line-height:1.2;}h2,.entry-content h2{font-size:38px;font-size:2.375rem;font-weight:400;font-family:'Lora',serif;line-height:1.2;}h3,.entry-content h3{font-size:30px;font-size:1.875rem;font-weight:400;font-family:'Lora',serif;line-height:1.2;}h4,.entry-content h4{font-size:24px;font-size:1.5rem;line-height:1.2;font-weight:400;font-family:'Lora',serif;}h5,.entry-content h5{font-size:21px;font-size:1.3125rem;line-height:1.2;font-weight:400;font-family:'Lora',serif;}h6,.entry-content h6{font-size:17px;font-size:1.0625rem;line-height:1.2;font-weight:400;font-family:'Lora',serif;}.ast-single-post .entry-title,.page-title{font-size:4em;}::selection{background-color:#000000;color:#ffffff;}body,h1,.entry-title a,.entry-content h1,h2,.entry-content h2,h3,.entry-content h3,h4,.entry-content h4,h5,.entry-content h5,h6,.entry-content h6{color:var(--ast-global-color-3);}.tagcloud a:hover,.tagcloud a:focus,.tagcloud a.current-item{color:#ffffff;border-color:#bc6a3c;background-color:#bc6a3c;}input:focus,input[type="text"]:focus,input[type="email"]:focus,input[type="url"]:focus,input[type="password"]:focus,input[type="reset"]:focus,input[type="search"]:focus,textarea:focus{border-color:#bc6a3c;}input[type="radio"]:checked,input[type=reset],input[type="checkbox"]:checked,input[type="checkbox"]:hover:checked,input[type="checkbox"]:focus:checked,input[type=range]::-webkit-slider-thumb{border-color:#bc6a3c;background-color:#bc6a3c;box-shadow:none;}.site-footer a:hover + .post-count,.site-footer a:focus + .post-count{background:#bc6a3c;border-color:#bc6a3c;}.single .nav-links .nav-previous,.single .nav-links .nav-next{color:#bc6a3c;}.entry-meta,.entry-meta *{line-height:1.45;color:#bc6a3c;}.entry-meta a:hover,.entry-meta a:hover *,.entry-meta a:focus,.entry-meta a:focus *,.page-links > .page-link,.page-links .page-link:hover,.post-navigation a:hover{color:var(--ast-global-color-1);}#cat option,.secondary .calendar_wrap thead a,.secondary .calendar_wrap thead a:visited{color:#bc6a3c;}.secondary .calendar_wrap #today,.ast-progress-val span{background:#bc6a3c;}.secondary a:hover + .post-count,.secondary a:focus + .post-count{background:#bc6a3c;border-color:#bc6a3c;}.calendar_wrap #today > a{color:#ffffff;}.page-links .page-link,.single .post-navigation a{color:#bc6a3c;}.ast-archive-title{color:var(--ast-global-color-2);}.widget-title{font-size:22px;font-size:1.375rem;color:var(--ast-global-color-2);}.ast-single-post .entry-content a,.ast-comment-content a:not(.ast-comment-edit-reply-wrap a){text-decoration:underline;}.ast-single-post .wp-block-button .wp-block-button__link,.ast-single-post .elementor-button-wrapper .elementor-button,.ast-single-post .entry-content .uagb-tab a,.ast-single-post .entry-content .uagb-ifb-cta a,.ast-single-post .entry-content .wp-block-uagb-buttons a,.ast-single-post .entry-content .uabb-module-content a,.ast-single-post .entry-content .uagb-post-grid a,.ast-single-post .entry-content .uagb-timeline a,.ast-single-post .entry-content .uagb-toc__wrap a,.ast-single-post .entry-content .uagb-taxomony-box a,.ast-single-post .entry-content .woocommerce a{text-decoration:none;}.ast-logo-title-inline .site-logo-img{padding-right:1em;}@media (max-width:921px){#ast-desktop-header{display:none;}}@media (min-width:921px){#ast-mobile-header{display:none;}}.wp-block-buttons.aligncenter{justify-content:center;}@media (min-width:1200px){.ast-separate-container.ast-right-sidebar .entry-content .wp-block-image.alignfull,.ast-separate-container.ast-left-sidebar .entry-content .wp-block-image.alignfull,.ast-separate-container.ast-right-sidebar .entry-content .wp-block-cover.alignfull,.ast-separate-container.ast-left-sidebar .entry-content .wp-block-cover.alignfull{margin-left:-6.67em;margin-right:-6.67em;max-width:unset;width:unset;}.ast-separate-container.ast-right-sidebar .entry-content .wp-block-image.alignwide,.ast-separate-container.ast-left-sidebar .entry-content .wp-block-image.alignwide,.ast-separate-container.ast-right-sidebar .entry-content .wp-block-cover.alignwide,.ast-separate-container.ast-left-sidebar .entry-content .wp-block-cover.alignwide{margin-left:-20px;margin-right:-20px;max-width:unset;width:unset;}}@media (min-width:1200px){.wp-block-group .has-background{padding:20px;}}@media (min-width:1200px){.ast-no-sidebar.ast-separate-container .entry-content .wp-block-group.alignwide,.ast-no-sidebar.ast-separate-container .entry-content .wp-block-cover.alignwide{margin-left:-20px;margin-right:-20px;padding-left:20px;padding-right:20px;}.ast-no-sidebar.ast-separate-container .entry-content .wp-block-cover.alignfull,.ast-no-sidebar.ast-separate-container .entry-content .wp-block-group.alignfull{margin-left:-6.67em;margin-right:-6.67em;padding-left:6.67em;padding-right:6.67em;}}@media (min-width:1200px){.wp-block-cover-image.alignwide .wp-block-cover__inner-container,.wp-block-cover.alignwide .wp-block-cover__inner-container,.wp-block-cover-image.alignfull .wp-block-cover__inner-container,.wp-block-cover.alignfull .wp-block-cover__inner-container{width:100%;}}.ast-plain-container.ast-no-sidebar #primary{margin-top:0;margin-bottom:0;}@media (max-width:921px){.ast-theme-transparent-header #primary,.ast-theme-transparent-header #secondary{padding:0;}}.wp-block-columns{margin-bottom:unset;}.wp-block-image.size-full{margin:2rem 0;}.wp-block-separator.has-background{padding:0;}.wp-block-gallery{margin-bottom:1.6em;}.wp-block-group{padding-top:4em;padding-bottom:4em;}.wp-block-group__inner-container .wp-block-columns:last-child,.wp-block-group__inner-container :last-child,.wp-block-table table{margin-bottom:0;}.blocks-gallery-grid{width:100%;}.wp-block-navigation-link__content{padding:5px 0;}.wp-block-group .wp-block-group .has-text-align-center,.wp-block-group .wp-block-column .has-text-align-center{max-width:100%;}.has-text-align-center{margin:0 auto;}@media (min-width:1200px){.wp-block-cover__inner-container,.alignwide .wp-block-group__inner-container,.alignfull .wp-block-group__inner-container{max-width:1200px;margin:0 auto;}.wp-block-group.alignnone,.wp-block-group.aligncenter,.wp-block-group.alignleft,.wp-block-group.alignright,.wp-block-group.alignwide,.wp-block-columns.alignwide{margin:2rem 0 1rem 0;}}@media (max-width:1200px){.wp-block-group{padding:3em;}.wp-block-group .wp-block-group{padding:1.5em;}.wp-block-columns,.wp-block-column{margin:1rem 0;}}@media (min-width:921px){.wp-block-columns .wp-block-group{padding:2em;}}@media (max-width:544px){.wp-block-cover-image .wp-block-cover__inner-container,.wp-block-cover .wp-block-cover__inner-container{width:unset;}.wp-block-cover,.wp-block-cover-image{padding:2em 0;}.wp-block-group,.wp-block-cover{padding:2em;}.wp-block-media-text__media img,.wp-block-media-text__media video{width:unset;max-width:100%;}.wp-block-media-text.has-background .wp-block-media-text__content{padding:1em;}}@media (max-width:921px){.ast-plain-container.ast-no-sidebar #primary{padding:0;}}@media (min-width:544px){.entry-content .wp-block-media-text.has-media-on-the-right .wp-block-media-text__content{padding:0 8% 0 0;}.entry-content .wp-block-media-text .wp-block-media-text__content{padding:0 0 0 8%;}.ast-plain-container .site-content .entry-content .has-custom-content-position.is-position-bottom-left > *,.ast-plain-container .site-content .entry-content .has-custom-content-position.is-position-bottom-right > *,.ast-plain-container .site-content .entry-content .has-custom-content-position.is-position-top-left > *,.ast-plain-container .site-content .entry-content .has-custom-content-position.is-position-top-right > *,.ast-plain-container .site-content .entry-content .has-custom-content-position.is-position-center-right > *,.ast-plain-container .site-content .entry-content .has-custom-content-position.is-position-center-left > *{margin:0;}}@media (max-width:544px){.entry-content .wp-block-media-text .wp-block-media-text__content{padding:8% 0;}.wp-block-media-text .wp-block-media-text__media img{width:auto;max-width:100%;}}.wp-block-button.is-style-outline .wp-block-button__link{border-color:#c69874;border-top-width:0;border-right-width:0;border-bottom-width:0;border-left-width:0;}.wp-block-button.is-style-outline > .wp-block-button__link:not(.has-text-color),.wp-block-button.wp-block-button__link.is-style-outline:not(.has-text-color){color:#c69874;}.wp-block-button.is-style-outline .wp-block-button__link:hover,.wp-block-button.is-style-outline .wp-block-button__link:focus{color:#ffffff !important;background-color:var(--ast-global-color-1);border-color:var(--ast-global-color-1);}.post-page-numbers.current .page-link,.ast-pagination .page-numbers.current{color:#ffffff;border-color:#000000;background-color:#000000;border-radius:2px;}@media (min-width:544px){.entry-content > .alignleft{margin-right:20px;}.entry-content > .alignright{margin-left:20px;}}.wp-block-button.is-style-outline .wp-block-button__link{border-top-width:0;border-right-width:0;border-bottom-width:0;border-left-width:0;}h1.widget-title{font-weight:normal;}h2.widget-title{font-weight:400;}h3.widget-title{font-weight:400;}@media (max-width:921px){.ast-separate-container .ast-article-post,.ast-separate-container .ast-article-single{padding:1.5em 2.14em;}.ast-separate-container #primary,.ast-separate-container #secondary{padding:1.5em 0;}#primary,#secondary{padding:1.5em 0;margin:0;}.ast-left-sidebar #content > .ast-container{display:flex;flex-direction:column-reverse;width:100%;}.ast-author-box img.avatar{margin:20px 0 0 0;}}@media (min-width:922px){.ast-separate-container.ast-right-sidebar #primary,.ast-separate-container.ast-left-sidebar #primary{border:0;}.search-no-results.ast-separate-container #primary{margin-bottom:4em;}}.wp-block-button .wp-block-button__link,{color:#ffffff;}.wp-block-button .wp-block-button__link:hover,.wp-block-button .wp-block-button__link:focus{color:#ffffff;background-color:var(--ast-global-color-1);border-color:var(--ast-global-color-1);}.elementor-widget-heading h1.elementor-heading-title{line-height:1.2;}.elementor-widget-heading h2.elementor-heading-title{line-height:1.2;}.elementor-widget-heading h3.elementor-heading-title{line-height:1.2;}.elementor-widget-heading h4.elementor-heading-title{line-height:1.2;}.elementor-widget-heading h5.elementor-heading-title{line-height:1.2;}.elementor-widget-heading h6.elementor-heading-title{line-height:1.2;}.wp-block-button .wp-block-button__link{border-style:solid;border-top-width:0;border-right-width:0;border-left-width:0;border-bottom-width:0;border-color:#c69874;background-color:#c69874;color:#ffffff;font-family:Helvetica,Verdana,Arial,sans-serif;font-weight:inherit;line-height:1;border-radius:30px;padding-top:10px;padding-right:20px;padding-bottom:10px;padding-left:20px;}.menu-toggle,button,.ast-button,.ast-custom-button,.button,input#submit,input[type="button"],input[type="submit"],input[type="reset"],form[CLASS*="wp-block-search__"].wp-block-search .wp-block-search__inside-wrapper .wp-block-search__button{border-style:solid;border-top-width:0;border-right-width:0;border-left-width:0;border-bottom-width:0;color:#ffffff;border-color:#c69874;background-color:#c69874;border-radius:30px;padding-top:10px;padding-right:20px;padding-bottom:10px;padding-left:20px;font-family:Helvetica,Verdana,Arial,sans-serif;font-weight:inherit;line-height:1;}button:focus,.menu-toggle:hover,button:hover,.ast-button:hover,.ast-custom-button:hover .button:hover,.ast-custom-button:hover ,input[type=reset]:hover,input[type=reset]:focus,input#submit:hover,input#submit:focus,input[type="button"]:hover,input[type="button"]:focus,input[type="submit"]:hover,input[type="submit"]:focus,form[CLASS*="wp-block-search__"].wp-block-search .wp-block-search__inside-wrapper .wp-block-search__button:hover,form[CLASS*="wp-block-search__"].wp-block-search .wp-block-search__inside-wrapper .wp-block-search__button:focus{color:#ffffff;background-color:var(--ast-global-color-1);border-color:var(--ast-global-color-1);}@media (min-width:544px){.ast-container{max-width:100%;}}@media (max-width:544px){.ast-separate-container .ast-article-post,.ast-separate-container .ast-article-single,.ast-separate-container .comments-title,.ast-separate-container .ast-archive-description{padding:1.5em 1em;}.ast-separate-container #content .ast-container{padding-left:0.54em;padding-right:0.54em;}.ast-separate-container .ast-comment-list li.depth-1{padding:1.5em 1em;margin-bottom:1.5em;}.ast-separate-container .ast-comment-list .bypostauthor{padding:.5em;}.ast-search-menu-icon.ast-dropdown-active .search-field{width:170px;}}@media (max-width:921px){.ast-mobile-header-stack .main-header-bar .ast-search-menu-icon{display:inline-block;}.ast-header-break-point.ast-header-custom-item-outside .ast-mobile-header-stack .main-header-bar .ast-search-icon{margin:0;}.ast-comment-avatar-wrap img{max-width:2.5em;}.ast-separate-container .ast-comment-list li.depth-1{padding:1.5em 2.14em;}.ast-separate-container .comment-respond{padding:2em 2.14em;}.ast-comment-meta{padding:0 1.8888em 1.3333em;}}body,.ast-separate-container{background-color:var(--ast-global-color-4);;background-image:none;;}@media (max-width:921px){.widget-title{font-size:22px;font-size:1.375rem;}body,button,input,select,textarea,.ast-button,.ast-custom-button{font-size:16px;font-size:1rem;}#secondary,#secondary button,#secondary input,#secondary select,#secondary textarea{font-size:16px;font-size:1rem;}.site-title{display:block;}.ast-archive-description .ast-archive-title{font-size:40px;}.site-header .site-description{display:none;}.entry-title{font-size:30px;}h1,.entry-content h1{font-size:40px;}h2,.entry-content h2{font-size:32px;}h3,.entry-content h3{font-size:26px;}h4,.entry-content h4{font-size:20px;font-size:1.25rem;}h5,.entry-content h5{font-size:17px;font-size:1.0625rem;}h6,.entry-content h6{font-size:15px;font-size:0.9375rem;}.ast-single-post .entry-title,.page-title{font-size:3em;}}@media (max-width:544px){.widget-title{font-size:22px;font-size:1.375rem;}body,button,input,select,textarea,.ast-button,.ast-custom-button{font-size:16px;font-size:1rem;}#secondary,#secondary button,#secondary input,#secondary select,#secondary textarea{font-size:16px;font-size:1rem;}.site-title{display:none;}.ast-archive-description .ast-archive-title{font-size:40px;}.site-header .site-description{display:none;}.entry-title{font-size:30px;}h1,.entry-content h1{font-size:36px;}h2,.entry-content h2{font-size:28px;}h3,.entry-content h3{font-size:22px;}h4,.entry-content h4{font-size:18px;font-size:1.125rem;}h5,.entry-content h5{font-size:15px;font-size:0.9375rem;}h6,.entry-content h6{font-size:14px;font-size:0.875rem;}.ast-single-post .entry-title,.page-title{font-size:1.5em;}}@media (max-width:544px){html{font-size:100%;}}@media (min-width:922px){.ast-container{max-width:1240px;}}@media (min-width:922px){.site-content .ast-container{display:flex;}}@media (max-width:921px){.site-content .ast-container{flex-direction:column;}}@media (min-width:922px){.main-header-menu .sub-menu .menu-item.ast-left-align-sub-menu:hover > .sub-menu,.main-header-menu .sub-menu .menu-item.ast-left-align-sub-menu.focus > .sub-menu{margin-left:-0px;}}.wp-block-search {margin-bottom: 20px;}.wp-block-site-tagline {margin-top: 20px;}form.wp-block-search .wp-block-search__input,.wp-block-search.wp-block-search__button-inside .wp-block-search__inside-wrapper,.wp-block-search.wp-block-search__button-inside .wp-block-search__inside-wrapper {border-color: #eaeaea;background: #fafafa;}.wp-block-search.wp-block-search__button-inside .wp-block-search__inside-wrapper .wp-block-search__input:focus,.wp-block-loginout input:focus {outline: thin dotted;}.wp-block-loginout input:focus {border-color: transparent;} form.wp-block-search .wp-block-search__inside-wrapper .wp-block-search__input {padding: 12px;}form.wp-block-search .wp-block-search__button svg {fill: currentColor;width: 20px;height: 20px;}.wp-block-loginout p label {display: block;}.wp-block-loginout p:not(.login-remember):not(.login-submit) input {width: 100%;}.wp-block-loginout .login-remember input {width: 1.1rem;height: 1.1rem;margin: 0 5px 4px 0;vertical-align: middle;}:root .has-ast-global-color-0-color{color:var(--ast-global-color-0);}:root .has-ast-global-color-0-background-color{background-color:var(--ast-global-color-0);}:root .wp-block-button .has-ast-global-color-0-color{color:var(--ast-global-color-0);}:root .wp-block-button .has-ast-global-color-0-background-color{background-color:var(--ast-global-color-0);}:root .has-ast-global-color-1-color{color:var(--ast-global-color-1);}:root .has-ast-global-color-1-background-color{background-color:var(--ast-global-color-1);}:root .wp-block-button .has-ast-global-color-1-color{color:var(--ast-global-color-1);}:root .wp-block-button .has-ast-global-color-1-background-color{background-color:var(--ast-global-color-1);}:root .has-ast-global-color-2-color{color:var(--ast-global-color-2);}:root .has-ast-global-color-2-background-color{background-color:var(--ast-global-color-2);}:root .wp-block-button .has-ast-global-color-2-color{color:var(--ast-global-color-2);}:root .wp-block-button .has-ast-global-color-2-background-color{background-color:var(--ast-global-color-2);}:root .has-ast-global-color-3-color{color:var(--ast-global-color-3);}:root .has-ast-global-color-3-background-color{background-color:var(--ast-global-color-3);}:root .wp-block-button .has-ast-global-color-3-color{color:var(--ast-global-color-3);}:root .wp-block-button .has-ast-global-color-3-background-color{background-color:var(--ast-global-color-3);}:root .has-ast-global-color-4-color{color:var(--ast-global-color-4);}:root .has-ast-global-color-4-background-color{background-color:var(--ast-global-color-4);}:root .wp-block-button .has-ast-global-color-4-color{color:var(--ast-global-color-4);}:root .wp-block-button .has-ast-global-color-4-background-color{background-color:var(--ast-global-color-4);}:root .has-ast-global-color-5-color{color:var(--ast-global-color-5);}:root .has-ast-global-color-5-background-color{background-color:var(--ast-global-color-5);}:root .wp-block-button .has-ast-global-color-5-color{color:var(--ast-global-color-5);}:root .wp-block-button .has-ast-global-color-5-background-color{background-color:var(--ast-global-color-5);}:root .has-ast-global-color-6-color{color:var(--ast-global-color-6);}:root .has-ast-global-color-6-background-color{background-color:var(--ast-global-color-6);}:root .wp-block-button .has-ast-global-color-6-color{color:var(--ast-global-color-6);}:root .wp-block-button .has-ast-global-color-6-background-color{background-color:var(--ast-global-color-6);}:root .has-ast-global-color-7-color{color:var(--ast-global-color-7);}:root .has-ast-global-color-7-background-color{background-color:var(--ast-global-color-7);}:root .wp-block-button .has-ast-global-color-7-color{color:var(--ast-global-color-7);}:root .wp-block-button .has-ast-global-color-7-background-color{background-color:var(--ast-global-color-7);}:root .has-ast-global-color-8-color{color:var(--ast-global-color-8);}:root .has-ast-global-color-8-background-color{background-color:var(--ast-global-color-8);}:root .wp-block-button .has-ast-global-color-8-color{color:var(--ast-global-color-8);}:root .wp-block-button .has-ast-global-color-8-background-color{background-color:var(--ast-global-color-8);}:root{--ast-global-color-0:#0274be;--ast-global-color-1:#3a3a3a;--ast-global-color-2:#3a3a3a;--ast-global-color-3:#4B4F58;--ast-global-color-4:#F5F5F5;--ast-global-color-5:#FFFFFF;--ast-global-color-6:#F2F5F7;--ast-global-color-7:#424242;--ast-global-color-8:#000000;}.ast-breadcrumbs .trail-browse,.ast-breadcrumbs .trail-items,.ast-breadcrumbs .trail-items li{display:inline-block;margin:0;padding:0;border:none;background:inherit;text-indent:0;}.ast-breadcrumbs .trail-browse{font-size:inherit;font-style:inherit;font-weight:inherit;color:inherit;}.ast-breadcrumbs .trail-items{list-style:none;}.trail-items li::after{padding:0 0.3em;content:"\00bb";}.trail-items li:last-of-type::after{display:none;}.trail-items li::after{content:"\00bb";}.ast-breadcrumbs-wrapper,.ast-breadcrumbs-wrapper a{font-family:inherit;font-weight:inherit;}.ast-header-breadcrumb{padding-top:10px;padding-bottom:10px;}.ast-default-menu-enable.ast-main-header-nav-open.ast-header-break-point .main-header-bar.ast-header-breadcrumb,.ast-main-header-nav-open .main-header-bar.ast-header-breadcrumb{padding-top:1em;padding-bottom:1em;}.ast-header-break-point .main-header-bar.ast-header-breadcrumb{border-bottom-width:1px;border-bottom-color:#eaeaea;border-bottom-style:solid;}.ast-breadcrumbs-wrapper{line-height:1.4;}.ast-breadcrumbs-wrapper .rank-math-breadcrumb p{margin-bottom:0px;}.ast-breadcrumbs-wrapper{display:block;width:100%;}h1,.entry-content h1,h2,.entry-content h2,h3,.entry-content h3,h4,.entry-content h4,h5,.entry-content h5,h6,.entry-content h6{color:var(--ast-global-color-2);}.entry-title a{color:var(--ast-global-color-2);}@media (max-width:921px){.ast-builder-grid-row-container.ast-builder-grid-row-tablet-3-firstrow .ast-builder-grid-row > *:first-child,.ast-builder-grid-row-container.ast-builder-grid-row-tablet-3-lastrow .ast-builder-grid-row > *:last-child{grid-column:1 / -1;}}@media (max-width:544px){.ast-builder-grid-row-container.ast-builder-grid-row-mobile-3-firstrow .ast-builder-grid-row > *:first-child,.ast-builder-grid-row-container.ast-builder-grid-row-mobile-3-lastrow .ast-builder-grid-row > *:last-child{grid-column:1 / -1;}}.ast-builder-layout-element[data-section="title_tagline"]{display:flex;}@media (max-width:921px){.ast-header-break-point .ast-builder-layout-element[data-section="title_tagline"]{display:flex;}}@media (max-width:544px){.ast-header-break-point .ast-builder-layout-element[data-section="title_tagline"]{display:flex;}}.ast-builder-menu-1{font-family:Helvetica,Verdana,Arial,sans-serif;font-weight:inherit;}.ast-builder-menu-1 .menu-item > .menu-link{color:#ffffff;}.ast-builder-menu-1 .menu-item > .ast-menu-toggle{color:#ffffff;}.ast-builder-menu-1 .sub-menu,.ast-builder-menu-1 .inline-on-mobile .sub-menu{border-top-width:2px;border-bottom-width:0;border-right-width:0;border-left-width:0;border-color:#c69874;border-style:solid;border-radius:0;}.ast-builder-menu-1 .main-header-menu > .menu-item > .sub-menu,.ast-builder-menu-1 .main-header-menu > .menu-item > .astra-full-megamenu-wrapper{margin-top:0;}.ast-desktop .ast-builder-menu-1 .main-header-menu > .menu-item > .sub-menu:before,.ast-desktop .ast-builder-menu-1 .main-header-menu > .menu-item > .astra-full-megamenu-wrapper:before{height:calc( 0px + 5px );}.ast-builder-menu-1 .main-header-menu,.ast-builder-menu-1 .main-header-menu .sub-menu{background-color:#c69874;;background-image:none;;}.ast-desktop .ast-builder-menu-1 .menu-item .sub-menu .menu-link{border-style:none;}@media (max-width:921px){.ast-header-break-point .ast-builder-menu-1 .menu-item.menu-item-has-children > .ast-menu-toggle{top:0;}.ast-builder-menu-1 .menu-item-has-children > .menu-link:after{content:unset;}}@media (max-width:544px){.ast-header-break-point .ast-builder-menu-1 .menu-item.menu-item-has-children > .ast-menu-toggle{top:0;}}.ast-builder-menu-1{display:flex;}@media (max-width:921px){.ast-header-break-point .ast-builder-menu-1{display:flex;}}@media (max-width:544px){.ast-header-break-point .ast-builder-menu-1{display:flex;}}.ast-desktop .ast-menu-hover-style-underline > .menu-item > .menu-link:before,.ast-desktop .ast-menu-hover-style-overline > .menu-item > .menu-link:before {content: "";position: absolute;width: 100%;right: 50%;height: 1px;background-color: transparent;transform: scale(0,0) translate(-50%,0);transition: transform .3s ease-in-out,color .0s ease-in-out;}.ast-desktop .ast-menu-hover-style-underline > .menu-item:hover > .menu-link:before,.ast-desktop .ast-menu-hover-style-overline > .menu-item:hover > .menu-link:before {width: calc(100% - 1.2em);background-color: currentColor;transform: scale(1,1) translate(50%,0);}.ast-desktop .ast-menu-hover-style-underline > .menu-item > .menu-link:before {bottom: 0;}.ast-desktop .ast-menu-hover-style-overline > .menu-item > .menu-link:before {top: 0;}.ast-desktop .ast-menu-hover-style-zoom > .menu-item > .menu-link:hover {transition: all .3s ease;transform: scale(1.2);}.site-below-footer-wrap{padding-top:20px;padding-bottom:20px;}.site-below-footer-wrap[data-section="section-below-footer-builder"]{background-color:#eeeeee;;background-image:none;;min-height:96px;}.site-below-footer-wrap[data-section="section-below-footer-builder"] .ast-builder-grid-row{grid-column-gap:142px;max-width:100%;padding-left:35px;padding-right:35px;}.site-below-footer-wrap[data-section="section-below-footer-builder"] .ast-builder-grid-row,.site-below-footer-wrap[data-section="section-below-footer-builder"] .site-footer-section{align-items:center;}.site-below-footer-wrap[data-section="section-below-footer-builder"].ast-footer-row-inline .site-footer-section{display:flex;margin-bottom:0;}.ast-builder-grid-row-full .ast-builder-grid-row{grid-template-columns:1fr;}@media (max-width:921px){.site-below-footer-wrap[data-section="section-below-footer-builder"].ast-footer-row-tablet-inline .site-footer-section{display:flex;margin-bottom:0;}.site-below-footer-wrap[data-section="section-below-footer-builder"].ast-footer-row-tablet-stack .site-footer-section{display:block;margin-bottom:10px;}.ast-builder-grid-row-container.ast-builder-grid-row-tablet-full .ast-builder-grid-row{grid-template-columns:1fr;}}@media (max-width:544px){.site-below-footer-wrap[data-section="section-below-footer-builder"].ast-footer-row-mobile-inline .site-footer-section{display:flex;margin-bottom:0;}.site-below-footer-wrap[data-section="section-below-footer-builder"].ast-footer-row-mobile-stack .site-footer-section{display:block;margin-bottom:10px;}.ast-builder-grid-row-container.ast-builder-grid-row-mobile-full .ast-builder-grid-row{grid-template-columns:1fr;}}.site-below-footer-wrap[data-section="section-below-footer-builder"]{display:grid;}@media (max-width:921px){.ast-header-break-point .site-below-footer-wrap[data-section="section-below-footer-builder"]{display:grid;}}@media (max-width:544px){.ast-header-break-point .site-below-footer-wrap[data-section="section-below-footer-builder"]{display:grid;}}.ast-footer-copyright{text-align:center;}.ast-footer-copyright {color:var(--ast-global-color-3);margin-top:40px;margin-bottom:40px;margin-left:40px;margin-right:40px;}@media (max-width:921px){.ast-footer-copyright{text-align:center;}}@media (max-width:544px){.ast-footer-copyright{text-align:center;}}.ast-footer-copyright.ast-builder-layout-element{display:flex;}@media (max-width:921px){.ast-header-break-point .ast-footer-copyright.ast-builder-layout-element{display:flex;}}@media (max-width:544px){.ast-header-break-point .ast-footer-copyright.ast-builder-layout-element{display:flex;}}.site-primary-footer-wrap{padding-top:45px;padding-bottom:45px;}.site-primary-footer-wrap[data-section="section-primary-footer-builder"]{background-color:#dedede;;background-image:none;;}.site-primary-footer-wrap[data-section="section-primary-footer-builder"] .ast-builder-grid-row{grid-column-gap:50px;max-width:1200px;margin-left:auto;margin-right:auto;}.site-primary-footer-wrap[data-section="section-primary-footer-builder"] .ast-builder-grid-row,.site-primary-footer-wrap[data-section="section-primary-footer-builder"] .site-footer-section{align-items:flex-start;}.site-primary-footer-wrap[data-section="section-primary-footer-builder"].ast-footer-row-inline .site-footer-section{display:flex;margin-bottom:0;}.ast-builder-grid-row-2-equal .ast-builder-grid-row{grid-template-columns:repeat( 2,1fr );}@media (max-width:921px){.site-primary-footer-wrap[data-section="section-primary-footer-builder"].ast-footer-row-tablet-inline .site-footer-section{display:flex;margin-bottom:0;}.site-primary-footer-wrap[data-section="section-primary-footer-builder"].ast-footer-row-tablet-stack .site-footer-section{display:block;margin-bottom:10px;}.ast-builder-grid-row-container.ast-builder-grid-row-tablet-2-equal .ast-builder-grid-row{grid-template-columns:repeat( 2,1fr );}}@media (max-width:544px){.site-primary-footer-wrap[data-section="section-primary-footer-builder"].ast-footer-row-mobile-inline .site-footer-section{display:flex;margin-bottom:0;}.site-primary-footer-wrap[data-section="section-primary-footer-builder"].ast-footer-row-mobile-stack .site-footer-section{display:block;margin-bottom:10px;}.ast-builder-grid-row-container.ast-builder-grid-row-mobile-full .ast-builder-grid-row{grid-template-columns:1fr;}}.site-primary-footer-wrap[data-section="section-primary-footer-builder"]{padding-top:50px;padding-bottom:30px;padding-left:50px;padding-right:50px;}.site-primary-footer-wrap[data-section="section-primary-footer-builder"]{display:grid;}@media (max-width:921px){.ast-header-break-point .site-primary-footer-wrap[data-section="section-primary-footer-builder"]{display:grid;}}@media (max-width:544px){.ast-header-break-point .site-primary-footer-wrap[data-section="section-primary-footer-builder"]{display:grid;}}.footer-widget-area[data-section="sidebar-widgets-footer-widget-1"].footer-widget-area-inner{text-align:left;}.footer-widget-area.widget-area.site-footer-focus-item{width:auto;}@media (max-width:921px){.footer-widget-area[data-section="sidebar-widgets-footer-widget-1"].footer-widget-area-inner{text-align:center;}}@media (max-width:544px){.footer-widget-area[data-section="sidebar-widgets-footer-widget-1"].footer-widget-area-inner{text-align:center;}}.footer-widget-area[data-section="sidebar-widgets-footer-widget-1"]{display:block;}@media (max-width:921px){.ast-header-break-point .footer-widget-area[data-section="sidebar-widgets-footer-widget-1"]{display:block;}}@media (max-width:544px){.ast-header-break-point .footer-widget-area[data-section="sidebar-widgets-footer-widget-1"]{display:block;}}.footer-widget-area[data-section="sidebar-widgets-footer-widget-3"]{display:block;}@media (max-width:921px){.ast-header-break-point .footer-widget-area[data-section="sidebar-widgets-footer-widget-3"]{display:block;}}@media (max-width:544px){.ast-header-break-point .footer-widget-area[data-section="sidebar-widgets-footer-widget-3"]{display:block;}}.footer-widget-area[data-section="sidebar-widgets-footer-widget-3"].footer-widget-area-inner{text-align:left;}.footer-widget-area.widget-area.site-footer-focus-item{width:auto;}@media (max-width:921px){.footer-widget-area[data-section="sidebar-widgets-footer-widget-3"].footer-widget-area-inner{text-align:center;}}@media (max-width:544px){.footer-widget-area[data-section="sidebar-widgets-footer-widget-3"].footer-widget-area-inner{text-align:center;}}.footer-widget-area[data-section="sidebar-widgets-footer-widget-1"]{display:block;}@media (max-width:921px){.ast-header-break-point .footer-widget-area[data-section="sidebar-widgets-footer-widget-1"]{display:block;}}@media (max-width:544px){.ast-header-break-point .footer-widget-area[data-section="sidebar-widgets-footer-widget-1"]{display:block;}}.footer-widget-area[data-section="sidebar-widgets-footer-widget-3"]{display:block;}@media (max-width:921px){.ast-header-break-point .footer-widget-area[data-section="sidebar-widgets-footer-widget-3"]{display:block;}}@media (max-width:544px){.ast-header-break-point .footer-widget-area[data-section="sidebar-widgets-footer-widget-3"]{display:block;}}.ast-header-break-point .main-header-bar{border-bottom-width:1px;}@media (min-width:922px){.main-header-bar{border-bottom-width:1px;}}.ast-safari-browser-less-than-11 .main-header-menu .menu-item, .ast-safari-browser-less-than-11 .main-header-bar .ast-masthead-custom-menu-items{display:block;}.main-header-menu .menu-item, #astra-footer-menu .menu-item, .main-header-bar .ast-masthead-custom-menu-items{-js-display:flex;display:flex;-webkit-box-pack:center;-webkit-justify-content:center;-moz-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-orient:vertical;-webkit-box-direction:normal;-webkit-flex-direction:column;-moz-box-orient:vertical;-moz-box-direction:normal;-ms-flex-direction:column;flex-direction:column;}.main-header-menu > .menu-item > .menu-link, #astra-footer-menu > .menu-item > .menu-link,{height:100%;-webkit-box-align:center;-webkit-align-items:center;-moz-box-align:center;-ms-flex-align:center;align-items:center;-js-display:flex;display:flex;}.ast-header-break-point .main-navigation ul .menu-item .menu-link .icon-arrow:first-of-type svg{top:.2em;margin-top:0px;margin-left:0px;width:.65em;transform:translate(0, -2px) rotateZ(270deg);}.ast-mobile-popup-content .ast-submenu-expanded > .ast-menu-toggle{transform:rotateX(180deg);}.ast-separate-container .blog-layout-1, .ast-separate-container .blog-layout-2, .ast-separate-container .blog-layout-3{background-color:transparent;background-image:none;}.ast-separate-container .ast-article-post{background-color:var(--ast-global-color-5);;background-image:none;;}@media (max-width:921px){.ast-separate-container .ast-article-post{background-color:var(--ast-global-color-5);;background-image:none;;}}@media (max-width:544px){.ast-separate-container .ast-article-post{background-color:var(--ast-global-color-5);;background-image:none;;}}.ast-separate-container .ast-article-single:not(.ast-related-post), .ast-separate-container .comments-area .comment-respond,.ast-separate-container .comments-area .ast-comment-list li, .ast-separate-container .ast-woocommerce-container, .ast-separate-container .error-404, .ast-separate-container .no-results, .single.ast-separate-container .ast-author-meta, .ast-separate-container .related-posts-title-wrapper, .ast-separate-container.ast-two-container #secondary .widget,.ast-separate-container .comments-count-wrapper, .ast-box-layout.ast-plain-container .site-content,.ast-padded-layout.ast-plain-container .site-content, .ast-separate-container .comments-area .comments-title{background-color:var(--ast-global-color-5);;background-image:none;;}@media (max-width:921px){.ast-separate-container .ast-article-single:not(.ast-related-post), .ast-separate-container .comments-area .comment-respond,.ast-separate-container .comments-area .ast-comment-list li, .ast-separate-container .ast-woocommerce-container, .ast-separate-container .error-404, .ast-separate-container .no-results, .single.ast-separate-container .ast-author-meta, .ast-separate-container .related-posts-title-wrapper, .ast-separate-container.ast-two-container #secondary .widget,.ast-separate-container .comments-count-wrapper, .ast-box-layout.ast-plain-container .site-content,.ast-padded-layout.ast-plain-container .site-content, .ast-separate-container .comments-area .comments-title{background-color:var(--ast-global-color-5);;background-image:none;;}}@media (max-width:544px){.ast-separate-container .ast-article-single:not(.ast-related-post), .ast-separate-container .comments-area .comment-respond,.ast-separate-container .comments-area .ast-comment-list li, .ast-separate-container .ast-woocommerce-container, .ast-separate-container .error-404, .ast-separate-container .no-results, .single.ast-separate-container .ast-author-meta, .ast-separate-container .related-posts-title-wrapper, .ast-separate-container.ast-two-container #secondary .widget,.ast-separate-container .comments-count-wrapper, .ast-box-layout.ast-plain-container .site-content,.ast-padded-layout.ast-plain-container .site-content, .ast-separate-container .comments-area .comments-title{background-color:var(--ast-global-color-5);;background-image:none;;}}.ast-mobile-header-content > *,.ast-desktop-header-content > * {padding: 10px 0;height: auto;}.ast-mobile-header-content > *:first-child,.ast-desktop-header-content > *:first-child {padding-top: 10px;}.ast-mobile-header-content > .ast-builder-menu,.ast-desktop-header-content > .ast-builder-menu {padding-top: 0;}.ast-mobile-header-content > *:last-child,.ast-desktop-header-content > *:last-child {padding-bottom: 0;}.ast-mobile-header-content .ast-search-menu-icon.ast-inline-search label,.ast-desktop-header-content .ast-search-menu-icon.ast-inline-search label {width: 100%;}.ast-desktop-header-content .main-header-bar-navigation .ast-submenu-expanded > .ast-menu-toggle::before {transform: rotateX(180deg);}#ast-desktop-header .ast-desktop-header-content,.ast-mobile-header-content .ast-search-icon,.ast-desktop-header-content .ast-search-icon,.ast-mobile-header-wrap .ast-mobile-header-content,.ast-main-header-nav-open.ast-popup-nav-open .ast-mobile-header-wrap .ast-mobile-header-content,.ast-main-header-nav-open.ast-popup-nav-open .ast-desktop-header-content {display: none;}.ast-main-header-nav-open.ast-header-break-point #ast-desktop-header .ast-desktop-header-content,.ast-main-header-nav-open.ast-header-break-point .ast-mobile-header-wrap .ast-mobile-header-content {display: block;}.ast-desktop .ast-desktop-header-content .astra-menu-animation-slide-up > .menu-item > .sub-menu,.ast-desktop .ast-desktop-header-content .astra-menu-animation-slide-up > .menu-item .menu-item > .sub-menu,.ast-desktop .ast-desktop-header-content .astra-menu-animation-slide-down > .menu-item > .sub-menu,.ast-desktop .ast-desktop-header-content .astra-menu-animation-slide-down > .menu-item .menu-item > .sub-menu,.ast-desktop .ast-desktop-header-content .astra-menu-animation-fade > .menu-item > .sub-menu,.ast-desktop .ast-desktop-header-content .astra-menu-animation-fade > .menu-item .menu-item > .sub-menu {opacity: 1;visibility: visible;}.ast-hfb-header.ast-default-menu-enable.ast-header-break-point .ast-mobile-header-wrap .ast-mobile-header-content .main-header-bar-navigation {width: unset;margin: unset;}.ast-mobile-header-content.content-align-flex-end .main-header-bar-navigation .menu-item-has-children > .ast-menu-toggle,.ast-desktop-header-content.content-align-flex-end .main-header-bar-navigation .menu-item-has-children > .ast-menu-toggle {left: calc( 20px - 0.907em);}.ast-mobile-header-content .ast-search-menu-icon,.ast-mobile-header-content .ast-search-menu-icon.slide-search,.ast-desktop-header-content .ast-search-menu-icon,.ast-desktop-header-content .ast-search-menu-icon.slide-search {width: 100%;position: relative;display: block;right: auto;transform: none;}.ast-mobile-header-content .ast-search-menu-icon.slide-search .search-form,.ast-mobile-header-content .ast-search-menu-icon .search-form,.ast-desktop-header-content .ast-search-menu-icon.slide-search .search-form,.ast-desktop-header-content .ast-search-menu-icon .search-form {right: 0;visibility: visible;opacity: 1;position: relative;top: auto;transform: none;padding: 0;display: block;overflow: hidden;}.ast-mobile-header-content .ast-search-menu-icon.ast-inline-search .search-field,.ast-mobile-header-content .ast-search-menu-icon .search-field,.ast-desktop-header-content .ast-search-menu-icon.ast-inline-search .search-field,.ast-desktop-header-content .ast-search-menu-icon .search-field {width: 100%;padding-right: 5.5em;}.ast-mobile-header-content .ast-search-menu-icon .search-submit,.ast-desktop-header-content .ast-search-menu-icon .search-submit {display: block;position: absolute;height: 100%;top: 0;right: 0;padding: 0 1em;border-radius: 0;}.ast-hfb-header.ast-default-menu-enable.ast-header-break-point .ast-mobile-header-wrap .ast-mobile-header-content .main-header-bar-navigation ul .sub-menu .menu-link {padding-left: 30px;}.ast-hfb-header.ast-default-menu-enable.ast-header-break-point .ast-mobile-header-wrap .ast-mobile-header-content .main-header-bar-navigation .sub-menu .menu-item .menu-item .menu-link {padding-left: 40px;}.ast-mobile-popup-drawer.active .ast-mobile-popup-inner{background-color:#ffffff;;}.ast-mobile-header-wrap .ast-mobile-header-content, .ast-desktop-header-content{background-color:#ffffff;;}.ast-mobile-popup-content > *, .ast-mobile-header-content > *, .ast-desktop-popup-content > *, .ast-desktop-header-content > *{padding-top:0;padding-bottom:0;}.content-align-flex-start .ast-builder-layout-element{justify-content:flex-start;}.content-align-flex-start .main-header-menu{text-align:left;}.ast-mobile-popup-drawer.active .menu-toggle-close{color:#3a3a3a;}.ast-mobile-header-wrap .ast-primary-header-bar,.ast-primary-header-bar .site-primary-header-wrap{min-height:79px;}.ast-desktop .ast-primary-header-bar .main-header-menu > .menu-item{line-height:79px;}#masthead .ast-container,.site-header-focus-item + .ast-breadcrumbs-wrapper{max-width:100%;padding-left:35px;padding-right:35px;}@media (max-width:921px){#masthead .ast-mobile-header-wrap .ast-primary-header-bar,#masthead .ast-mobile-header-wrap .ast-below-header-bar{padding-left:20px;padding-right:20px;}}.ast-header-break-point .ast-primary-header-bar{border-bottom-width:2px;border-bottom-color:#c29471;border-bottom-style:solid;}@media (min-width:922px){.ast-primary-header-bar{border-bottom-width:2px;border-bottom-color:#c29471;border-bottom-style:solid;}}.ast-primary-header-bar{background-color:#c69874;;background-image:none;;}.ast-primary-header-bar{display:block;}@media (max-width:921px){.ast-header-break-point .ast-primary-header-bar{display:grid;}}@media (max-width:544px){.ast-header-break-point .ast-primary-header-bar{display:grid;}}[data-section="section-header-mobile-trigger"] .ast-button-wrap .ast-mobile-menu-trigger-minimal{color:#fdfafa;border:none;background:transparent;}[data-section="section-header-mobile-trigger"] .ast-button-wrap .mobile-menu-toggle-icon .ast-mobile-svg{width:20px;height:20px;fill:#fdfafa;}[data-section="section-header-mobile-trigger"] .ast-button-wrap .mobile-menu-wrap .mobile-menu{color:#fdfafa;font-size:203px;}.ast-builder-menu-mobile .main-navigation .menu-item > .menu-link{font-family:inherit;font-weight:inherit;}.ast-builder-menu-mobile .main-navigation .menu-item.menu-item-has-children > .ast-menu-toggle{top:0;}.ast-builder-menu-mobile .main-navigation .menu-item-has-children > .menu-link:after{content:unset;}.ast-hfb-header .ast-builder-menu-mobile .main-header-menu, .ast-hfb-header .ast-builder-menu-mobile .main-navigation .menu-item .menu-link, .ast-hfb-header .ast-builder-menu-mobile .main-navigation .menu-item .sub-menu .menu-link{border-style:none;}.ast-builder-menu-mobile .main-navigation .menu-item.menu-item-has-children > .ast-menu-toggle{top:0;}@media (max-width:921px){.ast-builder-menu-mobile .main-navigation .menu-item.menu-item-has-children > .ast-menu-toggle{top:0;}.ast-builder-menu-mobile .main-navigation .menu-item-has-children > .menu-link:after{content:unset;}}@media (max-width:544px){.ast-builder-menu-mobile .main-navigation .menu-item.menu-item-has-children > .ast-menu-toggle{top:0;}}.ast-builder-menu-mobile .main-navigation{display:block;}@media (max-width:921px){.ast-header-break-point .ast-builder-menu-mobile .main-navigation{display:block;}}@media (max-width:544px){.ast-header-break-point .ast-builder-menu-mobile .main-navigation{display:block;}}
</style>
<link rel="stylesheet" id="astra-google-fonts-css" href="https://fonts.googleapis.com/css?family=Lora%3A400%2C&amp;display=fallback&amp;ver=3.7.3" media="all">
<link rel="stylesheet" id="astra-menu-animation-css" href="http://clairem8.sg-host.com/wp-content/themes/astra/assets/css/minified/menu-animation.min.css?ver=3.7.3" media="all">
<link rel="stylesheet" id="wp-block-library-css" href="http://clairem8.sg-host.com/wp-content/plugins/gutenberg/build/block-library/style.css?ver=11.7.0" media="all">
<style id="global-styles-inline-css">
body{--wp--preset--color--black: #000000;--wp--preset--color--cyan-bluish-gray: #abb8c3;--wp--preset--color--white: #ffffff;--wp--preset--color--pale-pink: #f78da7;--wp--preset--color--vivid-red: #cf2e2e;--wp--preset--color--luminous-vivid-orange: #ff6900;--wp--preset--color--luminous-vivid-amber: #fcb900;--wp--preset--color--light-green-cyan: #7bdcb5;--wp--preset--color--vivid-green-cyan: #00d084;--wp--preset--color--pale-cyan-blue: #8ed1fc;--wp--preset--color--vivid-cyan-blue: #0693e3;--wp--preset--color--vivid-purple: #9b51e0;--wp--preset--color--ast-global-color-0: var(--ast-global-color-0);--wp--preset--color--ast-global-color-1: var(--ast-global-color-1);--wp--preset--color--ast-global-color-2: var(--ast-global-color-2);--wp--preset--color--ast-global-color-3: var(--ast-global-color-3);--wp--preset--color--ast-global-color-4: var(--ast-global-color-4);--wp--preset--color--ast-global-color-5: var(--ast-global-color-5);--wp--preset--color--ast-global-color-6: var(--ast-global-color-6);--wp--preset--color--ast-global-color-7: var(--ast-global-color-7);--wp--preset--color--ast-global-color-8: var(--ast-global-color-8);--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,rgba(6,147,227,1) 0%,rgb(155,81,224) 100%);--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,rgb(122,220,180) 0%,rgb(0,208,130) 100%);--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,rgba(252,185,0,1) 0%,rgba(255,105,0,1) 100%);--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,rgba(255,105,0,1) 0%,rgb(207,46,46) 100%);--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,rgb(238,238,238) 0%,rgb(169,184,195) 100%);--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,rgb(74,234,220) 0%,rgb(151,120,209) 20%,rgb(207,42,186) 40%,rgb(238,44,130) 60%,rgb(251,105,98) 80%,rgb(254,248,76) 100%);--wp--preset--gradient--blush-light-purple: linear-gradient(135deg,rgb(255,206,236) 0%,rgb(152,150,240) 100%);--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,rgb(254,205,165) 0%,rgb(254,45,45) 50%,rgb(107,0,62) 100%);--wp--preset--gradient--luminous-dusk: linear-gradient(135deg,rgb(255,203,112) 0%,rgb(199,81,192) 50%,rgb(65,88,208) 100%);--wp--preset--gradient--pale-ocean: linear-gradient(135deg,rgb(255,245,203) 0%,rgb(182,227,212) 50%,rgb(51,167,181) 100%);--wp--preset--gradient--electric-grass: linear-gradient(135deg,rgb(202,248,128) 0%,rgb(113,206,126) 100%);--wp--preset--gradient--midnight: linear-gradient(135deg,rgb(2,3,129) 0%,rgb(40,116,252) 100%);--wp--preset--duotone--dark-grayscale: url('#wp-duotone-dark-grayscale');--wp--preset--duotone--grayscale: url('#wp-duotone-grayscale');--wp--preset--duotone--purple-yellow: url('#wp-duotone-purple-yellow');--wp--preset--duotone--blue-red: url('#wp-duotone-blue-red');--wp--preset--duotone--midnight: url('#wp-duotone-midnight');--wp--preset--duotone--magenta-yellow: url('#wp-duotone-magenta-yellow');--wp--preset--duotone--purple-green: url('#wp-duotone-purple-green');--wp--preset--duotone--blue-orange: url('#wp-duotone-blue-orange');--wp--preset--font-size--small: 13px;--wp--preset--font-size--normal: 16px;--wp--preset--font-size--medium: 20px;--wp--preset--font-size--large: 36px;--wp--preset--font-size--huge: 42px;}.wp-site-blocks > .alignleft { float: left; margin-right: 2em; }.wp-site-blocks > .alignright { float: right; margin-left: 2em; }.wp-site-blocks > .aligncenter { justify-content: center; margin-left: auto; margin-right: auto; }.has-black-color{color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-color{color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-color{color: var(--wp--preset--color--white) !important;}.has-pale-pink-color{color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-color{color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-color{color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-color{color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-color{color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-color{color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-color{color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-color{color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-color{color: var(--wp--preset--color--vivid-purple) !important;}.has-ast-global-color-0-color{color: var(--wp--preset--color--ast-global-color-0) !important;}.has-ast-global-color-1-color{color: var(--wp--preset--color--ast-global-color-1) !important;}.has-ast-global-color-2-color{color: var(--wp--preset--color--ast-global-color-2) !important;}.has-ast-global-color-3-color{color: var(--wp--preset--color--ast-global-color-3) !important;}.has-ast-global-color-4-color{color: var(--wp--preset--color--ast-global-color-4) !important;}.has-ast-global-color-5-color{color: var(--wp--preset--color--ast-global-color-5) !important;}.has-ast-global-color-6-color{color: var(--wp--preset--color--ast-global-color-6) !important;}.has-ast-global-color-7-color{color: var(--wp--preset--color--ast-global-color-7) !important;}.has-ast-global-color-8-color{color: var(--wp--preset--color--ast-global-color-8) !important;}.has-black-background-color{background-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-background-color{background-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-background-color{background-color: var(--wp--preset--color--white) !important;}.has-pale-pink-background-color{background-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-background-color{background-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-background-color{background-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-background-color{background-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-background-color{background-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-background-color{background-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-background-color{background-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-background-color{background-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-background-color{background-color: var(--wp--preset--color--vivid-purple) !important;}.has-ast-global-color-0-background-color{background-color: var(--wp--preset--color--ast-global-color-0) !important;}.has-ast-global-color-1-background-color{background-color: var(--wp--preset--color--ast-global-color-1) !important;}.has-ast-global-color-2-background-color{background-color: var(--wp--preset--color--ast-global-color-2) !important;}.has-ast-global-color-3-background-color{background-color: var(--wp--preset--color--ast-global-color-3) !important;}.has-ast-global-color-4-background-color{background-color: var(--wp--preset--color--ast-global-color-4) !important;}.has-ast-global-color-5-background-color{background-color: var(--wp--preset--color--ast-global-color-5) !important;}.has-ast-global-color-6-background-color{background-color: var(--wp--preset--color--ast-global-color-6) !important;}.has-ast-global-color-7-background-color{background-color: var(--wp--preset--color--ast-global-color-7) !important;}.has-ast-global-color-8-background-color{background-color: var(--wp--preset--color--ast-global-color-8) !important;}.has-black-border-color{border-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-border-color{border-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-border-color{border-color: var(--wp--preset--color--white) !important;}.has-pale-pink-border-color{border-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-border-color{border-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-border-color{border-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-border-color{border-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-border-color{border-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-border-color{border-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-border-color{border-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-border-color{border-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-border-color{border-color: var(--wp--preset--color--vivid-purple) !important;}.has-ast-global-color-0-border-color{border-color: var(--wp--preset--color--ast-global-color-0) !important;}.has-ast-global-color-1-border-color{border-color: var(--wp--preset--color--ast-global-color-1) !important;}.has-ast-global-color-2-border-color{border-color: var(--wp--preset--color--ast-global-color-2) !important;}.has-ast-global-color-3-border-color{border-color: var(--wp--preset--color--ast-global-color-3) !important;}.has-ast-global-color-4-border-color{border-color: var(--wp--preset--color--ast-global-color-4) !important;}.has-ast-global-color-5-border-color{border-color: var(--wp--preset--color--ast-global-color-5) !important;}.has-ast-global-color-6-border-color{border-color: var(--wp--preset--color--ast-global-color-6) !important;}.has-ast-global-color-7-border-color{border-color: var(--wp--preset--color--ast-global-color-7) !important;}.has-ast-global-color-8-border-color{border-color: var(--wp--preset--color--ast-global-color-8) !important;}.has-vivid-cyan-blue-to-vivid-purple-gradient-background{background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;}.has-light-green-cyan-to-vivid-green-cyan-gradient-background{background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;}.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;}.has-luminous-vivid-orange-to-vivid-red-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;}.has-very-light-gray-to-cyan-bluish-gray-gradient-background{background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;}.has-cool-to-warm-spectrum-gradient-background{background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;}.has-blush-light-purple-gradient-background{background: var(--wp--preset--gradient--blush-light-purple) !important;}.has-blush-bordeaux-gradient-background{background: var(--wp--preset--gradient--blush-bordeaux) !important;}.has-luminous-dusk-gradient-background{background: var(--wp--preset--gradient--luminous-dusk) !important;}.has-pale-ocean-gradient-background{background: var(--wp--preset--gradient--pale-ocean) !important;}.has-electric-grass-gradient-background{background: var(--wp--preset--gradient--electric-grass) !important;}.has-midnight-gradient-background{background: var(--wp--preset--gradient--midnight) !important;}.has-small-font-size{font-size: var(--wp--preset--font-size--small) !important;}.has-normal-font-size{font-size: var(--wp--preset--font-size--normal) !important;}.has-medium-font-size{font-size: var(--wp--preset--font-size--medium) !important;}.has-large-font-size{font-size: var(--wp--preset--font-size--large) !important;}.has-huge-font-size{font-size: var(--wp--preset--font-size--huge) !important;}
</style>
<link rel="stylesheet" id="mapbox_gl_js_css-css" href="https://api.mapbox.com/mapbox-gl-js/v1.11.1/mapbox-gl.css?ver=5.8.1" media="all">
<link rel="stylesheet" id="mapbox_gl_js_geocoder_css-css" href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v2.2.0/mapbox-gl-geocoder.css?ver=5.8.1" media="all">
<link rel="stylesheet" id="mapbox_gl_js_directions_css-css" href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-directions/v3.1.1/mapbox-gl-directions.css?ver=5.8.1" media="all">
<link rel="stylesheet" id="wp-mapbox-gl-js-css" href="http://clairem8.sg-host.com/wp-content/plugins/wp-mapbox-gl-js/public/css/wp-mapbox-gl-js-public.css?ver=3.0.0" media="all">
<link rel="stylesheet" id="wpforms-admin-bar-css" href="http://clairem8.sg-host.com/wp-content/plugins/wpforms-lite/assets/css/admin-bar.min.css?ver=1.7.0" media="all">
<style id="wpforms-admin-bar-inline-css">
#wpadminbar .wpforms-menu-notification-indicator { background-color: #d63638 !important; }#wpadminbar .wpforms-menu-notification-counter { background-color: #d63638 !important; }
</style>
<link rel="stylesheet" id="um_fonticons_ii-css" href="http://clairem8.sg-host.com/wp-content/plugins/ultimate-member/assets/css/um-fonticons-ii.css?ver=2.2.5" media="all">
<link rel="stylesheet" id="um_fonticons_fa-css" href="http://clairem8.sg-host.com/wp-content/plugins/ultimate-member/assets/css/um-fonticons-fa.css?ver=2.2.5" media="all">
<link rel="stylesheet" id="select2-css" href="http://clairem8.sg-host.com/wp-content/plugins/ultimate-member/assets/css/select2/select2.min.css?ver=4.0.13" media="all">
<link rel="stylesheet" id="um_crop-css" href="http://clairem8.sg-host.com/wp-content/plugins/ultimate-member/assets/css/um-crop.css?ver=2.2.5" media="all">
<link rel="stylesheet" id="um_modal-css" href="http://clairem8.sg-host.com/wp-content/plugins/ultimate-member/assets/css/um-modal.css?ver=2.2.5" media="all">
<link rel="stylesheet" id="um_styles-css" href="http://clairem8.sg-host.com/wp-content/plugins/ultimate-member/assets/css/um-styles.css?ver=2.2.5" media="all">
<link rel="stylesheet" id="um_profile-css" href="http://clairem8.sg-host.com/wp-content/plugins/ultimate-member/assets/css/um-profile.css?ver=2.2.5" media="all">
<link rel="stylesheet" id="um_account-css" href="http://clairem8.sg-host.com/wp-content/plugins/ultimate-member/assets/css/um-account.css?ver=2.2.5" media="all">
<link rel="stylesheet" id="um_misc-css" href="http://clairem8.sg-host.com/wp-content/plugins/ultimate-member/assets/css/um-misc.css?ver=2.2.5" media="all">
<link rel="stylesheet" id="um_fileupload-css" href="http://clairem8.sg-host.com/wp-content/plugins/ultimate-member/assets/css/um-fileupload.css?ver=2.2.5" media="all">
<link rel="stylesheet" id="um_datetime-css" href="http://clairem8.sg-host.com/wp-content/plugins/ultimate-member/assets/css/pickadate/default.css?ver=2.2.5" media="all">
<link rel="stylesheet" id="um_datetime_date-css" href="http://clairem8.sg-host.com/wp-content/plugins/ultimate-member/assets/css/pickadate/default.date.css?ver=2.2.5" media="all">
<link rel="stylesheet" id="um_datetime_time-css" href="http://clairem8.sg-host.com/wp-content/plugins/ultimate-member/assets/css/pickadate/default.time.css?ver=2.2.5" media="all">
<link rel="stylesheet" id="um_raty-css" href="http://clairem8.sg-host.com/wp-content/plugins/ultimate-member/assets/css/um-raty.css?ver=2.2.5" media="all">
<link rel="stylesheet" id="um_scrollbar-css" href="http://clairem8.sg-host.com/wp-content/plugins/ultimate-member/assets/css/simplebar.css?ver=2.2.5" media="all">
<link rel="stylesheet" id="um_tipsy-css" href="http://clairem8.sg-host.com/wp-content/plugins/ultimate-member/assets/css/um-tipsy.css?ver=2.2.5" media="all">
<link rel="stylesheet" id="um_responsive-css" href="http://clairem8.sg-host.com/wp-content/plugins/ultimate-member/assets/css/um-responsive.css?ver=2.2.5" media="all">
<link rel="stylesheet" id="um_default_css-css" href="http://clairem8.sg-host.com/wp-content/plugins/ultimate-member/assets/css/um-old-default.css?ver=2.2.5" media="all">
<!--[if IE]>
<script src='http://clairem8.sg-host.com/wp-content/themes/astra/assets/js/minified/flexibility.min.js?ver=3.7.3' id='astra-flexibility-js'></script>
<script id='astra-flexibility-js-after'>
flexibility(document.documentElement);
</script>
<![endif]-->
<script src="http://clairem8.sg-host.com/wp-includes/js/jquery/jquery.min.js?ver=3.6.0" id="jquery-core-js"></script>
<script src="http://clairem8.sg-host.com/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.3.2" id="jquery-migrate-js"></script>
<script src="https://api.mapbox.com/mapbox-gl-js/v1.11.1/mapbox-gl.js?ver=5.8.1" id="mapbox_gl_js-js"></script>
<script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v2.2.0/mapbox-gl-geocoder.min.js?ver=5.8.1" id="mapbox_gl_geocoder_js-js"></script>
<script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-directions/v3.1.1/mapbox-gl-directions.js?ver=5.8.1" id="mapbox_gl_directions_js-js"></script>
<script src="http://clairem8.sg-host.com/wp-content/plugins/wp-mapbox-gl-js/public/js/wp-mapbox-gl-js-public.js?ver=849" id="wp-mapbox-gl-js-js"></script>
<script src="http://clairem8.sg-host.com/wp-content/plugins/ultimate-member/assets/js/um-gdpr.min.js?ver=2.2.5" id="um-gdpr-js"></script>
<link rel="https://api.w.org/" href="http://clairem8.sg-host.com/wp-json/"><link rel="alternate" type="application/json" href="http://clairem8.sg-host.com/wp-json/wp/v2/pages/161"><link rel="EditURI" type="application/rsd+xml" title="RSD" href="http://clairem8.sg-host.com/xmlrpc.php?rsd">
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="http://clairem8.sg-host.com/wp-includes/wlwmanifest.xml"> 
<meta name="generator" content="WordPress 5.8.1">
<link rel="canonical" href="http://clairem8.sg-host.com/locations/">
<link rel="shortlink" href="http://clairem8.sg-host.com/?p=161">
<link rel="alternate" type="application/json+oembed" href="http://clairem8.sg-host.com/wp-json/oembed/1.0/embed?url=http%3A%2F%2Fclairem8.sg-host.com%2Flocations%2F">
<link rel="alternate" type="text/xml+oembed" href="http://clairem8.sg-host.com/wp-json/oembed/1.0/embed?url=http%3A%2F%2Fclairem8.sg-host.com%2Flocations%2F&amp;format=xml">
		<style type="text/css">
			.um_request_name {
				display: none !important;
			}
		</style>
	<style id="extendify-custom-stylesheet" type="text/css"></style><style media="print">#wpadminbar { display:none; }</style>
	<style media="screen">
	html { margin-top: 32px !important; }
	* html body { margin-top: 32px !important; }
	@media screen and ( max-width: 782px ) {
		html { margin-top: 46px !important; }
		* html body { margin-top: 46px !important; }
	}
</style>
			<style id="wp-custom-css">
			 .generate-content-header .grid-container {
      max-width: 100%;
}

.navigation.post-navigation {
    display: none;
}
		</style>
		<style type="text/css">
@font-face {
  font-weight: 400;
  font-style:  normal;
  font-family: 'Circular-Loom';

  src: url('https://cdn.loom.com/assets/fonts/circular/CircularXXWeb-Book-cd7d2bcec649b1243839a15d5eb8f0a3.woff2') format('woff2');
}

@font-face {
  font-weight: 500;
  font-style:  normal;
  font-family: 'Circular-Loom';

  src: url('https://cdn.loom.com/assets/fonts/circular/CircularXXWeb-Medium-d74eac43c78bd5852478998ce63dceb3.woff2') format('woff2');
}

@font-face {
  font-weight: 700;
  font-style:  normal;
  font-family: 'Circular-Loom';

  src: url('https://cdn.loom.com/assets/fonts/circular/CircularXXWeb-Bold-83b8ceaf77f49c7cffa44107561909e4.woff2') format('woff2');
}

@font-face {
  font-weight: 900;
  font-style:  normal;
  font-family: 'Circular-Loom';

  src: url('https://cdn.loom.com/assets/fonts/circular/CircularXXWeb-Black-bf067ecb8aa777ceb6df7d72226febca.woff2') format('woff2');
}</style></head>

<body itemtype="https://schema.org/WebPage" itemscope="itemscope" class="page-template-default page page-id-161 logged-in admin-bar ast-single-post ast-inherit-site-logo-transparent ast-hfb-header ast-desktop ast-separate-container ast-no-sidebar astra-3.7.3 ast-full-width-primary-header eplus_styles ast-normal-title-enabled customize-support ast-mouse-clicked" style="" data-new-gr-c-s-check-loaded="14.1034.0" data-gr-ext-installed="">
	<script>
		(function() {
			var request, b = document.body, c = 'className', cs = 'customize-support', rcs = new RegExp('(^|\\s+)(no-)?'+cs+'(\\s+|$)');

				request = true;
	
			b[c] = b[c].replace( rcs, ' ' );
			// The customizer requires postMessage and CORS (if the site is cross domain).
			b[c] += ( window.postMessage && request ? ' ' : ' no-' ) + cs;
		}());
	</script>
			<div id="wpadminbar" class="nojq">
						<div class="quicklinks" id="wp-toolbar" role="navigation" aria-label="Toolbar">
				<ul id="wp-admin-bar-root-default" class="ab-top-menu"><li id="wp-admin-bar-wp-logo" class="menupop"><a class="ab-item" aria-haspopup="true" href="http://clairem8.sg-host.com/wp-admin/about.php"><span class="ab-icon" aria-hidden="true"></span><span class="screen-reader-text">About WordPress</span></a><div class="ab-sub-wrapper"><ul id="wp-admin-bar-wp-logo-default" class="ab-submenu"><li id="wp-admin-bar-about"><a class="ab-item" href="http://clairem8.sg-host.com/wp-admin/about.php">About WordPress</a></li></ul><ul id="wp-admin-bar-wp-logo-external" class="ab-sub-secondary ab-submenu"><li id="wp-admin-bar-wporg"><a class="ab-item" href="https://wordpress.org/">WordPress.org</a></li><li id="wp-admin-bar-documentation"><a class="ab-item" href="https://wordpress.org/support/">Documentation</a></li><li id="wp-admin-bar-support-forums"><a class="ab-item" href="https://wordpress.org/support/forums/">Support</a></li><li id="wp-admin-bar-feedback"><a class="ab-item" href="https://wordpress.org/support/forum/requests-and-feedback">Feedback</a></li></ul></div></li><li id="wp-admin-bar-site-name" class="menupop"><a class="ab-item" aria-haspopup="true" href="http://clairem8.sg-host.com/wp-admin/">Mid-Century Canberra</a><div class="ab-sub-wrapper"><ul id="wp-admin-bar-site-name-default" class="ab-submenu"><li id="wp-admin-bar-dashboard"><a class="ab-item" href="http://clairem8.sg-host.com/wp-admin/">Dashboard</a></li></ul><ul id="wp-admin-bar-appearance" class="ab-submenu"><li id="wp-admin-bar-themes"><a class="ab-item" href="http://clairem8.sg-host.com/wp-admin/themes.php">Themes</a></li><li id="wp-admin-bar-widgets"><a class="ab-item" href="http://clairem8.sg-host.com/wp-admin/widgets.php">Widgets</a></li><li id="wp-admin-bar-menus"><a class="ab-item" href="http://clairem8.sg-host.com/wp-admin/nav-menus.php">Menus</a></li></ul></div></li><li id="wp-admin-bar-customize" class="hide-if-no-customize"><a class="ab-item" href="http://clairem8.sg-host.com/wp-admin/customize.php?url=http%3A%2F%2Fclairem8.sg-host.com%2Flocations%2F">Customize</a></li><li id="wp-admin-bar-updates"><a class="ab-item" href="http://clairem8.sg-host.com/wp-admin/update-core.php"><span class="ab-icon" aria-hidden="true"></span><span class="ab-label" aria-hidden="true">1</span><span class="screen-reader-text updates-available-text">1 update available</span></a></li><li id="wp-admin-bar-comments"><a class="ab-item" href="http://clairem8.sg-host.com/wp-admin/edit-comments.php"><span class="ab-icon" aria-hidden="true"></span><span class="ab-label awaiting-mod pending-count count-0" aria-hidden="true">0</span><span class="screen-reader-text comments-in-moderation-text">0 Comments in moderation</span></a></li><li id="wp-admin-bar-new-content" class="menupop"><a class="ab-item" aria-haspopup="true" href="http://clairem8.sg-host.com/wp-admin/post-new.php"><span class="ab-icon" aria-hidden="true"></span><span class="ab-label">New</span></a><div class="ab-sub-wrapper"><ul id="wp-admin-bar-new-content-default" class="ab-submenu"><li id="wp-admin-bar-new-post"><a class="ab-item" href="http://clairem8.sg-host.com/wp-admin/post-new.php">Post</a></li><li id="wp-admin-bar-new-media"><a class="ab-item" href="http://clairem8.sg-host.com/wp-admin/media-new.php">Media</a></li><li id="wp-admin-bar-new-page"><a class="ab-item" href="http://clairem8.sg-host.com/wp-admin/post-new.php?post_type=page">Page</a></li><li id="wp-admin-bar-new-news-article"><a class="ab-item" href="http://clairem8.sg-host.com/wp-admin/post-new.php?post_type=news-article">News Article</a></li><li id="wp-admin-bar-new-architect"><a class="ab-item" href="http://clairem8.sg-host.com/wp-admin/post-new.php?post_type=architect">Architect</a></li><li id="wp-admin-bar-new-houses"><a class="ab-item" href="http://clairem8.sg-host.com/wp-admin/post-new.php?post_type=houses">House</a></li><li id="wp-admin-bar-new-gl_js_maps"><a class="ab-item" href="http://clairem8.sg-host.com/wp-admin/post-new.php?post_type=gl_js_maps">GL JS Map</a></li><li id="wp-admin-bar-new-udb_widgets"><a class="ab-item" href="http://clairem8.sg-host.com/wp-admin/post-new.php?post_type=udb_widgets">Dashboard Widget</a></li><li id="wp-admin-bar-new-user"><a class="ab-item" href="http://clairem8.sg-host.com/wp-admin/user-new.php">User</a></li><li id="wp-admin-bar-wpforms"><a class="ab-item" href="http://clairem8.sg-host.com/wp-admin/admin.php?page=wpforms-builder">WPForms</a></li></ul></div></li><li id="wp-admin-bar-edit"><a class="ab-item" href="http://clairem8.sg-host.com/wp-admin/post.php?post=161&amp;action=edit">Edit Page</a></li><li id="wp-admin-bar-wpforms-menu" class="menupop"><a class="ab-item" aria-haspopup="true" href="http://clairem8.sg-host.com/wp-admin/admin.php?page=wpforms-overview">WPForms</a><div class="ab-sub-wrapper"><ul id="wp-admin-bar-wpforms-menu-default" class="ab-submenu">
	<li id="wp-admin-bar-wpforms-form-id-181" class="menupop wpforms-menu-form wpforms-menu-form-last">
		<div class="ab-item ab-empty-item" aria-haspopup="true"><span class="wp-admin-bar-arrow" aria-hidden="true"></span>Contact</div>
		<div class="ab-sub-wrapper">
			<ul id="wp-admin-bar-wpforms-form-id-181-default" class="ab-submenu">
							<li id="wp-admin-bar-wpforms-form-id-181-edit">
					<a class="ab-item" href="http://clairem8.sg-host.com/wp-admin/admin.php?page=wpforms-builder&amp;view=fields&amp;form_id=181">Edit Form</a>
				</li>
												</ul>
		</div>
	</li>
<li id="wp-admin-bar-wpforms-forms"><a class="ab-item" href="http://clairem8.sg-host.com/wp-admin/admin.php?page=wpforms-overview">All Forms</a></li><li id="wp-admin-bar-wpforms-add-new"><a class="ab-item" href="http://clairem8.sg-host.com/wp-admin/admin.php?page=wpforms-builder">Add New</a></li><li id="wp-admin-bar-wpforms-community"><a class="ab-item" href="https://www.facebook.com/groups/wpformsvip/" target="_blank" rel="noopener noreferrer">Community</a></li><li id="wp-admin-bar-wpforms-support"><a class="ab-item" href="https://wpforms.com/docs/" target="_blank" rel="noopener noreferrer">Support</a></li></ul></div></li></ul><ul id="wp-admin-bar-top-secondary" class="ab-top-secondary ab-top-menu"><li id="wp-admin-bar-search" class="admin-bar-search"><div class="ab-item ab-empty-item" tabindex="-1"><form action="http://clairem8.sg-host.com/" method="get" id="adminbarsearch"><input class="adminbar-input" name="s" id="adminbar-search" type="text" value="" maxlength="150"><label for="adminbar-search" class="screen-reader-text">Search</label><input type="submit" class="adminbar-button" value="Search"></form></div></li><li id="wp-admin-bar-my-account" class="menupop with-avatar"><a class="ab-item" aria-haspopup="true" href="http://clairem8.sg-host.com/wp-admin/profile.php">Howdy, <span class="display-name">jose850</span><img src="http://clairem8.sg-host.com/wp-content/plugins/ultimate-member/assets/img/default_avatar.jpg" class="gravatar avatar avatar-26 um-avatar um-avatar-default" width="26" height="26" alt="jose850" data-default="http://clairem8.sg-host.com/wp-content/plugins/ultimate-member/assets/img/default_avatar.jpg" onerror="if ( ! this.getAttribute('data-load-error') ){ this.setAttribute('data-load-error', '1');this.setAttribute('src', this.getAttribute('data-default'));}"></a><div class="ab-sub-wrapper"><ul id="wp-admin-bar-user-actions" class="ab-submenu"><li id="wp-admin-bar-user-info"><a class="ab-item" tabindex="-1" href="http://clairem8.sg-host.com/wp-admin/profile.php"><img src="http://clairem8.sg-host.com/wp-content/plugins/ultimate-member/assets/img/default_avatar.jpg" class="gravatar avatar avatar-64 um-avatar um-avatar-default" width="64" height="64" alt="jose850" data-default="http://clairem8.sg-host.com/wp-content/plugins/ultimate-member/assets/img/default_avatar.jpg" onerror="if ( ! this.getAttribute('data-load-error') ){ this.setAttribute('data-load-error', '1');this.setAttribute('src', this.getAttribute('data-default'));}"><span class="display-name">jose850</span></a></li><li id="wp-admin-bar-edit-profile"><a class="ab-item" href="http://clairem8.sg-host.com/wp-admin/profile.php">Edit Profile</a></li><li id="wp-admin-bar-logout"><a class="ab-item" href="http://clairem8.sg-host.com/wp-login.php?action=logout&amp;_wpnonce=18f802f20f">Log Out</a></li></ul></div></li></ul>			</div>
						<a class="screen-reader-shortcut" href="http://clairem8.sg-host.com/wp-login.php?action=logout&amp;_wpnonce=18f802f20f">Log Out</a>
					</div>

		<div class="hfeed site" id="page">
	<a class="skip-link screen-reader-text" href="#content">Skip to content</a>
			<header class="site-header header-main-layout-1 ast-primary-menu-enabled ast-logo-title-inline ast-hide-custom-menu-mobile ast-builder-menu-toggle-icon ast-mobile-header-inline" id="masthead" itemtype="https://schema.org/WPHeader" itemscope="itemscope" itemid="#masthead">
			<div id="ast-desktop-header" data-toggle-type="dropdown">
		<div class="ast-main-header-wrap main-header-bar-wrap ">
		<div class="ast-primary-header-bar ast-primary-header main-header-bar site-header-focus-item" data-section="section-primary-header-builder">
						<div class="site-primary-header-wrap ast-builder-grid-row-container site-header-focus-item ast-container" data-section="section-primary-header-builder">
				<div class="ast-builder-grid-row ast-builder-grid-row-has-sides ast-builder-grid-row-no-center">
											<div class="site-header-primary-section-left site-header-section ast-flex site-header-section-left">
									<div class="ast-builder-layout-element ast-flex site-header-focus-item" data-section="title_tagline">
											<div class="site-branding ast-site-identity" itemtype="https://schema.org/Organization" itemscope="itemscope">
					<div class="ast-site-title-wrap">
						<span class="site-title" itemprop="name">
				<a href="http://clairem8.sg-host.com/" rel="home" itemprop="url">
					Mid-Century Canberra
				</a>
			</span>
						
				</div>				</div>
			<!-- .site-branding -->
					</div>
								</div>
																									<div class="site-header-primary-section-right site-header-section ast-flex ast-grid-right-section">
										<div class="ast-builder-menu-1 ast-builder-menu ast-flex ast-builder-menu-1-focus-item ast-builder-layout-element site-header-focus-item" data-section="section-hb-menu-1">
			<div class="ast-main-header-bar-alignment"><div class="main-header-bar-navigation"><nav class="ast-flex-grow-1 navigation-accessibility site-header-focus-item" id="site-navigation" aria-label="Site Navigation" itemtype="https://schema.org/SiteNavigationElement" itemscope="itemscope"><div class="main-navigation ast-inline-flex"><ul id="ast-hf-menu-1" class="main-header-menu ast-nav-menu ast-flex  submenu-with-border astra-menu-animation-slide-down  ast-menu-hover-style-underline  stack-on-mobile" aria-expanded="false"><li id="menu-item-114" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-114"><a href="http://clairem8.sg-host.com/news/" class="menu-link">News</a></li>
<li id="menu-item-115" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-115"><a href="http://clairem8.sg-host.com/house/" class="menu-link">Houses</a></li>
<li id="menu-item-122" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-122"><a href="http://clairem8.sg-host.com/architects/" class="menu-link">Architects</a></li>
<li id="menu-item-167" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-161 current_page_item menu-item-167"><a href="http://clairem8.sg-host.com/locations/" aria-current="page" class="menu-link">Locations</a></li>
<li id="menu-item-177" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-177"><a href="#searchwp-modal-652ea0d21b1427a1bfa685e40d9bc1de" class="menu-link" data-searchwp-modal-trigger="searchwp-modal-652ea0d21b1427a1bfa685e40d9bc1de">Search</a></li>
</ul></div></nav></div></div>		</div>
									</div>
												</div>
					</div>
								</div>
			</div>
		<div class="ast-desktop-header-content content-align-flex-start " style="display: none;">
			</div>
</div> <!-- Main Header Bar Wrap -->
<div id="ast-mobile-header" class="ast-mobile-header-wrap " data-type="dropdown">
		<div class="ast-main-header-wrap main-header-bar-wrap">
		<div class="ast-primary-header-bar ast-primary-header main-header-bar site-primary-header-wrap site-header-focus-item ast-builder-grid-row-layout-default ast-builder-grid-row-tablet-layout-default ast-builder-grid-row-mobile-layout-default" data-section="section-primary-header-builder">
									<div class="ast-builder-grid-row ast-builder-grid-row-has-sides ast-builder-grid-row-no-center">
													<div class="site-header-primary-section-left site-header-section ast-flex site-header-section-left">
										<div class="ast-builder-layout-element ast-flex site-header-focus-item" data-section="title_tagline">
											<div class="site-branding ast-site-identity" itemtype="https://schema.org/Organization" itemscope="itemscope">
					<div class="ast-site-title-wrap">
						<span class="site-title" itemprop="name">
				<a href="http://clairem8.sg-host.com/" rel="home" itemprop="url">
					Mid-Century Canberra
				</a>
			</span>
						
				</div>				</div>
			<!-- .site-branding -->
					</div>
									</div>
																									<div class="site-header-primary-section-right site-header-section ast-flex ast-grid-right-section">
										<div class="ast-builder-layout-element ast-flex site-header-focus-item" data-section="section-header-mobile-trigger">
						<div class="ast-button-wrap">
				<button type="button" class="menu-toggle main-header-menu-toggle ast-mobile-menu-trigger-minimal" aria-expanded="false" data-index="0">
					<span class="screen-reader-text">Main Menu</span>
					<span class="mobile-menu-toggle-icon">
						<span class="ahfb-svg-iconset ast-inline-flex svg-baseline"><svg role="img" class="ast-mobile-svg ast-menu-svg" fill="currentColor" version="1.1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M3 13h18c0.552 0 1-0.448 1-1s-0.448-1-1-1h-18c-0.552 0-1 0.448-1 1s0.448 1 1 1zM3 7h18c0.552 0 1-0.448 1-1s-0.448-1-1-1h-18c-0.552 0-1 0.448-1 1s0.448 1 1 1zM3 19h18c0.552 0 1-0.448 1-1s-0.448-1-1-1h-18c-0.552 0-1 0.448-1 1s0.448 1 1 1z"></path></svg></span><span class="ahfb-svg-iconset ast-inline-flex svg-baseline"><svg class="ast-mobile-svg ast-close-svg" fill="currentColor" version="1.1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M5.293 6.707l5.293 5.293-5.293 5.293c-0.391 0.391-0.391 1.024 0 1.414s1.024 0.391 1.414 0l5.293-5.293 5.293 5.293c0.391 0.391 1.024 0.391 1.414 0s0.391-1.024 0-1.414l-5.293-5.293 5.293-5.293c0.391-0.391 0.391-1.024 0-1.414s-1.024-0.391-1.414 0l-5.293 5.293-5.293-5.293c-0.391-0.391-1.024-0.391-1.414 0s-0.391 1.024 0 1.414z"></path></svg></span>					</span>
									</button>
			</div>
					</div>
									</div>
											</div>
						</div>
	</div>
		<div class="ast-mobile-header-content content-align-flex-start ">
				<div class="ast-builder-menu-mobile ast-builder-menu ast-builder-menu-mobile-focus-item ast-builder-layout-element site-header-focus-item" data-section="section-header-mobile-menu">
			<div class="ast-main-header-bar-alignment"><div class="main-header-bar-navigation"><nav class="ast-flex-grow-1 navigation-accessibility site-header-focus-item" id="site-navigation" aria-label="Site Navigation" itemtype="https://schema.org/SiteNavigationElement" itemscope="itemscope"><div class="main-navigation"><ul id="ast-hf-mobile-menu" class="main-header-menu ast-nav-menu ast-flex  submenu-with-border astra-menu-animation-fade  stack-on-mobile" aria-expanded="false"><li id="menu-item-229" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-229"><a href="http://clairem8.sg-host.com/news/" class="menu-link">News</a></li>
<li id="menu-item-230" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-230"><a href="http://clairem8.sg-host.com/house/" class="menu-link">Houses</a></li>
<li id="menu-item-231" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-231"><a href="http://clairem8.sg-host.com/architects/" class="menu-link">Architects</a></li>
<li id="menu-item-232" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-161 current_page_item menu-item-232"><a href="http://clairem8.sg-host.com/locations/" aria-current="page" class="menu-link">Locations</a></li>
<li id="menu-item-234" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-234"><a href="http://clairem8.sg-host.com/contact/" class="menu-link">Contact</a></li>
<li id="menu-item-233" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-233"><a href="http://clairem8.sg-host.com/about/" class="menu-link">About</a></li>
</ul></div></nav></div></div>		</div>
			</div>
</div>
		</header><!-- #masthead -->
		<div class="main-header-bar ast-header-breadcrumb">
							<div class="ast-container">	<div class="ast-breadcrumbs-wrapper">
		<div class="ast-breadcrumbs-inner">
			<nav role="navigation" aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs"><div class="ast-breadcrumbs"><ul class="trail-items" itemscope="" itemtype="http://schema.org/BreadcrumbList"><meta content="2" name="numberOfItems"><meta name="itemListOrder" content="Ascending"><li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem" class="trail-item trail-begin"><a href="http://clairem8.sg-host.com/" rel="home" itemprop="item"><span itemprop="name">Home</span></a><meta itemprop="position" content="1"></li><li class="trail-item trail-end"><span><span>Locations</span></span></li></ul></div></nav>		</div>
	</div>
		</div>
					</div>	<div id="content" class="site-content">
		<div class="ast-container">
		

	<div id="primary" class="content-area primary">

		
					<main id="main" class="site-main">
				<article class="post-161 page type-page status-publish ast-article-single" id="post-161" itemtype="https://schema.org/CreativeWork" itemscope="itemscope">
		<header class="entry-header ast-no-thumbnail ast-no-meta">
		
		<h1 class="entry-title" itemprop="headline">Locations</h1>	</header><!-- .entry-header -->

	<div class="entry-content clear" itemprop="text">

		
						<input type="hidden" id="wp_mapbox_gl_js_wordpress_url" value="http://clairem8.sg-host.com">
				<input type="hidden" id="wp_mapbox_gl_js_plugin_url" value="http://clairem8.sg-host.com/wp-content/plugins">
				<div><div class="wp-mapbox-gl-js-location-sidebar"><p><strong>Locations</strong></p><ul><li data-bounds="[[149.156209,-35.23867],[149.156209,-35.23867]]">McKeown Houses</li><li data-bounds="[[149.127166,-35.319066],[149.127166,-35.319066]]">Manning Clark House</li><li data-bounds="[[149.12675,-35.3186322],[149.12675,-35.3186322]]">Forrest Townhouses</li><li data-bounds="[[149.126558,-35.32399],[149.126558,-35.32399]]">Fenner House</li><li data-bounds="[[149.112361,-35.314593],[149.112361,-35.314593]]">Bowden House</li><li data-bounds="[[149.153189,-35.293526],[149.153189,-35.293526]]">46 Vasey Crescent</li></ul></div><div id="wp_mapbox_gl_js_map-485386994" style="height: 50em; width: 789.25px; float: right;" data-center="149.153189,-35.293526" data-zoom="16" data-scroll-zoom="true" data-pitch="0" data-bearing="0" data-style="mapbox://styles/mapbox/streets-v10" data-controls="{&quot;navigation&quot;:true,&quot;geocoder&quot;:true,&quot;fullscreen&quot;:true,&quot;scale&quot;:true,&quot;directions&quot;:false,&quot;scrollZoom&quot;:true,&quot;categoryFilter&quot;:false,&quot;layerFilter&quot;:false,&quot;preFillInput&quot;:false,&quot;geolocaterControl&quot;:false,&quot;locationSidebar&quot;:true,&quot;markerNoDisappear&quot;:false,&quot;clusterMarkers&quot;:false}" data-mapdata="[{&quot;type&quot;:&quot;Feature&quot;,&quot;id&quot;:&quot;149.156209,-35.23867&quot;,&quot;geometry&quot;:{&quot;type&quot;:&quot;Point&quot;,&quot;coordinates&quot;:[149.156208999999989828211255371570587158203125,-35.2386699999999990495780366472899913787841796875]},&quot;properties&quot;:{&quot;name&quot;:&quot;&quot;,&quot;description&quot;:&quot;<div class=\&quot;mceTemp\&quot;><dl id=\&quot;attachment_335\&quot; class=\&quot;wp-caption alignnone\&quot; style=\&quot;width: 300px;\&quot; data-mce-style=\&quot;width: 300px;\&quot;><dt class=\&quot;wp-caption-dt\&quot;><img class=\&quot;size-medium wp-image-335\&quot; src=\&quot;http:\/\/clairem8.sg-host.com\/wp-content\/uploads\/2021\/10\/mckeon-1-e1634126646486-300x225.jpg\&quot; alt=\&quot;McKeown Houses, 109 Irvine Street, Watson (1965 &amp; 1993)\&quot; width=\&quot;300\&quot; height=\&quot;225\&quot; data-mce-src=\&quot;http:\/\/clairem8.sg-host.com\/wp-content\/uploads\/2021\/10\/mckeon-1-e1634126646486-300x225.jpg\&quot;><\/dt><\/dl><\/div><p class=\&quot;wp-block-post-excerpt__excerpt\&quot;>These two houses at 109 Irvine Street, Watson are unusual in that they were designed 30 years apart by the same architect for the same client on the same block of land. Both were designed by Enrico Taglietti and are excellent examples of his sculptural organic style of architecture. Taglietti has designed many buildings and \u2026<\/p><p class=\&quot;read-more\&quot;><a class=\&quot;\&quot; href=\&quot;http:\/\/clairem8.sg-host.com\/mckeown-houses\/\&quot; data-mce-href=\&quot;http:\/\/clairem8.sg-host.com\/mckeown-houses\/\&quot;><span class=\&quot;screen-reader-text\&quot;>McKeown Houses, 109 Irvine Street, Watson (1965 &amp; 1993)<\/span>Read More \u00bb<\/a><\/p>&quot;,&quot;color&quot;:&quot;#333&quot;,&quot;marker_icon_url&quot;:&quot;http:\/\/clairem8.sg-host.com\/wp-content\/plugins\/wp-mapbox-gl-js\/admin\/wp-mapmaker\/public\/img\/maki\/village-15.svg-wp_mapbox_gl_js_sizing-100-100&quot;,&quot;marker_icon_anchor&quot;:&quot;bottom&quot;,&quot;marker_title&quot;:&quot;McKeown Houses&quot;,&quot;category&quot;:&quot;&quot;,&quot;opacity&quot;:0.40000000000000002220446049250313080847263336181640625,&quot;popup_open&quot;:false}},{&quot;type&quot;:&quot;Feature&quot;,&quot;id&quot;:&quot;149.127166,-35.319066&quot;,&quot;geometry&quot;:{&quot;type&quot;:&quot;Point&quot;,&quot;coordinates&quot;:[149.127165999999988343915902078151702880859375,-35.31906599999999940564521239139139652252197265625]},&quot;properties&quot;:{&quot;name&quot;:&quot;&quot;,&quot;description&quot;:&quot;<div class=\&quot;mceTemp\&quot;><dl id=\&quot;attachment_55\&quot; class=\&quot;wp-caption alignnone\&quot; style=\&quot;width: 225px;\&quot; data-mce-style=\&quot;width: 225px;\&quot;><dt class=\&quot;wp-caption-dt\&quot;><img class=\&quot;size-medium wp-image-55\&quot; src=\&quot;http:\/\/clairem8.sg-host.com\/wp-content\/uploads\/2021\/09\/manning-clark-7-photo-copyright-anthiny-basheer-225x300.jpg\&quot; alt=\&quot;Manning Clark House, 11 Tasmania Circle, Forrest (1952)\&quot; width=\&quot;225\&quot; height=\&quot;300\&quot; data-mce-src=\&quot;http:\/\/clairem8.sg-host.com\/wp-content\/uploads\/2021\/09\/manning-clark-7-photo-copyright-anthiny-basheer-225x300.jpg\&quot;><\/dt><\/dl><\/div><p class=\&quot;wp-block-post-excerpt__excerpt\&quot;>The Manning Clark House, at 11 Tasmania Circle, Forrest was designed by Robin Boyd in 1952 for Professor and Mrs Manning Clark. The house is typical of the post-war Melbourne regional style and Boyd\u2019s Peninsula House Design, with its low pitched gable roof, widely projecting eaves and large areas of timber framed glazing. It makes \u2026<\/p><p class=\&quot;read-more\&quot;><a class=\&quot;\&quot; href=\&quot;http:\/\/clairem8.sg-host.com\/tasmania-circle\/\&quot; data-mce-href=\&quot;http:\/\/clairem8.sg-host.com\/tasmania-circle\/\&quot;><span class=\&quot;screen-reader-text\&quot;>Manning Clark House, 11 Tasmania Circle, Forrest (1952)<\/span>Read More \u00bb<\/a><\/p>&quot;,&quot;color&quot;:&quot;#333&quot;,&quot;marker_icon_url&quot;:&quot;http:\/\/clairem8.sg-host.com\/wp-content\/plugins\/wp-mapbox-gl-js\/admin\/wp-mapmaker\/public\/img\/maki\/village-15.svg-wp_mapbox_gl_js_sizing-100-100&quot;,&quot;marker_icon_anchor&quot;:&quot;bottom&quot;,&quot;marker_title&quot;:&quot;Manning Clark House&quot;,&quot;category&quot;:&quot;&quot;,&quot;opacity&quot;:0.40000000000000002220446049250313080847263336181640625,&quot;popup_open&quot;:false}},{&quot;type&quot;:&quot;Feature&quot;,&quot;id&quot;:&quot;149.12675,-35.3186322&quot;,&quot;geometry&quot;:{&quot;type&quot;:&quot;Point&quot;,&quot;coordinates&quot;:[149.126749999999987039700499735772609710693359375,-35.31863220000000325171640724875032901763916015625]},&quot;properties&quot;:{&quot;name&quot;:&quot;&quot;,&quot;description&quot;:&quot;<div class=\&quot;mceTemp\&quot;><dl id=\&quot;attachment_46\&quot; class=\&quot;wp-caption alignnone\&quot; style=\&quot;width: 300px;\&quot; data-mce-style=\&quot;width: 300px;\&quot;><dt class=\&quot;wp-caption-dt\&quot;><img class=\&quot;size-medium wp-image-46\&quot; src=\&quot;http:\/\/clairem8.sg-host.com\/wp-content\/uploads\/2021\/09\/forrest-townhouses-3-300x225.jpg\&quot; alt=\&quot;Forrest Townhouses, 3 Tasmania Circle, Forrest (1959)\&quot; width=\&quot;300\&quot; height=\&quot;225\&quot; data-mce-src=\&quot;http:\/\/clairem8.sg-host.com\/wp-content\/uploads\/2021\/09\/forrest-townhouses-3-300x225.jpg\&quot;><\/dt><\/dl><\/div><p class=\&quot;wp-block-post-excerpt__excerpt\&quot;>The Forrest Townhouses at 3 Tasmania Circle, Forrest are a group of five townhouses, a small attached bedsitter and a separate courtyard house linked by carports and a covered walkway. Designed by Roy Grounds as a speculative venture in 1959, they are the only townhouses in Canberra designed by Grounds. Grounds\u2019 own unit was the \u2026<\/p><p class=\&quot;read-more\&quot;><a class=\&quot;\&quot; href=\&quot;http:\/\/clairem8.sg-host.com\/forrest-townhouses\/\&quot; data-mce-href=\&quot;http:\/\/clairem8.sg-host.com\/forrest-townhouses\/\&quot;><span class=\&quot;screen-reader-text\&quot;>Forrest Townhouses, 3 Tasmania Circle, Forrest (1959)<\/span>Read More \u00bb<\/a><\/p>&quot;,&quot;color&quot;:&quot;#333&quot;,&quot;marker_icon_url&quot;:&quot;http:\/\/clairem8.sg-host.com\/wp-content\/plugins\/wp-mapbox-gl-js\/admin\/wp-mapmaker\/public\/img\/maki\/village-15.svg-wp_mapbox_gl_js_sizing-100-100&quot;,&quot;marker_icon_anchor&quot;:&quot;bottom&quot;,&quot;marker_title&quot;:&quot;Forrest Townhouses&quot;,&quot;category&quot;:&quot;&quot;,&quot;opacity&quot;:0.40000000000000002220446049250313080847263336181640625,&quot;popup_open&quot;:false}},{&quot;type&quot;:&quot;Feature&quot;,&quot;id&quot;:&quot;149.126558,-35.32399&quot;,&quot;geometry&quot;:{&quot;type&quot;:&quot;Point&quot;,&quot;coordinates&quot;:[149.12655799999998862404027022421360015869140625,-35.32399000000000199861460714600980281829833984375]},&quot;properties&quot;:{&quot;name&quot;:&quot;&quot;,&quot;description&quot;:&quot;<div class=\&quot;mceTemp\&quot;><dl id=\&quot;attachment_41\&quot; class=\&quot;wp-caption alignnone\&quot; style=\&quot;width: 300px;\&quot; data-mce-style=\&quot;width: 300px;\&quot;><dt class=\&quot;wp-caption-dt\&quot;><img class=\&quot;size-medium wp-image-41\&quot; src=\&quot;http:\/\/clairem8.sg-host.com\/wp-content\/uploads\/2021\/09\/fenner-house-6-300x225.jpg\&quot; alt=\&quot;Fenner House, 8 Monaro Crescent, Red Hill (1952-53)\&quot; width=\&quot;300\&quot; height=\&quot;225\&quot; data-mce-src=\&quot;http:\/\/clairem8.sg-host.com\/wp-content\/uploads\/2021\/09\/fenner-house-6-300x225.jpg\&quot;><\/dt><\/dl><\/div><p class=\&quot;wp-block-post-excerpt__excerpt\&quot;>The Fenner House, at 8 Monaro Crescent, Red Hill, is located within the Red Hill heritage precinct. It was designed by Robin Boyd in 1952\u201353 for Professor and Mrs Frank Fenner, and built by Karl Schreiner in 1953-54. Professor Frank Fenner AC, CMG, MBE, FAA (21 December 1914 \u2013 22 November 2010) was one of \u2026<\/p><p class=\&quot;read-more\&quot;><a class=\&quot;\&quot; href=\&quot;http:\/\/clairem8.sg-host.com\/monaro-crescent\/\&quot; data-mce-href=\&quot;http:\/\/clairem8.sg-host.com\/monaro-crescent\/\&quot;><span class=\&quot;screen-reader-text\&quot;>Fenner House, 8 Monaro Crescent, Red Hill (1952-53)<\/span>Read More \u00bb<\/a><\/p>&quot;,&quot;color&quot;:&quot;#333&quot;,&quot;marker_icon_url&quot;:&quot;http:\/\/clairem8.sg-host.com\/wp-content\/plugins\/wp-mapbox-gl-js\/admin\/wp-mapmaker\/public\/img\/maki\/village-15.svg-wp_mapbox_gl_js_sizing-100-100&quot;,&quot;marker_icon_anchor&quot;:&quot;bottom&quot;,&quot;marker_title&quot;:&quot;Fenner House&quot;,&quot;category&quot;:&quot;&quot;,&quot;opacity&quot;:0.40000000000000002220446049250313080847263336181640625,&quot;popup_open&quot;:false}},{&quot;type&quot;:&quot;Feature&quot;,&quot;id&quot;:&quot;149.112361,-35.314593&quot;,&quot;geometry&quot;:{&quot;type&quot;:&quot;Point&quot;,&quot;coordinates&quot;:[149.112360999999992827724781818687915802001953125,-35.31459300000000212094164453446865081787109375]},&quot;properties&quot;:{&quot;name&quot;:&quot;&quot;,&quot;description&quot;:&quot;<div class=\&quot;mceTemp\&quot;><dl id=\&quot;attachment_31\&quot; class=\&quot;wp-caption alignnone\&quot; style=\&quot;width: 300px;\&quot; data-mce-style=\&quot;width: 300px;\&quot;><dt class=\&quot;wp-caption-dt\&quot;><img class=\&quot;size-medium wp-image-31\&quot; src=\&quot;http:\/\/clairem8.sg-host.com\/wp-content\/uploads\/2021\/09\/bowden-house-2-300x225.jpg\&quot; alt=\&quot;Bowden House, 11 Northcote Crescent, Deakin (1951-52)\&quot; width=\&quot;300\&quot; height=\&quot;225\&quot; data-mce-src=\&quot;http:\/\/clairem8.sg-host.com\/wp-content\/uploads\/2021\/09\/bowden-house-2-300x225.jpg\&quot;><\/dt><\/dl><\/div><p class=\&quot;wp-block-post-excerpt__excerpt\&quot;>The Bowden House at 11 Northcote Crescent, Deakin was designed by Harry Seidler and Associates in 1951\u201352 for Mr I G Bowden. Construction was completed in 1955. The house is an early example of the post-war international style with its cubiform shape, Corbusian window motif, overhang for shade, plain smooth wall surfaces, contrasting textures and \u2026<\/p><p class=\&quot;read-more\&quot;><a class=\&quot;\&quot; href=\&quot;http:\/\/clairem8.sg-host.com\/northcote-crescent\/\&quot; data-mce-href=\&quot;http:\/\/clairem8.sg-host.com\/northcote-crescent\/\&quot;><span class=\&quot;screen-reader-text\&quot;>Bowden House, 11 Northcote Crescent, Deakin (1951-52)<\/span>Read More \u00bb<\/a><\/p>&quot;,&quot;color&quot;:&quot;#333&quot;,&quot;marker_icon_url&quot;:&quot;http:\/\/clairem8.sg-host.com\/wp-content\/plugins\/wp-mapbox-gl-js\/admin\/wp-mapmaker\/public\/img\/maki\/village-15.svg-wp_mapbox_gl_js_sizing-100-100&quot;,&quot;marker_icon_anchor&quot;:&quot;bottom&quot;,&quot;marker_title&quot;:&quot;Bowden House&quot;,&quot;category&quot;:&quot;&quot;,&quot;opacity&quot;:0.40000000000000002220446049250313080847263336181640625,&quot;popup_open&quot;:false}},{&quot;type&quot;:&quot;Feature&quot;,&quot;id&quot;:&quot;149.153189,-35.293526&quot;,&quot;geometry&quot;:{&quot;type&quot;:&quot;Point&quot;,&quot;coordinates&quot;:[149.1531889999999975771061144769191741943359375,-35.2935259999999999536157702095806598663330078125]},&quot;properties&quot;:{&quot;name&quot;:&quot;&quot;,&quot;description&quot;:&quot;<p><img class=\&quot;size-medium wp-image-67\&quot; src=\&quot;http:\/\/clairem8.sg-host.com\/wp-content\/uploads\/2021\/09\/vasey-cres-5-300x225.jpg\&quot; alt=\&quot;Image of Vasey Cresent Building\&quot; width=\&quot;300\&quot; height=\&quot;225\&quot; data-mce-src=\&quot;http:\/\/clairem8.sg-host.com\/wp-content\/uploads\/2021\/09\/vasey-cres-5-300x225.jpg\&quot;><\/p><p class=\&quot;wp-block-post-excerpt__excerpt\&quot;>42, 44 and 46 Vasey Crescent, Campbell were designed by Roy Grounds of the firm Grounds, Romberg and Boyd in 1960. As a result of a collaboration between the owners of each block, the three houses were designed by the same architect and built as a coordinated group. When Grounds received the commission to design \u2026<\/p><p class=\&quot;read-more\&quot;><a class=\&quot;\&quot; href=\&quot;http:\/\/clairem8.sg-host.com\/vasey-crescent\/\&quot; data-mce-href=\&quot;http:\/\/clairem8.sg-host.com\/vasey-crescent\/\&quot;><span class=\&quot;screen-reader-text\&quot;>42, 44 &amp; 46 Vasey Crescent, Campbell (1960)<\/span>Read More \u00bb<\/a><\/p>&quot;,&quot;color&quot;:&quot;#333&quot;,&quot;marker_icon_url&quot;:&quot;http:\/\/clairem8.sg-host.com\/wp-content\/plugins\/wp-mapbox-gl-js\/admin\/wp-mapmaker\/public\/img\/maki\/village-15.svg-wp_mapbox_gl_js_sizing-100-100&quot;,&quot;marker_icon_anchor&quot;:&quot;bottom&quot;,&quot;marker_title&quot;:&quot;46 Vasey Crescent&quot;,&quot;category&quot;:&quot;&quot;,&quot;opacity&quot;:0.40000000000000002220446049250313080847263336181640625,&quot;popup_open&quot;:false}}]" data-token="pk.eyJ1IjoibnVnbWM3IiwiYSI6ImNrdXFwMmE0bTR4bDgydW84MTczMzJ4bnQifQ.ELNGQu9bmwasNHuVUZT96w" data-map-categories="[]" data-map-origin="&quot;&quot;" data-map-destination="&quot;&quot;" data-map-layers-filter="[]" class="wp-mapbox-gl-js-map mapboxgl-map"><div class="mapboxgl-canary" style="visibility: hidden;"></div><div class="mapboxgl-canvas-container mapboxgl-interactive mapboxgl-touch-drag-pan mapboxgl-touch-zoom-rotate"><canvas class="mapboxgl-canvas" tabindex="0" aria-label="Map" width="1578" height="1200" style="width: 789px; height: 600px;"></canvas></div><div class="mapboxgl-control-container"><div class="mapboxgl-ctrl-top-left"><div class="mapboxgl-ctrl-geocoder mapboxgl-ctrl"><span class="geocoder-icon geocoder-icon-search"></span><input type="text" placeholder="Search"><ul class="suggestions" style="display: none;"></ul><div class="geocoder-pin-right"><button class="geocoder-icon geocoder-icon-close" aria-label="Clear"></button><span class="geocoder-icon geocoder-icon-loading"></span></div></div><div class="mapboxgl-ctrl mapboxgl-ctrl-scale" style="width: 66.9055px;">50&nbsp;m</div></div><div class="mapboxgl-ctrl-top-right"><div class="mapboxgl-ctrl mapboxgl-ctrl-group"><button class="mapboxgl-ctrl-zoom-in" type="button" title="Zoom in" aria-label="Zoom in"><span class="mapboxgl-ctrl-icon" aria-hidden="true"></span></button><button class="mapboxgl-ctrl-zoom-out" type="button" title="Zoom out" aria-label="Zoom out"><span class="mapboxgl-ctrl-icon" aria-hidden="true"></span></button><button class="mapboxgl-ctrl-compass" type="button" title="Reset bearing to north" aria-label="Reset bearing to north"><span class="mapboxgl-ctrl-icon" aria-hidden="true" style="transform: rotate(0deg);"></span></button></div><div class="mapboxgl-ctrl mapboxgl-ctrl-group"><button class="mapboxgl-ctrl-fullscreen" type="button" aria-label="Enter fullscreen" title="Enter fullscreen"><span class="mapboxgl-ctrl-icon" aria-hidden="true"></span></button></div></div><div class="mapboxgl-ctrl-bottom-left"><div class="mapboxgl-ctrl" style="display: block;"><a class="mapboxgl-ctrl-logo" target="_blank" rel="noopener nofollow" href="https://www.mapbox.com/" aria-label="Mapbox logo"></a></div></div><div class="mapboxgl-ctrl-bottom-right"><div class="mapboxgl-ctrl mapboxgl-ctrl-attrib"><div class="mapboxgl-ctrl-attrib-inner"><a href="https://www.mapbox.com/about/maps/" target="_blank" title="Mapbox" aria-label="Mapbox" role="listitem">© Mapbox</a> <a href="https://www.openstreetmap.org/about/" target="_blank" title="OpenStreetMap" aria-label="OpenStreetMap" role="listitem">© OpenStreetMap</a> <a class="mapbox-improve-map" href="https://apps.mapbox.com/feedback/?owner=mapbox&amp;id=streets-v10&amp;access_token=pk.eyJ1IjoibnVnbWM3IiwiYSI6ImNrdXFwMmE0bTR4bDgydW84MTczMzJ4bnQifQ.ELNGQu9bmwasNHuVUZT96w" target="_blank" title="Improve this map" aria-label="Improve this map" role="listitem" rel="noopener nofollow">Improve this map</a></div></div></div></div></div></div>
			

		
		
	</div><!-- .entry-content .clear -->

	
	
</article><!-- #post-## -->

			</main><!-- #main -->
			
		
	</div><!-- #primary -->


	</div> <!-- ast-container -->
	</div><!-- #content -->
<footer class="site-footer" id="colophon" itemtype="https://schema.org/WPFooter" itemscope="itemscope" itemid="#colophon">
			<div class="site-primary-footer-wrap ast-builder-grid-row-container site-footer-focus-item ast-builder-grid-row-2-equal ast-builder-grid-row-tablet-2-equal ast-builder-grid-row-mobile-full ast-footer-row-stack ast-footer-row-tablet-stack ast-footer-row-mobile-stack" data-section="section-primary-footer-builder">
	<div class="ast-builder-grid-row-container-inner">
					<div class="ast-builder-footer-grid-columns site-primary-footer-inner-wrap ast-builder-grid-row">
											<div class="site-footer-primary-section-1 site-footer-section site-footer-section-1">
							<aside class="footer-widget-area widget-area site-footer-focus-item footer-widget-area-inner" data-section="sidebar-widgets-footer-widget-1" aria-label="Footer Widget 1">
			<section id="block-20" class="widget widget_block">
<h1><a href="http://http://clairem8.sg-host.com/about" data-type="URL" data-id="http://http://clairem8.sg-host.com/about">About</a></h1>
</section><section id="block-19" class="widget widget_block widget_text">
<p>This site tells the story of modernist residential architecture and the development of Canberra, through profiles of significant Canberra houses, architect biographies and articles about architectural styles and heritage issues. I hope that by bringing this story together online it might stimulate an interest in Canberra’s mid-twentieth century modernist heritage.</p>
</section><section id="block-15" class="widget widget_block widget_text">
<p>The content for the site has been drawn from citations in the Australian Institute of Architects’ (AIA) Register of Significant Twentieth Century Architecture (RSTCA), my own research and conversations with house owners. This is a personal, totally self-funded website. While the AIA provide access to citations in the (public) RSTCA, this site is not affiliated with them in any way, nor is it supported by or connected with any other bodies or businesses.</p>
</section>		</aside>
						</div>
											<div class="site-footer-primary-section-2 site-footer-section site-footer-section-2">
							<aside class="footer-widget-area widget-area site-footer-focus-item footer-widget-area-inner" data-section="sidebar-widgets-footer-widget-3" aria-label="Footer Widget 3">
			<section id="block-21" class="widget widget_block">
<h1 class="has-text-color" style="color:#bc6a3c">Contact Us</h1>
</section><section id="wpforms-widget-3" class="widget wpforms-widget"><div class="wpforms-container wpforms-container-full" id="wpforms-181"><form id="wpforms-form-181" class="wpforms-validate wpforms-form wpforms-ajax-form" data-formid="181" method="post" enctype="multipart/form-data" action="/locations/" data-token="447bbd7672d957311847cdcb91b735d4" novalidate="novalidate"><noscript class="wpforms-error-noscript">Please enable JavaScript in your browser to complete this form.</noscript><div class="wpforms-field-container"><div id="wpforms-181-field_0-container" class="wpforms-field wpforms-field-name" data-field-id="0"><label class="wpforms-field-label" for="wpforms-181-field_0">Name <span class="wpforms-required-label">*</span></label><div class="wpforms-field-row wpforms-field-large"><div class="wpforms-field-row-block wpforms-first wpforms-one-half"><input type="text" id="wpforms-181-field_0" class="wpforms-field-name-first wpforms-field-required" name="wpforms[fields][0][first]" placeholder="First Name" required=""><label for="wpforms-181-field_0" class="wpforms-field-sublabel after wpforms-sublabel-hide">First</label></div><div class="wpforms-field-row-block wpforms-one-half"><input type="text" id="wpforms-181-field_0-last" class="wpforms-field-name-last wpforms-field-required" name="wpforms[fields][0][last]" placeholder="Last Name" required=""><label for="wpforms-181-field_0-last" class="wpforms-field-sublabel after wpforms-sublabel-hide">Last</label></div></div></div><div id="wpforms-181-field_1-container" class="wpforms-field wpforms-field-email" data-field-id="1"><label class="wpforms-field-label" for="wpforms-181-field_1">Email <span class="wpforms-required-label">*</span></label><input type="email" id="wpforms-181-field_1" class="wpforms-field-large wpforms-field-required" name="wpforms[fields][1]" placeholder="Email" required=""></div><div id="wpforms-181-field_5-container" class="wpforms-field wpforms-field-text" data-field-id="5"><label class="wpforms-field-label" for="wpforms-181-field_5">Subject <span class="wpforms-required-label">*</span></label><input type="text" id="wpforms-181-field_5" class="wpforms-field-large wpforms-field-required" name="wpforms[fields][5]" placeholder="Subject" required=""></div><div id="wpforms-181-field_2-container" class="wpforms-field wpforms-field-textarea" data-field-id="2"><label class="wpforms-field-label" for="wpforms-181-field_2">Message <span class="wpforms-required-label">*</span></label><textarea id="wpforms-181-field_2" class="wpforms-field-medium wpforms-field-required" name="wpforms[fields][2]" placeholder="Your Message" required=""></textarea></div></div><div class="wpforms-submit-container"><input type="hidden" name="wpforms[id]" value="181"><input type="hidden" name="wpforms[author]" value="1"><input type="hidden" name="wpforms[post_id]" value="161"><button type="submit" name="wpforms[submit]" class="wpforms-submit " id="wpforms-submit-181" value="wpforms-submit" aria-live="assertive" data-alt-text="Sending..." data-submit-text="Submit">Submit</button><img src="http://clairem8.sg-host.com/wp-content/plugins/wpforms-lite/assets/images/submit-spin.svg" class="wpforms-submit-spinner" style="display: none;" width="26" height="26" alt=""></div></form></div>  <!-- .wpforms-container --></section>		</aside>
						</div>
										</div>
			</div>

</div>
<div class="site-below-footer-wrap ast-builder-grid-row-container site-footer-focus-item ast-builder-grid-row-full ast-builder-grid-row-tablet-full ast-builder-grid-row-mobile-full ast-footer-row-stack ast-footer-row-tablet-stack ast-footer-row-mobile-stack" data-section="section-below-footer-builder">
	<div class="ast-builder-grid-row-container-inner">
					<div class="ast-builder-footer-grid-columns site-below-footer-inner-wrap ast-builder-grid-row">
											<div class="site-footer-below-section-1 site-footer-section site-footer-section-1">
								<div class="ast-builder-layout-element ast-flex site-footer-focus-item ast-footer-copyright" data-section="section-footer-builder">
				<div class="ast-footer-copyright"><p>This website was produced by students in the Faculty of Arts &amp; Design, University of Canberra.<br>
The text and images reproduced on this site were generously provided by <a class="external" href="http://www.canberrahouse.com.au/" target="_blank" rel="noreferrer noopener">Canberra House</a></p>
</div>			</div>
						</div>
										</div>
			</div>

</div>
	</footer><!-- #colophon -->
	</div><!-- #page -->

<div id="um_upload_single" style="display:none"></div>
<div id="um_view_photo" style="display:none">

	<a href="javascript:void(0);" data-action="um_remove_modal" class="um-modal-close" aria-label="Close view photo modal">
		<i class="um-faicon-times"></i>
	</a>

	<div class="um-modal-body photo">
		<div class="um-modal-photo"></div>
	</div>

</div>		<div class="searchwp-modal-form" id="searchwp-modal-652ea0d21b1427a1bfa685e40d9bc1de" aria-hidden="true">
			
<div class="searchwp-modal-form-default">
	<div class="searchwp-modal-form__overlay" tabindex="-1" data-searchwp-modal-form-close="">
		<div class="searchwp-modal-form__container" role="dialog" aria-modal="true">
			<main class="searchwp-modal-form__content">
				<form role="search" method="get" class="search-form" action="http://clairem8.sg-host.com/">
	<label>
		<span class="screen-reader-text">Search for:</span>
		<input type="search" class="search-field" placeholder="Search …" value="" name="s" tabindex="-1">
					<button class="search-submit ast-search-submit" aria-label="Search Submit">
				<span hidden="">Search</span>
				<i><span class="ast-icon icon-search"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="-888 480 142 142" enable-background="new -888 480 142 142" xml:space="preserve">
				<title></title>
				<desc></desc>
				<path id="Shape" d="M-787.4,568.7h-6.3l-2.4-2.4c7.9-8.7,12.6-20.5,12.6-33.1c0-28.4-22.9-51.3-51.3-51.3  c-28.4,0-51.3,22.9-51.3,51.3c0,28.4,22.9,51.3,51.3,51.3c12.6,0,24.4-4.7,33.1-12.6l2.4,2.4v6.3l39.4,39.4l11.8-11.8L-787.4,568.7  L-787.4,568.7z M-834.7,568.7c-19.7,0-35.5-15.8-35.5-35.5c0-19.7,15.8-35.5,35.5-35.5c19.7,0,35.5,15.8,35.5,35.5  C-799.3,553-815,568.7-834.7,568.7L-834.7,568.7z"></path>
				</svg></span></i>
			</button>
			</label>
			<input type="submit" class="search-submit" value="Search">
	<input type="hidden" name="swpmfe" value="652ea0d21b1427a1bfa685e40d9bc1de"></form>
			</main>
			<footer class="searchwp-modal-form__footer">
				<button class="searchwp-modal-form__close button" aria-label="Close" data-searchwp-modal-form-close=""></button>
			</footer>
		</div>
	</div>
</div>

<style type="text/css">
	/* ************************************
	 *
	 * 1) Overlay and container positioning
	 *
	 ************************************ */
	.searchwp-modal-form-default .searchwp-modal-form__overlay {
		background: rgba(45, 45, 45 ,0.6);
		position: fixed;
		top: 0;
		left: 0;
		right: 0;
		bottom: 0;
		display: flex;
		justify-content: center;
		align-items: center;
		z-index: 9999990;
	}

	.searchwp-modal-form-default .searchwp-modal-form__container {
		width: 100%;
		max-width: 500px;
		max-height: 100vh;
	}

	.searchwp-modal-form-default .searchwp-modal-form__content {
		background-color: #fff;
		padding: 2em;
		border-radius: 2px;
		overflow-y: auto;
		box-sizing: border-box;
		position: relative;
		z-index: 9999998;
	}




	/* **************************************
	 *
	 * 2) WordPress search form customization
	 *
	 ************************************** */
	.searchwp-modal-form-default .searchwp-modal-form__content .search-form {
		display: flex;
		align-items: center;
		justify-content: center;
	}

	.searchwp-modal-form-default .searchwp-modal-form__content .search-form label {
		flex: 1;
		padding-right: 0.75em; /* This may cause issues depending on your theme styles. */

		/* Some common resets */
		float: none;
		margin: 0;
		width: auto;
	}

	.searchwp-modal-form-default .searchwp-modal-form__content .search-form label input {
		display: block;
		width: 100%;
		margin-left: 0.75em;

		/* Some common resets */
		float: none;
		margin: 0;
	}

	.searchwp-modal-form-default .searchwp-modal-form__footer {
		padding-top: 1em;
	}

	.searchwp-modal-form-default .searchwp-modal-form__close {
		line-height: 1;
		display: block;
		margin: 0 auto;
		background: transparent;
		border: 0;
		padding: 0.4em 0.5em;
	}

	.searchwp-modal-form-default .searchwp-modal-form__close:before {
		content: "\00d7";
		font-size: 2em;
	}




	/* ******************************************
	 *
	 * 3) Animation and display interaction setup
	 *
	 ***************************************** */
	@keyframes searchwpModalFadeIn {
		from { opacity: 0; }
		to { opacity: 1; }
	}

	@keyframes searchwpModalFadeOut {
		from { opacity: 1; }
		to { opacity: 0; }
	}

	@keyframes searchwpModalSlideIn {
		from { transform: translateY(15%); }
		to { transform: translateY(0); }
	}

	@keyframes searchwpModalSlideOut {
		from { transform: translateY(0); }
		to { transform: translateY(-10%); }
	}

	.searchwp-modal-form {
		display: none;
	}

	.searchwp-modal-form.is-open {
		display: block;
	}

	.searchwp-modal-form[aria-hidden="false"] .searchwp-modal-form-default .searchwp-modal-form__overlay {
		animation: searchwpModalFadeIn .3s cubic-bezier(0.0, 0.0, 0.2, 1);
	}

	.searchwp-modal-form[aria-hidden="false"] .searchwp-modal-form-default .searchwp-modal-form__container {
		animation: searchwpModalSlideIn .3s cubic-bezier(0, 0, .2, 1);
	}

	.searchwp-modal-form[aria-hidden="true"] .searchwp-modal-form-default .searchwp-modal-form__overlay {
		animation: searchwpModalFadeOut .3s cubic-bezier(0.0, 0.0, 0.2, 1);
	}

	.searchwp-modal-form[aria-hidden="true"] .searchwp-modal-form-default .searchwp-modal-form__container {
		animation: searchwpModalSlideOut .3s cubic-bezier(0, 0, .2, 1);
	}

	.searchwp-modal-form-default .searchwp-modal-form__container,
	.searchwp-modal-form-default .searchwp-modal-form__overlay {
		will-change: transform;
	}
</style>
		</div>
		<script>
				( function() {
					function wpforms_js_error_loading() {

						if ( typeof window.wpforms !== 'undefined' ) {
							return;
						}

						var forms = document.querySelectorAll( '.wpforms-form' );

						if ( ! forms.length ) {
							return;
						}

						var error = document.createElement( 'div' );

						error.classList.add( 'wpforms-error-container' );
						error.innerHTML = 'Heads up! WPForms has detected an issue with JavaScript on this page. JavaScript is required for this form to work properly, so this form may not work as expected. See our <a href="https://wpforms.com/docs/getting-support-wpforms/" target="_blank" rel="noopener noreferrer">troubleshooting guide</a> to learn more or contact support.<p>This message is only displayed to site administrators.</p>';

						forms.forEach( function( form ) {

							if ( ! form.querySelector( '.wpforms-error-container' ) ) {
								form.insertBefore( error.cloneNode( true ), form.firstChild );
							}
						} );
					};

					if ( document.readyState === 'loading' ) {
						document.addEventListener( 'DOMContentLoaded', wpforms_js_error_loading );
					} else {
						wpforms_js_error_loading();
					}
				}() );
			</script><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;"><defs><filter id="wp-duotone-dark-grayscale"><feColorMatrix type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 0 0 0 1 0 "></feColorMatrix><feComponentTransfer color-interpolation-filters="sRGB"><feFuncR type="table" tableValues="0 0.49803921568627"></feFuncR><feFuncG type="table" tableValues="0 0.49803921568627"></feFuncG><feFuncB type="table" tableValues="0 0.49803921568627"></feFuncB></feComponentTransfer></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;"><defs><filter id="wp-duotone-grayscale"><feColorMatrix type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 0 0 0 1 0 "></feColorMatrix><feComponentTransfer color-interpolation-filters="sRGB"><feFuncR type="table" tableValues="0 1"></feFuncR><feFuncG type="table" tableValues="0 1"></feFuncG><feFuncB type="table" tableValues="0 1"></feFuncB></feComponentTransfer></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;"><defs><filter id="wp-duotone-purple-yellow"><feColorMatrix type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 0 0 0 1 0 "></feColorMatrix><feComponentTransfer color-interpolation-filters="sRGB"><feFuncR type="table" tableValues="0.54901960784314 0.98823529411765"></feFuncR><feFuncG type="table" tableValues="0 1"></feFuncG><feFuncB type="table" tableValues="0.71764705882353 0.25490196078431"></feFuncB></feComponentTransfer></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;"><defs><filter id="wp-duotone-blue-red"><feColorMatrix type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 0 0 0 1 0 "></feColorMatrix><feComponentTransfer color-interpolation-filters="sRGB"><feFuncR type="table" tableValues="0 1"></feFuncR><feFuncG type="table" tableValues="0 0.27843137254902"></feFuncG><feFuncB type="table" tableValues="0.5921568627451 0.27843137254902"></feFuncB></feComponentTransfer></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;"><defs><filter id="wp-duotone-midnight"><feColorMatrix type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 0 0 0 1 0 "></feColorMatrix><feComponentTransfer color-interpolation-filters="sRGB"><feFuncR type="table" tableValues="0 0"></feFuncR><feFuncG type="table" tableValues="0 0.64705882352941"></feFuncG><feFuncB type="table" tableValues="0 1"></feFuncB></feComponentTransfer></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;"><defs><filter id="wp-duotone-magenta-yellow"><feColorMatrix type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 0 0 0 1 0 "></feColorMatrix><feComponentTransfer color-interpolation-filters="sRGB"><feFuncR type="table" tableValues="0.78039215686275 1"></feFuncR><feFuncG type="table" tableValues="0 0.94901960784314"></feFuncG><feFuncB type="table" tableValues="0.35294117647059 0.47058823529412"></feFuncB></feComponentTransfer></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;"><defs><filter id="wp-duotone-purple-green"><feColorMatrix type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 0 0 0 1 0 "></feColorMatrix><feComponentTransfer color-interpolation-filters="sRGB"><feFuncR type="table" tableValues="0.65098039215686 0.40392156862745"></feFuncR><feFuncG type="table" tableValues="0 1"></feFuncG><feFuncB type="table" tableValues="0.44705882352941 0.4"></feFuncB></feComponentTransfer></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;"><defs><filter id="wp-duotone-blue-orange"><feColorMatrix type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 0 0 0 1 0 "></feColorMatrix><feComponentTransfer color-interpolation-filters="sRGB"><feFuncR type="table" tableValues="0.098039215686275 1"></feFuncR><feFuncG type="table" tableValues="0 0.66274509803922"></feFuncG><feFuncB type="table" tableValues="0.84705882352941 0.41960784313725"></feFuncB></feComponentTransfer></filter></defs></svg><link rel="stylesheet" id="wpforms-full-css" href="http://clairem8.sg-host.com/wp-content/plugins/wpforms-lite/assets/css/wpforms-full.min.css?ver=1.7.0" media="all">
<script src="http://clairem8.sg-host.com/wp-includes/js/hoverintent-js.min.js?ver=2.2.1" id="hoverintent-js-js"></script>
<script id="admin-bar-js-before">
( function() {
				function wpforms_admin_bar_menu_init() {
					var template = document.getElementById( 'tmpl-wpforms-admin-menubar-data' ),
						notifications = document.getElementById( 'wp-admin-bar-wpforms-notifications' );

					if ( ! template ) {
						return;
					}

					if ( ! notifications ) {
						var menu = document.getElementById( 'wp-admin-bar-wpforms-menu-default' );

						if ( ! menu ) {
							return;
						}

						menu.insertAdjacentHTML( 'afterBegin', template.innerHTML );
					} else {
						notifications.insertAdjacentHTML( 'afterend', template.innerHTML );
					}
				};
				document.addEventListener( 'DOMContentLoaded', wpforms_admin_bar_menu_init );
			}() );
</script>
<script src="http://clairem8.sg-host.com/wp-includes/js/admin-bar.min.js?ver=5.8.1" id="admin-bar-js"></script>
<script id="astra-theme-js-js-extra">
var astra = {"break_point":"921","isRtl":""};
</script>
<script src="http://clairem8.sg-host.com/wp-content/themes/astra/assets/js/minified/frontend.min.js?ver=3.7.3" id="astra-theme-js-js"></script>
<script src="http://clairem8.sg-host.com/wp-content/plugins/ultimate-member/assets/js/select2/select2.full.min.js?ver=4.0.13" id="select2-js"></script>
<script src="http://clairem8.sg-host.com/wp-includes/js/underscore.min.js?ver=1.13.1" id="underscore-js"></script>
<script id="wp-util-js-extra">
var _wpUtilSettings = {"ajax":{"url":"\/wp-admin\/admin-ajax.php"}};
</script>
<script src="http://clairem8.sg-host.com/wp-includes/js/wp-util.min.js?ver=5.8.1" id="wp-util-js"></script>
<script src="http://clairem8.sg-host.com/wp-content/plugins/ultimate-member/assets/js/um-crop.min.js?ver=2.2.5" id="um_crop-js"></script>
<script src="http://clairem8.sg-host.com/wp-content/plugins/ultimate-member/assets/js/um-modal.min.js?ver=2.2.5" id="um_modal-js"></script>
<script src="http://clairem8.sg-host.com/wp-content/plugins/ultimate-member/assets/js/um-jquery-form.min.js?ver=2.2.5" id="um_jquery_form-js"></script>
<script src="http://clairem8.sg-host.com/wp-content/plugins/ultimate-member/assets/js/um-fileupload.js?ver=2.2.5" id="um_fileupload-js"></script>
<script src="http://clairem8.sg-host.com/wp-content/plugins/ultimate-member/assets/js/pickadate/picker.js?ver=2.2.5" id="um_datetime-js"></script>
<script src="http://clairem8.sg-host.com/wp-content/plugins/ultimate-member/assets/js/pickadate/picker.date.js?ver=2.2.5" id="um_datetime_date-js"></script>
<script src="http://clairem8.sg-host.com/wp-content/plugins/ultimate-member/assets/js/pickadate/picker.time.js?ver=2.2.5" id="um_datetime_time-js"></script>
<script src="http://clairem8.sg-host.com/wp-includes/js/dist/vendor/regenerator-runtime.min.js?ver=0.13.7" id="regenerator-runtime-js"></script>
<script src="http://clairem8.sg-host.com/wp-includes/js/dist/vendor/wp-polyfill.min.js?ver=3.15.0" id="wp-polyfill-js"></script>
<script src="http://clairem8.sg-host.com/wp-content/plugins/gutenberg/build/hooks/index.min.js?ver=1334ea6f506ea0e10a2771ebb66b1cb2" id="wp-hooks-js"></script>
<script src="http://clairem8.sg-host.com/wp-content/plugins/gutenberg/build/i18n/index.min.js?ver=0a7c3525cd647c2bfd9db2b06a00124a" id="wp-i18n-js"></script>
<script id="wp-i18n-js-after">
wp.i18n.setLocaleData( { 'text direction\u0004ltr': [ 'ltr' ] } );
</script>
<script src="http://clairem8.sg-host.com/wp-content/plugins/ultimate-member/assets/js/um-raty.min.js?ver=2.2.5" id="um_raty-js"></script>
<script src="http://clairem8.sg-host.com/wp-content/plugins/ultimate-member/assets/js/um-tipsy.min.js?ver=2.2.5" id="um_tipsy-js"></script>
<script src="http://clairem8.sg-host.com/wp-includes/js/imagesloaded.min.js?ver=4.1.4" id="imagesloaded-js"></script>
<script src="http://clairem8.sg-host.com/wp-includes/js/masonry.min.js?ver=4.2.2" id="masonry-js"></script>
<script src="http://clairem8.sg-host.com/wp-includes/js/jquery/jquery.masonry.min.js?ver=3.1.2b" id="jquery-masonry-js"></script>
<script src="http://clairem8.sg-host.com/wp-content/plugins/ultimate-member/assets/js/simplebar.min.js?ver=2.2.5" id="um_scrollbar-js"></script>
<script src="http://clairem8.sg-host.com/wp-content/plugins/ultimate-member/assets/js/um-functions.min.js?ver=2.2.5" id="um_functions-js"></script>
<script src="http://clairem8.sg-host.com/wp-content/plugins/ultimate-member/assets/js/um-responsive.min.js?ver=2.2.5" id="um_responsive-js"></script>
<script src="http://clairem8.sg-host.com/wp-content/plugins/ultimate-member/assets/js/um-conditional.min.js?ver=2.2.5" id="um_conditional-js"></script>
<script id="um_scripts-js-extra">
var um_scripts = {"max_upload_size":"268435456","nonce":"fe83a4d8d9"};
</script>
<script src="http://clairem8.sg-host.com/wp-content/plugins/ultimate-member/assets/js/um-scripts.min.js?ver=2.2.5" id="um_scripts-js"></script>
<script src="http://clairem8.sg-host.com/wp-content/plugins/ultimate-member/assets/js/um-profile.min.js?ver=2.2.5" id="um_profile-js"></script>
<script src="http://clairem8.sg-host.com/wp-content/plugins/ultimate-member/assets/js/um-account.min.js?ver=2.2.5" id="um_account-js"></script>
<script src="http://clairem8.sg-host.com/wp-includes/js/wp-embed.min.js?ver=5.8.1" id="wp-embed-js"></script>
<script src="http://clairem8.sg-host.com/wp-content/plugins/searchwp-modal-search-form/assets/dist/searchwp-modal-form.min.js?ver=0.4.1" id="searchwp-modal-form-js"></script>
<script src="http://clairem8.sg-host.com/wp-content/plugins/wpforms-lite/assets/js/jquery.validate.min.js?ver=1.19.3" id="wpforms-validation-js"></script>
<script src="http://clairem8.sg-host.com/wp-content/plugins/wpforms-lite/assets/js/mailcheck.min.js?ver=1.1.2" id="wpforms-mailcheck-js"></script>
<script src="http://clairem8.sg-host.com/wp-content/plugins/wpforms-lite/assets/js/punycode.min.js?ver=1.0.0" id="wpforms-punycode-js"></script>
<script src="http://clairem8.sg-host.com/wp-content/plugins/wpforms-lite/assets/js/wpforms.js?ver=1.7.0" id="wpforms-js"></script>
			<script>
			/(trident|msie)/i.test(navigator.userAgent)&&document.getElementById&&window.addEventListener&&window.addEventListener("hashchange",function(){var t,e=location.hash.substring(1);/^[A-z0-9_-]+$/.test(e)&&(t=document.getElementById(e))&&(/^(?:a|select|input|button|textarea)$/i.test(t.tagName)||(t.tabIndex=-1),t.focus())},!1);
			</script>
			<script type="text/javascript">
/* <![CDATA[ */
var wpforms_settings = {"val_required":"This field is required.","val_email":"Please enter a valid email address.","val_email_suggestion":"Did you mean {suggestion}?","val_email_suggestion_title":"Click to accept this suggestion.","val_email_restricted":"This email address is not allowed.","val_number":"Please enter a valid number.","val_number_positive":"Please enter a valid positive number.","val_confirm":"Field values do not match.","val_checklimit":"You have exceeded the number of allowed selections: {#}.","val_limit_characters":"{count} of {limit} max characters.","val_limit_words":"{count} of {limit} max words.","val_recaptcha_fail_msg":"Google reCAPTCHA verification failed, please try again later.","val_empty_blanks":"Please fill out all blanks.","uuid_cookie":"","locale":"en","wpforms_plugin_url":"http:\/\/clairem8.sg-host.com\/wp-content\/plugins\/wpforms-lite\/","gdpr":"","ajaxurl":"http:\/\/clairem8.sg-host.com\/wp-admin\/admin-ajax.php","mailcheck_enabled":"1","mailcheck_domains":[],"mailcheck_toplevel_domains":["dev"],"is_ssl":""}
/* ]]> */
</script>

<script type="text/html" id="tmpl-wpforms-admin-menubar-data">
	<li id="wp-admin-bar-wpforms-form-id-181" class="menupop wpforms-menu-form wpforms-menu-form-last">
		<div class="ab-item ab-empty-item" aria-haspopup="true"><span class="wp-admin-bar-arrow" aria-hidden="true"></span>Contact</div>
		<div class="ab-sub-wrapper">
			<ul id="wp-admin-bar-wpforms-form-id-181-default" class="ab-submenu">
							<li id="wp-admin-bar-wpforms-form-id-181-edit">
					<a class="ab-item" href="http://clairem8.sg-host.com/wp-admin/admin.php?page=wpforms-builder&#038;view=fields&#038;form_id=181">Edit Form</a>
				</li>
												</ul>
		</div>
	</li>
</script>
		<script type="text/javascript">
			jQuery( window ).on( 'load', function() {
				jQuery('input[name="um_request"]').val('');
			});
		</script>
		

</body><grammarly-desktop-integration data-grammarly-shadow-root="true"></grammarly-desktop-integration><loom-container id="lo-engage-ext-container"><loom-shadow classname="resolved"></loom-shadow></loom-container></html>
