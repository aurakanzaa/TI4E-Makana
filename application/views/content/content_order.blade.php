@extends('baru')
@section('content')
<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:250px">

  <!-- Push down content on small screens -->
  <div class="w3-hide-large" style="margin-top:100px"></div>
  
  <!-- Top header -->
  <header class="w3-container w3-xlarge">
    <p class="w3-left">Menu</p>
    <p class="w3-right">
      <i class="fa fa-shopping-cart w3-margin-right"></i>
      <i class="fa fa-search"></i>
    </p>
  </header>

  <!-- Product grid -->
  <div class="w3-row">
    <div class="w3-col l3 s6">
      <div class="w3-container">
        <img src="{{base_url('/assets/images/bayam.jpg')}}" style="width:100%">
        <p>Sayur Bayam<br><b>Rp.5000</b></p>
      </div>
      <div class="w3-container">
        <img src="{{base_url('/assets/images/bayam.jpg')}}" style="width:100%">
        <p>Sayur Bayam<br><b>Rp.5000</b></p>
      </div>
    </div>

    <div class="w3-col l3 s6">
      <div class="w3-container">
        <div class="w3-display-container">
          <img src="{{base_url('/assets/images/bayam.jpg')}}" style="width:100%">
          <span class="w3-tag w3-display-topleft">New</span>
          <div class="w3-display-middle w3-display-hover">
            <button class="w3-button w3-black">Buy now <i class="fa fa-shopping-cart"></i></button>
          </div>
        </div>
        <p>Sayur Bayam<br><b>Rp.5000</b></p>
      </div>
      <div class="w3-container">
        <img src="{{base_url('/assets/images/bayam.jpg')}}" style="width:100%">
        <p>Sayur Bayam<br><b>Rp.5000</b></p>
      </div>
    </div>

    <div class="w3-col l3 s6">
      <div class="w3-container">
        <img src="{{base_url('/assets/images/bayam.jpg')}}" style="width:100%">
        <p>Sayur Bayam<br><b>Rp.5000</b></p>
      </div>
      <div class="w3-container">
        <div class="w3-display-container">
          <img src="{{base_url('/assets/images/bayam.jpg')}}" style="width:100%">
          <span class="w3-tag w3-display-topleft">Sale</span>
          <div class="w3-display-middle w3-display-hover">
            <button class="w3-button w3-black">Buy now <i class="fa fa-shopping-cart"></i></button>
          </div>
        </div>
        <p>Sayur Bayam<br><b>Rp.5000</b></p>
      </div>
    </div>

    <div class="w3-col l3 s6">
      <div class="w3-container">
        <img src="{{base_url('/assets/images/bayam.jpg')}}" style="width:100%">
        <p>Sayur Bayam<br><b>Rp.5000</b></p>
      </div>
      <div class="w3-container">
        <img src="{{base_url('/assets/images/bayam.jpg')}}" style="width:100%">
        <p>Sayur Bayam<br><b>Rp.5000</b></p>
      </div>
    </div>
  </div>
  </footer>

  <div class="w3-black w3-center w3-padding-24">Copyright<a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-opacity"> MAKANA 2018</a></div>

  <!-- End page content -->
</div>