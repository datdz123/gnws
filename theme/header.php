<?php
/**
 * The header for our theme
 *
 * @package iheal
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

<header class=" w-full rounded-t-[14px] bg-white shadow-[0_10px_30px_rgba(16,36,26,0.04)]  ">
	<div class="flex w-full items-center container justify-between px-5 py-6 lg:px-12">
		<a class="block shrink-0" href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="<?php bloginfo( 'name' ); ?>">
			<img class="h-auto w-[110px]" src="<?php echo esc_url( $iheal_logo_url ); ?>" alt="<?php bloginfo( 'name' ); ?>">
		</a>

		<nav class="hidden items-center gap-3 lg:flex" aria-label="Primary">
			<a class="rounded-xl <?php echo ( is_home() || is_front_page() ) ? 'bg-[#e8f7ea] text-[#10241a]' : 'text-[#6b6b6b] transition hover:bg-[#f4f7f5] hover:text-[#10241a]'; ?> px-4 py-2.5 text-sm font-medium" href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
			<a class="rounded-xl <?php echo is_post_type_archive( 'product' ) || is_page( 'san-pham' ) ? 'bg-[#e8f7ea] text-[#10241a]' : 'text-[#6b6b6b] transition hover:bg-[#f4f7f5] hover:text-[#10241a]'; ?> px-4 py-2.5 text-sm font-medium" href="/san-pham">Product</a>
			<a class="rounded-xl <?php echo is_page( 'about' ) ? 'bg-[#e8f7ea] text-[#10241a]' : 'text-[#6b6b6b] transition hover:bg-[#f4f7f5] hover:text-[#10241a]'; ?> px-4 py-2.5 text-sm font-medium" href="/about">About us</a>
			<a class="rounded-xl <?php echo is_category() || is_single() || is_post_type_archive( 'post' ) ? 'bg-[#e8f7ea] text-[#10241a]' : 'text-[#6b6b6b] transition hover:bg-[#f4f7f5] hover:text-[#10241a]'; ?> px-4 py-2.5 text-sm font-medium" href="/blog">Blog</a>
			<a class="rounded-xl <?php echo is_page( 'mix-save' ) ? 'bg-[#e8f7ea] text-[#10241a]' : 'text-[#6b6b6b] transition hover:bg-[#f4f7f5] hover:text-[#10241a]'; ?> px-4 py-2.5 text-sm font-medium" href="/mix-save">Mix + Save</a>
		</nav>

		<div class="flex items-center gap-3">
			<button class="flex h-10 w-10 items-center justify-center rounded-xl border border-black/10 bg-white text-[#10241a] shadow-[0_6px_20px_rgba(16,36,26,0.05)]" type="button" aria-label="Search" data-iheal-search-toggle>
				<svg aria-hidden="true" viewBox="0 0 24 24" class="h-[18px] w-[18px]">
					<path d="M21 21l-4.35-4.35m1.85-5.15a7 7 0 1 1-14 0 7 7 0 0 1 14 0z" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
				</svg>
			</button>
			<?php if ( function_exists( 'WC' ) ) : ?>
				<div class="relative">
					<a class="flex h-10 w-10 items-center justify-center rounded-xl border border-black/10 bg-white text-[#10241a] shadow-[0_6px_20px_rgba(16,36,26,0.05)]" href="<?php echo esc_url( wc_get_cart_url() ); ?>" aria-label="Cart" data-iheal-cart-toggle>
						<svg aria-hidden="true" viewBox="0 0 24 24" class="h-[18px] w-[18px]">
							<path d="M6 6h15l-1.5 9h-11L6 6zm0 0L5 3H2m7 16a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zm8 0a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3z" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
						</svg>
						<span class="js-iheal-cart-count absolute -right-1 -top-1 flex h-5 min-w-[20px] items-center justify-center rounded-full bg-[#edf7ee] px-1.5 text-[11px] font-bold text-[#10241a]">
							<?php echo esc_html( WC()->cart->get_cart_contents_count() ); ?>
						</span>
					</a>
					<div class="absolute right-0 top-full z-30 mt-3 hidden w-[360px] max-w-[90vw] rounded-2xl border border-black/10 bg-white p-4 shadow-[0_18px_40px_rgba(16,36,26,0.12)]" data-iheal-cart-panel>
						<div class="mb-3 flex items-center justify-between">
							<p class="text-[16px] font-semibold text-[#10241a]">Your cart</p>
							<a class="text-xs font-semibold text-[#2ea36a]" href="<?php echo esc_url( wc_get_cart_url() ); ?>">View cart</a>
						</div>
						<div class="iheal-mini-cart space-y-3">
							<?php woocommerce_mini_cart(); ?>
						</div>
					</div>
				</div>
			<?php endif; ?>
			<button class="hidden items-center gap-2 rounded-xl border border-black/10 bg-white px-3 py-2 text-sm font-semibold text-[#10241a] shadow-[0_6px_20px_rgba(16,36,26,0.05)] sm:flex" type="button" aria-label="My account" data-iheal-account-toggle>
				<span class="flex h-7 w-7 items-center justify-center rounded-full bg-[#edf7ee]">
					<svg aria-hidden="true" viewBox="0 0 24 24" class="h-[18px] w-[18px]">
						<path d="M20 21a8 8 0 0 0-16 0m8-9a4 4 0 1 0 0-8 4 4 0 0 0 0 8z" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
					</svg>
				</span>
				<span>My Account</span>
			</button>
		</div>
	</div>
</header>

<div class="fixed inset-0 z-40 hidden items-center justify-center flex" data-iheal-search-modal>
	<div class="absolute inset-0 bg-black/30 backdrop-blur" data-iheal-close></div>
	<div class="relative w-[min(420px,92vw)] rounded-2xl bg-white p-7 shadow-[0_24px_60px_rgba(16,36,26,0.2)]">
		<h2 class="text-[22px] font-semibold text-[#10241a]">Search</h2>
		<form class="mt-4" role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
			<label class="text-xs font-semibold text-[#6b6b6b]" for="iheal-search-input">Search</label>
			<div class="mt-2 flex flex-col gap-3 sm:flex-row sm:items-center">
				<input id="iheal-search-input" class="w-full rounded-xl border border-black/10 bg-white px-4 py-3 text-sm text-[#10241a]" type="search" name="s" placeholder="Search products" value="<?php echo esc_attr( get_search_query() ); ?>">
				<button class="inline-flex min-h-[44px] items-center justify-center rounded-xl bg-[#2ea36a] px-6 text-sm font-semibold text-white" type="submit">Search</button>
			</div>
		</form>
	</div>
</div>

<div class="fixed inset-0 z-40 hidden items-center justify-center flex" data-iheal-account-modal>
	<div class="absolute inset-0 bg-black/30 backdrop-blur" data-iheal-close></div>
	<div class="relative w-[min(480px,92vw)] rounded-2xl bg-white p-7 shadow-[0_24px_60px_rgba(16,36,26,0.2)]">
		<?php
		$iheal_account_url = function_exists( 'wc_get_page_permalink' ) ? wc_get_page_permalink( 'myaccount' ) : wp_login_url();
		?>
		<?php if ( is_user_logged_in() ) : ?>
			<h2 class="text-[22px] font-semibold text-[#10241a]">Welcome back</h2>
			<p class="mt-2 text-sm text-[#6b6b6b]">Manage your profile, orders, and saved items.</p>
			<div class="mt-5 flex items-center gap-3">
				<a class="inline-flex min-h-[44px] items-center justify-center rounded-xl bg-[#2ea36a] px-6 text-sm font-semibold text-white" href="<?php echo esc_url( $iheal_account_url ); ?>">Go to account</a>
				<a class="text-xs font-semibold text-[#2ea36a]" href="<?php echo esc_url( wp_logout_url( home_url( '/' ) ) ); ?>">Log out</a>
			</div>
		<?php else : ?>
			<h2 class="text-[22px] font-semibold text-[#10241a]">Welcome Back</h2>
			<p class="mt-2 text-sm text-[#6b6b6b]">Log in to continue your healthy journey.</p>
			<form class="mt-4 space-y-3" name="loginform" id="loginform" action="<?php echo esc_url( wp_login_url( $iheal_account_url ) ); ?>" method="post">
				<label class="text-xs font-semibold text-[#6b6b6b]" for="user_login">Email Address</label>
				<input class="w-full rounded-xl border border-black/10 bg-white px-4 py-3 text-sm text-[#10241a]" type="text" name="log" id="user_login" placeholder="jane.doe@example.com" required>
				<label class="text-xs font-semibold text-[#6b6b6b]" for="user_pass">Password</label>
				<input class="w-full rounded-xl border border-black/10 bg-white px-4 py-3 text-sm text-[#10241a]" type="password" name="pwd" id="user_pass" placeholder="Password" required>
				<div class="flex flex-wrap items-center justify-between gap-3 text-xs text-[#10241a]">
					<label class="inline-flex items-center gap-2">
						<input type="checkbox" name="rememberme" value="forever">
						<span>Remember me</span>
					</label>
					<a class="text-xs font-semibold text-[#2ea36a]" href="<?php echo esc_url( wp_lostpassword_url( $iheal_account_url ) ); ?>">Forgot password?</a>
				</div>
				<input type="hidden" name="redirect_to" value="<?php echo esc_url( $iheal_account_url ); ?>">
				<button class="inline-flex min-h-[44px] w-full items-center justify-center rounded-xl bg-[#2ea36a] px-6 text-sm font-semibold text-white" type="submit">Log In</button>
				<p class="text-xs text-[#6b6b6b]">New here? <a class="font-semibold text-[#2ea36a]" href="<?php echo esc_url( $iheal_account_url ); ?>">Create an account</a></p>
			</form>
		<?php endif; ?>
	</div>
</div>
