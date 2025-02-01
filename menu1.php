<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coffee</title>

    <!-- SWIPER -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- Font Awesome CDN Link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- Custom CSS File Link  -->
    <link rel="stylesheet" href="css/style.css">
    <style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
      nav{
    background: #0082e6;
    height: 80px;
    width: 100%;
  }
  table {
        border-collapse: collapse;
        width: 100%;
        margin: 0.5rem;
    }
    th, td {
        border: 1px solid black;
        padding: 15px;
        text-align: left;
    }
    th {
        background-color: #f2f2f2;
    }
    tr:nth-child(even) {
        background-color: #f2f2f2;
    }
    .center {
        text-align: center;
    }
    .remove-icon {
        width: 20px;
        height: 20px;
        cursor: pointer;
    }
    label.logo{
    color: white;
    font-size: 35px;
    line-height: 80px;
    padding: 0 100px;
    font-weight: bold;
  }
  nav ul{
    float: right;
    margin-right: 20px;
  }
  nav ul li{
    display: inline-block;
    line-height: 80px;
    margin: 0 5px;
  }
  nav ul li a{
    color: white;
    font-size: 17px;
    padding: 7px 13px;
    border-radius: 3px;
    text-transform: uppercase;
  }
</style>

</head>

<body>

    <!-- HEADER -->
    <nav>
      <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
      </label>
      <label class="logo">CS Cafetetria</label>
      <ul>
        <li>
        <a href="admindetails.php">Dashboard</a>
          <a href="employee.php">Employee</a>
          <a href="reserve.php">Reservation</a>
          <a href="display.php">User</a>
          <a href="menu1.php">Menu</a>
          <a href="display.php">Order Details</a>
          <a href="logout.php"><input type="submit" name="" value="Logout" style="background: red;
    color: white;
    height: 35px;
    width: 100px;
    margin: 0px;
    font-size: 18px;
    border: 0;
    border-radius: 5px;
    cursor: pointer;"></a>
       </li>
      </ul>
    </nav>

    <!-- HOME -->
    <!-- <section class="home" id="home">
        <div class="row">
            <div class="content">
                <h3>Welcome to CS Cafetetria</h3> -->
                <!-- <h3>For Reservation Please Login</h3> -->
                <!-- <a href="#book" class="btn">buy now</a> -->
            <!-- </div>

            <div class="image">
                <img src="image/home-img-1.png" class="main-home-image" alt="">
            </div>
        </div>

        <div class="image-slider">
            <img src="image/home-img-1.png" alt="">
            <img src="image/home-img-2.png" alt="">
            <img src="image/home-img-3.png" alt="">
        </div>
    </section> -->

    
    <!-- <section class="section section-divider gray about" id="about1">
        <div class="container"> -->

          <!-- <div class="about-banner">
            <img src="images/about-banner.png" width="509" height="459" loading="lazy" alt="Burger with Drinks"
              class="w-100 about-img">

            <img src="images/sale-shape-red.png" width="216" height="226" alt="get up to 50% off now"
              class="abs-img scale-up-anim">
          </div> -->

          <!-- <div class="about-content">

            <h2 class="h2 section-title">
              Caferio, Burgers, and Best Pizzas
              <span class="span">in Town!</span>
            </h2>

            <p class="section-text">
              The restaurants in Hangzhou also catered to many northern Chinese who had fled south from Kaifeng during
              the Jurchen
              invasion of the 1120s, while it is also known that many restaurants were run by families.
            </p>

            <ul class="about-list">

              <li class="about-item">
                <ion-icon name="checkmark-outline"></ion-icon>

                <span class="span">Delicious & Healthy Foods</span>
              </li>

              <li class="about-item">
                <ion-icon name="checkmark-outline"></ion-icon>

                <span class="span">Spacific Family And Kids Zone</span>
              </li>

              <li class="about-item">
                <ion-icon name="checkmark-outline"></ion-icon>

                <span class="span">Music & Other Facilities</span>
              </li>

              <li class="about-item">
                <ion-icon name="checkmark-outline"></ion-icon>

                <span class="span">Fastest Food Home Delivery</span>
              </li>

            </ul> -->

            <!-- <button class="btn btn-hover"  a href="#book" class="btn" >Order Now</a></button> -->

          <!-- </div>

        </div>
      </section> -->





      <!-- 
        - #FOOD MENU
      -->

      <section class="section food-menu" id="food-menu">
        <div class="container">

          <p class="section-subtitle">Menu</p>

          <h2 class="h2 section-title">
            Our Delicious <span class="span">Foods</span>
          </h2>

          <p class="section-text">
            Food is any substance consumed to provide nutritional support for an organism.
          </p>

          <!-- <ul class="fiter-list">

            <li>
              <button class="filter-btn  active">All</button>
            </li>

            <li>
              <button class="filter-btn">Pizza</button>
            </li>

            <li>
              <button class="filter-btn">Burger</button>
            </li>

            <li>
              <button class="filter-btn">Drinks</button>
            </li>

            <li>
              <button class="filter-btn">Sandwich</button>
            </li>

          </ul> -->

          <ul class="food-menu-list">

            <li>
              <div class="food-menu-card">

                <div class="card-banner">
                  <img src="images/booba.png" width="300" height="300" loading="lazy"
                    alt="Cold Coffee" class="w-100">

                  <div class="badge">-15%</div>

                  <button class="btn food-menu-btn">Order Now</button>
                </div>

                <div class="wrapper">
                  <p class="category"></p>

                  <div class="rating-wrapper">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div>
                </div>

                <h3 class="h3 card-title">Cold Coffee</h3>

                <div class="price-wrapper">

                  <p class="price-text">Price:</p>

                  <data class="price"> RS 49.00</data>

                  <del class="del" value="69.00"> RS 69.00</del>

                </div>

              </div>
            </li>

            <li>
              <div class="food-menu-card">

                <div class="card-banner">
                  <img src="images/ham1.png" width="300" height="300" loading="lazy"
                    alt="Burger King Whopper" class="w-100">

                  <div class="badge">-10%</div>

                  <button class="btn food-menu-btn" >Order Now</button>
                </div>

                <div class="wrapper">
                  <p class="category"></p>

                  <div class="rating-wrapper">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div>
                </div>
                    <br><br>
                <h3 class="h3 card-title">HamBurger </h3>

                <div class="price-wrapper">

                  <p class="price-text">Price:</p>

                  <data class="price" value="29.00">RS 129.00</data>

                  <del class="del">RS 239.00</del>

                </div>

              </div>
            </li>

            <li>
              <div class="food-menu-card">

                <div class="card-banner">
                  <img src="images/pizza.png" width="300" height="300" loading="lazy"
                    alt="White Castle Pizzas" class="w-100">

                  <div class="badge">-25%</div>
                  
                  <button class="btn food-menu-btn">Order Now</button>
                </div>

                <div class="wrapper">
                  <p class="category">Pizzas</p>

                  <div class="rating-wrapper">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div>
                </div>

                <h3 class="h3 card-title">White Castle Pizzas</h3>

                <div class="price-wrapper">

                  <p class="price-text">Price:</p>

                  <data class="price" value="49.00"> RS 149.00</data>

                  <del class="del">rs 269.00</del>

                </div>

              </div>
            </li>

            <li>
              <div class="food-menu-card">

                <div class="card-banner">
                  <img src="images/Toastsandwhichg.png" width="300" height="300" loading="lazy"
                    alt="Bell Burrito Supreme" class="w-100">

                  <div class="badge">-20%</div>

                  <button class="btn food-menu-btn">Order Now</button>
                </div>

                <div class="wrapper">
                  <p class="category">Sandwhichess</p>

                  <div class="rating-wrapper">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div>
                </div>

                <h3 class="h3 card-title">Toast Sandwiches</h3>

                <div class="price-wrapper">

                  <p class="price-text">Price:</p>

                  <data class="price" value="59.00 ">Rs 59.00</data>

                  <del class="del">RS 69.00</del>

                </div>

              </div>
            </li>

            <li>
              <div class="food-menu-card">

                <div class="card-banner">
                  <img src="images/irani.png" width="300" height="300" loading="lazy"
                    alt="Kung Pao Chicken BBQ" class="w-100">

                  <div class="badge">-5%</div>

                  <button class="btn food-menu-btn">Order Now</button>
                </div>

                <div class="wrapper">
                  <p class="category">Tea</p>

                  <div class="rating-wrapper">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div>
                </div>

                <h3 class="h3 card-title">Irani Tea</h3>

                <div class="price-wrapper">

                  <p class="price-text">Price:</p>

                  <data class="price" value="49.00">$49.00</data>

                  <del class="del">$69.00</del>

                </div>

              </div>
            </li>


            

            <li>
              <div class="food-menu-card">

                <div class="card-banner">
                  <img src="images/muffins.png" width="300" height="300" loading="lazy"
                    alt="Wendy's Chicken" class="w-100">

                  <div class="badge">-15%</div>

                  <button class="btn food-menu-btn">Order Now</button>
                </div>

                <div class="wrapper">
                  <p class="category">Cake</p>

                  <div class="rating-wrapper">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div>
                </div>

                <h3 class="h3 card-title">Muffins</h3>

                <div class="price-wrapper">

                  <p class="price-text">Price:</p>

                  <data class="price" value="49.00">$49.00</data>

                  <del class="del">$69.00</del>

                </div>

              </div>
            </li>

            <li>
              <div class="food-menu-card">

                <div class="card-banner">
                  <img src="image/bread.png" width="300" height="300" loading="lazy"
                    alt="Burger King Whopper" class="w-100">

                  <div class="badge">-10%</div>

                  <button class="btn food-menu-btn">Order Now</button>
                </div>

                <div class="wrapper">
                  <p class="category"></p>

                  <div class="rating-wrapper">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div>
                </div>
                    <br><br>
                <h3 class="h3 card-title">Breads </h3>

                <div class="price-wrapper">

                  <p class="price-text">Price:</p>

                  <data class="price" value="29.00">RS 129.00</data>

                  <del class="del">RS 239.00</del>

                </div>

              </div>
            </li>

            <li>
              <div class="food-menu-card">

                <div class="card-banner">
                  <img src="image/cookies.png" width="300" height="300" loading="lazy"
                    alt="Burger King Whopper" class="w-100">

                  <div class="badge">-10%</div>

                  <button class="btn food-menu-btn">Order Now</button>
                </div>

                <div class="wrapper">
                  <p class="category"></p>

                  <div class="rating-wrapper">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div>
                </div>
                    <br><br>
                <h3 class="h3 card-title">Cookies</h3>

                <div class="price-wrapper">

                  <p class="price-text">Price:</p>

                  <data class="price" value="29.00">RS 129.00</data>

                  <del class="del">RS 239.00</del>

                </div>

              </div>
            </li>


            <li>
              <div class="food-menu-card">

                <div class="card-banner">
                  <img src="image/donuts.png" width="300" height="300" loading="lazy"
                    alt="Burger King Whopper" class="w-100">

                  <div class="badge">-10%</div>

                  <button class="btn food-menu-btn">Order Now</button>
                </div>

                <div class="wrapper">
                  <p class="category"></p>

                  <div class="rating-wrapper">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div>
                </div>
                    <br><br>
                <h3 class="h3 card-title">Donuts </h3>

                <div class="price-wrapper">

                  <p class="price-text">Price:</p>

                  <data class="price" value="29.00">RS 129.00</data>

                  <del class="del">RS 239.00</del>

                </div>

              </div>
            </li>


            <li>
              <div class="food-menu-card">

                <div class="card-banner">
                  <img src="image/juices.png" width="300" height="300" loading="lazy"
                    alt="Burger King Whopper" class="w-100">

                  <div class="badge">-10%</div>

                  <button class="btn food-menu-btn">Order Now</button>
                </div>

                <div class="wrapper">
                  <p class="category"></p>

                  <div class="rating-wrapper">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div>
                </div>
                    <br><br>
                <h3 class="h3 card-title">Juices </h3>

                <div class="price-wrapper">

                  <p class="price-text">Price:</p>

                  <data class="price" value="29.00">RS 129.00</data>

                  <del class="del">RS 239.00</del>

                </div>

              </div>
            </li>


            <li>
              <div class="food-menu-card">

                <div class="card-banner">
                  <img src="image/fries.png" width="300" height="300" loading="lazy"
                    alt="Burger King Whopper" class="w-100">

                  <div class="badge">-10%</div>

                  <button class="btn food-menu-btn">Order Now</button>
                </div>

                <div class="wrapper">
                  <p class="category"></p>

                  <div class="rating-wrapper">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div>
                </div>
                    <br><br>
                <h3 class="h3 card-title">Fries </h3>

                <div class="price-wrapper">

                  <p class="price-text">Price:</p>

                  <data class="price" value="29.00">RS 129.00</data>

                  <del class="del">RS 239.00</del>

                </div>

              </div>
            </li>


            <li>
              <div class="food-menu-card">

                <div class="card-banner">
                  <img src="image/salad.png" width="300" height="300" loading="lazy"
                    alt="Burger King Whopper" class="w-100">

                  <div class="badge">-10%</div>

                  <button class="btn food-menu-btn">Order Now</button>
                </div>

                <div class="wrapper">
                  <p class="category"></p>

                  <div class="rating-wrapper">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div>
                </div>
                    <br><br>
                <h3 class="h3 card-title">Salad </h3>

                <div class="price-wrapper">

                  <p class="price-text">Price:</p>

                  <data class="price" value="29.00">RS 129.00</data>

                  <del class="del">RS 239.00</del>

                </div>

              </div>
            </li>


            <li>
              <div class="food-menu-card">

                <div class="card-banner">
                  <img src="image/pancakes.png" width="300" height="300" loading="lazy"
                    alt="Burger King Whopper" class="w-100">

                  <div class="badge">-10%</div>

                  <button class="btn food-menu-btn">Order Now</button>
                </div>

                <div class="wrapper">
                  <p class="category"></p>

                  <div class="rating-wrapper">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div>
                </div>
                    <br><br>
                <h3 class="h3 card-title">Pancakes </h3>

                <div class="price-wrapper">

                  <p class="price-text">Price:</p>

                  <data class="price" value="29.00">RS 129.00</data>

                  <del class="del">RS 239.00</del>

                </div>

              </div>
            </li>

            <li>
              <div class="food-menu-card">

                <div class="card-banner">
                  <img src="image/soups.png" width="300" height="300" loading="lazy"
                    alt="Burger King Whopper" class="w-100">

                  <div class="badge">-10%</div>

                  <button class="btn food-menu-btn">Order Now</button>
                </div>

                <div class="wrapper">
                  <p class="category"></p>

                  <div class="rating-wrapper">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div>
                </div>
                    <br><br>
                <h3 class="h3 card-title">Soups </h3>

                <div class="price-wrapper">

                  <p class="price-text">Price:</p>

                  <data class="price" value="29.00">RS 129.00</data><br>

                  <del class="del">RS 239.00</del>

                </div>

              </div>
            </li>

            <li>
              <div class="food-menu-card">

                <div class="card-banner">
                  <img src="image/icecream.png" width="300" height="300" loading="lazy"
                    alt="Burger King Whopper" class="w-100">

                  <div class="badge">-10%</div>

                  <button class="btn food-menu-btn">Order Now</button>
                </div>

                <div class="wrapper">
                  <p class="category"></p>

                  <div class="rating-wrapper">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div>
                </div>
                    <br><br>
                <h3 class="h3 card-title">Ice Creams </h3>

                <div class="price-wrapper">

                  <p class="price-text">Price:</p>

                  <data class="price" value="29.00">RS 129.00</data>

                  <del class="del">RS 239.00</del>

                </div>

              </div>
            </li>

            <li>
              <div class="food-menu-card">

                <div class="card-banner">
                  <img src="image/samosa.png" width="300" height="300" loading="lazy"
                    alt="Burger King Whopper" class="w-100">

                  <div class="badge">-10%</div>

                  <button class="btn food-menu-btn">Order Now</button>
                </div>

                <div class="wrapper">
                  <p class="category"></p>

                  <div class="rating-wrapper">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div>
                </div>
                    <br><br>
                <h3 class="h3 card-title">Samosa </h3>

                <div class="price-wrapper">

                  <p class="price-text">Price:</p>

                  <data class="price" value="29.00">RS 129.00</data>

                  <del class="del">RS 239.00</del>

                </div>

              </div>
            </li>

            <li>
              <div class="food-menu-card">

                <div class="card-banner">
                  <img src="image/noodles.png" width="300" height="300" loading="lazy"
                    alt="Burger King Whopper" class="w-100">

                  <div class="badge">-10%</div>

                  <button class="btn food-menu-btn">Order Now</button>
                </div>

                <div class="wrapper">
                  <p class="category"></p>

                  <div class="rating-wrapper">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div>
                </div>
                    <br><br>
                <h3 class="h3 card-title">Noodles </h3>

                <div class="price-wrapper">

                  <p class="price-text">Price:</p>

                  <data class="price" value="29.00">RS 129.00</data>

                  <del class="del">RS 239.00</del>

                </div>

              </div>
            </li>

            <li>
              <div class="food-menu-card">

                <div class="card-banner">
                  <img src="image/cakes.png" width="300" height="300" loading="lazy"
                    alt="Burger King Whopper" class="w-100">

                  <div class="badge">-10%</div>

                  <button class="btn food-menu-btn">Order Now</button>
                </div>

                <div class="wrapper">
                  <p class="category"></p>

                  <div class="rating-wrapper">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div>
                </div>
                    <br><br>
                <h3 class="h3 card-title">Cakes </h3>

                <div class="price-wrapper">

                  <p class="price-text">Price:</p>

                  <data class="price" value="29.00">RS 129.00</data>

                  <del class="del">RS 239.00</del>

                </div>

              </div>
            </li>
            <br>
            <h1>We Have Much More, Please Visit Us </h1>

            

          </ul>


        </div>
      </section>





      <!-- 
        - #CTA
      -->

      <!-- <section class="section section-divider white cta" style="background-image: url('./assets/images/hero-bg.jpg')">
        <div class="container">

          <div class="cta-content">

            <h2 class="h2 section-title">
              The Foodie Have Excellent Of
              <span class="span">Quality Burgers!</span>
            </h2>

            <p class="section-text">
              The restaurants in Hangzhou also catered to many northern Chinese who had fled south from Kaifeng during
              the Jurchen
              invasion of the 1120s, while it is also known that many restaurants were run by families.
            </p>

            <button class="btn btn-hover">Order Now</button>
          </div>

          <figure class="cta-banner">
            <img src="./assets/images/cta-banner.png" width="700" height="637" loading="lazy" alt="Burger"
              class="w-100 cta-img">

            <img src="./assets/images/sale-shape.png" width="216" height="226" loading="lazy"
              alt="get up to 50% off now" class="abs-img scale-up-anim">
          </figure>

        </div>
      </section> -->





      <!-- 
        - #DELIVERY
      -->

      <!-- <section class="section section-divider gray delivery">
        <div class="container">

          <div class="delivery-content">

            <h2 class="h2 section-title">
              A Moments Of Delivered On <span class="span">Right Time</span> & Place
            </h2>

            <p class="section-text">
              The restaurants in Hangzhou also catered to many northern Chinese who had fled south from Kaifeng during
              the Jurchen
              invasion of the 1120s, while it is also known that many restaurants were run by families.
            </p>

            <button class="btn btn-hover">Order Now</button>
          </div>

          <figure class="delivery-banner">
            <img src="./assets/images/delivery-banner-bg.png" width="700" height="602" loading="lazy" alt="clouds"
              class="w-100">

            <img src="./assets/images/delivery-boy.svg" width="1000" height="880" loading="lazy" alt="delivery boy"
              class="w-100 delivery-img" data-delivery-boy>
          </figure>

        </div>
      </section> -->





      <!-- 
        - #TESTIMONIALS
      -->

      <!-- <section class="section section-divider white testi">
        <div class="container">

          <p class="section-subtitle">Testimonials</p>

          <h2 class="h2 section-title">
            Our Customers <span class="span">Reviews</span>
          </h2>

          <p class="section-text">
            Food is any substance consumed to provide nutritional
            support for an organism.
          </p>

          <ul class="testi-list has-scrollbar">

            <li class="testi-item">
              <div class="testi-card">

                <div class="profile-wrapper">

                  <figure class="avatar">
                    <img src="./assets/images/avatar-1.jpg" width="80" height="80" loading="lazy" alt="Robert William">
                  </figure>

                  <div>
                    <h3 class="h4 testi-name">Robert William</h3>

                    <p class="testi-title">CEO Kingfisher</p>
                  </div>

                </div>

                <blockquote class="testi-text">
                  "I would be lost without restaurant. I would like to personally thank you for your outstanding
                  product."
                </blockquote>

                <div class="rating-wrapper">
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                </div>

              </div>
            </li>

            <li class="testi-item">
              <div class="testi-card">

                <div class="profile-wrapper">

                  <figure class="avatar">
                    <img src="./assets/images/avatar-2.jpg" width="80" height="80" loading="lazy" alt="Thomas Josef">
                  </figure>

                  <div>
                    <h3 class="h4 testi-name">Thomas Josef</h3>

                    <p class="testi-title">CEO Getforce</p>
                  </div>

                </div>

                <blockquote class="testi-text">
                  "I would be lost without restaurant. I would like to personally thank you for your outstanding
                  product."
                </blockquote>

                <div class="rating-wrapper">
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                </div>

              </div>
            </li>

            <li class="testi-item">
              <div class="testi-card">

                <div class="profile-wrapper">

                  <figure class="avatar">
                    <img src="./assets/images/avatar-3.jpg" width="80" height="80" loading="lazy" alt="Charles Richard">
                  </figure>

                  <div>
                    <h3 class="h4 testi-name">Charles Richard</h3>

                    <p class="testi-title">CEO Angela</p>
                  </div>

                </div>

                <blockquote class="testi-text">
                  "I would be lost without restaurant. I would like to personally thank you for your outstanding
                  product."
                </blockquote>

                <div class="rating-wrapper">
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                </div>

              </div>
            </li>

          </ul>

        </div>
      </section> -->






      <!-- 
        - #BANNER
      -->

      <!-- <section class="section section-divider gray banner">
        <div class="container">

          <ul class="banner-list">

            <li class="banner-item banner-lg">
              <div class="banner-card">

                <img src="./assets/images/banner-1.jpg" width="550" height="450" loading="lazy"
                  alt="Discount For Delicious Tasty Burgers!" class="banner-img">

                <div class="banner-item-content">
                  <p class="banner-subtitle">50% Off Now!</p>

                  <h3 class="banner-title">Discount For Delicious Tasty Burgers!</h3>

                  <p class="banner-text">Sale off 50% only this week</p>

                  <button class="btn">Order Now</button>
                </div>

              </div>
            </li>

            <li class="banner-item banner-sm">
              <div class="banner-card">

                <img src="./assets/images/banner-2.jpg" width="550" height="465" loading="lazy" alt="Delicious Pizza"
                  class="banner-img">

                <div class="banner-item-content">
                  <h3 class="banner-title">Delicious Pizza</h3>

                  <p class="banner-text">50% off Now</p>

                  <button class="btn">Order Now</button>
                </div>

              </div>
            </li>

            <li class="banner-item banner-sm">
              <div class="banner-card">

                <img src="./assets/images/banner-3.jpg" width="550" height="465" loading="lazy" alt="American Burgers"
                  class="banner-img">

                <div class="banner-item-content">
                  <h3 class="banner-title">American Burgers</h3>

                  <p class="banner-text">50% off Now</p>

                  <button class="btn">Order Now</button>
                </div>

              </div>
            </li>

            <li class="banner-item banner-md">
              <div class="banner-card">

                <img src="./assets/images/banner-4.jpg" width="550" height="220" loading="lazy" alt="Tasty Buzzed Pizza"
                  class="banner-img">

                <div class="banner-item-content">
                  <h3 class="banner-title">Tasty Buzzed Pizza</h3>

                  <p class="banner-text">Sale off 50% only this week</p>

                  <button class="btn">Order Now</button>
                </div>

              </div>
            </li>

          </ul>

        </div>
      </section> -->





      <!-- 
        - #BLOG
      -->

      <!-- <section class="section section-divider white blog" id="blog">
        <div class="container">

          <p class="section-subtitle">Latest Blog Posts</p>

          <h2 class="h2 section-title">
            This Is All About <span class="span">Foods</span>
          </h2>

          <p class="section-text">
            Food is any substance consumed to provide nutritional support for an organism.
          </p>

          <ul class="blog-list">

            <li>
              <div class="blog-card">

                <div class="card-banner">
                  <img src="./assets/images/blog-1.jpg" width="600" height="390" loading="lazy"
                    alt="What Do You Think About Cheese Pizza Recipes?" class="w-100">

                  <div class="badge">Pizza</div>
                </div>

                <div class="card-content">

                  <div class="card-meta-wrapper">

                    <a href="#" class="card-meta-link">
                      <ion-icon name="calendar-outline"></ion-icon>

                      <time class="meta-info" datetime="2022-01-01">Jan 01 2022</time>
                    </a>

                    <a href="#" class="card-meta-link">
                      <ion-icon name="person-outline"></ion-icon>

                      <p class="meta-info">Jonathan Smith</p>
                    </a>

                  </div>

                  <h3 class="h3">
                    <a href="#" class="card-title">What Do You Think About Cheese Pizza Recipes?</a>
                  </h3>

                  <p class="card-text">
                    Financial experts support or help you to to find out which way you can raise your funds more...
                  </p>

                  <a href="#" class="btn-link">
                    <span>Read More</span>

                    <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                  </a>

                </div>

              </div>
            </li>

            <li>
              <div class="blog-card">

                <div class="card-banner">
                  <img src="./assets/images/blog-2.jpg" width="600" height="390" loading="lazy"
                    alt="Making Chicken Strips With New Delicious Ingridents." class="w-100">

                  <div class="badge">Burger</div>
                </div>

                <div class="card-content">

                  <div class="card-meta-wrapper">

                    <a href="#" class="card-meta-link">
                      <ion-icon name="calendar-outline"></ion-icon>

                      <time class="meta-info" datetime="2022-01-01">Jan 01 2022</time>
                    </a>

                    <a href="#" class="card-meta-link">
                      <ion-icon name="person-outline"></ion-icon>

                      <p class="meta-info">Jonathan Smith</p>
                    </a>

                  </div>

                  <h3 class="h3">
                    <a href="#" class="card-title">Making Chicken Strips With New Delicious Ingridents.</a>
                  </h3>

                  <p class="card-text">
                    Financial experts support or help you to to find out which way you can raise your funds more...
                  </p>

                  <a href="#" class="btn-link">
                    <span>Read More</span>

                    <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                  </a>

                </div>

              </div>
            </li>

            <li>
              <div class="blog-card">

                <div class="card-banner">
                  <img src="./assets/images/blog-3.jpg" width="600" height="390" loading="lazy"
                    alt="Innovative Hot Chessyraw Pasta Make Creator Fact." class="w-100">

                  <div class="badge">Chicken</div>
                </div>

                <div class="card-content">

                  <div class="card-meta-wrapper">

                    <a href="#" class="card-meta-link">
                      <ion-icon name="calendar-outline"></ion-icon>

                      <time class="meta-info" datetime="2022-01-01">Jan 01 2022</time>
                    </a>

                    <a href="#" class="card-meta-link">
                      <ion-icon name="person-outline"></ion-icon>

                      <p class="meta-info">Jonathan Smith</p>
                    </a>

                  </div>

                  <h3 class="h3">
                    <a href="#" class="card-title">Innovative Hot Chessyraw Pasta Make Creator Fact.</a>
                  </h3>

                  <p class="card-text">
                    Financial experts support or help you to to find out which way you can raise your funds more...
                  </p>

                  <a href="#" class="btn-link">
                    <span>Read More</span>

                    <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                  </a>

                </div>

              </div>
            </li>

          </ul>

        </div>
      </section> -->





    <!-- </article>
  </main> -->
    <!-- ABOUT -->
    <!-- <section class="about" id="about">
        <h1 class="heading">about us <span>why choose us</span></h1>

        <div class="row">
            <div class="image">
                <img src="image/about-img.png" alt="">
            </div>

            <div class="content">
                <h3 class="title">what's make our coffee special!</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel rerum laboriosam reprehenderit ipsa id
                    repellat odio illum, voluptas, necessitatibus assumenda adipisci. Hic, maiores iste? Excepturi illo
                    dolore mollitia qui quia.</p>
                <a href="#" class="btn">read more</a>
                <div class="icons-container">
                    <div class="icons">
                        <img src="image/about-icon-1.png" alt="">
                        <h3>quality coffee</h3>
                    </div>
                    <div class="icons">
                        <img src="image/about-icon-2.png" alt="">
                        <h3>our branches</h3>
                    </div>
                    <div class="icons">
                        <img src="image/about-icon-3.png" alt="">
                        <h3>free delivery</h3>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- MENU -->
    <!-- <section class="menu" id="menu">
        <h1 class="heading">our menu <span>popular menu</span></h1>

        <div class="box-container">
            <a href="#" class="box">
                <img src="image/menu-1.png" alt="">
                <div class="content">
                    <h3>our special coffee</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tenetur, sed.</p>
                    <span>$8.99</span>
                </div>
            </a>

            <a href="#" class="box">
                <img src="image/menu-2.png" alt="">
                <div class="content">
                    <h3>our special coffee</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vel, fugit.</p>
                    <span>$8.99</span>
                </div>
            </a>

            <a href="#" class="box">
                <img src="image/menu-3.png" alt="">
                <div class="content">
                    <h3>our special coffee</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus, recusandae.</p>
                    <span>$8.99</span>
                </div>
            </a>

            <a href="#" class="box">
                <img src="image/menu-4.png" alt="">
                <div class="content">
                    <h3>our special coffee</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse, quas.</p>
                    <span>$8.99</span>
                </div>
            </a>

            <a href="#" class="box">
                <img src="image/menu-5.png" alt="">
                <div class="content">
                    <h3>our special coffee</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia, vitae.</p>
                    <span>$8.99</span>
                </div>
            </a>

            <a href="#" class="box">
                <img src="image/menu-6.png" alt="">
                <div class="content">
                    <h3>our special coffee</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Unde, expedita!</p>
                    <span>$8.99</span>
                </div>
            </a>
        </div>
    </section> -->

    <!-- REVIEW -->
    <!-- <section class="review" id="review">
        <h1 class="heading">reviews <span>what people says</span></h1>

        <div class="swiper review-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide box">
                    <i class="fas fa-quote-left"></i>
                    <i class="fas fa-quote-right"></i>
                    <img src="image/pic-1.png" alt="">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo, earum quis dolorem quaerat tenetur
                        illum.</p>
                    <h3>john deo</h3>
                    <span>satisfied client</span>
                </div>

                <div class="swiper-slide box">
                    <i class="fas fa-quote-left"></i>
                    <i class="fas fa-quote-right"></i>
                    <img src="image/pic-2.png" alt="">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum optio quasi ut, illo ipsam
                        assumenda.</p>
                    <h3>john deo</h3>
                    <span>satisfied client</span>
                </div>

                <div class="swiper-slide box">
                    <i class="fas fa-quote-left"></i>
                    <i class="fas fa-quote-right"></i>
                    <img src="image/pic-3.png" alt="">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius asperiores aliquam hic quis!
                        Eligendi, aliquam.</p>
                    <h3>john deo</h3>
                    <span>satisfied client</span>
                </div>

                <div class="swiper-slide box">
                    <i class="fas fa-quote-left"></i>
                    <i class="fas fa-quote-right"></i>
                    <img src="image/pic-4.png" alt="">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi modi perspiciatis distinctio
                        velit aliquid a.</p>
                    <h3>john deo</h3>
                    <span>satisfied client</span>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section> -->

    <!-- BOOK -->
    <!-- <section class="book" id="book">
        <h1 class="heading">booking <span>reserve a table</span></h1>

        <form action="" method="post" autocomplete="off">
            <input type="text" placeholder="Name" name="uname" required class="box">
            <input type="email" placeholder="Email" name="email" required class="box">
            <input type="number" placeholder="Phone Number" name = "number" required class="box"> -->
            <!-- <textarea name="" placeholder="Message" class="box" id="" cols="30" rows="10"></textarea> -->
            <!-- <input type="number" id="adult" name="person" placeholder="Number of Person" class="box" min="1" required>
            <input type="date" id="checkin-date" name="date" placeholder="Date" required class="box">
            <input type="time" id="checkin-date" name="time" placeholder="Time" required class="box">
            <button type="submit" name= "reserve"class="btn">Reserve</button> -->
            <!-- <input type="submit" value="send message" class="btn"> -->
            
            
        </form>
    </section>

    <!-- FOOTER -->
    <section class="footer">
        <div class="box-container">
            <div class="box">
                <h3>our branches</h3>
                <a href="#"><i class="fas fa-arrow-right"></i> india</a>
                <!-- <a href="#"><i class="fas fa-arrow-right"></i> USA</a>
                <a href="#"><i class="fas fa-arrow-right"></i> france</a>
                <a href="#"><i class="fas fa-arrow-right"></i> africa</a>
                <a href="#"><i class="fas fa-arrow-right"></i> japan</a> -->
            </div>

            <div class="box">
                <h3>quick links</h3>
                <a href="index2.php"><i class="fas fa-arrow-right"></i> home</a>
                <a href="index2.php"><i class="fas fa-arrow-right"></i> about</a>
                <a href="menu.php"><i class="fas fa-arrow-right"></i> menu</a>
                <a href="index2.php"><i class="fas fa-arrow-right"></i> review</a>
                <a href="index2.php"><i class="fas fa-arrow-right"></i> book</a>
            </div>

            <div class="box">
                <h3>contact info</h3>
                <a href="#"><i class="fas fa-phone"></i> +123-456-7890</a>
                <a href="#"><i class="fas fa-phone"></i> +111-222-3333</a>
                <a href="#"><i class="fas fa-envelope"></i> cscafeteria@gmail.com</a>
                <a href="#"><i class="fas fa-envelope"></i> Ghatkopar, Mumbai </a>
            </div>

            <div class="box">
                <h3>contact info</h3>
                <a href="#"><i class="fab fa-facebook-f"></i> facebook</a>
                <a href="#"><i class="fab fa-twitter"></i> twitter</a>
                <a href="#"><i class="fab fa-instagram"></i> instagram</a>
                <a href="#"><i class="fab fa-linkedin"></i> linkedin</a>
                <a href="#"><i class="fab fa-twitter"></i> twitter</a>
            </div>
        </div>

        <!-- <div class="credit">created by <span>mr. web designer</span> | all rights reserved</div> -->
    </section>













    <!-- SWIPER -->
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <!-- Custom JS File Link  -->
    <script src="js/script.js"></script>

    <script>
      function click(){
        window.location.href="register.php";
      }

      function reserve(){
        window.location.href="adminlogin.php";
      }
    </script>


</body>
</html>

<?php

    include("connection.php"); 

        if(isset($_POST['reserve']))
    {
              $uname=$_POST['uname'];
              $email=$_POST['email'];
              $number=$_POST['number'];
              $person=$_POST['person'];
              $date=$_POST['date'];
              $time=$_POST['time'];
    

              $query= "INSERT INTO reserve VALUES('$uname','$email','$number','$person','$date','$time')";
              $data=mysqli_query($conn,$query);

    if($data)
         {
                header("location:login.php");
                    // echo "Data Inserted";
        }
                else
        {
                echo "Data Not inserted";
    }
}

?>