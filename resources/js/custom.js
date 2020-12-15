try {
    window.$ = window.jQuery = require('jquery');
} catch (e) {}

$(function(){
	function tally (selector) {
		$(selector).each(function () {
			var total = 0,
				column = $(this).siblings(selector).addBack().index(this);
			$(this).parents().prevUntil(':has(' + selector + ')').each(function () {
				var val = $('td.sum:eq(' + column + ')', this).html();

				if (val != undefined) {
					val = val.replace(/[^0-9.]/g, '');
				}

				total += parseFloat(val) || 0;
			})
			$(this).html(total);
		});
	}
	tally('td.subtotal');
	tally('td.total');
});