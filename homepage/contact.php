<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="webside icon" type="png" href="/img/baner-icon/07D132B4-BB34-4BD8-8F26-5EC38035539E.png">
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Css -->
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <!--link này dùng cho trang index.php-->
    <link rel="stylesheet" href="css/head-footer.css">
    <!--link này dùng chung cho header , footer-->
    <link rel="stylesheet" href="css/contact.css">

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
            <a class="navbar-brand" href="index.php"><img
                    src="./img/Logo/Logo.png" alt=""></a>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search juice generation"
                    aria-label="Search">
                <button class="btn " type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                <a href="shopping-cart.php"><i class="fa-solid fa-cart-shopping"></i></a>
            </form>
        </div>
    </nav>

    <br>
    <br>
    <nav class="navbar navbar-expand-lg bg-secondary navtwo">
        <div class="container-fluid tog">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa-solid fa-bars"></i>
            </button>
            <a href="shopping-cart.php"><i class="fa-solid fa-cart-shopping show-mobile"></i></a>
            <div class="collapse navbar-collapse menu" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="menu.php" aria-current="page">menu</a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </nav>


    <!-- section-menu -->
    
    <div class="containers">
      
      <div class="form">
        <div class="contact-info">
          <h3 class="title">Let's get in touch</h3>
          <p class="text">
          Sweetness from fruit, joy from connection. We are here, to make things better!
          </p>

          <div class="info">
            <div class="information">
             
              <p>Address: S2 Pham Van Bach, Cau Giay, Ha Noi</p>
            </div>
            <div class="information">
              
              <p>Gmail: ShrekjuiceNhom6@gmail.com</p>
            </div>
            <div class="information">
              
              <p>Hotline: (+84) 8888888</p>
            </div>
          </div>

          <div class="social-media">
            <p>Connect with us :</p>
            <div class="social-icons">
              <a href="#">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#">
                <i class="fab fa-instagram"></i>
              </a>
              <a href="#">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div><br>
            <div class="credit">Made with <span style="color:tomato">❤</span> by <a href="https://www.learningrobo.com/">Learning Nhom6</a></div>
          </div>
        </div>

        <div class="contact-form">
          <span class="circle one"></span>
          <span class="circle two"></span>

          <form action="index.php" autocomplete="off">
            <h3 class="title">Contact us</h3>
            <div class="input-container">
              <input type="text" name="name" class="input" />
              <label for="">Username</label>
              <span>Username</span>
            </div>
            <div class="input-container">
              <input type="email" name="email" class="input" />
              <label for="">Email</label>
              <span>Email</span>
            </div>
            <div class="input-container">
              <input type="tel" name="phone" class="input" />
              <label for="">Phone</label>
              <span>Phone</span>
            </div>
            <div class="input-container textarea">
              <textarea name="message" class="input"></textarea>
              <label for="">Message</label>
              <span>Message</span>
            </div>
            <input type="submit" value="Send" class="btn" />
          </form>
        </div>
      </div>
    </div>

    <script src="script.js"></script>

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
                            <a class="nav-link" href="faq.php">faq</a>
                        </li>
                        <li class="nav-item contact">
                            <a class="nav-link " href="contact.php">contact us</a>
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
    <script src="js/contact.js"></script>
</body>

</html>