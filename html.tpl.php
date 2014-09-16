<!doctype html>

<!--[if IE 7]>    <html class="no-js ie7 oldie lte-ie9" lang="<?php print $language->language; ?>" <?php print $rdf_namespaces; ?> <?php print $html_attributes; ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie lte-ie9" lang="<?php print $language->language; ?>" <?php print $rdf_namespaces; ?> <?php print $html_attributes; ?>> <![endif]-->
<!--[if IE 9]>    <html class="no-js lte-ie9 ie9" lang="<?php print $language->language; ?>" <?php print $rdf_namespaces; ?> <?php print $html_attributes; ?>> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js" lang="<?php print $language->language; ?>" <?php print $rdf_namespaces; ?> <?php print $html_attributes; ?>> <!--<![endif]-->
<head>
  <title><?php print $head_title; ?></title>
  <?php print $head; ?>
  <?php print $appletouchicon; ?>
  <?php if(theme_get_setting('mothership_mobile')){  ?>
  <meta name="MobileOptimized" content="width">
  <meta name="HandheldFriendly" content="true"><?php } ?>
  <?php if(theme_get_setting('mothership_viewport')){  ?><meta name="viewport" content="width=device-width, initial-scale=1"><?php } ?>
  <?php if(theme_get_setting('mothership_viewport_maximumscale')){  ?><meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"><?php } ?>
  <meta http-equiv="cleartype" content="on">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <style>
    /* Inline the core.css here... */
    * {box-sizing: border-box;}
    body { opacity: 0; }
  </style>
  <!-- If no JS load stylesheet normally -->
  <noscript><link rel="stylesheet" href="/sites/all/themes/heythrop/css/stylesheets/styles.css" media="all"></noscript>
  <?php if(theme_get_setting('mothership_respondjs')) { ?>
  <!--[if lt IE 9]>
    <script src="<?php print $mothership_path; ?>/js/respond.min.js"></script>
  <![endif]-->
  <?php } ?>
  <!--[if lt IE 9]>
    <script src="<?php print $mothership_path; ?>/js/html5.js"></script>
  <![endif]-->
  <?php print $selectivizr; ?>
   <script>
     // Inline the core.js here...

   </script>
  <noscript>
    <style>

      body { opacity: 1; }

    </style>
  </noscript>
</head>
<body class=" <?php print $classes; ?>" <?php print $attributes;?>>
 
    <div class="site-wrapper">

      <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>

      <?php print $page_top; //stuff from modules always render first ?>
      <?php print $page; // uses the page.tpl ?>

      <!-- Async CSS! -->
      <script>
        // Drupal css -make sure its minified and concatenated to a single file (see Mothership config )
        var element = document.getElementsByTagName('noscript');
        element[0].insertAdjacentHTML('afterend', <?php print "'" . trim($styles) . "'"; ?>)
      </script>
      <script>
        /*!
         loadCSS: load a CSS file asynchronously.
         [c]2014 @scottjehl, Filament Group, Inc.
         Licensed MIT
         */
        function loadCSS( href, before, media ){
          "use strict";
          // Arguments explained:
          // `href` is the URL for your CSS file.
          // `before` optionally defines the element we'll use as a reference for injecting our <link>
          // By default, `before` uses the first <script> element in the page.
          // However, since the order in which stylesheets are referenced matters, you might need a more specific location in your document.
          // If so, pass a different reference element to the `before` argument and it'll insert before that instead
          // note: `insertBefore` is used instead of `appendChild`, for safety re: http://www.paulirish.com/2011/surefire-dom-element-insertion/
          var ss = window.document.createElement( "link" );
          var ref = before || window.document.getElementsByTagName( "script" )[ 0 ];
          ss.rel = "stylesheet";
          ss.href = href;
          // temporarily, set media to something non-matching to ensure it'll fetch without blocking render
          ss.media = "only x";
          // inject link
          ref.parentNode.insertBefore( ss, ref );
          // set media back to `all` so that the stylesheet applies once it loads
          setTimeout( function(){
            ss.media = media || "all";
          } );
        }
        if (window.addEventListener)
          window.addEventListener("load", loadCSS('/sites/all/themes/heythrop/css/stylesheets/styles.min.css'), false);
        else if (window.attachEvent)
          window.attachEvent("onload", loadCSS('/sites/all/themes/heythrop/css/stylesheets/styles.min.css'));
        else window.onload = loadCSS('/sites/all/themes/heythrop/css/stylesheets/styles.min.css');

      </script>

      <!-- Drupal core scripts -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>

      <?php print(str_replace('<script>', '<script async>', $scripts)); ?>

      <!-- Async scripts -->
      <script type="text/javascript">
        function downloadJSAtOnload() {
          var element = document.createElement("script");
          element.src = "/sites/all/themes/heythrop/js/script.min.js";
          element.async = true;
          document.body.appendChild(element);
        }
        if (window.addEventListener)
          window.addEventListener("load", downloadJSAtOnload, false);
        else if (window.attachEvent)
          window.attachEvent("onload", downloadJSAtOnload);
        else window.onload = downloadJSAtOnload;
      </script>

      <?php print (str_replace('<script>', '<script async>', str_replace('<script s', '<script async s', $page_bottom))); //stuff from modules always render last ?>

      <script type="text/javascript">
        WebFontConfig = { fontdeck: { id: '47769' } };

        (function() {
          var wf = document.createElement('script');
          wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
          '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
          wf.type = 'text/javascript';
          wf.async = 'true';
          var s = document.getElementsByTagName('script')[0];
          s.parentNode.insertBefore(wf, s);
        })();
      </script>
    </div>
</body>
</html>

 