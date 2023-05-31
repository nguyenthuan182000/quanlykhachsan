$(document).ready(function() {
    $("#btnXacNhan").click(function() {
        $("#result").hide();
        var coupon = $('#txtCoupon').val();
        var money = $('#txtMoney').val();
        $.ajax({
            url: 'getcoupon.php',
            type: 'POST',
            dataType: 'json',
            data: {
                coupon
            }
        }).success(function(result) {
            //   alert("Thành công");
            //  console.log(result.data);
            if(result.hoat_dong == 0){
                $("#result").show().html("Mã không tồn tại").css('color', 'red');
            }else {
                if (result.data == 0) {
                    $("#result").show().html("Mã không hợp lệ").css('color', 'red');
                } else {
                    if (result.date == 2) {
                        $("#result").show().html("Mã đã hết hạn").css('color', 'red');
                    }else if (result.trang_thai == 0){
                        $("#result").show().html("Mã đã dừng lại").css('color', 'red');
                    }
                    else {
                        const moneyDiscount = money * result.giamgia / 100;
                        $('.stripe-button').data('amount', moneyDiscount);
                        // Open Checkout with further options
                        $('.txtDiscount').val(money - moneyDiscount);
                        var nana = (money - moneyDiscount).toLocaleString('it-IT', {
                            style: 'currency',
                            currency: 'VND'
                        });
                        $("#result").show().html("Giá tiền giảm xuống còn " + nana).css('color', 'red');
                    }
                }
            }
        });
    })


});