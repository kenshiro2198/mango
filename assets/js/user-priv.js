//============================
$('.eval-checkall').change(function() {
    if ($(this).is(':checked')) {
        $('.eval-checkbox').attr('checked', true);
    } else {
        $('.eval-checkbox').attr('checked', false);
    }
});

$('.eval-checkbox').change(function(){
if( $('.eval-checkbox:checked').length == $('.eval-checkbox').length ) {
    
    $('.eval-checkall').attr('checked', true);
}

});
//============================

$('.reports-checkall').click(function() {
    if ($(this).is(':checked')) {
        $('.reports-checkbox').attr('checked', true);
    } else {
        $('.reports-checkbox').attr('checked', false);
    }
});

$('.reports-checkbox').change(function(){
if( $('.reports-checkbox:checked').length == $('.reports-checkbox').length ) {
    
    $('.reports-checkall').attr('checked', true);
}

});
//========================

$('.maintenance-checkall').click(function() {
    if ($(this).is(':checked')) {
        $('.maintenance-checkbox').attr('checked', true);
    } else {
        $('.maintenance-checkbox').attr('checked', false);
    }
});

$('.maintenance-checkbox').change(function(){
if( $('.maintenance-checkbox:checked').length == $('.maintenance-checkbox').length ) {
    
    $('.maintenance-checkall').attr('checked', true);
}

});