(function ($) {
	'use strict';

	var $body = $(document.body);
	var modalMap = [
		{ toggle: '[data-iheal-search-toggle]', modal: '[data-iheal-search-modal]' },
		{ toggle: '[data-iheal-account-toggle]', modal: '[data-iheal-account-modal]' }
	];

	var closeAll = function () {
		$('[data-iheal-search-modal], [data-iheal-account-modal]').addClass('hidden');
		$body.removeClass('iheal-modal-open');
	};

	modalMap.forEach(function (item) {
		var $toggle = $(item.toggle);
		var $modal = $(item.modal);
		if (!$toggle.length || !$modal.length) {
			return;
		}

		$toggle.on('click', function (event) {
			event.preventDefault();
			if (!$modal.hasClass('hidden')) {
				closeAll();
				return;
			}
			closeAll();
			$modal.removeClass('hidden');
			$body.addClass('iheal-modal-open');
		});

		$modal.on('click', '[data-iheal-close]', function () {
			closeAll();
		});
	});

	$(document).on('keydown', function (event) {
		if (event.key === 'Escape') {
			closeAll();
		}
	});
})(jQuery);
