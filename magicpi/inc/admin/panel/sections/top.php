<?php
/**
 * Flatome Panel
 */
?>
<?php add_thickbox(); ?>
<?php $magicpi_ver = wp_get_theme( get_template() );  ?>
<h1>
    <?php echo '<strong>Welcome to Magicpi</strong>'; ?>
</h1>
<div class="about-text">
<?php _e( 'Thanks for Choosing Magicpi - The worlds most powerful WooCommerce and Multi-Purpose Theme. This page will help you quickly get up and running with Magicpi.', 'magicpi-admin' ); ?>
    <br><br>
    <a href="<?php echo admin_url().'admin.php?page=magicpi-setup'; ?>" class="button button-primary button-large"><?php _e('Setup Wizard', 'magicpi-admin' ); ?></a>
</div>

<div class="wp-badge fl-badge">Version <?php echo $magicpi_ver['Version']; ?></div>

<h2 class="nav-tab-wrapper">
    <?php $url = admin_url().'admin.php?page=magicpi-panel' ?>
    <a href="<?php echo $url; ?>" class="nav-tab <?php if($_GET['page'] == 'magicpi-panel') echo 'nav-tab-active'; ?>"><?php _e('Theme License', 'magicpi-admin' ); ?></a>

    <a href="<?php echo $url.'-support'; ?>" class="nav-tab <?php if($_GET['page'] == 'magicpi-panel-support') echo 'nav-tab-active'; ?>"><?php _e( 'Help & Guides', 'magicpi-admin' ); ?></a>

    <a href="<?php echo $url.'-changelog'; ?>" class="nav-tab <?php if($_GET['page'] == 'magicpi-panel-changelog') echo 'nav-tab-active'; ?>"><?php _e( 'Change log', 'magicpi-admin' ); ?></a>
</h2>
