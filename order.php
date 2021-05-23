<?php include("header.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order</title>
    <!-- Font Awesome -->
    <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <style>
         body { background-color: yellow; } 
    </style>
    <style>
        img {
          width: 200px;
          height: 300px;
          object-fit: cover;
        }
        .form-div form input{
            font-size: 16px;
            font-family: 'Lucida Handwriting';
        }

    </style>
</head>
<body> 
    <div class="form-div">
        <form action="last.php" method="POST">
            <div class="form-row py-3 px-3">
            <div class="form-group col-md-4">
                <label for="custEmail" style="font-family:Lucida Handwriting ;"><strong>Full Name</strong></label>
                <input type="text" class="form-control" id="custEmail" placeholder="Enter Your Full Name">
            </div>
            <div class="form-group col-md-4">
                <label for="credit" style="font-family:Lucida Handwriting ;"><strong>Credit / Debit Card No ( CCN / DCN )</strong></label>
                <input type="password" class="form-control" id="credit" placeholder="Enter Your CCN / DCN">
            </div>
            </div>
            <div class="form-group col-md-8">
            <label for="inputAddress" style="font-family:Lucida Handwriting ;"><strong>Shipping Address</strong></label>
            <input type="text" class="form-control" id="inputAddress" placeholder="Enter Your Address Here">
            </div>
            <div class="form-group col-md-8">
            <label for="inputAddress2" style="font-family:Lucida Handwriting ;"><strong>Address ( Continued... )</strong></label>
            <input type="text" class="form-control" id="inputAddress2" placeholder="Extra Space for Address">
            </div>
            <div class="form-row  px-3">
            <div class="form-group col-md-3">
                <label for="inputCity" style="font-family:Lucida Handwriting ;"><strong>City</strong></label>
                <input type="text" class="form-control" id="inputCity" placeholder="Enter City">
            </div>
            <div class="form-group col-md-3">
                <label for="inputState" style="font-family:Lucida Handwriting ;"><strong>State</strong></label>
                <!-- <select id="inputState" class="form-control">
                <option selected>Choose...</option>
                <option>...</option>
                </select> -->
                <input type="text" class="form-control" id="inputState" placeholder="Enter State">
            </div>
            <div class="form-group col-md-2">
                <label for="inputZip" style="font-family:Lucida Handwriting ;"><strong>Zip Code</strong></label>
                <input type="text" class="form-control" id="inputZip"  placeholder="Enter Zip">
            </div>
            </div>
            <div class="button col-md-2">
                <button type="submit" class="btn btn-primary">Make Payment</button>
            </div>
            <div class="note py-3 px-3">
                <h5 style="font-family:Lucida Handwriting ;"><strong>Note : Total Cost computed with Shipping Charges and GST inclusive !!</strong></h5>
            </div>
            <!-- <button type="submit" class="btn btn-primary">Make Payment</button> -->
        </form>
    </div>
</body>
</html>