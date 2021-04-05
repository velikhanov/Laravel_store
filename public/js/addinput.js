var i;
if($('#icount').length){
  i = $('#icount').val();;
}else{
  i = 0;
};
$("#addRow").click(function () {
        var html = '';
        html += '<div id="inputFormRow">';
        html += '<div class="input-group mb-3">';
        html += '<input type="text" name="properties['+i+'][key]" class="form-control m-input ml-3" placeholder="Свойство" autocomplete="off">';
        html += '<input type="text" name="properties['+i+'][value]" class="form-control m-input ml-3" placeholder="Значение" autocomplete="off">';
        html += '<div class="input-group-append ml-3">';
        html += '<button id="removeRow" type="button" class="btn btn-danger">Удалить</button>';
        html += '</div>';
        html += '</div>';

        i++;

        $('#newRow').append(html);
    });

  // remove row
  $(document).on('click', '#removeRow', function () {
      $(this).closest('#inputFormRow').remove();
  });
  //
