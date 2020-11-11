// Customizer Reset
jQuery(function ($) {
    $button = jQuery('#magicpi-customizer-reset');
    
    $button.on('click', function (event) {
        event.preventDefault();

        var data = {
            wp_customize: 'on',
            action: 'customizer_reset',
            nonce: _MagicpiCustomizerReset.nonce.reset
        };

        var r = confirm(_MagicpiCustomizerReset.confirm);

        if (!r) return;

        $button.attr('disabled', 'disabled');

        $.post(ajaxurl, data, function () {
            wp.customize.state('saved').set(true);
            location.reload();
        });
    });

});