<!-- HEADER -->
<section class="header-full">
  <header class="header">
    <a href="<?php print $front_page; ?>" class="logo"><img src="/sites/all/themes/shane/img/logo.png" alt=""></a>
    <?php print render($page['nav']); ?>
  </header>
</section>
<!-- ROTATOR -->
<section class="featured">
  <div class="featured-inner">
    <div class="sprites-iphone"></div>
    <div class="sprites-macbook"></div>
    <div class="sprites-ipad"></div>
    <h1 class="site-title animated fadeInUp">Design <em>•</em> Develop <em>•</em> Deploy</h1>
    <a href="#" class="btn-large animated fadeInLeftBig">Hire Me</a>
  </div>
</section>
<!-- CONTENT -->
    <div id="work"></div>
    <?php print render($page['home_content']); ?>
<section class="scrolled">
  <div class="scroll-inner">
    <h2>You've already scrolled down</h2>
    <h3><em>0</em> Pixels</h3>
    <p>You've seen my work, what are you waiting for?  Let's work together to make your idea a reality.</p>
    <a href="mailto:shanejeffers@mac.com" class="btnLarge">Hire Me</a>
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