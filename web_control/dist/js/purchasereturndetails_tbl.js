function returnadd(i){
i++;
$(".purchase_return:last").after('<tr class="purchase_return"><td><input class="form-control" type="text" name="product_id[]" id="product_id'+i+'"></td><td><input class="form-control" type="text" name="productcode[]" id="productcode'+i+'"></td><td><input class="form-control" type="text" name="barcode[]" id="barcode'+i+'"></td><td><input class="form-control" type="text" name="product_name[]" id="product_name'+i+'"></td><td><input class="form-control" type="text" name="qty[]" id="qty'+i+'"></td><td><input class="form-control" type="text" name="rate[]" id="rate'+i+'"></td><td><input class="form-control" type="text" name="unit[]" id="unit'+i+'"></td><td><select name="line_discount_type[]" id="line_discount_type'+i+'" class="form-control" multiple="multiple"><option value="no discount">No Discount</option><option value="flatrate">Flat Rate</option><option value="percentage">Percentage</option></select></td><td><input class="form-control" type="text" name="line_discount[]" id="line_discount'+i+'"></td><td><input class="form-control" type="text" name="mrp_price[]" id="mrp_price'+i+'"></td><td><input class="form-control" type="text" name="cost_price[]" id="cost_price'+i+'"></td><td><input class="form-control" type="text" name="selling_price[]" id="selling_price'+i+'"></td><td><input class="form-control" type="text" name="wholesale_price[]" id="wholesale_price'+i+'"></td><td><input class="form-control" type="text" name="tax[]" id="tax'+i+'"></td><td><input class="form-control" type="text" name="batch_no[]" id="batch_no'+i+'"></td><td><input class="form-control" type="date" name="expiry_date[]" id="expiry_date'+i+'"></td><td><a href="javascript:;" title="Add row" onclick="returnadd('+i+')"><i class="fa fa-plus"></i></a><a class="returndel" href="javascript:;" title="Remove row"><i class="fa fa-close"></i></a></td></tr>');
if ($(".returndel").length > 0) $(".returndel").show();
}

function showdel()
{
	if ($(".returndel").length < 2) {
		  $(".returndel").hide();
	}
}


$(document).ready(function() {
if ($(".returndel").length > 1) { $(".returndel").show(); } else { $(".returndel").hide(); };
$("body").on("click",".returndel",function(){
	if ($(".returndel").length > 1) {									  
    $(this).parents('.purchase_return').remove();
	showdel();
	}
  });
});