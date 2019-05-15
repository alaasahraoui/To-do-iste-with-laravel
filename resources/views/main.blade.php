<html lang="en">

<head>
  <title>EGYPTE GYM</title>
  <link href='\css\styles.css' rel='stylesheet'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
 
<body>
     @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
  <header class="header">
    <div class="header__static">
      <div class="content-container">
        <div class="static-header__hours">Open 24/7</div>
        <div class="static-header__links">
          <ul class="header_social">
              <li><a href="http://facebook.com/"><i class="fa fa-facebook"></i></a></li>
              <li><a href="http://instagram.com/"><i class="fa fa-instagram"></i></a></li>
              <li><a href="http://twitter.com/"><i class="fa fa-twitter"></i></a></li>
              <li><a href="http://twitter.com/"><i class="fa fa-envelope-o"></i></a></li>
          </ul>
        </div>
      </div>
    </div>

    <nav class="header__nav">
      <div class="content-container">
        <div class="nav-header__name">
          <a class="header-nav header-nav__link-name">
            EGYPTE GYM
          </a>
        </div>
        <div class="nav-header__nav">
            <span class="dropdown">
                <button class="header-nav header-nav__link">LOCATIONS</button>
                <div class="dropdown-content">
                  <a href="#">Link 1</a>
                  <a href="#">Link 2</a>
                  <a href="#">Link 3</a>
                </div>
              </span>
              @if (Route::has('login'))
                     @auth
                     <button class="header-nav header-nav__link"> <a href="{{ url('/home') }}">Home</a></button>
                    @else
                      <button class="header-nav header-nav__link">    <a href="{{ route('login') }}">Login</a></button>

                        @if (Route::has('register'))
                      <button class="header-nav header-nav__link">       <a href="{{ route('register') }}">Register</a></button>
                        @endif
                    @endauth
            
           





              @endif
              <button class="header-nav header-nav__link">CONTACT</button>
        </div>
      </div>
    </nav>
    <div class="header__jumbotron">
      <div class="jumbotron__static-content">
        <figure class="jumbotron__logo">
          <img src="./images/tiger_iron_logo_1.svg">
        </figure>
        <figure class="jumbotron__content">
          <h2>WELCOME TO</h2>
          <h1>EGYPTE GYM</h1>
          <p>Lorem ipsum dolor sit amet, cu bonorum corrumpit urbanitas sed. Ei sit suas nostrud lobortis. Eirmod laboramus
            mea ex, eam prima consetetur ei. Has mentitum imperdiet ad, in virtute periculis consetetur duo. Eos ad molestiae
            interpretaris.
          </p>
        </figure>
      </div>
      <input id="slide-1-trigger" type="radio" name="slides" checked>
      <section class="slide slide-one"></section>
      <input id="slide-2-trigger" type="radio" name="slides">
      <section class="slide slide-two"></section>
      <input id="slide-3-trigger" type="radio" name="slides">
      <section class="slide slide-three"></section>
    </div>
  </header>
  <main class="main">
    <div class="content-container content-container-grid">
      <div class="container">
        <div class="grid-item item-a"></div>
        <div class="grid-item item-b">
          <div class="grid-item__drop-down">
            <h2>Locations</h2>
            <p>University Drive and Allen Ave</p>
          </div>
        </div>
        <div class="grid-item item-c">
          <div class="grid-item__drop-down">
            <h2>Hours</h2>
            <p>Open 24/7 at Both Locations</p>
          </div>
        </div>
        <div class="grid-item item-d">
          <div class="grid-item__drop-down">
            <h2>Local</h2>
            <p>Locally Owned and Operated</p>
          </div>
        </div>
        <div class="grid-item item-e"></div>
        <div class="grid-item item-f"></div>
        <div class="grid-item item-g"></div>
        <div class="grid-item item-h">
          <h2>Services</h2>
          <p>EGYPTE GYM offers several services to its members. Such services include: Personal Training, Nutritional Direction,
            Crossfit Classes, Cycling Classes and more. This coupled with world class ammenities makes EGYPTE GYM a perfect
            match for your fitness needs </p>
          </h2>
        </div>
        <div class="grid-item item-i"></div>
        <div class="grid-item item-j"></div>
        <div class="grid-item item-k"></div>
      </div>
    </div>
  </main>
  <footer class="footer">
    <nav class="footer__links">
      <div class="footer__topnav footer__topnav--a">
        <h2>CALL</h2>
        <p>(555) 555-555</p>

      </div>
      <div class="footer__topnav footer__topnav--b">
        <h2>JOIN</h2>
        <p>Join EGYPTE GYM Today</p>

      </div>
      <div class="footer__topnav footer__topnav--c">
        <h2>EMAIL</h2>
        <p>info@tigerirongym.com</p>

      </div>
    </nav>
    <div class="content-container">
      <div class="footer__info">
        <ul class="gym-info">
          <li>EGYPTE GYM</li>
          <li>405 College Ave</li>
          <li>Auburn, Al 36830</li>
          <li>334-555-5555</li>
        </ul>
        <ul class="other-info">
          <li>2 Convenient Locations</li>
          <li>Open 24 Hours A Day</li>
          <li>Locally Owned and Operated</li>
          <li>WAR EAGLE!</li>
        </ul>
        <ul class="womens-gym-info">
          <li>EGYPTE GYM Womens</li>
          <li>222 Other Road</li>
          <li>Auburn, Al 36830</li>
          <li>334-555-5555</li>
        </ul>

      </div>
      <nav class="footer__bottomnav">
        <ul>
          <li><a href="http://facebook.com/"><i class="fa fa-facebook"></i></a></li>
          <li><a href="http://instagram.com/"><i class="fa fa-instagram"></i></a></li>
          <li><a href="http://twitter.com/"><i class="fa fa-twitter"></i></a></li>
          <li><a href="http://twitter.com/"><i class="fa fa-envelope-o"></i></a></li>
        </ul>
      </nav>
  </footer>
  </div>

</body>

</html>