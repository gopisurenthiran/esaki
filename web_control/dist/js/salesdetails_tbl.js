function salesadd(i){
i++;
$(".sales_details:last").after('<tr class="sales_details"><td><input type="text" name="particulars[]" id="particulars'+i+'"></td><td><input type="text" name="qty[]" id="qty'+i+'"></td><td><input type="text" name="rate[]" id="rate'+i+'"></td><td><select name="unit[]" id="unit'+i+'" class="form-control" multiple="multiple"></select></td><td><input type="text" name="line_discount_type[]" id="line_discount_type'+i+'"></td><td><input type="text" name="line_discount[]" id="line_discount'+i+'"></td><td><select name="tax[]" id="tax'+i+'" class="form-control" multiple="multiple"></select></td><td><input type="text" name="line_total[]" id="line_total'+i+'"></td><td><a href="javascript:;" title="Add row" onclick="salesadd('+i+')"><i class="fa fa-plus"></i></a><a class="salesdel" href="javascript:;" title="Remove row"><i class="fa fa-close"></i></a></td></tr>');
if ($(".salesdel").length > 0) $(".salesdel").show();
}

$(document).ready(function() {
if ($(".salesdel").length > 1) { $(".salesdel").show(); } else { $(".salesdel").hide(); };
$("body").on("click",".salesdel",function(){
	if ($(".salesdel").length > 1) {									  
    $(this).parents('.sales_details').remove();
	showdel();
	}
  });
});