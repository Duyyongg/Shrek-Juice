<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="webside icon" type="png" href="/img/baner-icon/07D132B4-BB34-4BD8-8F26-5EC38035539E.png" >
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
    
    <title>Shakes Juice</title>
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
            <a href="shopping-cart.php"><i class="fa-solid fa-cart-shopping"></i></a>
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
  <img class="baner" src="/img/baner-icon/banners-2540-Menu-2020-Smoothie-3b.jpg" alt="">
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
          <span class="img-oring"><img src="/img/baner-icon/fresh-juices.png" alt=""></span>
          <span class="text">Fresh Juices</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="vegetable-juice.php">
          <span class="img-oring"><img src="/img/baner-icon/fresh-juices.png" alt=""></span>
          <span class="text">Vegetable Juices</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="smoothies.php">
          <span class="img-oring"><img src="/img/baner-icon/juice-farmacy.png" alt=""></span>
          <span class="text">Smoothies</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="protein.php">
          <span class="img-oring"><img src="/img/baner-icon/bottled.png" alt=""></span>
          <span class="text">Protein Shakes</span>
        </a>
      </li>
      <li class="nav-item">
          <a class="nav-link " href="winter.php">
            <span class="img-oring"><img src="/img/baner-icon/smoothies.png" alt=""></span>
            <span class="text">Winter Menu</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="chocolate.php">
            <span class="img-oring"><img src="/img/baner-icon/juice-farmacy.png" alt=""></span>
            <span class="text">Chocolate Juice</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="mockstails.php">
            <span class="img-oring"><img src="/img/baner-icon/bottled.png" alt=""></span>
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
    <div class="item " type="button"  data-bs-toggle="modal" data-bs-target="#myModal17" data-key="1">
      <div class="img">
        <img src="/img/Smoothies/GreenGuardian.png" alt="">
      </div>
      <div class="name-drink">
        <h3>Green Guardian</h3>
      </div>
    </div> 
    <!-- The Modal -->
    <div class="modal fade" id="myModal17">
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
                            <img src="/img/Smoothies/GreenGuardian.png" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="product-dtl">
                          <div class="product-info">
                            <div class="product-name">Green Guardian</div>
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
                          <p>All hail! Kale, Green Guardian, and a kiss of watermelon make this nutritional powerhouse a great way to go green.</p>
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
    <div class="item" type="button"  data-bs-toggle="modal" data-bs-target="#myModal18" data-key="2">
      <div class="img">
        <img src="img/Smoothies/Hi-Fibe.png" alt="">
      </div>
      <div class="name-drink">
        <h3>Hi-Fibe</h3>
      </div>
    </div>
    <!-- The Modal -->
    <div class="modal fade" id="myModal18">
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
                            <img src="img/Smoothies/Hi-Fibe.png" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="product-dtl">
                          <div class="product-info">
                            <div class="product-name">Hi-Fibe</div>
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
                          <p>All hail! Kale, green Hi-Fibe, and a kiss of watermelon make this nutritional powerhouse a great way to go green.</p>
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
    <div class="item" type="button"  data-bs-toggle="modal" data-bs-target="#myModal19">
      <div class="img">
        <img src="img/Smoothies/Mr.Greengenes.png" alt="">
      </div>
      <div class="name-drink">
        <h3>Mr.Greengenes</h3>
      </div>
    </div>

    <div class="modal fade" id="myModal19">
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
                            <img src="img/Smoothies/Mr.Greengenes.png" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="product-dtl">
                          <div class="product-info">
                            <div class="product-name">Mr.Greengenes</div>
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
                          <p>All hail! Kale, green Mr.Greengenes, and a kiss of watermelon make this nutritional powerhouse a great way to go green.</p>
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
    <div class="item" type="button"  data-bs-toggle="modal" data-bs-target="#myModal20">
      <div class="img">
        <img src="img/Smoothies/MuchoMango.png" alt="">
      </div>
      <div class="name-drink">
        <h3>Mucho Mango</h3>
      </div>
    </div>
    <div class="modal fade" id="myModal20">
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
                            <img src="img/Smoothies/MuchoMango.png" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="product-dtl">
                          <div class="product-info">
                            <div class="product-name">Mucho Mango</div>
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
                          <p>All hail! Kale, orange Mucho Mango, and a kiss of watermelon make this nutritional powerhouse a great way to go green.</p>
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
    <div class="item first-child" type="button"  data-bs-toggle="modal" data-bs-target="#myModal21">
      <div class="img">
        <img src="img/Smoothies/OrangeCMonter.png" alt="">
      </div>
      <div class="name-drink">
        <h3>Orange CMonter</h3>
      </div>
    </div>
    <div class="modal fade" id="myModal21">
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
                              <img src="img/Smoothies/OrangeCMonter.png" />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="product-dtl">
                            <div class="product-info">
                              <div class="product-name">Orange CMonter</div>
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
                            <p>All hail! Kale, yellow Orange CMonter, and a kiss of watermelon make this nutritional powerhouse a great way to go green.</p>
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
    <div class="item" type="button"  data-bs-toggle="modal" data-bs-target="#myModal22">
      <div class="img">
        <img src="img/Smoothies/PeanutButterSplit.png" alt="">
      </div>
      <div class="name-drink">
        <h3>Peanut Butter Split</h3>
      </div>
    </div>
    <div class="modal fade" id="myModal22">
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
                              <img src="img/Smoothies/PeanutButterSplit.png" />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="product-dtl">
                            <div class="product-info">
                              <div class="product-name">Peanut Butter Split</div>
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
                            <p>All hail! Kale, white Peanut Butter Split, and a kiss of watermelon make this nutritional powerhouse a great way to go green.</p>
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
    <div class="item" type="button"  data-bs-toggle="modal" data-bs-target="#myModal23">
      <div class="img">
        <img src="img/Smoothies/PurplePineapple.png" alt="">
      </div>
      <div class="name-drink">
        <h3>Purple Pineapple</h3>
      </div>
    </div>
    <div class="modal fade" id="myModal23">
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
                              <img src="img/Smoothies/PurplePineapple.png" />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="product-dtl">
                            <div class="product-info">
                              <div class="product-name">PurplePineapple</div>
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
                            <p>All hail! Kale, PurplePineapple, and a kiss of watermelon make this nutritional powerhouse a great way to go green.</p>
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
    <div class="item last-child" type="button"  data-bs-toggle="modal" data-bs-target="#myModal24">
      <div class="img">
        <img src="img/Smoothies/SmoothStawberry.png" alt="">
      </div>
      <div class="name-drink">
        <h3>Smooth Stawberry</h3>
      </div>
    </div>
    <div class="modal fade" id="myModal24">
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
                              <img src="img/Smoothies/SmoothStawberry.png" />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="product-dtl">
                            <div class="product-info">
                              <div class="product-name">Smooth Stawberry</div>
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
                            <p>All hail! Kale, pink Smooth Stawberry, and a kiss of watermelon make this nutritional powerhouse a great way to go green.</p>
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

      <!-- item 9 -->
      <div class="item last-child" type="button"  data-bs-toggle="modal" data-bs-target="#myModal25">
        <div class="img">
          <img src="img/Smoothies/WatermelonDragon.png" alt="">
        </div>
        <div class="name-drink">
          <h3>Watermelon Dragon</h3>
        </div>
      </div>
      <div class="modal fade" id="myModal25">
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
                                <img src="img/Smoothies/WatermelonDragon.png" />
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="product-dtl">
                              <div class="product-info">
                                <div class="product-name">Watermelon Dragon</div>
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
                              <p>All hail! Kale, pink Watermelon Dragon, and a kiss of watermelon make this nutritional powerhouse a great way to go green.</p>
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
                <img src="./img/Logo/Logo.png" alt="">
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
</body>
</html>