<?php include("header.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center border rounded bg-warning my-5">
                <h1>MY CaRt</h1>
            </div>

            <div class="col-lg-9">
                <table class="table">
                    <thead class = "thead-dark text-center">
                        <tr>
                            <th scope="col">Serial No</th>
                            <th scope="col">Item Name</th>
                            <th scope="col">Item Price ( Rs )</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Total</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody class = "text-center">
                        <?php 
                            //$total = 0;
                            if (isset($_SESSION['cart']))
                            {
                                foreach($_SESSION['cart'] as $key => $value)
                                {
                                    $sn = $key + 1;
                                    //$total = $total + $value['price'];
                                    //print_r($value);
                                    echo"
                                        <tr>
                                            <td>$sn</td>
                                            <td>$value[name]</td>
                                            <td>$value[price]<input type='hidden' class='iprice' value='$value[price]'></td>
                                            <td>
                                                <form action='manager.php' method='POST'>
                                                    <input class = 'text-center iqty' name = 'mod_qty'  onchange = 'this.form.submit()' type = 'number' value = '$value[qty]'  min = '1' max = '10'>
                                                    <input type='hidden' name='name' value='$value[name]'>
                                                </form>
                                            </td>
                                            <td class = 'itotal'></td>
                                            <td>
                                                <form action='manager.php' method='POST'>
                                                    <button name = 'remove' class = 'btn btn-sm btn-outline-danger'>ReMove</button>
                                                    <input type='hidden' name='name' value='$value[name]'>
                                                </form>
                                            </td>
                                        </tr>
                                    ";
                                }
                            }
                        ?>
                        
                    </tbody>
                </table>
            </div>

            <div class="col-lg-3">
                <div class = "border bg-warning rounded p-4">
                    <h4>Grand Total : Rs</h4>
                    <h5 class = "text-right" id = "gtotal"></h5>
                    <br>
                    <form>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" >
                            <label class="form-check-label" for="flexRadioDefault1">
                                <h6> Cash On Delivery </h6>
                            </label>
                        </div>
                        <br>
                        <!-- <form action="order.html"  method = "post">
                            <button class = "btn btn-primary btn-block " type = "submit">Make Payment</button>
                        </form>
                         -->
                    </form>
                    <form action="order.php"  method = "post">
                            <button class = "btn btn-primary btn-block " type = "submit">Place Order</button>
                    </form>

                </div>
            </div>
            
            
        </div>
    </div>
    <script>
        var cost = 0;
        var iprice = document.getElementsByClassName('iprice');
        var iqty = document.getElementsByClassName('iqty');
        var itotal = document.getElementsByClassName('itotal');
        var gtotal = document.getElementById('gtotal');

        function subTotal(){
            cost = 0;
            for (i=0 ; i<iprice.length ; i++)
            {
                itotal[i].innerText = (iprice[i].value) * (iqty[i].value);
                cost = cost + (iprice[i].value) * (iqty[i].value);
            }
            gtotal.innerText = cost;
        }

        subTotal();
    </script>
</body>
</html>