<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="webside icon" type="png" href="./img/baner-icon/07D132B4-BB34-4BD8-8F26-5EC38035539E.png" >
    <!-- font google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&display=swap" rel="stylesheet">
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Css -->

    <link rel="stylesheet" href="css/head-footer.css"> <!--link này dùng chung cho header , footer-->
    <link rel="stylesheet" href="css/menu.css">

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
    <title>Shrek Juices</title>
</head>
<body>
    <!-- navbar -->
<nav class="navbar navbar-expand-lg bg-body-tertiary navone">
    <div class="container-fluid">
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Coolercleanse</a>
          </li>
          <li class="nav-item line">
            <a class="nav-link" href="#">Blend it yourself</a>
          </li>
        </ul>
      </div>
        <a class="navbar-brand" href="index.php"><img src="./img/Logo/Logo.png" alt=""></a>
        <form class="d-flex" role="search">
            <input id="searchbar" onkeyup="search_animal()"  name="search"  class="form-control me-2" type="search" placeholder="Search juice generation" aria-label="Search">
            <button class="btn " type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
            <a href="shopping-cart.php" class="ping"><i class="fa-solid fa-cart-shopping"></i><span class="qtycart">0</span></a>
        </form>
    </div>
  </nav>
  <nav class="navbar navbar-expand-lg bg-secondary navtwo">
    <div class="container-fluid tog">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa-solid fa-bars"></i>
      </button>
      <a href="shopping-cart.php"><i class="fa-solid fa-cart-shopping show-mobile"></i></a>
      <div class="collapse navbar-collapse menu" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" href="menu.php" aria-current="page">menu</a>
          </li>
          
          <li class="nav-item aboutus">
            <a class="nav-link " href="about.php">about us</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  


<!-- section-menu -->

    <!-- baner -->
<div class="container-fluid">
  <img class="baner" src="./img/baner-icon/223.jpg" alt="">
</div>
    <!-- end baner -->

   
<div class="container title-menu">
  <h1 class="title">select your menu</h1>
  <div class="container select-menu-showmb">
      <select class="form-select mt-3" name="" id="">
          <option value="">Fuit Juices</option>
          <option value="">Vegetable Juice</option>
          <option value="">Smoothies</option>
          <option value="">Protein Shakes</option>
          <option value="">Winter Menu</option>
          <option value="">Chocolate Juice</option>
          <option value="">Mocks Tails</option>
      </select>
  </div>
  <ul class="nav justify-content-center listPage">
      <li class="nav-item ">
        <a class="nav-link" href="menu.php">
          <span class="img-oring"><img src="/./img/baner-icon/fresh-juices.png" alt=""></span>
          <span class="text">Fresh Juices</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="vegetable-juice.php">
          <span class="img-oring"><img src="/./img/baner-icon/fresh-juices.png" alt=""></span>
          <span class="text">Vegetable Juices</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="smoothies.php">
          <span class="img-oring"><img src="./img/baner-icon/juice-farmacy.png" alt=""></span>
          <span class="text">Smoothies</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="protein.php">
          <span class="img-oring"><img src="./img/baner-icon/bottled.png" alt=""></span>
          <span class="text">Protein Shakes</span>
        </a>
      </li>
      <li class="nav-item">
          <a class="nav-link " href="winter.php">
            <span class="img-oring"><img src="./img/baner-icon/smoothies.png" alt=""></span>
            <span class="text">Winter Menu</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="chocolate.php">
            <span class="img-oring"><img src="./img/baner-icon/juice-farmacy.png" alt=""></span>
            <span class="text">Chocolate Juice</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="mockstails.php">
            <span class="img-oring"><img src="./img/baner-icon/bottled.png" alt=""></span>
            <span class="text">Mocks Tails</span>
          </a>
        </li>
    </ul>
</div>

<!-- end section -->
 
