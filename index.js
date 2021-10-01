$(document).ready(function(){


    let $qty_up = $(".qty .qty-up");
    let $qty_down = $(".qty .qty-down");
    let $deal_price = $("#deal-price");
    
    $qty_up.click(function(e){

        let $input = $(`.qty_input[data-id='${$(this).data("id")}']`);
        let $price = $(`.product_price[data-id='${$(this).data("id")}']`);

        $.ajax({url: "template/price.php", type : 'post', data : { itemid : $(this).data("id")}, success: function(result){
                let obj = JSON.parse(result);
                let p_price = obj[0]['p_price'];

                if($input.val() >= 1 && $input.val() <= 9){
                    $input.val(function(i, oldval){
                        return ++oldval;
                    });

                    $price.text(parseInt(p_price*$input.val()));

                    let subtotal = parseInt($deal_price.text())+parseInt(p_price);
                    $deal_price.text(subtotal);
                }

            }}); 
    }); 

    $qty_down.click(function(e){

        let $input = $(`.qty_input[data-id='${$(this).data("id")}']`);
        let $price = $(`.product_price[data-id='${$(this).data("id")}']`);

        $.ajax({url: "template/price.php", type : 'post', data : { itemid : $(this).data("id")}, success: function(result){
                let obj = JSON.parse(result);
                let p_price = obj[0]['p_price'];

                if($input.val() > 1 && $input.val() <= 10){
                    $input.val(function(i, oldval){
                        return --oldval;
                    });

                    $price.text(parseInt(p_price * $input.val()).toFixed(2));

                    let subtotal = parseInt($deal_price.text()) - parseInt(p_price);
                    $deal_price.text(subtotal);
                }

            }}); 
    });

});