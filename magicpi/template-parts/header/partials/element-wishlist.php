<?php 

// Exit if class does not exist.
if(!class_exists( 'YITH_WCWL' )) return;

$icon = magicpi_option('wishlist_icon');
$icon_style = magicpi_option('wishlist_icon_style'); 

?>
<li class="header-wishlist-icon">
  <?php if($icon_style) { ?><div class="header-button"><?php } ?>
  <a href="<?php echo YITH_WCWL()->get_wishlist_url(); ?>" class="wishlist-link <?php echo get_magicpi_icon_class($icon_style, 'small'); ?>">
  	<?php if(magicpi_option('wishlist_title')) { ?>
    <span class="hide-for-medium header-wishlist-title">
  	  <?php if(magicpi_option('header_wishlist_label')) {echo magicpi_option('header_wishlist_label');} else{ _e('Wishlist', 'woocommerce');} ?>
  	</span>
    <?php } ?>
    <?php if($icon){ ?>
      <i class="wishlist-icon icon-<?php echo $icon; ?>"
        <?php if(YITH_WCWL()->count_products() > 0){ ?>data-icon-label="<?php echo YITH_WCWL()->count_products() ; ?>" <?php } ?>>
      </i>
    <?php } ?>
  </a>
  <?php if($icon_style) { ?> </div> <?php } ?>
</li>