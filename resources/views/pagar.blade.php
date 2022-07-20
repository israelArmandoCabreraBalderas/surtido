<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagar</title>
    <script src="https://www.paypal.com/sdk/js?client-id=Ad4w6nhiuXA9411f5uH8DRqIX0ug9Jmj7A8gF-8l9TRKy2ICMOxUEMSuXxodCMzwSWIoTuzCFMY50zzz&currency=MXN"></script>
</head>
<div id="paypal-button-container"></div>
<script>
                    paypal.Buttons({
                        style:{
                            color: 'blue',
                            shape: 'pill',
                            label: 'pay'
                        },
                        createOrder: function(data, actions){
                            return actions.order.create({
                                purchase_units: [{
                                    amount: {
                                        value: 100
                                    }
                                }]
                            });
                        },

                        onApprove: function(data, actions){
                            actions.order.capture().then(function (detalles){
                                alert("Pago exitoso");
                                console.log(detalles);
                                window.location.href="/compras";
                            });
                        },

                        onCancel: function(data){
                            alert("Pago cancelado");
                            console.log(data);
                            history.go(-1);
                        }
                    }).render('#paypal-button-container');
                </script>
</html>