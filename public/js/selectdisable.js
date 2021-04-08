$(document).ready(function(){
  if($('option').val() === ""){
    $('input[name=code]').prop('disabled', true);
    $('input[name=code]').val('categories');
  }else{
    $('input[name=code]').prop('disabled', false);
  };
});
$(document).on('change', 'select', function () {
      $('option').removeAttr('selected');
      $(this).find('option[value="' + $(this).val() + '"]').attr("selected", "selected");
      if($('select').val() == ""){
        $('input[name=code]').prop('disabled', true);
        $('input[name=code]').val('categories');
      }else{
        $('input[name=code]').prop('disabled', false);
        $('input[name=code]').val('');
      };
  });
