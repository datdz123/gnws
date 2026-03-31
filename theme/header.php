<?php
/**
 * The header for our theme
 *
 * @package gnws
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<?php $iheal_logo_url = 'https://www.figma.com/api/mcp/asset/1e2e901c-a9dd-419a-9c3b-a720225e25e0'; ?>

<header class="bg-[#f3eee2]">
	<div class="flex items-center justify-between rounded-t-[14px] bg-white px-5 py-6 shadow-[0_10px_30px_rgba(16,36,26,0.04)] lg:px-12">
		<a class="block shrink-0" href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="<?php bloginfo( 'name' ); ?>">
			<img class="h-auto w-[110px]" src="<?php echo esc_url( $iheal_logo_url ); ?>" alt="<?php bloginfo( 'name' ); ?>">
		</a>

		<nav class="hidden items-center gap-3 lg:flex" aria-label="Primary">
			<a class="rounded-xl bg-[#e8f7ea] px-4 py-2.5 text-sm font-medium text-[#10241a]" href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
			<a class="rounded-xl px-4 py-2.5 text-sm font-medium text-[#6b6b6b] transition hover:bg-[#f4f7f5] hover:text-[#10241a]" href="/san-pham">Product</a>
			<a class="rounded-xl px-4 py-2.5 text-sm font-medium text-[#6b6b6b] transition hover:bg-[#f4f7f5] hover:text-[#10241a]" href="/about">About us</a>
			<a class="rounded-xl px-4 py-2.5 text-sm font-medium text-[#6b6b6b] transition hover:bg-[#f4f7f5] hover:text-[#10241a]" href="/blog">Blog</a>
			<a class="rounded-xl px-4 py-2.5 text-sm font-medium text-[#6b6b6b] transition hover:bg-[#f4f7f5] hover:text-[#10241a]" href="/mix-save">Mix + Save</a>
		</nav>

		<div class="flex items-center gap-3">
			<button class="flex h-10 w-10 items-center justify-center rounded-xl border border-black/10 bg-white text-[#10241a] shadow-[0_6px_20px_rgba(16,36,26,0.05)]" type="button" aria-label="Search">
				<span class="text-sm font-semibold">S</span>
			</button>
			<button class="hidden h-10 w-10 items-center justify-center rounded-xl border border-black/10 bg-white text-[#10241a] shadow-[0_6px_20px_rgba(16,36,26,0.05)] sm:flex" type="button" aria-label="Cart">
				<span class="text-sm font-semibold">C</span>
			</button>
			<a class="hidden items-center gap-2 rounded-xl border border-black/10 bg-white px-3 py-2 text-sm font-semibold text-[#10241a] shadow-[0_6px_20px_rgba(16,36,26,0.05)] sm:flex" href="#">
				<span class="flex h-7 w-7 items-center justify-center rounded-full bg-[#edf7ee] text-xs font-semibold">A</span>
				<span>My Account</span>
			</a>
		</div>
	</div>
</header>
