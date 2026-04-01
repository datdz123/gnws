<?php
/**
 * Template Name: About Us
 *
 * @package iheal
 */

$iheal_about_values = array(
	array(
		'title'       => 'Clean Ingredients',
		'description' => 'We choose straightforward organic ingredients and avoid unnecessary fillers.',
	),
	array(
		'title'       => 'Targeted Formulas',
		'description' => 'Every product is built around one clear wellness outcome and simple routines.',
	),
	array(
		'title'       => 'Conscious Packaging',
		'description' => 'Softer materials, lighter packaging, and a cleaner visual language throughout.',
	),
);

$iheal_about_stats = array(
	array( 'value' => '24+', 'label' => 'organic essentials' ),
	array( 'value' => '6', 'label' => 'core wellness categories' ),
	array( 'value' => '4.8/5', 'label' => 'community rating' ),
);

$iheal_about_images = array(
	'hero_main'     => 'https://www.figma.com/api/mcp/asset/9d166b6b-4ebd-41f6-b070-ea4cfb452608',
	'hero_side_top' => 'https://www.figma.com/api/mcp/asset/62a4e31a-c419-40c6-a215-6c9e5e278aaa',
	'hero_side_bot' => 'https://www.figma.com/api/mcp/asset/7873069b-4ca2-41fd-8ef6-a2e67f7d9c97',
);

get_header();
?>

<main class="bg-[#f3eee2] font-body text-[#10241a]">
	<section class="">
		<div class="bg-white">
			<section class="py-16 lg:py-20">
				<div class="container">
					<div class="grid gap-10 lg:grid-cols-[0.95fr_1.05fr]">
						<div class="self-center">
					<span class="inline-flex rounded-xl bg-[#e8f7ea] px-4 py-2 text-[13px] font-semibold text-[#0f2a18]">
						About iHeal
					</span>
					<h1 class="mt-5 text-[44px] font-bold leading-[1.02] tracking-[-0.04em] text-[#10241a] lg:text-[64px]">
						Organic wellness with a calmer, cleaner point of view.
					</h1>
					<p class="mt-6 max-w-[520px] text-lg leading-8 text-[#6b6b6b]">
						iHeal is designed around thoughtful routines, ingredient clarity, and a softer wellness experience. The brand language stays premium, but still approachable and warm.
					</p>
						</div>
						<div class="grid min-h-[420px] gap-4 rounded-[24px] bg-[linear-gradient(145deg,#edf7ee,#f8f5eb)] p-5 md:grid-cols-[1.1fr_0.9fr]">
							<img class="h-full min-h-[420px] w-full rounded-[20px] object-cover" src="<?php echo esc_url( $iheal_about_images['hero_main'] ); ?>" alt="iHeal wellness story">
							<div class="grid gap-4">
								<img class="h-full min-h-[202px] w-full rounded-[20px] object-cover" src="<?php echo esc_url( $iheal_about_images['hero_side_top'] ); ?>" alt="iHeal product collection">
								<img class="h-full min-h-[202px] w-full rounded-[20px] object-cover" src="<?php echo esc_url( $iheal_about_images['hero_side_bot'] ); ?>" alt="iHeal banner">
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="bg-[#edf7ee] py-16 lg:py-20">
				<div class="container">
					<div class="grid gap-6 md:grid-cols-3">
						<?php foreach ( $iheal_about_stats as $about_stat ) : ?>
							<div class="rounded-xl bg-white px-6 py-5 shadow-[0_10px_24px_rgba(16,36,26,0.05)]">
								<p class="text-[32px] font-bold leading-[1.2] text-[#10241a]"><?php echo esc_html( $about_stat['value'] ); ?></p>
								<p class="mt-2 text-sm text-[#6b6b6b]"><?php echo esc_html( $about_stat['label'] ); ?></p>
							</div>
						<?php endforeach; ?>
					</div>
				</div>
			</section>

			<section class="py-16 lg:py-20">
				<div class="container">
					<div class="grid gap-10 lg:grid-cols-[0.88fr_1.12fr]">
						<div>
						<span class="inline-flex rounded-xl bg-[#f4f7f5] px-4 py-2 text-[13px] font-semibold text-[#2ea36a]">
							Our philosophy
						</span>
						<h2 class="mt-5 text-[34px] font-semibold leading-[1.15] tracking-[-0.03em] text-[#10241a] lg:text-[42px]">
							We simplify wellness without flattening the experience.
						</h2>
						<p class="mt-5 max-w-[500px] text-base leading-7 text-[#6b6b6b]">
							The visual system uses white space, muted neutrals, and soft green accents to make every section feel breathable. The product story stays clear, with one message per block and no clutter.
						</p>
						</div>
						<div class="grid gap-5 md:grid-cols-3">
							<?php foreach ( $iheal_about_values as $about_value ) : ?>
								<article class="rounded-2xl border border-black/10 bg-white p-6 shadow-[0_10px_24px_rgba(16,36,26,0.05)]">
									<div class="flex h-12 w-12 items-center justify-center rounded-full bg-[#edf7ee] text-[#2ea36a]">✦</div>
									<h3 class="mt-5 text-xl font-semibold text-[#10241a]"><?php echo esc_html( $about_value['title'] ); ?></h3>
									<p class="mt-3 text-sm leading-6 text-[#6b6b6b]"><?php echo esc_html( $about_value['description'] ); ?></p>
								</article>
							<?php endforeach; ?>
						</div>
					</div>
				</div>
			</section>

			<section class="pb-20 lg:pb-24">
				<div class="container">
					<div class="rounded-[24px] bg-[#10241a] px-8 py-16 text-white lg:px-12">
						<div class="grid gap-8 lg:grid-cols-[1fr_320px] lg:items-center">
							<div>
							<h2 class="text-[34px] font-semibold leading-[1.15] tracking-[-0.03em] lg:text-[42px]">
								Beautifully calm, good for the ritual.
							</h2>
							<p class="mt-4 max-w-[620px] text-base leading-7 text-white/80">
								This page stays intentionally static and editorial, so you can use it as a brand story landing page without relying on dynamic content.
							</p>
							</div>
							<a class="inline-flex min-h-[54px] items-center justify-center rounded-xl bg-white px-8 py-4 text-sm font-bold text-[#10241a]" href="#">
								Explore Products
							</a>
						</div>
					</div>
				</div>
			</section>
		</div>
	</section>
</main>

<?php
get_footer();
