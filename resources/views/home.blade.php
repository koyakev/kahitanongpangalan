<!DOCTYPE html>

<html lang="en">

<head>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
    <script src="https://kit.fontawesome.com/d8383d1365.js" crossorigin="anonymous"></script>
    <title>iHateMondayPH</title>

  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body>
    <nav class="navbar navbar-expand-md">
        <img src="{{URL::asset('/images/logo.jpg')}}" class="logo"> 
        &nbsp;
        <a class="navbar-brand" href="body.html" >iHateMondayPH</a>
        <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#main-navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="main-navigation">
          <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="#">Vintage</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Mens</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Womens</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Unisex</a>
            </li>
          </ul>
        </div>
      </nav>
<header class="page-header header container-fluid">
	<img src="{{URL::asset('/images/yun.jpg')}}" width=100% style="position: relative">
    <div class="overlay"></div>
    
<div class="description">

  <h1>Welcome to Our Thrift Shop!</h1>

  <p>Our eclectic collection tells stories of days gone by, offering budget-friendly options for the fashion-savvy explorer. 
    Embrace the thrill of the hunt and the joy of sustainable style in our welcoming space where every item has a history and 
    every purchase is a chance to give pre-loved pieces a new chapter. Join us in redefining fashion as an ever-evolving, 
    eco-conscious adventure. Welcome to the charm of our thrift shop—where every piece has a story to tell.</p>

    <a href="aboutus.html">
    <button class="btn btn-outline-secondary btn-lg">Tell Me More!</button></a>
</div>
</header>

<div class="container features">

    <div class="row">
  
      <div class="col-lg-4 col-md-4 col-sm-12">
        <h3 class="feature-title">Vintage Vibes</h3>
        <img src="{{URL::asset('/images/thr.jpg')}}" class="img-fluid">
        <p class="caption">Step into a world of timeless elegance and nostalgia with vintage clothes vibes. 
          Each piece tells a story of a bygone era, weaving together threads of history, style, and individuality. 
          Embrace the charm of yesteryear as you explore a curated collection that captures the essence of decades past.</p>
      </div>
  
      <div class="col-lg-4 col-md-4 col-sm-12">
        <h3 class="feature-title">Rare Items</h3>
        <img src="{{URL::asset('/images/second.jpg')}}" class="img-fluid">
        <p class="caption">Elevate your wardrobe with clothing that not only reflects your personal style but also exudes 
          an air of sophistication and uniqueness. In a world saturated with mass-produced fashion, our rare items clothes 
          stand as a testament to the beauty of the extraordinary, offering you a chance to make a statement that is truly 
          one of a kind.</p>
      </div>

      <div class="col-lg-4 col-md-4 col-sm-12">     
        <h3 class="feature-title">Affordable Cops</h3>
        <img src="{{URL::asset('/images/pants.jpg')}}" class="img-fluid">
        <p class="caption">a journey of style without breaking the bank with our collection of affordable clothes. 
          Here, fashion meets budget-friendly choices, allowing you to curate a wardrobe that speaks to your unique 
          taste without compromising on quality. Explore a diverse range of trendy and timeless pieces that cater to 
          every style and occasion, proving that great fashion doesn't have to come with a hefty price tag.</p>
      </div>
    </div>
  </div>

  <footer class="page-footer">
    <div class="container">
  
      <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-12">
        <h6 class="text-uppercase font-weight-bold">SHOP NOW!</h6>
        <p>Discover unbeatable deals and unique treasures at our Thrift Shop! Our advertisement invites you to explore a world of affordable fashion, home goods, and hidden gems. </p>
        <p>Visit us today for a shopping experience that combines affordability with eco-consciousness, turning secondhand finds into first-class style.</p>
      </div>

      <div class="col-lg-4 col-md-4 col-sm-12">
        <h6 class="text-uppercase font-weight-bold">Contact</h6>
        <p>1640 Angono, Kape Hingahan
        <br/>info@gmail.com
        <br/>+ 01 234 567 88</p>
        <div class="social-icons">
          <a href="https://www.instagram.com/ihatemondayph/">
          <i class="fa-brands fa-instagram"></i>
          </a> 
        </div>
      </div>
    </div>
    <div class="footer-copyright text-center">© 2022 Copyright: EmViSHOP.com</div>
  
  </footer>
  
  </footer>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="min.js"></script>
</body>

</html>