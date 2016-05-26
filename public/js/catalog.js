/* price range slider functionality*/
var minPriceLimit = 0;
var maxPriceLimit = 100000;
var maxInputToolTip = $.Link({
	target: '-tooltip-<div class="ttip"></div>',
	method: function ( value ) {
		$(this).html(
			'<input type="text" id="max-price-new" value="$'
			+value+
			'">'
		);
	}
});
var minInputToolTip = $.Link({
	target: '-tooltip-<div class="ttip"></div>',
	method: function ( value ) {
		$(this).html(
			'<input type="text" id="min-price-new" value="$'
			+value+
			'">'
		);
	}
});
$('.price-range-slider').noUiSlider({
	start: [minPriceLimit, maxPriceLimit],
	step: 1,
	behaviour: 'snap',
	connect: true,
	range: {
		'min': [minPriceLimit],
		'max': [maxPriceLimit]
	},
	serialization: {
		lower: [ 	minInputToolTip, $.Link({ target: $('#min-price') })],
		upper: [ 	maxInputToolTip, $.Link({ target: $('#max-price') })],
		format: {decimals: 0}
	}
});

$('body').on('click tap', 'div.ttip', function(e){
	$(this).find('input').focus().select();
});
$('body').on('change', '#max-price-new', function(){
	var newVal = $(this).val();
	var oldVal = $('#max-price').val();
	if (!$.isNumeric(newVal)) {
		$(this).val(oldVal);
		return false;
	}
	$('#max-price').val(newVal);
	$('#max-price').change();
});
$('body').on('change', '#min-price-new', function(){
	var newVal = $(this).val();
	var oldVal = $('#min-price').val();
	if (!$.isNumeric(newVal)) {
		$(this).val(oldVal);
		return false;
	}
	$('#min-price').val(newVal);
	$('#min-price').change();
});

$('#min-price').on('change', function(){
	var newVal = $(this).val();
	if (!$.isNumeric(newVal)) {
		$(this).val(minPriceLimit);
		return false;
	}
});
$('#max-price').on('change', function(){
	var newVal = $(this).val();
	if (!$.isNumeric(newVal)) {
		$(this).val(maxPriceLimit);
		return false;
	}
});
/*price range slider functionality end*/