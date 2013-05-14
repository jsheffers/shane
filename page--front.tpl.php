<div id="container">

<div id="header">
		<a href="http://shanejeffers.com" id="logo" class="animated fadeInDown"></a>
		<?php if ($main_menu): ?>
	      <div id="main-menu" class="navigation animated fadeInDown" >
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
<div id="hello" class="animated fadeInLeft">
	<h1>Hi, I'm Shane and I specialize in front-end development of content managed websites using platforms such as Drupal &amp; Wordpress</h1>
</div>
<!-- END HELLO SECTION -->

	<!-- CONTENT AREA -->
	<div id="content" class="animated fadeInUp">
		<div style="display:none;"><?php print render($page['content'])?></div>
		<?php if ($page['left']): ?>
	        <div id="left">
	          <?php print render($page['left']); ?>
	        </div>
	      <?php endif; ?>

		<div id="right">
			<div id="ipad"></div>
				<div id="ipadcontent">
				<img src="sites/all/themes/shanejeffers/images/nsf.jpg" alt="Mobile Sites and Drupal Development New Song Fellowship" title="Mobile Sites and Drupal Development New Song Fellowship"/>
				<img src="sites/all/themes/shanejeffers/images/three.jpg" alt="Mobile Sites and Drupal Development Three Styles" title="Mobile Sites and Drupal Development Three Styles">
				</div>
		
		</div>	
		<div class="clearfix"></div>
	</div>
	<!-- END CONTENT AREA -->

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

<!-- END FOOTER AREA -->
