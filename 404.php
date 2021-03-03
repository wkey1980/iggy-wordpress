<?php
/**
 * 
 * Theme 404 template
 * 
 * @package iggy
 */
?>

<?php get_header(); ?>

<section class="error-404 not-found">
    <h1><?php esc_attr_e( '4', 'iggy' ); ?><?php esc_html_e( '4', 'iggy' ); ?></h1>
    <h1><?php esc_html_e( 'No Content Found', 'iggy' ); ?></h1>

    <a href="<?php echo esc_url( home_url() ); ?>">Go Home!</a>
</section>

<?php get_footer(); ?>