<!--product list -->
<div class="container">
  <div class="list">
    <!--  item1 -->
    <div class="item " type="button"  data-bs-toggle="modal" data-bs-target="#myModal9" data-key="1">
      <div class="img">
        <img src="/./img/Fruit Juice/Carrot.png" alt="">
      </div>
      <div class="name-drink">
        <h3>Carrot</h3>
      </div>
    </div> 
    <!-- The Modal -->
    <div class="modal fade" id="myModal9">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Product Details</h4>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>
          
          <div class="modal-body">
            <div class="pd-wrap">
              <div class="container">
                    <div class="row">
                      <div class="col-md-6">
                        <div id="slider" class="owl-carousel product-slider">
                          <div class="item">
                            <img src="/./img/Fruit Juice/Carrot.png" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="product-dtl">
                          <div class="product-info">
                            <div class="product-name">Carrot</div>
                            <div class="reviews-counter">
                              <div class="rate">
                                <input type="radio" id="star5" name="rate" value="5" checked />
                                <label for="star5" title="text">5 stars</label>
                                <input type="radio" id="star4" name="rate" value="4" checked />
                                <label for="star4" title="text">4 stars</label>
                                <input type="radio" id="star3" name="rate" value="3" checked />
                                <label for="star3" title="text">3 stars</label>
                                <input type="radio" id="star2" name="rate" value="2" />
                                <label for="star2" title="text">2 stars</label>
                                <input type="radio" id="star1" name="rate" value="1" />
                                <label for="star1" title="text">1 star</label>
                              </div>
                              <span>3 Reviews</span>
                            </div>
                            <div class="product-price-discount"><span>40.000VND</span><span class="line-through">30.000VND</span></div>
                          </div>
                          <p>All hail! Kale, orange carrot, and a kiss of watermelon make this nutritional powerhouse a great way to go green.</p>
                          <div class="row">
                            <div class="col-md-6">
                              <label for="size">Size</label>
                              <select id="size" name="size" class="form-control">
                                <option>S</option>
                                <option>M</option>
                                <option>L</option>
                              </select>
                            </div>
                          </div>
                          <div class="product-count">
                            <label for="size">Quantity</label>
                            <form action="#" class="display-flex">
                            <div class="qtyminus">-</div>
                            <input type="text" name="quantity" value="1" class="qty">
                            <div class="qtyplus">+</div>
                        </form>
                        <a href="#" class="round-black-btn">Add to Cart</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div> 


    <!-- item 2 -->
    <div class="item" type="button"  data-bs-toggle="modal" data-bs-target="#myModal10" data-key="2">
      <div class="img">
        <img src="./img/Vegetable Juice/Celery.png" alt="">
      </div>
      <div class="name-drink">
        <h3>Celery</h3>
      </div>
    </div>
    <!-- The Modal -->
    <div class="modal fade" id="myModal10">
      <div class="modal-dialog">
        <div class="modal-content">
          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">Product Details</h4>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>
          <!-- Modal body -->
          <div class="modal-body">
            <div class="pd-wrap">
              <div class="container">
                    <div class="row">
                      <div class="col-md-6">
                        <div id="slider" class="owl-carousel product-slider">
                          <div class="item">
                            <img src="./img/Vegetable Juice/Celery.png" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="product-dtl">
                          <div class="product-info">
                            <div class="product-name">Celery</div>
                            <div class="reviews-counter">
                              <div class="rate">
                                <input type="radio" id="star5" name="rate" value="5" checked />
                                <label for="star5" title="text">5 stars</label>
                                <input type="radio" id="star4" name="rate" value="4" checked />
                                <label for="star4" title="text">4 stars</label>
                                <input type="radio" id="star3" name="rate" value="3" checked />
                                <label for="star3" title="text">3 stars</label>
                                <input type="radio" id="star2" name="rate" value="2" />
                                <label for="star2" title="text">2 stars</label>
                                <input type="radio" id="star1" name="rate" value="1" />
                                <label for="star1" title="text">1 star</label>
                              </div>
                              <span>3 Reviews</span>
                            </div>
                            <div class="product-price-discount"><span>40.000VND</span><span class="line-through">30.000VND</span></div>
                          </div>
                          <p>All hail! Kale, yellow celery, and a kiss of watermelon make this nutritional powerhouse a great way to go green.</p>
                          <div class="row">
                            <div class="col-md-6">
                              <label for="size">Size</label>
                              <select id="size" name="size" class="form-control">
                                <option>S</option>
                                <option>M</option>
                                <option>L</option>
                              </select>
                            </div>
                          </div>
                          <div class="product-count">
                            <label for="size">Quantity</label>
                            <form action="#" class="display-flex">
                            <div class="qtyminus">-</div>
                            <input type="text" name="quantity" value="1" class="qty">
                            <div class="qtyplus">+</div>
                        </form>
                        <a href="#" class="round-black-btn">Add to Cart</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
          </div>
          <!-- Modal footer -->
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <!-- item 3 -->
    <div class="item" type="button"  data-bs-toggle="modal" data-bs-target="#myModal11">
      <div class="img">
        <img src="./img/Vegetable Juice/DailyDetox.png" alt="">
      </div>
      <div class="name-drink">
        <h3>Daily Detox</h3>
      </div>
    </div>

    <div class="modal fade" id="myModal11">
      <div class="modal-dialog">
        <div class="modal-content">
         
          <div class="modal-header">
            <h4 class="modal-title">Product Details</h4>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>
          
          <div class="modal-body">
            <div class="pd-wrap">
              <div class="container">
                    <div class="row">
                      <div class="col-md-6">
                        <div id="slider" class="owl-carousel product-slider">
                          <div class="item">
                            <img src="./img/Vegetable Juice/DailyDetox.png" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="product-dtl">
                          <div class="product-info">
                            <div class="product-name">Daily Detox</div>
                            <div class="reviews-counter">
                              <div class="rate">
                                <input type="radio" id="star5" name="rate" value="5" checked />
                                <label for="star5" title="text">5 stars</label>
                                <input type="radio" id="star4" name="rate" value="4" checked />
                                <label for="star4" title="text">4 stars</label>
                                <input type="radio" id="star3" name="rate" value="3" checked />
                                <label for="star3" title="text">3 stars</label>
                                <input type="radio" id="star2" name="rate" value="2" />
                                <label for="star2" title="text">2 stars</label>
                                <input type="radio" id="star1" name="rate" value="1" />
                                <label for="star1" title="text">1 star</label>
                              </div>
                              <span>3 Reviews</span>
                            </div>
                            <div class="product-price-discount"><span>40.000VND</span><span class="line-through">30.000VND</span></div>
                          </div>
                          <p>All hail! Kale, orange daily detox, and a kiss of watermelon make this nutritional powerhouse a great way to go green.</p>
                          <div class="row">
                            <div class="col-md-6">
                              <label for="size">Size</label>
                              <select id="size" name="size" class="form-control">
                                <option>S</option>
                                <option>M</option>
                                <option>L</option>
                              </select>
                            </div>
                          </div>
                          <div class="product-count">
                            <label for="size">Quantity</label>
                            <form action="#" class="display-flex">
                            <div class="qtyminus">-</div>
                            <input type="text" name="quantity" value="1" class="qty">
                            <div class="qtyplus">+</div>
                        </form>
                        <a href="#" class="round-black-btn">Add to Cart</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
          
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div> 

    <!-- item 4 -->
    <div class="item" type="button"  data-bs-toggle="modal" data-bs-target="#myModal12">
      <div class="img">
        <img src="./img/Vegetable Juice/GetUrGreen.png" alt="">
      </div>
      <div class="name-drink">
        <h3>GetUr Green</h3>
      </div>
    </div>
    <div class="modal fade" id="myModal12">
      <div class="modal-dialog">
        <div class="modal-content">
         
          <div class="modal-header">
            <h4 class="modal-title">Product Details</h4>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>
          
          <div class="modal-body">
            <div class="pd-wrap">
              <div class="container">
                    <div class="row">
                      <div class="col-md-6">
                        <div id="slider" class="owl-carousel product-slider">
                          <div class="item">
                            <img src="./img/Vegetable Juice/GetUrGreen.png" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="product-dtl">
                          <div class="product-info">
                            <div class="product-name">GetUr Green</div>
                            <div class="reviews-counter">
                              <div class="rate">
                                <input type="radio" id="star5" name="rate" value="5" checked />
                                <label for="star5" title="text">5 stars</label>
                                <input type="radio" id="star4" name="rate" value="4" checked />
                                <label for="star4" title="text">4 stars</label>
                                <input type="radio" id="star3" name="rate" value="3" checked />
                                <label for="star3" title="text">3 stars</label>
                                <input type="radio" id="star2" name="rate" value="2" />
                                <label for="star2" title="text">2 stars</label>
                                <input type="radio" id="star1" name="rate" value="1" />
                                <label for="star1" title="text">1 star</label>
                              </div>
                              <span>3 Reviews</span>
                            </div>
                            <div class="product-price-discount"><span>40.000VND</span><span class="line-through">30.000VND</span></div>
                          </div>
                          <p>All hail! Kale, green GetUr Green, and a kiss of watermelon make this nutritional powerhouse a great way to go green.</p>
                          <div class="row">
                            <div class="col-md-6">
                              <label for="size">Size</label>
                              <select id="size" name="size" class="form-control">
                                <option>S</option>
                                <option>M</option>
                                <option>L</option>
                              </select>
                            </div>
                          </div>
                          <div class="product-count">
                            <label for="size">Quantity</label>
                            <form action="#" class="display-flex">
                            <div class="qtyminus">-</div>
                            <input type="text" name="quantity" value="1" class="qty">
                            <div class="qtyplus">+</div>
                        </form>
                        <a href="#" class="round-black-btn">Add to Cart</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
          
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div> 

    <!--  item 5 -->
    <div class="item first-child" type="button"  data-bs-toggle="modal" data-bs-target="#myModal13">
      <div class="img">
        <img src="./img/Vegetable Juice/HailToKale.png" alt="">
      </div>
      <div class="name-drink">
        <h3>Hail To Kale</h3>
      </div>
    </div>
    <div class="modal fade" id="myModal13">
        <div class="modal-dialog">
          <div class="modal-content">
           
            <div class="modal-header">
              <h4 class="modal-title">Product Details</h4>
              <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            
            <div class="modal-body">
              <div class="pd-wrap">
                <div class="container">
                      <div class="row">
                        <div class="col-md-6">
                          <div id="slider" class="owl-carousel product-slider">
                            <div class="item">
                              <img src="./img/Vegetable Juice/HailToKale.png" />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="product-dtl">
                            <div class="product-info">
                              <div class="product-name">Hail To Kale</div>
                              <div class="reviews-counter">
                                <div class="rate">
                                  <input type="radio" id="star5" name="rate" value="5" checked />
                                  <label for="star5" title="text">5 stars</label>
                                  <input type="radio" id="star4" name="rate" value="4" checked />
                                  <label for="star4" title="text">4 stars</label>
                                  <input type="radio" id="star3" name="rate" value="3" checked />
                                  <label for="star3" title="text">3 stars</label>
                                  <input type="radio" id="star2" name="rate" value="2" />
                                  <label for="star2" title="text">2 stars</label>
                                  <input type="radio" id="star1" name="rate" value="1" />
                                  <label for="star1" title="text">1 star</label>
                                </div>
                                <span>3 Reviews</span>
                              </div>
                              <div class="product-price-discount"><span>40.000VND</span><span class="line-through">30.000VND</span></div>
                            </div>
                            <p>All hail! Kale, green Hail To Kale, and a kiss of watermelon make this nutritional powerhouse a great way to go green.</p>
                            <div class="row">
                              <div class="col-md-6">
                                <label for="size">Size</label>
                                <select id="size" name="size" class="form-control">
                                  <option>S</option>
                                  <option>M</option>
                                  <option>L</option>
                                </select>
                              </div>
                            </div>
                            <div class="product-count">
                              <label for="size">Quantity</label>
                              <form action="#" class="display-flex">
                              <div class="qtyminus">-</div>
                              <input type="text" name="quantity" value="1" class="qty">
                              <div class="qtyplus">+</div>
                          </form>
                          <a href="#" class="round-black-btn">Add to Cart</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
            
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div> 

    <!-- item 6 -->
    <div class="item" type="button"  data-bs-toggle="modal" data-bs-target="#myModal14">
      <div class="img">
        <img src="./img/Vegetable Juice/RootRecovery.png" alt="">
      </div>
      <div class="name-drink">
        <h3>Root Recovery</h3>
      </div>
    </div>
    <div class="modal fade" id="myModal14">
        <div class="modal-dialog">
          <div class="modal-content">
           
            <div class="modal-header">
              <h4 class="modal-title">Product Details</h4>
              <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            
            <div class="modal-body">
              <div class="pd-wrap">
                <div class="container">
                      <div class="row">
                        <div class="col-md-6">
                          <div id="slider" class="owl-carousel product-slider">
                            <div class="item">
                              <img src="./img/Vegetable Juice/RootRecovery.png" />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="product-dtl">
                            <div class="product-info">
                              <div class="product-name">Root Recovery</div>
                              <div class="reviews-counter">
                                <div class="rate">
                                  <input type="radio" id="star5" name="rate" value="5" checked />
                                  <label for="star5" title="text">5 stars</label>
                                  <input type="radio" id="star4" name="rate" value="4" checked />
                                  <label for="star4" title="text">4 stars</label>
                                  <input type="radio" id="star3" name="rate" value="3" checked />
                                  <label for="star3" title="text">3 stars</label>
                                  <input type="radio" id="star2" name="rate" value="2" />
                                  <label for="star2" title="text">2 stars</label>
                                  <input type="radio" id="star1" name="rate" value="1" />
                                  <label for="star1" title="text">1 star</label>
                                </div>
                                <span>3 Reviews</span>
                              </div>
                              <div class="product-price-discount"><span>40.000VND</span><span class="line-through">30.000VND</span></div>
                            </div>
                            <p>All hail! Kale, red Root Recovery, and a kiss of watermelon make this nutritional powerhouse a great way to go green.</p>
                            <div class="row">
                              <div class="col-md-6">
                                <label for="size">Size</label>
                                <select id="size" name="size" class="form-control">
                                  <option>S</option>
                                  <option>M</option>
                                  <option>L</option>
                                </select>
                              </div>
                            </div>
                            <div class="product-count">
                              <label for="size">Quantity</label>
                              <form action="#" class="display-flex">
                              <div class="qtyminus">-</div>
                              <input type="text" name="quantity" value="1" class="qty">
                              <div class="qtyplus">+</div>
                          </form>
                          <a href="#" class="round-black-btn">Add to Cart</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
            
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div> 

    <!-- item 7 -->
    <div class="item" type="button"  data-bs-toggle="modal" data-bs-target="#myModal15">
      <div class="img">
        <img src="./img/Vegetable Juice/SupaDupaGreen.png" alt="">
      </div>
      <div class="name-drink">
        <h3>Supa Dupa Green</h3>
      </div>
    </div>
    <div class="modal fade" id="myModal15">
        <div class="modal-dialog">
          <div class="modal-content">
           
            <div class="modal-header">
              <h4 class="modal-title">Product Details</h4>
              <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            
            <div class="modal-body">
              <div class="pd-wrap">
                <div class="container">
                      <div class="row">
                        <div class="col-md-6">
                          <div id="slider" class="owl-carousel product-slider">
                            <div class="item">
                              <img src="./img/Vegetable Juice/SupaDupaGreen.png" />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="product-dtl">
                            <div class="product-info">
                              <div class="product-name">Supa Dupa Green</div>
                              <div class="reviews-counter">
                                <div class="rate">
                                  <input type="radio" id="star5" name="rate" value="5" checked />
                                  <label for="star5" title="text">5 stars</label>
                                  <input type="radio" id="star4" name="rate" value="4" checked />
                                  <label for="star4" title="text">4 stars</label>
                                  <input type="radio" id="star3" name="rate" value="3" checked />
                                  <label for="star3" title="text">3 stars</label>
                                  <input type="radio" id="star2" name="rate" value="2" />
                                  <label for="star2" title="text">2 stars</label>
                                  <input type="radio" id="star1" name="rate" value="1" />
                                  <label for="star1" title="text">1 star</label>
                                </div>
                                <span>3 Reviews</span>
                              </div>
                              <div class="product-price-discount"><span>40.000VND</span><span class="line-through">30.000VND</span></div>
                            </div>
                            <p>All hail! Kale, green Supa Dupa Green, and a kiss of watermelon make this nutritional powerhouse a great way to go green.</p>
                            <div class="row">
                              <div class="col-md-6">
                                <label for="size">Size</label>
                                <select id="size" name="size" class="form-control">
                                  <option>S</option>
                                  <option>M</option>
                                  <option>L</option>
                                </select>
                              </div>
                            </div>
                            <div class="product-count">
                              <label for="size">Quantity</label>
                              <form action="#" class="display-flex">
                              <div class="qtyminus">-</div>
                              <input type="text" name="quantity" value="1" class="qty">
                              <div class="qtyplus">+</div>
                          </form>
                          <a href="#" class="round-black-btn">Add to Cart</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
            
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div> 

    <!-- item 8 -->
    <div class="item last-child" type="button"  data-bs-toggle="modal" data-bs-target="#myModal16">
      <div class="img">
        <img src="./img/Vegetable Juice/TheProFressinal.png" alt="">
      </div>
      <div class="name-drink">
        <h3>The Pro Fressinal</h3>
      </div>
    </div>
    <div class="modal fade" id="myModal16">
        <div class="modal-dialog">
          <div class="modal-content">
           
            <div class="modal-header">
              <h4 class="modal-title">Product Details</h4>
              <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            
            <div class="modal-body">
              <div class="pd-wrap">
                <div class="container">
                      <div class="row">
                        <div class="col-md-6">
                          <div id="slider" class="owl-carousel product-slider">
                            <div class="item">
                              <img src="./img/Vegetable Juice/TheProFressinal.png" />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="product-dtl">
                            <div class="product-info">
                              <div class="product-name">The Pro Fressinal</div>
                              <div class="reviews-counter">
                                <div class="rate">
                                  <input type="radio" id="star5" name="rate" value="5" checked />
                                  <label for="star5" title="text">5 stars</label>
                                  <input type="radio" id="star4" name="rate" value="4" checked />
                                  <label for="star4" title="text">4 stars</label>
                                  <input type="radio" id="star3" name="rate" value="3" checked />
                                  <label for="star3" title="text">3 stars</label>
                                  <input type="radio" id="star2" name="rate" value="2" />
                                  <label for="star2" title="text">2 stars</label>
                                  <input type="radio" id="star1" name="rate" value="1" />
                                  <label for="star1" title="text">1 star</label>
                                </div>
                                <span>3 Reviews</span>
                              </div>
                              <div class="product-price-discount"><span>40.000VND</span><span class="line-through">30.000VND</span></div>
                            </div>
                            <p>All hail! Kale, green The Pro Fressinal, and a kiss of watermelon make this nutritional powerhouse a great way to go green.</p>
                            <div class="row">
                              <div class="col-md-6">
                                <label for="size">Size</label>
                                <select id="size" name="size" class="form-control">
                                  <option>S</option>
                                  <option>M</option>
                                  <option>L</option>
                                </select>
                              </div>
                            </div>
                            <div class="product-count">
                              <label for="size">Quantity</label>
                              <form action="#" class="display-flex">
                              <div class="qtyminus">-</div>
                              <input type="text" name="quantity" value="1" class="qty">
                              <div class="qtyplus">+</div>
                          </form>
                          <a href="#" class="round-black-btn">Add to Cart</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
            
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div> 
  </div>
