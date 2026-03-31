<?php
/**
 * Template Name: Trang chu
 *
 * @package gnws
 */

$iheal_banner_url        = 'https://www.figma.com/api/mcp/asset/7873069b-4ca2-41fd-8ef6-a2e67f7d9c97';
$iheal_hero_image_url    = 'https://www.figma.com/api/mcp/asset/9d166b6b-4ebd-41f6-b070-ea4cfb452608';
$iheal_bundle_image_url  = 'https://www.figma.com/api/mcp/asset/62a4e31a-c419-40c6-a215-6c9e5e278aaa';
$iheal_reviews           = array(
	array(
		'name'   => 'Sarah Jenkins',
		'role'   => 'Verified Buyer',
		'image'  => 'https://www.figma.com/api/mcp/asset/57e45c5f-24bd-4281-89d0-2ba742ed6f7c',
		'quote'  => '"Since switching to iHeal, my skin has never looked better. Knowing everything is 100% natural gives me such peace of mind. Truly a game changer!"',
	),
	array(
		'name'   => 'Mark Torres',
		'role'   => 'Verified Buyer',
		'image'  => 'https://www.figma.com/api/mcp/asset/a947b538-0399-4179-ba06-d91f76b35a9f',
		'quote'  => '"The calm drops are absolutely incredible. I use them every evening to wind down, and the difference in my sleep quality is amazing. Highly recommend."',
	),
	array(
		'name'   => 'Elena Moore',
		'role'   => 'Verified Buyer',
		'image'  => 'https://www.figma.com/api/mcp/asset/90a6c417-1b34-461f-aa39-75e562c83986',
		'quote'  => '"I love the sustainability mission behind this brand almost as much as I love the products themselves. The daily serum is my new holy grail."',
	),
);

$iheal_benefits = array(
	array(
		'icon'        => '◔',
		'title'       => '100% Organic',
		'description' => 'Sourced purely from nature without synthetic pesticides or harmful chemicals.',
	),
	array(
		'icon'        => '♻',
		'title'       => 'Eco-Friendly',
		'description' => 'Packaged sustainably with recyclable and biodegradable materials.',
	),
	array(
		'icon'        => '❦',
		'title'       => 'Vegan & Cruelty-Free',
		'description' => 'Never tested on animals. Completely free from animal-derived ingredients.',
	),
	array(
		'icon'        => '🛡',
		'title'       => 'Safe for Your Health',
		'description' => 'Dermatologist approved, non-toxic, and formulated for sensitive systems.',
	),
);

get_header();
?>

