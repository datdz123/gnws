<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package iheal
 */

get_header();
?>

<?php $iheal_single_hero_image = 'https://www.figma.com/api/mcp/asset/9d166b6b-4ebd-41f6-b070-ea4cfb452608'; ?>

	<main class="bg-[#f3eee2] font-body text-[#10241a]">
		<section class="">
			<div class="bg-white">
				<section class="py-16 lg:py-20">
					<div class="container">
						<div class="grid gap-10 lg:grid-cols-[0.82fr_1.18fr]">
							<div class="self-start">
						<div class="flex flex-wrap items-center gap-3 text-xs font-semibold uppercase tracking-[0.12em] text-[#6b6b6b]">
							<span class="rounded-full bg-[#e8f7ea] px-3 py-1.5 text-[#2ea36a]">Routine</span>
							<span>March 31, 2026</span>
						</div>
						<h1 class="mt-5 text-[40px] font-bold leading-[1.05] tracking-[-0.04em] text-[#10241a] lg:text-[58px]">
							How to Build a Wellness Routine That Actually Sticks
						</h1>
						<p class="mt-6 max-w-[460px] text-lg leading-8 text-[#6b6b6b]">
							A static single article template for the iHeal blog. It matches the same calm brand system as the homepage and product page, but shifts into a more editorial reading flow.
						</p>
						</div>
						<div class="rounded-[24px] bg-[linear-gradient(145deg,#edf7ee,#f8f5eb)] p-5">
							<img class="h-[420px] w-full rounded-[18px] object-cover" src="<?php echo esc_url( $iheal_single_hero_image ); ?>" alt="Wellness article hero">
						</div>
					</div>
				</div>
				</section>

				<section class="pb-20 lg:pb-24">
					<div class="container">
						<div class="grid gap-10 lg:grid-cols-[minmax(0,760px)_280px]">
							<article class="prose prose-lg max-w-none prose-headings:font-body prose-headings:text-[#10241a] prose-p:text-[#4f5d57] prose-p:leading-8 prose-strong:text-[#10241a] prose-li:text-[#4f5d57]">
						<p>
							The strongest wellness routines are usually the simplest ones. When a plan asks too much from the start, it becomes hard to repeat, and repetition is what creates results people can actually feel.
						</p>
						<h2>Start with one clear outcome</h2>
						<p>
							Most people fail because they begin with too many goals at once. Better energy, better sleep, better digestion, better focus. Those are useful ambitions, but they create friction if each one demands a separate product, ritual, and decision.
						</p>
						<p>
							A better route is to choose one primary outcome first, then let everything else support it. That creates a simpler shopping experience and a much calmer daily rhythm.
						</p>
						<h2>Keep the routine light</h2>
						<p>
							A morning product, an evening product, and one reliable habit is often enough for a stronger baseline. If the structure already feels elegant, people are much more likely to keep going for weeks instead of days.
						</p>
						<ul>
							<li>Choose a narrow category focus before layering more items.</li>
							<li>Use copy that reinforces clarity rather than complexity.</li>
							<li>Keep the visual environment soft so the page feels breathable.</li>
						</ul>
						<h2>Build trust with consistency</h2>
						<p>
							When the brand, the product copy, and the interface all say the same thing, the routine feels safer. Clean formulation claims, simpler spacing, and obvious next steps all help reduce hesitation.
						</p>
						<blockquote>
							A calm layout does more than look premium. It makes the decision feel easier.
						</blockquote>
						<p>
							That is why the static blog templates here intentionally avoid unnecessary moving parts. The design stays stable, the hierarchy stays clear, and the content remains easy to scan from headline to CTA.
						</p>
							</article>

							<aside class="space-y-6">
								<div class="rounded-2xl border border-black/10 bg-[#f4f7f5] p-6">
							<p class="text-xs font-semibold uppercase tracking-[0.12em] text-[#2ea36a]">Article summary</p>
							<p class="mt-4 text-sm leading-7 text-[#6b6b6b]">
								One clean outcome, fewer daily decisions, and stronger brand consistency are the three fastest ways to make a wellness routine easier to keep.
							</p>
						</div>
							<div class="rounded-2xl border border-black/10 bg-white p-6 shadow-[0_10px_24px_rgba(16,36,26,0.05)]">
								<h2 class="text-[22px] font-semibold text-[#10241a]">Next read</h2>
								<ul class="mt-5 space-y-4 text-sm text-[#4f5d57]">
									<li><a href="#" class="hover:text-[#10241a]">Why Clean Formulas Feel Better in Everyday Use</a></li>
									<li><a href="#" class="hover:text-[#10241a]">How Bundles Help Customers Shop With Less Friction</a></li>
									<li><a href="#" class="hover:text-[#10241a]">Editorial Content That Supports Product Discovery</a></li>
								</ul>
							</div>
							</aside>
						</div>
					</div>
				</section>
			</div>
		</section>
	</main>

<?php
get_footer();