</div>

<!-- end product list -->



<!-- footer -->
<div class="container-fluid footer">
    <div class="container mt-3">
        <div class="row">
          <div class="col-sm-4 p-3 logo ">
            <a href="index.php">
                <img src="././img/Logo/Logo.png" alt="">
            </a>
            </div>
          <div class="col-sm-8 p-3 link-info">
            <ul class="nav justify-content-center">
                <li class="nav-item Rewards">
                  <a class="nav-link " href="#">Rewards</a>
                </li>
                
                <li class="nav-item faq">
                  <a class="nav-link" href="#">faq</a>
                </li>
                <li class="nav-item contact">
                  <a class="nav-link " href="#">contact us</a>
                </li>
              </ul>
          </div>
        </div>
    </div>
    <div class="container-fluid mt-3 green-footer">
        <div class="container">
            <div class="row justify-content-center ">
              <div class="col p-3 ">2024 Juice Generation, All Rights Reserved</div>
              <div class="col p-3 ">
                <label for="">NEWSLETTER :</label>
                <input class="mail" type="email" placeholder="Enter your email address ">
              </div>
              <div class="col p-3 ">
                <ul class="nav">
                    <li class="nav-item first">
                        <a href="">Privacy Policy</a>
                    </li>
                    <li class="nav-item ">
                        <a href="">Terms of Use</a>
                    </li>
                    <li class="nav-item ">
                        <a href="">Accessibility</a>
                    </li>
                </ul>
    
              </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src="js/menu.js"></script>
<script src="js/script.js"></script>

</body>
</html>