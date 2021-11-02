<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined('ABSPATH') || exit;

global $product;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
do_action('woocommerce_before_single_product');

if (post_password_required()) {
    echo get_the_password_form(); // WPCS: XSS ok.
    return;
}
?>
<div class="product_image_area" <?php wc_product_class('', $product); ?>>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="product_img_slide owl-carousel">
                    <?php
                    foreach ($product->get_gallery_image_ids() as $gallery_image_id) {
                        $image = wp_get_attachment_url($gallery_image_id);
                        ?>
                        <div class="single_product_img">
                            <img src="<?= $image ?>" alt="#" class="img-fluid">
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="single_product_text text-center">
                    <h3><?= $product->get_name() ?></h3>
                    <p>
                        <?= $product->get_description() ?>
                    </p>

<ul>
<?php
$attrs = $product->get_attributes();
foreach ($attrs as $attr) {
    ?>
    <li><?= wc_attribute_label($attr["name"]) ?>: <?= $product->get_attribute(wc_attribute_label($attr["name"])) ?></li>
    <?php
}
?>
</ul>

                    <div class="card_area">
                        <form class="cart" action="<?= $product->get_permalink() ?>" method="post"
                              enctype="multipart/form-data">

                            <div class="product_count_area">
                                <p>Quantity</p>
                                <div class="product_count d-inline-block">
                                        <span class="product_count_item inumber-decrement"> <i
                                                    class="ti-minus"></i></span>
                                    <input class="product_count_item input-number" name="quantity" type="text" value="1"
                                           min="0"
                                           max="10">
                                    <span class="product_count_item number-increment"> <i
                                                class="ti-plus"></i></span>
                                </div>
                                <p>$<?= $product->get_price() ?></p>
                            </div>
                            <div class="add_to_cart">
                                <button type="submit" name="add-to-cart" class="btn_3 single_add_to_cart_button"
                                        value="<?= $product->get_id() ?>">add to cart
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>