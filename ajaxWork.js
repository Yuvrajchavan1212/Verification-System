
function customerDelete(id){
    $.ajax({
        url:"./controller/customersDeleteController.php",
        method:"post",
        data:{record:id},
        success:function(data){
            alert('Customers Successfully deleted');
            $('form').trigger('reset');
            showCustomers();
        }
    });
}