<style>
  .navbar-toggler:focus, .navbar-toggler:hover {
    text-decoration: none;
    outline: 0px none;
}
</style>
<div class="row" style="padding-top: 30px; text-align: center">
        <div class="col-md-1"></div>
        <div class="col-md-3">
          <i class="fa fa-envelope"></i>
          <a href="mailto:froid.inter@gmail.com">froid.inter@gmail.com</a>
        </div>
        <div class="col-md-3">
          <i class="fa fa-phone"></i> <a href="tel:+212600626950">+212600626950</a>  &  
          <a href="tel:+212672309296">+212672309296</a>
        </div>
        <div class="col-md-4">
          <i class="fa fa-location-arrow"></i> Quartier Beausejour 5 N 5, 
          Tanger
        </div>
        <div class="col-md-1"></div>
      </div>
      <hr />


      <nav class="navbar navbar-expand-lg ">
      <a href="index.php">
            <img
            src="../images/logo 1.png"
              class="img"
              alt="logo"
              height="85px"
            />
         </a
          >
  <button style="float: right;" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
   <i style="    font-size: 35px;
    color: cadetblue;
    padding: 3px 10px 3px 10px;
    border: 2px solid cadetblue;
    border-radius: 5px;" class="fa menu-item" aria-hidden="true"></i>
  </button>
 
  <div class="collapse navbar-collapse row" id="navbarTogglerDemo01" style="
    text-align: center;
">
    
    <div class="col-md-3"><a class="navbar-brand" href="index.php" style="text-align: left;"> <span id="titlee">FROID INTER</span></a></div>
    <div class="col-md-1 cool-link menu">
          <a href="index.php"> Accueil</a>
        </div>
        <div class="col-md-1 cool-link menu">
          <a class="blane" href="index.php#services"> Services</a>
        </div>
        <div class="col-md-1 cool-link menu">
          <a class="blane" href="NosProduits.php"> Produits</a>
        </div>
        <div class="col-md-1 cool-link menu">
          <a class="blane" href="gallery.php"> Galerie</a>
        </div>
        <div class="col-md-1 cool-link menu">
          <a class="blane" href="clients.php"> Clients</a>
        </div>
        <div class="col-md-1 cool-link menu">
          <a class="blane" href="fournisseurs.php"> Fournisseurs</a>
        </div>
        <div class="col-md-1 cool-link menu">
          <a class="blane" href="evolution-charts.php"> Chiffres</a>
        </div>
        <div class="col-md-1 cool-link menu">
          <a class="blane" href="AboutUs.php"> Équipe</a>
        </div>
        <div class="col-md-1 cool-link menu">
          <a class="blane" href="contact.php"> Contact</a>
        </div>
        <!-- <div class="col-md-1 menu">
         
        </div> -->
  </div>
</nav>


      <!-- <div class="row" style="text-align: center">
        <div class="col-md-3">
          <a href="index.php">
            <img
            src="../images/logo 1.png"
              class="img"
              alt="logo"
              height="85px"
            />
            <span id="titlee">FROID INTER</span></a
          >
        </div>
        <div class="col-md-1 cool-link menu">
          <a href="index.php"> Accueil</a>
        </div>
        <div class="col-md-1 cool-link menu">
          <a class="blane" href="index.php#services"> Services</a>
        </div>
        <div class="col-md-1 cool-link menu">
          <a class="blane" href="NosProduits.php"> Produits</a>
        </div>
        <div class="col-md-1 cool-link menu">
          <a class="blane" href="gallery.php"> Galerie</a>
        </div>
        <div class="col-md-1 cool-link menu">
          <a class="blane" href="clients.php"> Clients</a>
        </div>
        <div class="col-md-1 cool-link menu">
          <a class="blane" href="fournisseurs.php"> Fournisseurs</a>
        </div>
        <div class="col-md-1 cool-link menu">
          <a class="blane" href="evolution-charts.php"> Chiffres</a>
        </div>
        <div class="col-md-1 cool-link menu">
          <a class="blane" href="AboutUs.php"> Équipe</a>
        </div>
        <div class="col-md-1 cool-link menu">
          <a class="blane" href="contact.php"> Contact</a>
        </div>
      </div> -->
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script>
  var m = $(".menu-item");

m.addClass('fa-bars');

m.on('click', function(){
  if (m.hasClass('fa-bars')) {
    m
    .removeClass('fa-bars')
    .addClass('fa-times');
  } else {
    m
    .removeClass('fa-times')
    .addClass('fa-bars');
  }
});


</script>