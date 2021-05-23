<?php include("header.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Shopping</title>
    <!-- Font Awesome -->
    <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <style>
       footer {
            text-align: center;
            padding: 3px;
            background-color: lightgreen;
            color: black;
        }
        .fa {
            padding: 20px;
            font-size: 30px;
            width: 70px;
            text-align: center;
            text-decoration: none;
            margin: 5px 2px;
            border-radius: 50%;
        }
  
        /* Add a hover effect if you want */
        .fa:hover {
            opacity: 0.9;
        }

        .fa-twitter {
            background: #55ACEE;
            color: white;
        }
        .fa-facebook {
            background: #3B5998;
            color: white;
        }
        .fa-google {
            background: #dd4b39;
            color: white;
        }
        .fa-instagram {
            background: #125688;
            color: white;
        }
        h3{
            color:Black;
        }
    </style>
</head>
<body>

    <!-- navbar 

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <i class="fas fa-shopping-cart"></i>
                ApNa STORE
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                </ul>
                <div>
                    <a href="mycart.php" class="btn btn-outline-success">My Cart (0)</a>
                </div>
            </div>
        </div>
    </nav>
    -->

    <!-- carousel -->

    <div id="demo" class="carousel slide" data-ride="carousel">
    <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1"></li>
        <li data-target="#demo" data-slide-to="2"></li>
    </ul>
    <div class="carousel-inner">
        <div class="carousel-item active">
        <img src="./images/carasol_1.jpg" alt="Los Angeles" width="1200" height="600">
        <div class="carousel-caption">
            <h3 style="font-family:Forte ;">Explore A World Of Leading Electrical Appliances</h3>
        </div>
        </div>
        <div class="carousel-item">
        <img src="./images/carasol_4.jpg" alt="Chicago" width="1200" height="600">
        
        </div>
        <div class="carousel-item">
        <img src="./images/carasol_6.jpg" alt="New York" width="1200" height="600">
        
        </div>
    </div>
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
    </a>
    </div>

    <div class="container mt-1">
        <div class="row text-center py-5">
            <div class="col-md-3 col-sm-6 my-4 my-md-0">
                <form action="manager.php" method = "POST">
                    <div class="card">
                        <div>
                            <img src="./images/blazer.png" alt="Blazer" class="img-fluid card-img-top">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Raymonds Blazer</h5>
                            <h6>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </h6>
                            <p class="card-text">
                                Exquisite Raymond Blazer Collections :)
                            </p>
                            <h5>
                                <small><s class="text-secondary">Rs 11,599</s></small>
                                <span class="price">Rs 9,500</span>
                            </h5>
                            <button type="submit" name="add_cart" class="btn btn-warning my-3" >Add To CaRt <i class="fas fa-shopping-cart"></i></button>
                            <input type="hidden" name="name" value="Blazer Suit">
                            <input type="hidden" name="price" value="9500">
                        </div>
                    </div>
                </form>
            </div>


            <div class="col-md-3 col-sm-6 my-3 my-md-0">
                <form action="manager.php" method = "POST">
                    <div class="card">
                        <div>
                            <img src="./images/lewis.png" alt="Lady" class="img-fluid card-img-top">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Lewis Jeans - Jacket</h5>
                            <h6>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </h6>
                            <p class="card-text">
                                A cool combo of Blue jeans and Jacket , Full of Swag :)
                            </p>
                            <h5>
                                <small><s class="text-secondary">Rs 10,799</s></small>
                                <span class="price">Rs 8,700</span>
                            </h5>
                            <button type="submit" name="add_cart" class="btn btn-warning my-3" >Add To CaRt <i class="fas fa-shopping-cart"></i></button>
                            <input type="hidden" name="name" value="Jeans-Jacket Combo">
                            <input type="hidden" name="price" value="8700">
                        </div>
                    </div>
                </form>
            </div>


            <div class="col-md-3 col-sm-6 my-3 my-md-0">
                <form action="manager.php" method = "POST">
                    <div class="card">
                        <div>
                            <img src="./images/Lady.png" alt="Blazer" class="img-fluid card-img-top">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Pantaloons Lady Casual</h5>
                            <h6>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </h6>
                            <p class="card-text">
                                A Gorgeous , cool Summer Outfit for Ladies :)
                            </p>
                            <h5>
                                <small><s class="text-secondary">Rs 9799</s></small>
                                <span class="price">Rs 6,500</span>
                            </h5>
                            <button type="submit" name="add_cart" class="btn btn-warning my-3" >Add To CaRt <i class="fas fa-shopping-cart"></i></button>
                            <input type="hidden" name="name" value="Lady Outfit">
                            <input type="hidden" name="price" value="6500">
                        </div>
                    </div>
                </form>
            </div>


            <div class="col-md-3 col-sm-6 my-3 my-md-0">
                <form action="manager.php" method = "POST">
                    <div class="card">
                        <div>
                            <img src="./images/Kid3.png" alt="Blazer" class="img-fluid card-img-top">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">FirstCry Kids Fashion</h5>
                            <h6>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                            </h6>
                            <p class="card-text">
                                New Season : New Awesome Kids Fashion :)
                            </p>
                            <h5>
                                <small><s class="text-secondary">Rs 6,800</s></small>
                                <span class="price">Rs 4,500</span>
                            </h5>
                            <button type="submit" name="add_cart" class="btn btn-warning my-3" >Add To CaRt <i class="fas fa-shopping-cart"></i></button>
                            <input type="hidden" name="name" value="kids-Outfit Combo">
                            <input type="hidden" name="price" value="4500">
                        </div>
                    </div>
                </form>
            </div>


            <div class="col-md-3 col-sm-6 my-3 my-md-0">
                <form action="manager.php" method = "POST">
                    <div class="card">
                        <div>
                            <img src="./images/burger.png" alt="Blazer" class="img-fluid card-img-top">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Mac-Burger-Treat</h5>
                            <h6>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </h6>
                            <p class="card-text">
                                A Yummylicious Combo of A Mac-Burger ; with 
                                delicious  starters :)
                            </p>
                            <h5>
                                <small><s class="text-secondary">Rs 370</s></small>
                                <span class="price">Rs 290</span>
                            </h5>
                            <button type="submit"  name="add_cart" class="btn btn-warning my-3" >Add To CaRt <i class="fas fa-shopping-cart"></i></button>
                            <input type="hidden" name="name" value="Mac-Burger">
                            <input type="hidden" name="price" value="290">
                        </div>
                    </div>
                </form>
            </div>


            <div class="col-md-3 col-sm-6 my-3 my-md-0">
                <form action="manager.php" method = "POST">
                    <div class="card">
                        <div>
                            <img src="./images/paneer2.png" alt="Blazer" class="img-fluid card-img-top">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Lazeez Kadai Paneer</h5>
                            <h6>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </h6>
                            <p class="card-text">
                                Mouth-Watering Kadai paneer with butter naan to Refresh your taste buds:)
                            </p>
                            <h5>
                                <small><s class="text-secondary">Rs 400</s></small>
                                <span class="price">Rs 280</span>
                            </h5>
                            <button type="submit"  name="add_cart" class="btn btn-warning my-3">Add To CaRt <i class="fas fa-shopping-cart"></i></button>
                            <input type="hidden" name="name" value="kadai-Paneer">
                            <input type="hidden" name="price" value="280">
                        </div>
                    </div>
                </form>
            </div>


            <div class="col-md-3 col-sm-6 my-3 my-md-0">
                <form action="manager.php" method = "POST">
                    <div class="card">
                        <div>
                            <img src="./images/pizza2.png" alt="Blazer" class="img-fluid card-img-top">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Pizza-Treat</h5>
                            <h6>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </h6>
                            <p class="card-text">
                                A mouth-watering combo of 2 Extra Cheese Margheritas , topped with Capsicum :)
                            </p>
                            <h5>
                                <small><s class="text-secondary">Rs 780</s></small>
                                <span class="price">Rs 599</span>
                            </h5>
                            <button type="submit" name="add_cart" class="btn btn-warning my-3" >Add To CaRt <i class="fas fa-shopping-cart"></i></button>
                            <input type="hidden" name="name" value="Pizza-Treat">
                            <input type="hidden" name="price" value="599">
                        </div>
                    </div>
                </form>
            </div>


            <div class="col-md-3 col-sm-6 my-3 my-md-0">
                <form action="manager.php" method = "POST">
                    <div class="card">
                        <div>
                            <img src="./images/chocobar.png" alt="Blazer" class="img-fluid card-img-top">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Cadbury Celebrations</h5>
                            <h6>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </h6>
                            <p class="card-text">
                                Is Tyohaar Kuch Meetha Ho Jaye , Kuch Khaas Ho Jaye ,Yummylicious Cadbury :)
                            </p>
                            <h5>
                                <small><s class="text-secondary">Rs 399</s></small>
                                <span class="price">Rs 196</span>
                            </h5>
                            <button type="submit" name="add_cart" class="btn btn-warning my-3">Add To CaRt <i class="fas fa-shopping-cart"></i></button>
                            <input type="hidden" name="name" value="Cadbury-Celebs">
                            <input type="hidden" name="price" value="196">
                        </div>
                    </div>
                </form>
            </div>


            <div class="col-md-3 col-sm-6 my-3 my-md-0">
                <form action="manager.php" method = "POST">
                    <div class="card">
                        <div>
                            <img src="./images/laptop3.png" alt="Blazer" class="img-fluid card-img-top">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">HP Pavillian x360</h5>
                            <h6>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </h6>
                            <p class="card-text">
                                Intel core i5 , 8GB DDR4 RAM , 1 TB HDD , Windows 10 with 
                                a 15.6 inches Display , with a 1 Yr Onsite Warranty:)
                            </p>
                            <h5>
                                <small><s class="text-secondary">Rs 89,999</s></small>
                                <span class="price">Rs 70,699</span>
                            </h5>
                            <button type="submit"  name="add_cart" class="btn btn-warning my-3">Add To CaRt <i class="fas fa-shopping-cart"></i></button>
                            <input type="hidden" name="name" value="Laptop">
                            <input type="hidden" name="price" value="70699">
                        </div>
                    </div>
                </form>
            </div>


            <div class="col-md-3 col-sm-6 my-3 my-md-0">
              <form action="manager.php" method = "POST">
                    <div class="card">
                        <div>
                            <img src="./images/headfone.png" alt="Blazer" class="img-fluid card-img-top">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Sony Xperia E27 Headphones</h5>
                            <h6>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                            </h6>
                            <p class="card-text">
                                HD Sound Quality with cool bass sync and 
                                effective outdoor noise cancellation :)
                            </p>
                            <h5>
                                <small><s class="text-secondary">Rs 3,569</s></small>
                                <span class="price">Rs 1,290</span>
                            </h5>
                            <button type="submit" name="add_cart" class="btn btn-warning my-3">Add To CaRt <i class="fas fa-shopping-cart"></i></button>
                            <input type="hidden" name="name" value="Headphone">
                            <input type="hidden" name="price" value="1290">
                        </div>
                    </div>
                </form>
            </div>


            <div class="col-md-3 col-sm-6 my-3 my-md-0">
                <form action="manager.php" method = "POST">
                    <div class="card">
                        <div>
                            <img src="./images/smartfone.png" alt="Blazer" class="img-fluid card-img-top">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Vivo V20 Pro-Midnight</h5>
                            <h6>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </h6>
                            <p class="card-text">
                                A Classy Smartphone with 128 GB internal Storage,
                                Flash Charger ,a 4500 mAh Battery , 14.6 MP Triple Camera :)
                            </p>
                            <h5>
                                <small><s class="text-secondary">Rs 29,990</s></small>
                                <span class="price">Rs 22,590</span>
                            </h5>
                            <button type="submit"  name="add_cart" class="btn btn-warning my-3" >Add To CaRt <i class="fas fa-shopping-cart"></i></button>
                            <input type="hidden" name="name" value="SmartPhone">
                            <input type="hidden" name="price" value="22590">
                        </div>
                    </div>
                </form>
            </div>


            <div class="col-md-3 col-sm-6 my-3 my-md-0">
                <form action="manager.php" method = "POST">
                    <div class="card">
                        <div>
                            <img src="./images/tablet2.png" alt="Blazer" class="img-fluid card-img-top">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Lenovo Tab-M10</h5>
                            <h6>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </h6>
                            <p class="card-text">
                                A 4G calling Tablet , with 25.65 cms display
                                6GB Internal Storage , 4500 mAh Battery with Wifi :)
                            </p>
                            <h5>
                                <small><s class="text-secondary">Rs 20,999</s></small>
                                <span class="price">Rs 19,400</span>
                            </h5>
                            <button type="submit" name="add_cart"  class="btn btn-warning my-3" >Add To CaRt <i class="fas fa-shopping-cart"></i></button>
                            <input type="hidden" name="name" value="Tablet">
                            <input type="hidden" name="price" value="19400">
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-md-3 col-sm-6 my-3 my-md-0">
                <form action="manager.php" method = "POST">
                    <div class="card">
                        <div>
                            <img src="./images/washmachine2.jpg" alt="Wash" class="img-fluid card-img-top">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">WhirlPool 5-star Washer</h5>
                            <h6>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </h6>
                            <p class="card-text">
                                A 6.0 kg , 5 star , Semi-Automatic , Top Loading Washer
                                to wash your clothes upto crystal clear cleanliness :)
                            </p>
                            <h5>
                                <small><s class="text-secondary">Rs 20,990</s></small>
                                <span class="price">Rs 16,590</span>
                            </h5>
                            <button type="submit"  name="add_cart" class="btn btn-warning my-3" >Add To CaRt <i class="fas fa-shopping-cart"></i></button>
                            <input type="hidden" name="name" value="Washing Machine">
                            <input type="hidden" name="price" value="16590">
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-md-3 col-sm-6 my-3 my-md-0">
                <form action="manager.php" method = "POST">
                    <div class="card">
                        <div>
                            <img src="./images/smart_tv_2.jpg" alt="TV" class="img-fluid card-img-top">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Sony Bravia Smart OLED TV</h5>
                            <h6>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </h6>
                            <p class="card-text">
                                A Sony Masterpiece with Utra-HD Video , Enhanced 
                                Dolby Sound-Bass with a 1 yr subscription of  Prime-Video :)
                            </p>
                            <h5>
                                <small><s class="text-secondary">Rs 43,600</s></small>
                                <span class="price">Rs 34,880</span>
                            </h5>
                            <button type="submit"  name="add_cart" class="btn btn-warning my-3" >Add To CaRt <i class="fas fa-shopping-cart"></i></button>
                            <input type="hidden" name="name" value="Smart-TV">
                            <input type="hidden" name="price" value="34880">
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-md-3 col-sm-6 my-3 my-md-0">
                <form action="manager.php" method = "POST">
                    <div class="card">
                        <div>
                            <img src="./images/air_coolers.jpg" alt="Cooler" class="img-fluid card-img-top">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Symphony "INSTANT" Coolers</h5>
                            <h6>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </h6>
                            <p class="card-text">
                                A Symphony "INSTANT" Cooler providing "Instant-Wali"
                                Cooling and also highly energy efficient :)
                            </p>
                            <h5>
                                <small><s class="text-secondary">Rs 12,991</s></small>
                                <span class="price">Rs 9,093</span>
                            </h5>
                            <button type="submit"  name="add_cart" class="btn btn-warning my-3" >Add To CaRt <i class="fas fa-shopping-cart"></i></button>
                            <input type="hidden" name="name" value="Air Cooler">
                            <input type="hidden" name="price" value="9093">
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-md-3 col-sm-6 my-3 my-md-0">
                <form action="manager.php" method = "POST">
                    <div class="card">
                        <div>
                            <img src="./images/music2.jpg" alt="music" class="img-fluid card-img-top">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Panasonic Creative Dj Beats</h5>
                            <h6>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </h6>
                            <p class="card-text">
                                A Panasonic Music Masterpiece with Utra-HD Dolby Sound-base,
                                enlivening your parties as a Dj Night :)
                            </p>
                            <h5>
                                <small><s class="text-secondary">Rs 19,700</s></small>
                                <span class="price">Rs 14,500</span>
                            </h5>
                            <button type="submit"  name="add_cart" class="btn btn-warning my-3" >Add To CaRt <i class="fas fa-shopping-cart"></i></button>
                            <input type="hidden" name="name" value="Music System">
                            <input type="hidden" name="price" value="14500">
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-md-3 col-sm-6 my-3 my-md-0">
                <form action="manager.php" method = "POST">
                    <div class="card">
                        <div>
                            <img src="./images/oven.jpg" alt="Khana" class="img-fluid card-img-top">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">LG L-28 Charcoal Microwave</h5>
                            <h6>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </h6>
                            <p class="card-text">
                                A LG classic product with superior heating and Smart
                                digital display allowing efficient temperature control
                            </p>
                            <h5>
                                <small><s class="text-secondary">Rs 18,500</s></small>
                                <span class="price">Rs 12,390</span>
                            </h5>
                            <button type="submit"  name="add_cart" class="btn btn-warning my-3" >Add To CaRt <i class="fas fa-shopping-cart"></i></button>
                            <input type="hidden" name="name" value="Microwave">
                            <input type="hidden" name="price" value="12390">
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-md-3 col-sm-6 my-3 my-md-0">
                <form action="manager.php" method = "POST">
                    <div class="card">
                        <div>
                            <img src="./images/watch.jpg" alt="ghadi" class="img-fluid card-img-top">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Fasttrack Smart-Timer</h5>
                            <h6>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </h6>
                            <p class="card-text">
                                A Fasttrack "Smart" timer with 12 MP Camera and
                                GPS , Quick Charging and a waterproof fancy watch , 
                                exclusively for Kids :)
                            </p>
                            <h5>
                                <small><s class="text-secondary">Rs 9,600</s></small>
                                <span class="price">Rs 6,880</span>
                            </h5>
                            <button type="submit"  name="add_cart" class="btn btn-warning my-3" >Add To CaRt <i class="fas fa-shopping-cart"></i></button>
                            <input type="hidden" name="name" value="Smart-Watch">
                            <input type="hidden" name="price" value="6880">
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-md-3 col-sm-6 my-3 my-md-0">
                <form action="manager.php" method = "POST">
                    <div class="card">
                        <div>
                            <img src="./images/bag2.jpg" alt="bag" class="img-fluid card-img-top">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">SkyBags Caption America Backpacks</h5>
                            <h6>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                            </h6>
                            <p class="card-text">
                               A Robust , Captain America Limited Edition Skybags Backpack
                               exclusively for #Marvel fans :)

                            </p>
                            <h5>
                                <small><s class="text-secondary">Rs 3,600</s></small>
                                <span class="price">Rs 1,880</span>
                            </h5>
                            <button type="submit"  name="add_cart" class="btn btn-warning my-3" >Add To CaRt <i class="fas fa-shopping-cart"></i></button>
                            <input type="hidden" name="name" value="BackPack">
                            <input type="hidden" name="price" value="1880">
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-md-3 col-sm-6 my-3 my-md-0">
                <form action="manager.php" method = "POST">
                    <div class="card">
                        <div>
                            <img src="./images/shoes.jpg" alt="Shoes" class="img-fluid card-img-top">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Nike "Runner" Series</h5>
                            <h6>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </h6>
                            <p class="card-text">
                                A Nike "Runner" cloth edition shoes with softrubber-sole and properly placed 
                                spikes for proper comfort and also easily washable :)
                            </p>
                            <h5>
                                <small><s class="text-secondary">Rs 3,572</s></small>
                                <span class="price">Rs 2,200</span>
                            </h5>
                            <button type="submit"  name="add_cart" class="btn btn-warning my-3" >Add To CaRt <i class="fas fa-shopping-cart"></i></button>
                            <input type="hidden" name="name" value="Sport-Shoes">
                            <input type="hidden" name="price" value="2200">
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


<footer>
  <h5 style="font-family:Lucida Handwriting ;"><strong>© All Copyrights Reserved @ ApNa STORE || Contact Us @ :<br></strong></h5>
  <a href="#" class="fa fa-twitter"></a>
  <a href="#" class="fa fa-facebook"></a>
  <a href="#" class="fa fa-google"></a>
  <a href="#" class="fa fa-instagram"></a>
</footer>
</body>
</html>