$(document).ready(function() {
$('.product-icon-container').find('.ajaxcartadd').click(function (event){
event.preventDefault();
$.ajax({
url: $(this).attr('href'),
dataType: 'JSON',
success: function(response) {
$('.prodcount').html(response.total_quantity);
$('.notif_text').html(response.notif_text);
$('.toast').toast('show');
}
});
return false;
});
});
