function select_all() {
    if($('#select_all:checked').length == 1){
        $('.select_data').prop('checked',true); 
    }else{
        $('.select_data').prop('checked',false);
    }
    $('.select_data').is(':checked') ? $('.select_data').closest('tr').addClass('bg-warning') : $('.select_data').closest('tr').removeClass('bg-warning');
}

function select_single_item(id){
    var total = $('.select_data').length; //count total checkbox
    var total_checked =  $('.select_data:checked').length;//count total checked checkbox
    $('#checkbox'+id).is(':checked') ? $('#checkbox'+id).closest('tr').addClass('bg-warning') : $('#checkbox'+id).closest('tr').removeClass('bg-warning');
    (total == total_checked) ? $('#select_all').prop('checked',true) : $('#select_all').prop('checked',false);
}