<main class="bg-[#f3eee2] font-body text-[#10241a]">
	<h1 class="sr-only"><?php echo esc_html( get_the_title() ); ?></h1>

	<section class="">
		<div class="mx-auto overflow-hidden bg-white">
			<div class="relative">
				<img class="h-auto w-full object-cover" src="<?php echo esc_url( $iheal_banner_url ); ?>" alt="iHeal organic wellness banner">
			</div>

			<div class="grid items-center gap-10 px-6 py-20 md:px-12 lg:grid-cols-[1fr_527px] lg:px-[88px] lg:py-20">
				<div class="max-w-[480px]">
					<div class="inline-flex items-center rounded-xl bg-[#f4f7f5] px-4 py-2 text-sm font-medium text-[#2a2a2a]">
						<span class="mr-2 text-xs text-[#2ea36a]">◉</span>
						<span>Trusted by Conscious Consumers</span>
					</div>
					<h2 class="mt-6 text-[42px] font-bold leading-[1.05] tracking-[-0.04em] text-[#10241a] lg:text-[56px]">
						Nourish your body. Restore your balance.
					</h2>
					<p class="mt-6 max-w-[430px] text-lg leading-8 text-[#6b6b6b] lg:text-[20px]">
						Experience the power of 100% clean, organic wellness products designed to support your natural healthy lifestyle from the inside out.
					</p>
					<a class="mt-8 inline-flex items-center justify-center rounded-xl bg-[#2ea36a] px-8 py-4 text-base font-bold text-white transition hover:bg-[#238453]" href="#">
						Shop Now
					</a>
				</div>

				<div>
					<img class="h-auto w-full object-cover" src="<?php echo esc_url( $iheal_hero_image_url ); ?>" alt="Meditation wellness">
				</div>
			</div>

			<section class="bg-[#edf7ee] px-6 py-20 md:px-12 lg:px-[120px] lg:py-28">
				<div class="mx-auto max-w-[1200px]">
					<div class="mx-auto max-w-[620px] text-center">
						<h2 class="text-[34px] font-semibold tracking-[-0.03em] text-[#10241a] lg:text-[40px]">Why Choose iHeal?</h2>
						<p class="mx-auto mt-4 max-w-[600px] text-lg leading-[1.6] text-[#6b6b6b]">
							We believe in total transparency and uncompromising quality for your wellbeing.
						</p>
					</div>

					<div class="mt-12 grid gap-10 md:grid-cols-2 xl:grid-cols-4 xl:gap-12">
						<?php foreach ( $iheal_benefits as $benefit ) : ?>
							<article class="text-center">
								<div class="mx-auto flex h-20 w-20 items-center justify-center rounded-full bg-white text-2xl text-[#2ea36a] shadow-[0_8px_24px_rgba(0,0,0,0.04)]">
									<span><?php echo esc_html( $benefit['icon'] ); ?></span>
								</div>
								<h3 class="mt-6 text-xl font-semibold text-[#10241a]"><?php echo esc_html( $benefit['title'] ); ?></h3>
								<p class="mx-auto mt-3 max-w-[240px] text-[15px] leading-6 text-[#6b6b6b]">
									<?php echo esc_html( $benefit['description'] ); ?>
								</p>
							</article>
						<?php endforeach; ?>
					</div>
				</div>
			</section>

			<section class="px-6 py-20 md:px-12 lg:px-[152px] lg:py-24">
				<div class="overflow-hidden rounded-2xl bg-[#f4f7f5] lg:grid lg:grid-cols-2">
					<div class="flex items-center px-8 py-14 md:px-12 lg:px-16 lg:py-20">
						<div class="max-w-[435px]">
							<h2 class="text-[38px] font-semibold leading-[1.2] tracking-[-0.03em] text-[#2a2a2a]">
								Why Not Choose a Better Way to Save for Your Health?
							</h2>
							<p class="mt-5 text-2xl font-medium leading-[1.6] text-[#2ea36a]">Save up to 20% on bundles</p>
							<p class="mt-6 text-lg leading-8 text-[#6b6b6b]">
								Curate your perfect daily routine with our fully customizable kits. The more you add, the more you save.
							</p>
							<a class="mt-8 inline-flex items-center justify-center rounded-xl bg-[#2ea36a] px-8 py-4 text-base font-bold text-white transition hover:bg-[#238453]" href="#">
								Build Your Bundle
							</a>
						</div>
					</div>
					<div class="min-h-[360px]">
						<img class="h-full w-full object-cover" src="<?php echo esc_url( $iheal_bundle_image_url ); ?>" alt="Wellness bundles">
					</div>
				</div>
			</section>

			<section class="px-6 py-20 md:px-12 lg:px-[120px] lg:py-24">
				<div class="mx-auto max-w-[1200px] text-center">
					<h2 class="text-[34px] font-semibold tracking-[-0.03em] text-[#10241a] lg:text-[40px]">Loved by Our Community</h2>
					<p class="mx-auto mt-4 max-w-[600px] text-lg leading-[1.6] text-[#6b6b6b]">
						Real stories from people who have transformed their routines with iHeal.
					</p>
				</div>

				<div class="mx-auto mt-12 grid max-w-[1200px] gap-8 lg:grid-cols-3">
					<?php foreach ( $iheal_reviews as $review ) : ?>
						<article class="rounded-lg border border-black/10 bg-white px-8 py-10 text-left shadow-[0_4px_20px_rgba(0,0,0,0.03)]">
							<div class="flex gap-1 text-[#f6b646]">
								<span>★</span>
								<span>★</span>
								<span>★</span>
								<span>★</span>
								<span>★</span>
							</div>
							<p class="mt-6 text-base leading-[1.7] text-[#10241a]">
								<?php echo esc_html( $review['quote'] ); ?>
							</p>
							<div class="mt-8 flex items-center gap-4">
								<img class="h-12 w-12 rounded-full object-cover" src="<?php echo esc_url( $review['image'] ); ?>" alt="<?php echo esc_attr( $review['name'] ); ?>">
								<div>
									<p class="font-semibold text-[#10241a]"><?php echo esc_html( $review['name'] ); ?></p>
									<p class="text-sm text-[#8b8b8b]"><?php echo esc_html( $review['role'] ); ?></p>
								</div>
							</div>
						</article>
					<?php endforeach; ?>
				</div>
			</section>

			<section class="px-6 pb-20 md:px-12 lg:px-[152px] lg:pb-24">
				<div class="rounded-2xl bg-[#2ea36a] px-6 py-16 text-center text-white md:px-10 lg:px-16 lg:py-20">
					<h2 class="text-[34px] font-semibold tracking-[-0.03em] lg:text-[40px]">Ready to transform your routine?</h2>
					<p class="mx-auto mt-4 max-w-[720px] text-lg leading-[1.6] text-white/90">
						Join thousands of conscious consumers making healthier choices every day.
					</p>
					<a class="mt-8 inline-flex items-center justify-center rounded-xl bg-white px-8 py-4 text-sm font-bold text-[#10241a] transition hover:bg-[#f4f7f5]" href="#">
						Start Your Healthy Journey
					</a>
				</div>
			</section>
		</div>
	</section>
</main>

<?php
get_footer();
