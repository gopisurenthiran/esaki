function ingredientadd(i){
i++;
$(".product_ingredient:last").after('<tr class="product_ingredient"><td><input type="hidden" name="ingredient_id[]" id="ingredient_id'+i+'" class="form-control"> <input type="text" name="ingredient_name[]" id="ingredient_name'+i+'" class="form-control"></td> <td><input type="text" name="ingredient_qty[]" id="ingredient_qty'+i+'" class="form-control"></td> <td><input type="text" name="ingredient_unit[]" id="ingredient_unit'+i+'" class="form-control"></select></td> <td><a href="javascript:;" title="Add row" onclick="ingredientadd('+i+')"><i class="fa fa-plus"></i></a><a class="ingredientdel" href="javascript:;" title="Remove row"><i class="fa fa-close"></i></a></td></tr>');

if ($(".ingredientdel").length > 0) $(".ingredientdel").show();
}

$(document).ready(function() {
if ($(".ingredientdel").length > 1) { $(".ingredientdel").show(); } else { $(".ingredientdel").hide(); };
$("body").on("click",".ingredientdel",function(){
	if ($(".ingredientdel").length > 1) {									  
    $(this).parents('.product_ingredient').remove();
	showdel();
	}
  });
});