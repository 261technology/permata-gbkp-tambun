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

	$.validator.addMethod('emailUnique',
        function (value, element) {
            var result = true;
            $.ajax({
                type:"post",
                async: false,
                url: "{{url('/')}}/auth/check_email_avaliable",
                data : {email : value, _token : "{{csrf_token()}}"},
                dataType : 'json',
                success: function(data) {
                    if(data.result == 'available'){ 
                    result = false;}
                }
            });
            return result;
        },
        'Email sudah digunakan, mohon gunakan email lain'
    );

    $.validator.addMethod('jamMenit',
        function (value, element) {
            var result = false;
            var isValid = /^([0-1]?[0-9]|2[0-4]):([0-5][0-9])(:[0-5][0-9])?$/.test(value);
            if(isValid){
            	return true
            }
        },
        'Pastikan memasukkan waktu dengan format hh:mm'
    );

    $.extend($.validator.messages, {
        required : "Kolom ini wajib diisi.",
        maxlength: jQuery.validator.format("Tolong isi field tidak lebih dari {0} karakter."),
        minlength: jQuery.validator.format("Tolong isi field minimal {0} karakter."),
        accept: "Extensi file tidak diperbolehkan."
    });

    $.validator.setDefaults({
        errorPlacement: function(error, element) {
            if (element.parent('.input-group').length) {
                error.insertAfter(element.parent());      // radio/checkbox?
            } else if (element.hasClass('select2-hidden-accessible')) {
                error.insertAfter(element.next('span'));  // select2
            } else if (element.attr('type') === "file") {
                $(element).closest('.form-group').append(error);
            } else {
                error.insertAfter(element);               // default
            }

        }
    });
});  