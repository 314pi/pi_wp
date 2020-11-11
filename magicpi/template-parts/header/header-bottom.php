<?php if(magicpi_has_bottom_bar()['large_or_mobile']) {
?>
<div id="wide-nav" class="header-bottom wide-nav <?php header_inner_class('bottom'); ?>">
    <div class="flex-row container">

            <?php if(get_theme_mod('header_elements_bottom_left') || get_theme_mod('header_elements_bottom_right')){ ?>
            <div class="flex-col hide-for-medium flex-left">
                <ul class="nav header-nav header-bottom-nav nav-left <?php magicpi_nav_classes('bottom'); ?>">
                    <?php magicpi_header_elements('header_elements_bottom_left','nav_position_text'); ?>
                </ul>
            </div>
            <?php } ?>

            <?php if(get_theme_mod('header_elements_bottom_center')){ ?>
            <div class="flex-col hide-for-medium flex-center">
                <ul class="nav header-nav header-bottom-nav nav-center <?php magicpi_nav_classes('bottom'); ?>">
                    <?php magicpi_header_elements('header_elements_bottom_center','nav_position_text'); ?>
                </ul>
            </div>
            <?php } ?>

            <?php if(get_theme_mod('header_elements_bottom_right') || get_theme_mod('header_elements_bottom_left')){ ?>
            <div class="flex-col hide-for-medium flex-right flex-grow">
              <ul class="nav header-nav header-bottom-nav nav-right <?php magicpi_nav_classes('bottom'); ?>">
                   <?php magicpi_header_elements('header_elements_bottom_right','nav_position_text'); ?>
              </ul>
            </div>
            <?php } ?>

            <?php if(get_theme_mod('header_mobile_elements_bottom')) { ?>
              <div class="flex-col show-for-medium flex-grow">
                  <ul class="nav header-bottom-nav nav-center mobile-nav <?php magicpi_nav_classes('bottom'); ?>">
                      <?php magicpi_header_elements('header_mobile_elements_bottom'); ?>
                  </ul>
              </div>
            <?php } ?>

    </div>
</div>
<?php } ?>

<?php do_action('magicpi_after_header_bottom'); ?>
