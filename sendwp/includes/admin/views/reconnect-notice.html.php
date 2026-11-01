<div class="notice notice-warning sendwp-notice">
    <p>
        <span style="font-weight:bold;"><?php esc_html_e('SendWP:', 'sendwp'); ?></span>&nbsp;
        <?php esc_html_e('This site\'s connection to SendWP needs to be renewed. Reconnect soon to keep your email sending.', 'sendwp'); ?>
        <br /><a href="<?php echo esc_url(sendwp_get_client_redirect()); ?>"><?php esc_html_e('Reconnect SendWP', 'sendwp'); ?></a>
    </p>
</div>
