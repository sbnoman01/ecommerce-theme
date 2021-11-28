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

defined( 'ABSPATH' ) || exit;

global $product;
?>
<section class="breadcrumb-section set-bg" data-setbg="<?= get_template_directory_uri(); ?>/img/breadcrumb.jpg" style="background-image: url(<?= get_template_directory_uri(); ?>/img/breadcrumb.jpg);">
			<div class="container">
                
				<div class="row">
					<div class="col-lg-12 text-center">
						<div class="breadcrumb__text">
							<h2><?php the_title(); ?></h2>
							<div class="breadcrumb__option">
								<a href="<?= site_url(); ?>">Home</a>
								<a href="<?= site_url(); ?>"><?php
											$get_cat = $product->get_categories();
											echo $get_cat
										?></a>
								<span><?php the_title(); ?></span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

    <!-- Product Details Section Begin -->
    <section class="product-details spad">
        <div class="container">
            <?php
                    /**
                     * Hook: woocommerce_before_single_product.
                     *
                     * @hooked woocommerce_output_all_notices - 10
                     */
                    do_action( 'woocommerce_before_single_product' );

                    if ( post_password_required() ) {
                        echo get_the_password_form(); // WPCS: XSS ok.
                        return;
                    }
                ?>
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__pic">
                        <div class="product__details__pic__item">
                            <?php woocommerce_show_product_sale_flash(); ?>            
                            <?php woocommerce_show_product_images(); ?>            
                        </div>
                        <div class="product__details__pic__slider owl-carousel">
                            <img data-imgbigurl="img/product/details/product-details-2.jpg"
                                src="img/product/details/thumb-1.jpg" alt="">
                            <img data-imgbigurl="img/product/details/product-details-3.jpg"
                                src="img/product/details/thumb-2.jpg" alt="">
                            <img data-imgbigurl="img/product/details/product-details-5.jpg"
                                src="img/product/details/thumb-3.jpg" alt="">
                            <img data-imgbigurl="img/product/details/product-details-4.jpg"
                                src="img/product/details/thumb-4.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__text">
                        <h3><?php woocommerce_template_single_title(); ?></h3>
						<?php woocommerce_template_single_rating(); ?>
                        
                        <div class="product__details__price"><?php woocommerce_template_single_price(); ?> </div>
                        <p><?php woocommerce_template_single_excerpt(); ?></p>

						<!-- add to cart section start -->
                        <div class="product__details__quantity">
                            <?php
							woocommerce_template_single_add_to_cart();	
						?>
                        </div>
                        <a href="#" class="heart-icon"><span class="icon_heart_alt"></span></a>

						<!-- add to cart end -->


                        <ul>
                            <li><b>Availability</b> <span><?php
							$stock_num = $product->get_stock_quantity();
							if($stock_num){
								echo $stock_num . ' Available';
							}
							else{
								echo $product->get_stock_status();
							}  ?></span></li>
                            <li><b>Shipping</b> <span>01 day shipping. <samp>Free pickup today</samp></span></li>
                            <li><b>Weight</b> <span>0.5 kg</span></li>
                            <li><b>Share on</b>
                                <div class="share">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="container">
                    
                <div class="row">
                    <div class="col-lg-12">
                        <?php woocommerce_output_product_data_tabs(); ?>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12 mt-3">
                        <div class="section-title related__product__title">
                            <h2>Related Product</h2>
                        </div>
                        <div class="related-product-wrap-single-page">
                            <?php woocommerce_output_related_products(); ?>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Product Details Section End -->



	<?php
	/**
	 * Hook: woocommerce_after_single_product_summary.
	 *
	 * @hooked woocommerce_output_product_data_tabs - 10
	 * @hooked woocommerce_upsell_display - 15
	 * @hooked woocommerce_output_related_products - 20
	 */
	//do_action( 'woocommerce_after_single_product_summary' );
	?>

<?php do_action( 'woocommerce_after_single_product' ); ?>
