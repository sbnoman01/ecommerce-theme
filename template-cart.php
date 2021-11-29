<?php 
/*
Template Name: Cart page
*/
?>
<?php get_header(); ?>
<section class="mb-5 breadcrumb-section set-bg" data-setbg="<?= get_template_directory_uri(); ?>/img/breadcrumb.jpg" style="background-image: url(<?= get_template_directory_uri(); ?>/img/breadcrumb.jpg);">
			<div class="container">
                
				<div class="row">
					<div class="col-lg-12 text-center">
						<div class="breadcrumb__text">
							<h2><?php the_title(); ?></h2>
							<div class="breadcrumb__option">
								<a href="<?= site_url(); ?>">Home</a>
								<span><?php the_title(); ?></span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <?=
                    do_shortcode('[woocommerce_cart]');
                ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>