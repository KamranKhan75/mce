$('#NoofHours','#amountPerHour').change(function(){
    var rate = parseFloat($('#NoofHours').val()) || 0;
    var box = parseFloat($('#amountPerHour').val()) || 0;  

    $('#totalAmount').val(rate * box);
});
