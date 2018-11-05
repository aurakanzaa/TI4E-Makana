@extends('baru')
@section('content')
<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:250px">

  <!-- Push down content on small screens -->
  <div class="w3-hide-large" style="margin-top:100px"></div>
  
  <!-- Top header -->
  <header class="w3-container w3-xlarge">
    <p class="w3-left">FEEDBACK</p>
  </header>
  
  <!-- Footer -->
  <footer class="w3-padding-64 w3-light-grey w3-small w3-center" id="footer">
    <div class="w3-row-padding">
      <div class="w3-col s4">
        <h2>Delivery To</h2>
        <p>Politeknik Negeri Malang</p>
        <h2>Your Order From</h2>
        <p>Warung Sederhana</p>
        <h2>Rate</h2>
        <p>..</p>
        <form action="/action_page.php" target="_blank">
          <p><input class="w3-input w3-border" type="text" placeholder="Comment" name="Comment" required></p>
          <button type="submit" class="w3-button w3-block w3-black">SUBMIT</button>
        </form>
      </div>

      <div>
        <h4>About</h4>
        <p>Makana is</p>
      </div>

      <div>
        <h4>Store</h4>
        <p><i class="fa fa-fw fa-map-marker"></i> MAKANA </p>
        <p><i class="fa fa-fw fa-phone"></i> 0813456789</p>
        <p><i class="fa fa-fw fa-envelope"></i> makana@mail.com</p>
        <br>
        <h4>Follow</h4>
        <i class="fa fa-facebook-official w3-hover-opacity w3-large"></i>
        <i class="fa fa-instagram w3-hover-opacity w3-large"></i>
        <i class="fa fa-snapchat w3-hover-opacity w3-large"></i>
        <i class="fa fa-pinterest-p w3-hover-opacity w3-large"></i>
        <i class="fa fa-twitter w3-hover-opacity w3-large"></i>
        <i class="fa fa-linkedin w3-hover-opacity w3-large"></i>
      </div>
    </div>
  </footer>

  <div class="w3-black w3-center w3-padding-24">Copyright <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-opacity">MAKANA 2018</a></div>

  <!-- End page content -->
</div>