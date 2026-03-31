<?php
/**
 * The template for displaying the footer
 *
 * @package gnws
 */

$iheal_footer_logo_url = 'https://www.figma.com/api/mcp/asset/a085a1b9-5470-461e-a0b5-0f1e9a85044c';
$iheal_footer_groups   = array(
	'Shop'    => array( 'All Products', 'Immunity', 'Joints', 'Liver' ),
	'About'   => array( 'Our Story', 'Ingredients', 'Sustainability', 'Journal' ),
	'Support' => array( 'Contact Us', 'FAQ', 'Shipping & Returns', 'Track Order' ),
);
?>

<footer class="bg-[#edf7ee] px-6 pb-10 pt-20 lg:px-10">
	<div class="px-8">
		<img class="h-auto w-[154px]" src="<?php echo esc_url( $iheal_footer_logo_url ); ?>" alt="<?php bloginfo( 'name' ); ?>">

		<div class="mt-16 grid gap-12 border-b border-black/10 pb-16 lg:grid-cols-[2fr_1fr_1fr_1fr]">
			<div class="max-w-[280px] text-sm leading-[1.6] text-[#6b6b6b]">
				Elevating personal care with 100% natural, eco-friendly ingredients. Good for you, good for the planet.
			</div>

			<?php foreach ( $iheal_footer_groups as $group_title => $group_links ) : ?>
				<div>
					<h3 class="text-base font-semibold text-[#10241a]"><?php echo esc_html( $group_title ); ?></h3>
					<ul class="mt-6 space-y-4 text-[15px] text-[#6b6b6b]">
						<?php foreach ( $group_links as $group_link ) : ?>
							<li><a class="transition hover:text-[#10241a]" href="#"><?php echo esc_html( $group_link ); ?></a></li>
						<?php endforeach; ?>
					</ul>
				</div>
			<?php endforeach; ?>
		</div>

		<div class="flex flex-col gap-5 py-8 text-sm text-[#6b6b6b] md:flex-row md:items-center md:justify-between">
			<p>&copy; 2024 iHeal Wellness. All rights reserved.</p>
			<div class="flex items-center gap-6 text-[#10241a]">
				<a href="#" aria-label="Instagram">I</a>
				<a href="#" aria-label="Facebook">F</a>
				<a href="#" aria-label="Twitter">T</a>
			</div>
		</div>
	</div>
</footer>
<div class="back-to-top fixed bottom-14 right-7 h-10 w-10 cursor-pointer rounded-full bg-slate-200 text-primary transition-all duration-500 hover:bg-primary hover:text-white">
	<?php echo svg( 'back-top', '20', '20', 'm-auto h-full' ); ?>
</div>
<?php wp_footer(); ?>

</body>

</html>
