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
    <!-- Css  style -->
    <!-- <link rel="stylesheet" href="css/style.css">  link này dùng cho trang index.php -->
    <link rel="stylesheet" href="css/head-footer.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/shopping-cart.css"> <!--link này dùng chung cho header , footer-->
    <!-- <link rel="stylesheet" href="css/shopping-cart.css"> link này dùng cho trang shopping.php -->


    <title>Shrek Juices</title>
</head>
<body >
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
            <input id="searchbar" onkeyup="search_animal()"  name="search"  class="form-control me-2" type="search" id="fillter" placeholder="Search juice generation" aria-label="Search">
            <button class="btn " type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
            <a href="shopping-cart.php" class="ping"><i class="fa-solid fa-cart-shopping"></i><span class="qtycart">0</span></a>
        </form>
    </div>
  </nav>
  <br>
  <br>
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
    <img  class="baner" src="./img/baner-icon/Shop_Banner-2554x315-blank3.jpg" alt="">
    <h1 class="title2">Shopping cart is empty</h1>
</div>
<!-- end section -->



<!-- title when no item -->
<div class="container no-item">
    <h1>YOU HAVE NO ITEMS IN YOUR SHOPPING CART</h1>
    <p>Click <a href="menu.php">here</a> to continue shopping</p>
</div>
<div class="row  d-flex justify-content-center justify-content-md-end product-container mt-5 ">
  <div class="col-md-10 p-3 pb-4 rounded-lg bg-white ml-md-0" id="cart" style="z-index: 1; ">
    <div class="d-flex">
      <div class="col-md-3"> 
        <h5>Product</h5>
      </div>
      <div class="col-md-3 d-flex flex-wrap align-content-center ">
        <h5>Title</h5>
      </div>
      <div class="col-md-3 d-flex flex-wrap align-content-center ">
        <h5>Qty</h5>
      </div>
      <div class="col-md-2 d-flex flex-wrap align-content-center ">
        <h5>Price</h5>
      </div>
      <div class="col-md-1">

      </div>
    </div>
    <div id="order" >

    </div>
    
    <div id="cart_footer">
      <div id="order_btn" class="text-center text-white p-2 font-weight-bold m-right mt-5" style="letter-spacing:1.2px; font-size: 20px; width: 200px;" type="button"  data-bs-toggle="modal" data-bs-target="#myModal89" data-key="1">
        Payment
      </div> 
    </div>
  </div>
 </div>
 <div class="modal fade" id="myModal89">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title"></h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <div class="pd-wrap">
          <div class="container">
            <div class="row">
              <div class="col-md-6 ">
                <h4 class="modal-title">Delivery information</h4>
                <form action="/action_page.php">
                  <div class="form-floating mb-3 mt-3">
                    <input type="text" class="form-control info" id="email" placeholder="Enter email" name="email">
                    <label for="email">Email</label>
                  </div>
                  <div class="form-floating mt-3 mb-3">
                    <input type="text" class="form-control info" id="pwd" placeholder="Enter Name" name="name">
                    <label for="pwd">Name</label>
                  </div>
                  <div class="form-floating mt-3 mb-3">
                    <input type="text" class="form-control info" id="pwd" placeholder="Enter Phone" name="phone">
                    <label for="pwd">Phone</label>
                  </div>
                  <div class="form-floating mt-3 mb-3">
                    <input type="text" class="form-control info" id="pwd" placeholder="Enter Address" name="address">
                    <label for="pwd">Address</label>
                  </div>
                  <div class="form-floating mt-3 mb-3">
                    <textarea  class="form-control info" id="comment" placeholder="Enter password" name="text"></textarea>
                    <label for="comment">Note(option)</label>
                  </div>
                </form>
              </div>
              <div class="col-md-6">
                <h4 class="modal-title mb-3">Transport</h4>
                <div class="form-check info-check">
                  <input type="checkbox" class="form-check-input" id="check1" name="optradio" value="option1" checked>
                  <label class="form-check-label" for="radio1">Delivery</label>
                </div>
                <h4 class="modal-title mt-2">Pay</h4>
                <div class="form-check info-check">
                  <input type="checkbox" class="form-check-input" id="check2" name="optradio" value="option2" >
                  <label class="form-check-label" for="radio1">Payment on Delivery (COD)</label>
                </div>
              </div>
            </div>
            <button type="submit" class="round-black-btn ">Payment</button>
          </div>
        </div>
      </div>
    </div>
  </div>
 </div>


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
<script src="js/script.js"></script>
<script src="js/menu.js"></script>
</body>
</html>