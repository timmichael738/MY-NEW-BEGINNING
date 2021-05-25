<?php
/**
 * Help Panel.
 *
 * @package Author_Blog
 */
?>
<!-- Help file panel -->
<div id="help-panel" class="panel-left">

    <div class="panel-aside">
        <h4><?php esc_html_e( 'View Our Documentation Link', 'author-blog' ); ?></h4>
        <p><?php esc_html_e( 'New to the WordPress world? Our documentation has step by step procedure to create a beautiful website.', 'author-blog' ); ?></p>
        <a class="button button-primary" href="<?php echo esc_url( 'https://theimran.com/themes/wordpress-theme/author-blog-pro-wordpress-theme-for-book-authors//' ); ?>" title="<?php esc_attr_e( 'Visit the Documentation', 'author-blog' ); ?>" target="_blank">
            <?php esc_html_e( 'View Documentation', 'author-blog' ); ?>
        </a>
    </div><!-- .panel-aside -->
    
    <div class="panel-aside">
        <h4><?php esc_html_e( 'Support', 'author-blog' ); ?></h4>
       
        <p><?php esc_html_e( 'We will get back to you within the next 24 hours with an answer although typically much sooner. Please do not send multiple emails about the same issue/query or it will reset your priority timer. Queries are always answered on a first-come-first-serve basis and we will respond to you as soon as possible so please be patient.', 'author-blog' ); ?></p>
        <a class="button button-primary" href="<?php echo esc_url( 'https://theimran.com/contact/' ); ?>" title="<?php esc_attr_e( 'Visit the Support', 'author-blog' ); ?>" target="_blank">
            <?php esc_html_e( 'Contact Support', 'author-blog' ); ?>
        </a>
    </div><!-- .panel-aside -->

    <div class="panel-aside">
        <h4><?php esc_html_e( 'View Our Author Blog Demo', 'author-blog' ); ?></h4>
        <p><?php esc_html_e( 'Visit the demo to get more ideas about our theme design.', 'author-blog' ); ?></p>
        <a class="button button-primary" href="<?php echo esc_url( 'https://theimran.com/themes/wordpress-theme/author-blog-pro-wordpress-theme-for-book-authors/' ); ?>" title="<?php esc_attr_e( 'Visit the Demo', 'author-blog' ); ?>" target="_blank">
            <?php esc_html_e( 'Free Version Demo', 'author-blog' ); ?>
        </a>
        <br>
        <br>
        <a class="button button-primary" href="<?php echo esc_url( 'https://theimran.com/themes/wordpress-theme/author-blog-pro-wordpress-theme-for-book-authors/' ); ?>" title="<?php esc_attr_e( 'Visit the Demo', 'author-blog' ); ?>" target="_blank">
            <?php esc_html_e( 'Pro Version Demo', 'author-blog' ); ?>
        </a>
        <br>
        <br>
        <?php if (class_exists('OCDI_Plugin')): ?>
            <a class="button button-primary" href="<?php echo esc_url( admin_url( 'themes.php?page=pt-one-click-demo-import' ) ); ?>" title="<?php esc_attr_e( 'One Click Demo Import', 'author-blog' ); ?>" target="_blank">
                <?php esc_html_e( 'One Click Demo Import.', 'author-blog' ); ?>
            </a>
        <?php endif; ?>
    </div><!-- .panel-aside -->
</div>