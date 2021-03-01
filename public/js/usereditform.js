// $(document).ready(function(){
// $('.fas.fa-edit').click(function(e){
// e.preventDefault();
// $(this).closest('tr').find('.useredit, .fas.fa-times, .fas.fa-edit, .userdata').toggleClass('hiddenbtn');
//   // $('.useredit, .fas.fa-times').show();
//   // $('.fas.fa-edit, .userdata').hide();
//   if($(this).is(':visible')){
//   $('input.usereditbtn.btn.btn-success').show();
//   }else{
//   $('input.usereditbtn.btn.btn-success').hide();
//   };
// });
// $('.fas.fa-times').click(function(e){
// e.preventDefault();
// $(this).closest('tr').find('.useredit, .fas.fa-times, .fas.fa-edit, .userdata').toggleClass('hiddenbtn');
// if($(this).is(':visible')){
// $('input.usereditbtn.btn.btn-success').hide();
// }else{
// $('input.usereditbtn.btn.btn-success').show();
// };
// });
// });
$(document).ready(function(){
$('.usereditbtn').hide(0);
$('.fas.fa-edit').click(function(e){
  e.preventDefault();
  $('.usereditbtn').show(0);
  $(this).closest('tr').addClass('editing').find('.useredit, .fas.fa-times').show();
  $(this).closest('tr').find('.fas.fa-edit, .userdata').hide();
});
$('.fas.fa-times').click(function(e){
  e.preventDefault();
  $(this).closest('tr').removeClass('editing').find('.useredit, .fas.fa-times').hide();
  $(this).closest('tr').find('.fas.fa-edit, .userdata').show();
  if(!$('tr.editing').length){
    $('.usereditbtn').hide(0);
  }
});

////Here is a question
// if($('.fas.fa-times').is(':visible')){
//   $('input.usereditbtn.btn.btn-success').hide();
// }else{
//   $('input.usereditbtn.btn.btn-success').show();
// };
////Here is a question
});
