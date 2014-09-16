<?php
//kpr(get_defined_vars());
//kpr($theme_hook_suggestions);
//template naming
//page--[CONTENT TYPE].tpl.php
?>
<?php if( theme_get_setting('mothership_poorthemers_helper') ){ ?>
<!-- page.tpl.php-->
<?php } ?>

<?php print $mothership_poorthemers_helper; ?>
 

<header class="site-header header" role="banner">

  <div class="header-content container">

    <?php if( $is_front === false   ): ?>

    <a href="<?php print $front_page; ?>" title="<?php print $site_name; ?>" rel="home" id="site-logo" class="logo-container ir one-twelfth" ><?php echo $site_name?> <i class="icon logo"></i></a>
  
    <?php else : ?>
        
    <h1 id="site-logo" class="logo-container ir  " ><?php print $site_name; ?> <i class="icon logo"></i></h1>

    <?php  endif ?>
    <p class="slogan  "><?php print $site_slogan; ?></p>

  <?php if($page['header']): ?>

    <div class="header-region">
      <?php print render($page['header']); ?>
    </div>
    
  <?php endif; ?>

  </div>

  <?php if($page['navigation']): ?>

    <div class="site-navigation  container">

      <?php print render($page['navigation']); ?>

    </div>
    
  <?php endif; ?>

</header>

<div class="page container">
  
    <?php print $breadcrumb; ?>



  <?php if ($page['sidebar_first']): ?>
    <div class="sidebar-first">
    <?php print render($page['sidebar_first']); ?>
    </div>
  <?php endif; ?>





  <div  class="main-content"   role="main" id="main-content">

  <?php if ($page['content_top']): ?>
    <div class="content content-top">
      <?php print render($page['content_top']); ?>
    </div>
   <?php endif; ?>

  
    <?php if($page['highlighted'] OR $messages){ ?>
      <div class="messages">
      <?php print render($page['highlighted']); ?>
      <?php print $messages; ?>
      </div>
    <?php } ?>



    <?php if ($title): ?>
      <h1><?php print $title; ?></h1>
    <?php endif; ?>



    <?php if ($action_links): ?>
      <ul class="action-links"><?php print render($action_links); ?></ul>
    <?php endif; ?>

    <?php if (isset($tabs['#primary'][0]) || isset($tabs['#secondary'][0])): ?>
      <nav class="tabs"><?php print render($tabs); ?></nav>
    <?php endif; ?>

    <?php print render($page['content_pre']); ?>

    <?php print render($page['content']); ?>

    <?php print render($page['content_post']); ?>

  </div><!-- /main-->




  <?php if ($page['sidebar_second']): ?>
    <div class="sidebar-second">
      <?php print render($page['sidebar_second']); ?>
    </div>
  <?php endif; ?>


 <?php if ($page['content_bottom']): ?>
  <div class="content">
    <?php print render($page['content_bottom']); ?>
  </div>
  <?php endif; ?>



</div><!-- /page-->

<footer class="site-footer footer" role="contentinfo">

  <div class="footer-content container">

    <?php print render($page['footer']); ?>

  </div>

</footer>

