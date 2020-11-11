<?php

if ( get_theme_mod( 'maintenance_mode', 0 ) && get_theme_mod( 'maintenance_mode_admin_notice', 1 ) ) {
	add_action( 'admin_notices', 'magicpi_maintenance_admin_notice' );
}

function magicpi_maintenance_admin_notice() {
	$advanced_url = get_admin_url() . 'admin.php?page=optionsframework&tab=';
	?>
    <div class="notice notice-info">
        <p><?php echo sprintf( __( 'Magicpi Maintenance Mode is <strong>active</strong>. Please don\'t forget to <a href="%s">deactivate</a> it as soon as you are done.', 'magicpi-admin' ), $advanced_url . 'of-option-maintenancemode' ); ?></p>
    </div>
	<?php
}
