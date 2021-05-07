<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>



<form action="" method="POST">
        <input type="text" name="name" id="name" placeholder="Name" /><br><br>
        <input type="number" step="0.1" name="amount" id="amount" placeholder="amount" /><br><br>
        <input type="button" name="btn" id="btn" value="Pay Now" onclick = "pay_now()" />
</form>




<script>

    function pay_now(){
        var name= jQuery('#name').val();
        var amount= jQuery('#amount').val();

        var options = {
            "key": "rzp_test_46nP7eKQsbPh1L", 
            "amount": amount*100, 
            "currency": "INR",
            "name": "NIELIT Guwahati",
            "description": "Test Transaction",
            "image": "",
            "handler": function (response){
                jQuery.ajax({
                    type: 'post',
                    url: 'payment_process.php',
                    data: "payment_id="+response.razorpay_payment_id+"&amount="+amount+"&name="+name,
                    success: function(result){
                        window.location.href="thank_you.php";
                    }

                });
            }
        };

        var rzp1 = new Razorpay(options);
        rzp1.open();
    }

</script>