<?php
/**
 * Template Name: Mix Save
 *
 * @package iheal
 */

$iheal_bundle_steps = array(
	array(
		'title'       => 'Pick your focus',
		'description' => 'Start from immunity, brain, joints, skin, liver, or superfood support.',
	),
	array(
		'title'       => 'Layer complementary products',
		'description' => 'Build a routine that feels coherent rather than crowded or repetitive.',
	),
	array(
		'title'       => 'Unlock smarter savings',
		'description' => 'Discount tiers stay visible and simple so the bundle feels easy to understand.',
	),
);

$iheal_bundle_stats = array(
	array( 'value' => '20%', 'label' => 'top bundle savings' ),
	array( 'value' => '3+', 'label' => 'products for better value' ),
	array( 'value' => '6', 'label' => 'mixable categories' ),
);

$iheal_bundle_images = array(
	'main'  => 'https://www.figma.com/api/mcp/asset/62a4e31a-c419-40c6-a215-6c9e5e278aaa',
	'side1' => 'https://www.figma.com/api/mcp/asset/74def1e0-1464-4ca8-ae06-1afc3a5ee4d5',
	'side2' => 'https://www.figma.com/api/mcp/asset/8e62bf81-1a7e-4448-8fa4-e2e630024c63',
);

get_header();
?>

<main class="bg-[#f3eee2] font-body text-[#10241a]">
	<section class="">
		<div class="bg-white">
			<section class="py-16 lg:py-20">
				<div class="container">
					<div class="grid gap-10 lg:grid-cols-[0.9fr_1.1fr]">
						<div class="self-center">
					<span class="inline-flex rounded-xl bg-[#e8f7ea] px-4 py-2 text-[13px] font-semibold text-[#0f2a18]">
						Mix + Save
					</span>
					<h1 class="mt-5 text-[44px] font-bold leading-[1.02] tracking-[-0.04em] text-[#10241a] lg:text-[64px]">
						Bundle your routine without making the page feel heavy.
					</h1>
					<p class="mt-6 max-w-[520px] text-lg leading-8 text-[#6b6b6b]">
						This static landing page extends the bundle logic from your product page and keeps the same iHeal rhythm: soft sections, clear savings, and clean product storytelling.
					</p>
					<a class="mt-8 inline-flex min-h-[52px] items-center justify-center rounded-xl bg-[#2ea36a] px-8 py-4 text-sm font-bold text-white" href="#">
						Start Your Bundle
					</a>
						</div>
						<div class="rounded-[24px] bg-[linear-gradient(145deg,#edf7ee,#f4f7f5)] p-6">
							<div class="grid min-h-[420px] gap-4 md:grid-cols-2">
								<img class="h-full min-h-[420px] w-full rounded-[20px] object-cover" src="<?php echo esc_url( $iheal_bundle_images['main'] ); ?>" alt="Bundle hero">
								<div class="grid gap-4">
									<img class="h-full min-h-[202px] w-full rounded-[20px] object-cover shadow-[0_10px_24px_rgba(16,36,26,0.05)]" src="<?php echo esc_url( $iheal_bundle_images['side1'] ); ?>" alt="Bundle visual one">
									<img class="h-full min-h-[202px] w-full rounded-[20px] object-cover" src="<?php echo esc_url( $iheal_bundle_images['side2'] ); ?>" alt="Bundle visual two">
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="bg-[#edf7ee] py-16 lg:py-20">
				<div class="container">
					<div class="grid gap-6 md:grid-cols-3">
						<?php foreach ( $iheal_bundle_stats as $bundle_stat ) : ?>
							<div class="rounded-xl bg-white px-6 py-5 shadow-[0_10px_24px_rgba(16,36,26,0.05)]">
								<p class="text-[32px] font-bold leading-[1.2] text-[#10241a]"><?php echo esc_html( $bundle_stat['value'] ); ?></p>
								<p class="mt-2 text-sm text-[#6b6b6b]"><?php echo esc_html( $bundle_stat['label'] ); ?></p>
							</div>
						<?php endforeach; ?>
					</div>
				</div>
			</section>

			<section class="py-16 lg:py-20">
				<div class="container">
					<div class="grid gap-6 md:grid-cols-3">
						<?php foreach ( $iheal_bundle_steps as $bundle_step ) : ?>
							<article class="rounded-2xl border border-black/10 bg-white p-6 shadow-[0_12px_28px_rgba(16,36,26,0.05)]">
								<div class="flex h-12 w-12 items-center justify-center rounded-full bg-[#edf7ee] text-[#2ea36a]">+</div>
								<h2 class="mt-5 text-[24px] font-semibold leading-[1.2] text-[#10241a]"><?php echo esc_html( $bundle_step['title'] ); ?></h2>
								<p class="mt-3 text-base leading-7 text-[#6b6b6b]"><?php echo esc_html( $bundle_step['description'] ); ?></p>
							</article>
						<?php endforeach; ?>
					</div>
				</div>
			</section>

			<section class="pb-20 lg:pb-24">
				<div class="container">
					<div class="rounded-[24px] bg-[#10241a] px-8 py-16 text-white lg:px-12">
						<div class="grid gap-8 lg:grid-cols-[1fr_320px] lg:items-center">
							<div>
							<h2 class="text-[34px] font-semibold leading-[1.15] tracking-[-0.03em] lg:text-[42px]">
								Save more, but keep the experience calm.
							</h2>
							<p class="mt-4 max-w-[620px] text-base leading-7 text-white/80">
								Static by design, this template is useful when you want one branded bundle page without connecting live product logic yet.
							</p>
							</div>
							<a class="inline-flex min-h-[54px] items-center justify-center rounded-xl bg-white px-8 py-4 text-sm font-bold text-[#10241a]" href="#">
								Build Bundle
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
