<?php
/**
 * Template part for displaying footer layout one
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package inbio
 */

// Get Value
$rainbow_options = Rainbow_Helper::rainbow_get_options();
$rainbow_footer_bottom_menu_args = Rainbow_Helper::rainbow_footer_bottom_menu_args();
$lineclass = (is_active_sidebar('footer-1') || is_active_sidebar('footer-2') || is_active_sidebar('footer-3') || is_active_sidebar('footer-4')) ? "footer-menu-active" : "";
$allowed_tags = wp_kses_allowed_html('post');
$logo_light = empty($rainbow_options['rainbow_light_logo']['url']) ? Rainbow_Helper::get_img('logo/logo.png') : $rainbow_options['rainbow_light_logo']['url'];
$logo_dark = empty($rainbow_options['rainbow_head_logo']['url']) ? Rainbow_Helper::get_img('logo/logo-dark.png') : $rainbow_options['rainbow_head_logo']['url'];
?>
<footer class="rn-footer-area rn-section-gap section-separator">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="footer-area text-center">
                    <?php if (isset($rainbow_options['footer_logo_display'])): ?>
                        <div class="logo">
                            <a href="<?php echo esc_url(home_url('/')); ?>">
                                <img class="light-logo" src="<?php echo esc_url($logo_light); ?>"
                                     alt="<?php echo esc_attr(get_bloginfo('name')); ?>">
                                <img class="dark-logo" src="<?php echo esc_url($logo_dark); ?>"
                                     alt="<?php echo esc_attr(get_bloginfo('name')); ?>">
                            </a>
                        </div>
                    <?php endif ?>
                    <?php if (!empty($rainbow_options['rainbow_copyright_contact']) || !empty($rainbow_options['rainbow_footer_footerbottom'])) { ?>
                        <p class="description mt--30"><?php echo do_shortcode($rainbow_options['rainbow_copyright_contact'], $allowed_tags); ?></p>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</footer>