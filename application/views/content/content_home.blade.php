@extends('baru')
@section('content')
<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:250px">

  <!-- Push down content on small screens -->
  <div class="w3-hide-large" style="margin-top:100px"></div>
  
  <!-- Top header -->
  <header class="w3-container w3-xlarge">
    <p class="w3-left">Menu Hari Ini</p>
    <p class="w3-right">
      <i class="fa fa-shopping-cart w3-margin-right"></i>
      <i class="fa fa-search"></i>
    </p>
  </header>

  <!-- Image header -->
  <!-- <div class="w3-display-container w3-container">
    <img src="{{base_url('/assets/images/as.png')}}" alt="Jeans" style="width:100%">
    <div class="w3-display-topleft w3-text-white" style="padding:24px 48px">
      <h1 class="w3-jumbo w3-hide-small">New arrivals</h1>
      <h1 class="w3-hide-large w3-hide-medium">New arrivals</h1>
      <h1 class="w3-hide-small">COLLECTION 2016</h1>
      <p><a href="#jeans" class="w3-button w3-black w3-padding-large w3-large">SHOP NOW</a></p>
    </div>
  </div> -->

  <!-- caroussel header -->
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators" style="z-index:-1">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="{{base_url('/assets/images/bayam.jpg')}}" alt="Los Angeles" style="width:100%;height:30%">
      </div>

      <div class="item">
        <img src="{{base_url('/assets/images/bayam.jpg')}}" alt="Chicago" style="width:100%;height:30%">
      </div>
    
      <div class="item">
        <img src="{{base_url('/assets/images/bayam.jpg')}}" alt="New york" style="width:100%;height:30%">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <!-- end carausel header -->

<br><hr><br>
  
  <!-- start carousel body -->
  <div class="row">

    <div class="col-sm-12">
      PROMO   
      <div class="carousel slide media-carousel-up hidden-xs" id="media-up">
        <div class="carousel-inner">
          <div class="item  active">
            <div class="row">
              <div class="col-xs-4">
                <a class="thumbnail" href="#"><img alt="" src="http://placehold.it/200x150&amp;text=SLIDE1"></a>
              </div>          
              <div class="col-xs-4">
                <a class="thumbnail" href="#"><img alt="" src="http://placehold.it/200x150&amp;text=SLIDE1"></a>
              </div>
              <div class="col-xs-4">
                <a class="thumbnail" href="#"><img alt="" src="http://placehold.it/200x150&amp;text=SLIDE1"></a>
              </div>
            </div>
          </div>
          
          <div class="item">
            <div class="row">
              <div class="col-xs-4">
                <a class="thumbnail" href="#"><img alt="" src="http://placehold.it/200x150&amp;text=SLIDE2"></a>
              </div>          
              <div class="col-xs-4">
                <a class="thumbnail" href="#"><img alt="" src="http://placehold.it/200x150&amp;text=SLIDE2"></a>
              </div>
              <div class="col-xs-4">
                <a class="thumbnail" href="#"><img alt="" src="http://placehold.it/200x150&amp;text=SLIDE2"></a>
              </div>
              
            </div>
          </div>  
 
        </div>
        <a data-slide="prev" href="#media-up" class="left carousel-control">‹</a>
        <a data-slide="next" href="#media-up" class="right carousel-control">›</a>
      </div>
      
    </div>
  </div>
  <!-- end carousel body -->

  <br><hr><br>
  </footer>

  <div class="w3-black w3-center w3-padding-24">Copyright<a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-opacity">MAKANA 2018</a></div>

  <!-- End page content -->
</div>