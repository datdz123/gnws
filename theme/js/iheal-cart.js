(function ($) {
	'use strict';

	var $body = $(document.body);
	var $cartPanel = $('[data-iheal-cart-panel]');
	var $cartToggle = $('[data-iheal-cart-toggle]');

	if (!$cartPanel.length || !$cartToggle.length) {
		return;
	}

	var openPanel = function () {
		$cartPanel.removeClass('hidden');
	};

	var closePanel = function () {
		$cartPanel.addClass('hidden');
	};

	$cartToggle.on('click', function (event) {
		event.preventDefault();
		if (!$cartPanel.hasClass('hidden')) {
			closePanel();
			return;
		}
		openPanel();
	});

	$(document).on('click', function (event) {
		if (!$(event.target).closest('[data-iheal-cart-panel], [data-iheal-cart-toggle]').length) {
			closePanel();
		}
	});

	$body.on('added_to_cart', function () {
		openPanel();
	});
})(jQuery);
