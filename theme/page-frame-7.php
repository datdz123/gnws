<?php
/**
 * Template Name: Frame 7
 *
 * @package iheal
 */

$iheal_product_categories = array(
	'Immunity',
	'Brain',
	'Joints',
	'Hair, Skin & Nail',
	'Liver',
	'Superfood',
);

$iheal_product_stats = array(
	array(
		'label' => 'Live categories',
		'value' => '6',
	),
	array(
		'label' => 'Organic picks',
		'value' => '24+',
	),
	array(
		'label' => 'Free shipping',
		'value' => '$50+',
	),
);

$iheal_products = array(
	array(
		'name' => 'FRUITYLICIOUS TURMERIC NUTRIDENSE DROP',
		'description' => 'Potent turmeric drops for joint & mobility support.',
		'price' => '$39',
		'rating' => '4.9 · 249 reviews',
		'tag' => 'Boost Immunity',
		'badges' => array( 'Joints', 'Organic' ),
		'image' => 'https://www.figma.com/api/mcp/asset/8984fe6a-651c-4898-8db1-17863f4e20e7',
	),
	array(
		'name' => 'BERRYLICIOUS IMMUNITY',
		'description' => 'Potent chew drops for all-season immune defense.',
		'price' => '$39',
		'rating' => '4.8 · 184 reviews',
		'tag' => 'Daily Defense',
		'badges' => array( 'Immunity' ),
		'image' => 'https://www.figma.com/api/mcp/asset/289af5e6-bdcc-406b-a83e-70fb62680918',
	),
	array(
		'name' => 'COLLAGEN REPLENISH SET',
		'description' => 'Daily vegan collagen support for hair, skin & nails.',
		'price' => '$78',
		'rating' => '4.8 · 184 reviews',
		'tag' => 'Daily Defense',
		'badges' => array(),
		'image' => 'https://www.figma.com/api/mcp/asset/18429ae2-4826-4073-9bd8-d290f642daae',
	),
	array(
		'name' => 'BRAIN BODY RECHARGE*',
		'description' => 'Strengthen your body while energizing your cells.',
		'price' => '$49',
		'rating' => '4.8 · 96 reviews',
		'tag' => 'Clean Recovery',
		'badges' => array(),
		'image' => 'https://www.figma.com/api/mcp/asset/74def1e0-1464-4ca8-ae06-1afc3a5ee4d5',
	),
	array(
		'name' => 'USDA ORGANIC LIQUID ZINC',
		'description' => 'Great-tasting, easy-to-take & made with organic apple juice',
		'price' => '$39',
		'rating' => '4.9 · 143 reviews',
		'tag' => 'Mobility Support',
		'badges' => array(),
		'image' => 'https://www.figma.com/api/mcp/asset/9b1af61e-7652-4dfc-b5d4-c4cff2fdbc31',
	),
	array(
		'name' => 'USDA ORGANIC LIQUID B12',
		'description' => 'Supports nerve & brain health*',
		'price' => '$99',
		'rating' => '4.7 · 118 reviews',
		'tag' => 'Detox Support',
		'badges' => array(),
		'image' => 'https://www.figma.com/api/mcp/asset/55c3420a-dc43-4f15-9cbc-001322318dbd',
	),
	array(
		'name' => 'USDA ORGANIC LIQUID LEMON BALM',
		'description' => 'Potent water extract to soothe the body & calm the mind.',
		'price' => '$43',
		'rating' => '4.8 · 171 reviews',
		'tag' => 'Skin Care',
		'badges' => array(),
		'image' => 'https://www.figma.com/api/mcp/asset/69d1c5e4-8057-49bf-aa23-492228dd39fb',
	),
	array(
		'name' => 'USDA ORGANIC LIQUID TOTAL IMMUNE BLEND*',
		'description' => 'All-season immunity support with vitamin, thyme & zinc.',
		'price' => '$45',
		'rating' => '4.7 · 198 reviews',
		'tag' => 'Detox Support',
		'badges' => array(),
		'image' => 'https://www.figma.com/api/mcp/asset/1694777f-0d0c-4b5f-92ea-10eb2a7b17e1',
	),
	array(
		'name' => 'SPIRULINA POWDER',
		'description' => 'Delivers more than 50% plant protein in each serving.',
		'price' => '$37',
		'rating' => '4.7 · 119 reviews',
		'tag' => 'Detox Support',
		'badges' => array( 'Organic' ),
		'image' => 'https://www.figma.com/api/mcp/asset/8e62bf81-1a7e-4448-8fa4-e2e630024c63',
	),
	array(
		'name' => 'L-LYSINE',
		'description' => 'Benefits joint health, collagen production, and metabolism*',
		'price' => '$39',
		'rating' => '4.7 · 118 reviews',
		'tag' => 'Detox Support',
		'badges' => array(),
		'image' => 'https://www.figma.com/api/mcp/asset/79577ac0-b3ee-499f-a698-1c4bf7bf7883',
	),
);

