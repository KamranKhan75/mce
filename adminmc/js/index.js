$('#qty, #AperQty').change(function(){
    var rate = parseFloat($('#qty').val()) || 0;
    var box = parseFloat($('#AperQty').val()) || 0;  

    $('#totalPrice').val(rate * box);
});

