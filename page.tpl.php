<section class="contact-full">
  <div class="contact">
    <a href="#" class="sprites-close"></a>
    <?php print render($page['contact_form']); ?>
  </div>
</section>
<!-- HEADER -->
<section class="header-full">
  <header class="header">
    <a href="<?php print $front_page; ?>" class="logo"><img src="/sites/all/themes/shane/img/logo@2x.png" alt=""></a>
    <?php print render($page['nav']); ?>
  </header>
</section>
<!-- CONTENT -->
<section class="content-wrap clearfix">
  <div class="content-inner">
    <div class="main animated fadeInDown">
      <?php print render($title_prefix); ?>
      <?php if ($title): ?><h1 class="title" id="page-title"><?php print $title; ?></h1><?php endif; ?>
      <?php print render($title_suffix); ?>
      <?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
         <!--  <?php print $messages; ?> -->
          <?php print render($page['help']); ?>
          <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
      <?php print render($page['content']); ?>
    </div>
    <?php if($page['sidebar']):?>
      <div class="sidebar">
        <?php print render($page['sidebar']); ?>
      </div>
    <?php endif; ?>
  </div>
</section>
<!-- FOOTER MENU -->
<section class="footmenu-wrap clearfix">
  <div class="footmenu clearfix">
    <?php print render($page['footer_menu']); ?>
  </div>
</section>
<!-- FOOTER -->
<section class="footer">
  <footer class="clearfix">
    <?php print render($page['footer']); ?>
  </footer>
</section>