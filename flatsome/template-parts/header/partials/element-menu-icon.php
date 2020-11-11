<?php $icon_style = magicpi_option('menu_icon_style'); ?>
<li class="nav-icon has-icon">
  <?php if($icon_style) { ?><div class="header-button"><?php } ?>
		<a href="#" data-open="#main-menu" data-pos="<?php echo magicpi_option('mobile_overlay');?>" data-bg="main-menu-overlay" data-color="<?php echo magicpi_option('mobile_overlay_color');?>" class="<?php echo get_magicpi_icon_class($icon_style, 'small'); ?>" aria-label="<?php echo __('Menu','magicpi'); ?>" aria-controls="main-menu" aria-expanded="false">
		
		  <?php echo get_magicpi_icon('icon-menu'); ?>

		  <?php if(magicpi_option('menu_icon_title')) echo '<span class="menu-title uppercase hide-for-small">'.__('Menu','magicpi').'</span>'; ?>
		</a>
	<?php if($icon_style) { ?> </div> <?php } ?>
</li>