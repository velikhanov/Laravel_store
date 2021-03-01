/*hamburger menu icon*/
$(document).ready(function () {
  $('.second-button').click(function () {
   $('.animated-icon2').toggleClass('open');
 });
});
/*hamburger menu icon*/
$(document).ready(function () {
  $('#sidebarCollapse, #sidebarCollapseMedia').click(function () {
   $('.animated-icon2').toggleClass('open');
 });
});
/*logout*/
$(document).ready(function() {
  $( "#logout-link" ).click(function(event) {
    $( "#logout-form" ).submit();
      event.preventDefault();
  });
});
/*phone mask*/
$(document).ready(function(){
  $.mask.definitions['9'] = false;
  $.mask.definitions['0'] = "[0-9]";
// $.mask.definitions['5'] = "[0-9]";
$('input[name=phone]').on('focus', function() {
  $(this)[0].setSelectionRange(5, 5);
  return false;
});
$('input[name=phone]').mask('+994(00) 000-00-00');
});
/*logout*/
$(document).ready(function() {
  $('#sidebarCollapse').click(function() {
    $('#sidebar, #content').toggleClass('active');
      event.preventDefault();
  });
});
$(document).ready(function() {
  $('#sidebarCollapseMedia').click(function() {
    if($('#sidebar').hasClass('active')){
      $('#sidebar').removeClass('active')
    }else{
      $('#sidebar').addClass('active');
    }
      event.preventDefault();
  });
});
$(document).ready(function() {
  $("input[name=userimg]").change(function() {
    $(".user_edit_form").submit();
  });
});
//;
$(document).ready(function () {
  $('#navbarDropdown').click(function () {

   $('.nav-link.dropdown-toggle').toggleClass('open');
 });
});
//accordion
$(document).ready(function() {
  $('.cssmenu li.has-sub > a').click(function() {
    $(this).removeAttr('href');
    var element = $(this).parent('li');
    if (element.hasClass('open')) {
      element.removeClass('open');
      element.find('li').removeClass('open');
      element.find('ul').slideUp();
    } else {
      element.addClass('open');
      element.children('ul').slideDown();
      element.siblings('li').children('ul').slideUp();
      element.siblings('li').removeClass('open');
      element.siblings('li').find('li').removeClass('open');
      element.siblings('li').find('ul').slideUp();
    }
  });


  $('.cssmenu > ul > li.has-sub > a').append('<span class="holder"></span>');
});
