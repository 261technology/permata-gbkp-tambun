$(document).ready(function() {
	$(".Jselect2").select2();
	$('.date-picker').datepicker({
	  format: "yyyy-mm-dd",
	  disableTouchKeyboard : false,
	  toggleActive: true,
	  forceParse: false,
	  autoclose: true
	});

	$(".date-picker").attr("autocomplete","off");
	$(".form-control").attr("autocomplete","off");
	$('.rupiah').priceFormat({
	      prefix: 'Rp. ',
	      centsSeparator: ',',
	      thousandsSeparator: '.',
	      centsLimit: 0
	});
});  