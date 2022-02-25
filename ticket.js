function calculateTotal()
{
  let unit_price={
    sugar:200,
    butter:100,
     
  };
  let item_price={}
  
  item_price.sugar = ($("#qty_sugar").val() * unit_price.sugar )
  $("#price_sugar").val(item_price.sugar);
  
  item_price.butter = ($("#qty_butter").val() * unit_price.butter )
  $("#price_butter").val(item_price.butter);
  let total = item_price.sugar + item_price.butter ;
let total_adult=($("#qty_sugar").val());

 let total_child= ($("#qty_butter").val());
  
  $("#total_value").text(total);
  $("#total_val").val(total);
  $("#total_adult").val(total_adult);
  $("#total_child").val(total_child);
  
}

$(function()
 {
    $(".qty").on("change keyup",calculateTotal)
    
})