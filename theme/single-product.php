<?php
/**
 * The template for displaying single products
 *
 * @package iheal
 */

get_header();

if ( ! function_exists( 'wc_get_product' ) ) :
	?>
	<main class="bg-[#f3eee2] font-body text-[#10241a]">
		<section class="py-16">
			<div class="container">
				<p class="text-base text-[#6b6b6b]">WooCommerce is not active.</p>
			</div>
		</section>
	</main>
	<?php
	get_footer();
	return;
endif;

$product = wc_get_product( get_the_ID() );
if ( ! $product ) :
	get_footer();
	return;
endif;

$gallery_ids = $product->get_gallery_image_ids();
$main_image_id = $product->get_image_id();
$main_image_url = $main_image_id ? wp_get_attachment_image_url( $main_image_id, 'large' ) : '';
$short_description = $product->get_short_description();
?>

<main class="bg-[#f3eee2] font-body text-[#10241a]">
	<section class="py-16">
		<div class="container">
			<div class="grid gap-10 lg:grid-cols-[1.1fr_0.9fr]">
				<div class="rounded-[24px] bg-[linear-gradient(145deg,#edf7ee,#f8f5eb)] p-5">
					<div class="grid gap-4">
						<?php if ( $main_image_url ) : ?>
							<img class="h-[380px] w-full rounded-[18px] object-cover" src="<?php echo esc_url( $main_image_url ); ?>" alt="<?php echo esc_attr( $product->get_name() ); ?>">
						<?php endif; ?>
						<?php if ( ! empty( $gallery_ids ) ) : ?>
							<div class="grid grid-cols-2 gap-4">
								<?php foreach ( array_slice( $gallery_ids, 0, 2 ) as $image_id ) : ?>
									<?php $image_url = wp_get_attachment_image_url( $image_id, 'medium' ); ?>
									<?php if ( $image_url ) : ?>
										<img class="h-[160px] w-full rounded-[16px] object-cover" src="<?php echo esc_url( $image_url ); ?>" alt="<?php echo esc_attr( $product->get_name() ); ?>">
									<?php endif; ?>
								<?php endforeach; ?>
							</div>
						<?php endif; ?>
					</div>
				</div>

				<div class="self-start">
					<p class="text-xs font-semibold uppercase tracking-[0.2em] text-[#6b6b6b]">Product</p>
					<h1 class="mt-4 text-[36px] font-bold leading-[1.1] tracking-[-0.03em] text-[#10241a] lg:text-[44px]">
						<?php echo esc_html( $product->get_name() ); ?>
					</h1>
					<div class="mt-4 text-[22px] font-semibold text-[#2ea36a]">
						<?php echo wp_kses_post( $product->get_price_html() ); ?>
					</div>
					<?php if ( $short_description ) : ?>
						<p class="mt-4 text-base leading-7 text-[#6b6b6b]">
							<?php echo wp_kses_post( $short_description ); ?>
						</p>
					<?php endif; ?>

					<div class="mt-6 rounded-2xl border border-black/10 bg-white p-6 shadow-[0_10px_24px_rgba(16,36,26,0.05)]">
						<?php woocommerce_template_single_add_to_cart(); ?>
					</div>

					<div class="mt-6 grid gap-4 sm:grid-cols-2">
						<div class="rounded-2xl border border-black/10 bg-[#f4f7f5] p-5">
							<p class="text-sm font-semibold text-[#10241a]">Clean formula</p>
							<p class="mt-2 text-sm leading-6 text-[#6b6b6b]">Organic ingredients, minimal fillers, and a calm daily routine.</p>
						</div>
						<div class="rounded-2xl border border-black/10 bg-white p-5">
							<p class="text-sm font-semibold text-[#10241a]">Bundle ready</p>
							<p class="mt-2 text-sm leading-6 text-[#6b6b6b]">Mix with other focus categories for simple savings.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="pb-20">
		<div class="container">
			<div class="grid gap-10 lg:grid-cols-[1.1fr_0.9fr]">
				<article class="prose prose-lg max-w-none prose-headings:font-body prose-headings:text-[#10241a] prose-p:text-[#4f5d57] prose-p:leading-8">
					<?php the_content(); ?>
				</article>
				<aside class="space-y-6">
					<div class="rounded-2xl border border-black/10 bg-white p-6 shadow-[0_10px_24px_rgba(16,36,26,0.05)]">
						<h2 class="text-[20px] font-semibold text-[#10241a]">Product details</h2>
						<ul class="mt-4 space-y-2 text-sm text-[#6b6b6b]">
							<li>SKU: <?php echo esc_html( $product->get_sku() ?: 'N/A' ); ?></li>
							<li>Category: <?php echo wp_kses_post( wc_get_product_category_list( $product->get_id() ) ); ?></li>
							<li>Stock: <?php echo esc_html( $product->is_in_stock() ? 'In stock' : 'Out of stock' ); ?></li>
						</ul>
					</div>
					<div class="rounded-2xl border border-black/10 bg-[#10241a] p-6 text-white">
						<h3 class="text-[20px] font-semibold">Need support?</h3>
						<p class="mt-3 text-sm text-white/80">Chat with our wellness guides for routine recommendations.</p>
						<a class="mt-5 inline-flex min-h-[44px] items-center justify-center rounded-xl bg-white px-5 text-sm font-semibold text-[#10241a]" href="#">
							Contact us
						</a>
					</div>
				</aside>
			</div>
		</div>
	</section>
</main>

<?php
get_footer();
