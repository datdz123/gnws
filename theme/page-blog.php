<?php
/**
 * Template Name: Blog
 *
 * @package gnws
 */

$iheal_blog_posts = array(
	array(
		'title'    => 'How to Build a Wellness Routine That Actually Sticks',
		'excerpt'  => 'A calmer framework for creating simple habits around energy, focus, and recovery without overloading your day.',
		'category' => 'Routine',
		'date'     => 'March 31, 2026',
		'image'    => 'https://www.figma.com/api/mcp/asset/9d166b6b-4ebd-41f6-b070-ea4cfb452608',
	),
	array(
		'title'    => 'Why Clean Formulas Feel Better in Everyday Use',
		'excerpt'  => 'Breaking down the difference between fewer ingredients, clearer messaging, and stronger trust in wellness brands.',
		'category' => 'Ingredients',
		'date'     => 'March 24, 2026',
		'image'    => 'https://www.figma.com/api/mcp/asset/62a4e31a-c419-40c6-a215-6c9e5e278aaa',
	),
	array(
		'title'    => 'A Soft, Organic Visual Language for Modern Wellness',
		'excerpt'  => 'Notes on why muted greens, open spacing, and product-first storytelling work so well in health-focused commerce.',
		'category' => 'Design',
		'date'     => 'March 18, 2026',
		'image'    => 'https://www.figma.com/api/mcp/asset/7873069b-4ca2-41fd-8ef6-a2e67f7d9c97',
	),
	array(
		'title'    => 'The Best Time to Layer Immune and Recovery Support',
		'excerpt'  => 'An easy guide for combining daily-support products into one clean schedule that stays manageable.',
		'category' => 'Wellness',
		'date'     => 'March 12, 2026',
		'image'    => 'https://www.figma.com/api/mcp/asset/8984fe6a-651c-4898-8db1-17863f4e20e7',
	),
	array(
		'title'    => 'How Bundles Help Customers Shop With Less Friction',
		'excerpt'  => 'Strategic bundle layouts can reduce hesitation and make category discovery feel more intuitive.',
		'category' => 'Commerce',
		'date'     => 'March 03, 2026',
		'image'    => 'https://www.figma.com/api/mcp/asset/289af5e6-bdcc-406b-a83e-70fb62680918',
	),
	array(
		'title'    => 'Editorial Content That Supports Product Discovery',
		'excerpt'  => 'The best blog content works as a guide, not a detour. Here is how to make that transition smoother.',
		'category' => 'Content',
		'date'     => 'February 25, 2026',
		'image'    => 'https://www.figma.com/api/mcp/asset/74def1e0-1464-4ca8-ae06-1afc3a5ee4d5',
	),
);

$iheal_blog_hero_image = 'https://www.figma.com/api/mcp/asset/1e2e901c-a9dd-419a-9c3b-a720225e25e0';

get_header();
?>

<main class="bg-[#f3eee2] font-body text-[#10241a]">
	<section class="">
		<div class="bg-white">
			<section class="grid gap-8 px-6 py-16 md:px-12 lg:grid-cols-[0.95fr_1.05fr] lg:px-16 lg:py-20">
				<div>
					<span class="inline-flex rounded-xl bg-[#e8f7ea] px-4 py-2 text-[13px] font-semibold text-[#0f2a18]">
						iHeal Journal
					</span>
					<h1 class="mt-5 text-[44px] font-bold leading-[1.02] tracking-[-0.04em] text-[#10241a] lg:text-[64px]">
						Editorial wellness notes, routines, and product stories.
					</h1>
					<p class="mt-6 max-w-[520px] text-lg leading-8 text-[#6b6b6b]">
						A static blog landing page that matches the calmer iHeal direction. Cards are fixed, and each one can point to the single article layout in <code>single.php</code>.
					</p>
				</div>
				<div class="rounded-[24px] bg-[linear-gradient(145deg,#edf7ee,#f8f5eb)] p-5">
					<div class="grid min-h-[360px] gap-4 rounded-[20px] bg-white p-5 shadow-[0_10px_24px_rgba(16,36,26,0.05)]">
						<img class="h-[220px] w-full rounded-[16px] object-cover" src="<?php echo esc_url( $iheal_blog_hero_image ); ?>" alt="iHeal journal hero">
						<div class="grid gap-4 md:grid-cols-2">
							<img class="h-[120px] w-full rounded-[16px] object-cover" src="<?php echo esc_url( $iheal_blog_posts[1]['image'] ); ?>" alt="Journal visual one">
							<img class="h-[120px] w-full rounded-[16px] object-cover" src="<?php echo esc_url( $iheal_blog_posts[2]['image'] ); ?>" alt="Journal visual two">
						</div>
					</div>
				</div>
			</section>

			<section class="px-6 pb-20 md:px-12 lg:px-16 lg:pb-24">
				<div class="grid gap-6 md:grid-cols-2 xl:grid-cols-3">
					<?php foreach ( $iheal_blog_posts as $blog_post ) : ?>
						<article class="flex h-full flex-col rounded-2xl border border-black/10 bg-white p-6 shadow-[0_12px_28px_rgba(16,36,26,0.05)]">
							<div class="rounded-[18px] bg-[linear-gradient(145deg,#edf7ee,#f8f5eb)] p-4">
								<img class="h-[220px] w-full rounded-[14px] object-cover" src="<?php echo esc_url( $blog_post['image'] ); ?>" alt="<?php echo esc_attr( $blog_post['title'] ); ?>">
							</div>
							<div class="mt-6 flex flex-wrap items-center gap-3 text-xs font-semibold uppercase tracking-[0.12em] text-[#6b6b6b]">
								<span class="rounded-full bg-[#f4f7f5] px-3 py-1.5 text-[#2ea36a]"><?php echo esc_html( $blog_post['category'] ); ?></span>
								<span><?php echo esc_html( $blog_post['date'] ); ?></span>
							</div>
							<h2 class="mt-5 text-[28px] font-semibold leading-[1.15] tracking-[-0.02em] text-[#10241a]">
								<a href="<?php echo esc_url( home_url( '/blog-single/' ) ); ?>"><?php echo esc_html( $blog_post['title'] ); ?></a>
							</h2>
							<p class="mt-4 flex-1 text-base leading-7 text-[#6b6b6b]"><?php echo esc_html( $blog_post['excerpt'] ); ?></p>
							<a class="mt-8 inline-flex min-h-[48px] items-center justify-center rounded-xl bg-[#2ea36a] px-7 py-3 text-sm font-bold text-white" href="<?php echo esc_url( home_url( '/blog-single/' ) ); ?>">
								Read article
							</a>
						</article>
					<?php endforeach; ?>
				</div>
			</section>
		</div>
	</section>
</main>

<?php
get_footer();
