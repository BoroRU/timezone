<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package timezone
 */

?>

<!--? Hero Area Start-->
<div class="slider-area ">
    <div class="single-slider slider-height2 d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="hero-cap text-center">
                        <h2><?= get_the_title() ?></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--? Hero Area End-->

<div class="container">
    <?php
    the_content();

    wp_link_pages(
        array(
            'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'timezone' ),
            'after'  => '</div>',
        )
    );
    ?>

</div>