get_header();
?>

<main class="bg-[linear-gradient(180deg,#edf7ee_0%,#ffffff_10.453%)] font-body text-[#10241a]">
	<h1 class="sr-only"><?php echo esc_html( get_the_title() ); ?></h1>

	<section class="w-full pb-16 pt-9">
		<div class="container">
			<div class="flex flex-wrap gap-3">
			<?php foreach ( $iheal_product_categories as $category_index => $category_name ) : ?>
				<span class="inline-flex items-center rounded-xl border border-black/10 bg-white px-5 py-3 text-sm font-semibold text-[#10241a] shadow-[0_8px_20px_rgba(16,36,26,0.04)]">
					<?php echo esc_html( $category_name ); ?>
				</span>
			<?php endforeach; ?>
			</div>

			<div class="mt-7 grid gap-8 xl:grid-cols-[minmax(0,1fr)_minmax(320px,712px)] xl:items-end">
				<div class="max-w-[640px]">
					<div class="inline-flex items-center rounded-xl bg-[#e8f7ea] px-4 py-2 text-[13px] font-semibold text-[#0f2a18]">
						<span class="mr-2 text-xs text-[#2ea36a]">◉</span>
						Curated wellness essentials
					</div>
					<h2 class="mt-4 text-[38px] font-bold leading-[1.08] tracking-[-0.03em] text-[#10241a] lg:text-[42px]">
						Shop All Products
					</h2>
					<p class="mt-4 text-base leading-6 text-[#6b6b6b] lg:max-w-[600px]">
						Find the right products for your healthy lifestyle with clean formulas, targeted benefits, and easy bundle savings across immunity, brain, joints, skin, liver, and superfood support.
					</p>
				</div>

				<div class="grid gap-3 md:grid-cols-3">
					<?php foreach ( $iheal_product_stats as $stat_item ) : ?>
						<div class="rounded-lg border border-black/10 bg-white px-5 py-4 shadow-[0_10px_24px_rgba(16,36,26,0.05)]">
							<p class="text-[13px] leading-5 text-[#6b6b6b]"><?php echo esc_html( $stat_item['label'] ); ?></p>
							<p class="mt-1 text-[22px] font-bold leading-[1.5] text-[#10241a]"><?php echo esc_html( $stat_item['value'] ); ?></p>
						</div>
					<?php endforeach; ?>
				</div>
			</div>

			<section class="mt-7 rounded-lg border border-black/10 bg-[linear-gradient(134.83deg,#e8f7ea_0%,#edf7ee_100%)] p-6 shadow-[0_14px_32px_rgba(16,36,26,0.05)]">
				<div class="grid gap-6 xl:grid-cols-[minmax(0,1fr)_426px] xl:items-center">
					<div>
						<div class="inline-flex rounded-xl bg-white px-3 py-2 text-[13px] font-bold leading-5 text-[#2ea36a]">
							Mix &amp; Save
						</div>
						<h2 class="mt-4 text-[28px] font-bold leading-[1.15] tracking-[-0.02em] text-[#10241a]">
							Why Not Choose a Better Way to Save for Your Health?
						</h2>
						<p class="mt-3 max-w-[640px] text-sm leading-6 text-[#6b6b6b]">
							Build your own wellness routine with complementary products for immunity, recovery, and daily vitality. Get clear savings automatically when you bundle.
						</p>
					</div>

					<div class="grid gap-3">
						<div class="rounded-lg bg-white px-6 py-5 text-center shadow-[0_10px_24px_rgba(16,36,26,0.05)]">
							<p class="text-xs font-medium text-[#9a9a9a]">Bundle discount</p>
							<p class="mt-1 text-[20px] font-bold text-[#2ea36a] lg:text-[22px]">Save up to 20%</p>
						</div>
						<a class="inline-flex min-h-[49px] items-center justify-center rounded-lg bg-[#2ea36a] px-8 py-3 text-sm font-semibold text-white shadow-[0_12px_24px_rgba(46,163,106,0.22)] transition hover:bg-[#238453]" href="#">
							Build Your Bundle
						</a>
					</div>
				</div>
			</section>

			<section class="mt-10">
				<div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
					<h2 class="text-[28px] font-bold leading-[1.15] tracking-[-0.02em] text-[#10241a]">
						Best picks in Immunity
					</h2>
					<p class="text-sm text-[#8b8b8b]">Showing 8 of 24 products</p>
				</div>

				<div class="mt-6 grid gap-4 sm:grid-cols-2 lg:grid-cols-4 xl:grid-cols-5">
					<?php
					if ( ! function_exists( 'wc_get_product' ) ) :
						?>
						<p class="text-sm text-[#6b6b6b]">WooCommerce is not active.</p>
						<?php
					else :
						$args = array(
							'post_type'      => 'product',
							'posts_per_page' => 10,
							'post_status'    => 'publish',
						);
						$loop = new WP_Query( $args );

						if ( $loop->have_posts() ) :
							while ( $loop->have_posts() ) : $loop->the_post();
								$product = wc_get_product( get_the_ID() );
								if ( ! $product ) {
									continue;
								}

						$product_name = get_the_title();
						$product_price = $product->get_price_html();
						
						$product_description = $product->get_short_description();
						if ( empty( $product_description ) ) {
							$product_description = get_the_excerpt();
						}
						// Strip tags and truncate description up to 15 words
						$product_description = wp_trim_words( wp_strip_all_tags( $product_description ), 15, '...' );

						$product_image = get_the_post_thumbnail_url( get_the_ID(), 'medium' );
						if ( empty( $product_image ) ) {
							// placeholder if no featured image
							$product_image = 'https://www.figma.com/api/mcp/asset/8984fe6a-651c-4898-8db1-17863f4e20e7';
						}
				?>
					<article class="flex h-full flex-col rounded-lg border border-black/10 bg-white p-[17px] shadow-[0_12px_28px_rgba(16,36,26,0.05)]">
						<div class="rounded-lg bg-[#f4f7f5]">
							<div class="flex min-h-[30px] flex-wrap gap-2 p-3">
								<span class="rounded-xl bg-white/95 px-3 py-1.5 text-[12px] font-bold leading-[18px] text-[#10241a]">
									Static Badge
								</span>
							</div>
							<img class="h-[211px] w-full object-cover" src="<?php echo esc_url( $product_image ); ?>" alt="<?php echo esc_attr( $product_name ); ?>">
						</div>

						<div class="mt-4 flex flex-1 flex-col">
							<h3 class="text-[12px] font-bold uppercase leading-[22px] text-[#10241a]">
								<a href="<?php the_permalink(); ?>"><?php echo esc_html( $product_name ); ?></a>
							</h3>
							<p class="mt-2 min-h-[63px] text-[14px] leading-[21px] text-[#6b6b6b]">
								<?php echo esc_html( $product_description ); ?>
							</p>

							<div class="mt-3 flex items-center justify-between gap-3 text-[13px]">
								<p class="text-[#6b6b6b]">
									<span class="mr-1 text-[#f6b646]">★</span>4.9 · 249 reviews
								</p>
								<p class="font-semibold text-[#2ea36a]">Boost Immunity</p>
							</div>

							<div class="mt-4">
								<div class="text-[22px] font-bold leading-[33px] text-[#10241a] my-price">
									<?php echo wp_kses_post( $product_price ); ?>
								</div>
							</div>

							<a class="mt-4 inline-flex min-h-[49px] items-center justify-center rounded-lg bg-[#2ea36a] px-[18px] py-[14px] text-[14px] font-semibold text-white shadow-[0_12px_24px_rgba(46,163,106,0.22)] transition hover:bg-[#238453] add_to_cart_button ajax_add_to_cart" href="<?php echo esc_url( $product->add_to_cart_url() ); ?>" data-product_id="<?php echo esc_attr( $product->get_id() ); ?>" data-product_sku="<?php echo esc_attr( $product->get_sku() ); ?>" data-quantity="1" aria-label="<?php echo esc_attr( $product_name ); ?>">
								Add to Cart
							</a>
						</div>
					</article>
				<?php 
						endwhile;
						wp_reset_postdata();
					endif;
				endif;
				?>
				</div>

				<div class="flex justify-center pt-8">
					<a class="inline-flex min-h-[59px] items-center justify-center rounded-lg border border-black/10 bg-white px-10 py-4 text-sm font-semibold text-[#10241a]" href="#">
						Load More Products
					</a>
				</div>
			</section>
		</div>
	</section>
</main>

<?php
get_footer();
