<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div id="container">

	<div id="header">
			<a href="http://shanejeffers.com" id="logo" class="animated fadeInDown"></a>
			<?php if ($main_menu): ?>
		      <div id="main-menu" class="navigation animated fadeInDown">
		        <?php print theme('links__system_main_menu', array(
		          'links' => $main_menu,
		          'attributes' => array(
		            'id' => 'menu',
		            'class' => array('links', 'clearfix'),
		          ),
		          'heading' => array(
		            'text' => t('Main menu'),
		            'level' => 'h2',
		            'class' => array('element-invisible'),
		          ),
		        )); ?>
		      </div> <!-- /#main-menu -->
		    <?php endif; ?>
	</div>
	
	<!-- HELLO SECTION -->
	
	<div id="hello-page">
			<?php print render($title_prefix); ?>
		      <?php if ($title): ?>
		        <h2 class="title work" id="page-title">
		          <?php print $title; ?>
		        </h2>
		      <?php endif; ?>
		      <?php print render($title_suffix); ?>
	</div>
	<!-- END HELLO SECTION -->

	<!-- CONTENT AREA -->
	<div id="content" class="animated fadeInUp">
		<div id="page-left">
		      <?php if ($tabs): ?>
		        <div class="tabs">
		          <?php print render($tabs); ?>
		        </div>
		      <?php endif; ?>
		      <?php print render($page['help']); ?>
		      <?php if ($action_links): ?>
		        <ul class="action-links">
		          <?php print render($action_links); ?>
		        </ul>
		      <?php endif; ?>
	
			  <?php print render($page['content']); ?>
		</div><!-- Page left -->
		<div id="page-right">
			<?php if ($page['sidebar']): ?>
					<?php print render($page['sidebar']); ?>
			<?php endif; ?>
		
		</div><!-- Page Right -->
		<div class="clearfix"></div>
	</div>
<div class="clearfix"></div>
<div id="site-info">
	<?php if ($page['footer_left']): ?>
		<div id="col1">
			<?php print render($page['footer_left']); ?>
		</div>
	<?php endif; ?>
		
	<?php if ($page['footer_mid']): ?>
		<div id="col2">
			<?php print render($page['footer_mid']); ?>
		</div>
	<?php endif; ?>

	<?php if ($page['footer_right']): ?>
		<div id="col3">
			<?php print render($page['footer_right']); ?>
		</div>
	<?php endif; ?>
</div><!-- /SITE INFO -->
<div class="push"></div>
</div>
<!-- END CONTAINER -->


<!-- FOOTER AREA -->
<div id="footer">
		<?php if ($page['copyright']): ?>
		<div id="copyright">
		<?php print render($page['copyright']); ?>
		</div>
		<?php endif; ?>
</div>

<script type="text/javascript">
  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>
<!-- END FOOTER AREA -->
