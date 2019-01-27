jQuery(document).ready(function($) {
	$('input.day-checkbox').change(function(){
		if ($(this).is(':checked'))
    $(this).next('div.subjday-input').show();
else
    $(this).next('div.subjday-input').hide();
	}).change();
});