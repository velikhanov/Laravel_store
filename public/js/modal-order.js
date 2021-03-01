$(document).ready(function() {
$('.product-icon-container').find('.modal_order').click(function (event){
event.preventDefault();
$.ajax({
url: $(this).attr('href'),
dataType: 'JSON',
success: function(response) {
$('.basket-prod-name').html(response.name);
$('.modal_order').attr('data-id', response.modalProdId);
$('.basketimg').attr('src', response.img);
$('input[name=inputModal]').val(1);
$('.totalPrice').html(response.price);
$('#staticBackdrop').modal('show');
}
});
return false;
});
// $('input[name=inputModal]').change(function(){
// if($(this).val()>10){
//   $(this).val(10);
// }else if($(this).val() < 1){
//   $(this).val(1);
// }
// });
// $('input[name=inputModal]').on('input', function() {
//   $(this).val((i, v) => Math.max(Math.min($(this).val(), 100), 1));
// });
$('input[name=inputModal]').change(function() {
if($(this).val()>10){
$(this).val(10);
}else if($(this).val() < 1){
$(this).val(1);
}
let qty = parseInt($('input[name=inputModal]').val());
let id = $('.card').find('.modal_order').attr('data-id');
$.ajax({
url: '/modal/update/'+ id,
dataType: 'JSON',
data:{
qty:qty
},
success: function(response) {
$('.totalPrice').html(response.price);
}
});
return false;
});
$('.modal.fade').find('.submitModal').click(function (event){
event.preventDefault();
let id = parseInt($('.card').find('.modal_order').attr('data-id'));
// let name = $('.basket-prod-name').text();
// let code = $('.card').find('.prodlink').attr('href');
// let img = $('.card').find('.card-img-top').attr('src');
// let cost = parseInt($('.totalPrice').text());
let qty = parseInt($('input[name=inputModal]').val());
let username = $('input[name=name]').val();
let email = $('input[name=email]').val();
let phone = $('input[name=phone]').val().replace(/[^\d.]/g, '');;
$.ajax({
headers: {
'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
},
url: '/modal/place-order',
type: 'POST',
dataType: 'JSON',
data:{
id:id,
// cost:cost,
qty:qty,
// name:name,
// code:code,
// img:img,
username:username,
email:email,
phone:phone
},
success: function(response) {
$('#staticBackdrop').modal('hide');
$('.notif_text').html(response.notif_text);
setTimeout(function () {
$('.toast').toast('show');
},250);
}
});
return false;
});
});
