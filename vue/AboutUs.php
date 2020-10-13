<?php require_once'database_connect.php';
 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css



">
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <!-- <link rel="stylesheet" href="../vondor/bootstrap/dist/css/bootstrap.min.css" /> -->
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="../style/style.css" />
    <link
      rel="shortcut icon"
      href="../images/air-conditioner 1.png"
      type="image/x-icon"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto"
      rel="stylesheet"
    />

    <title>FROID INTER | A propos de notre entreprise et notre équipe</title>
  </head>

  <body>
    <div class="container-fluid">
      <div class="row" style="padding-top: 30px; text-align: center">
        <div class="col-md-1"></div>
        <div class="col-md-3">
          <i class="fa fa-envelope"></i>
          <a href="mailto:froid.inter@gmail.com">froid.inter@gmail.com</a>
        </div>
        <div class="col-md-3">
          <i class="fa fa-phone"></i> +212600626950 & +212672309296
        </div>
        <div class="col-md-4">
          <i class="fa fa-location-arrow"></i> Quartier Beausejour 5 N 5, 
          Tanger
        </div>
        <div class="col-md-1"></div>
      </div>
      <hr />
      <div class="row" style="text-align: center">
        <div class="col-md-3">
          <a href="index.html">
            <img
              src="../images/Sans titre (4).png"
              class="img"
              alt="logo"
              height="85px"
            />
            <span id="titlee">FROID INTER</span></a
          >
        </div>
        <div class="col-md-1 cool-link menu">
          <a href="index.html"> Accueil</a>
        </div>
        <div class="col-md-1 cool-link menu">
          <a class="blane" href="index.html#services"> Services</a>
        </div>
        <div class="col-md-1 cool-link menu">
          <a class="blane" href="NosProduits.html"> Produits</a>
        </div>
        <div class="col-md-1 cool-link menu">
          <a class="blane" href="gallery.html"> Galerie</a>
        </div>
        <div class="col-md-1 cool-link menu">
          <a class="blane" href="clients.html"> Clients</a>
        </div>
        <div class="col-md-1 cool-link menu">
          <a class="blane" href="fournisseurs.html"> Fournisseurs</a>
        </div>
        <div class="col-md-1 cool-link menu">
          <a class="blane" href="evolution-charts.html"> Chiffres</a>
        </div>
        <div class="col-md-1 cool-link menu">
          <a class="blane" href="AboutUs.html"> Équipe</a>
        </div>
        <div class="col-md-1 cool-link menu">
          <a class="blane" href="contact.html"> Contact</a>
        </div>
      </div>
    

      <div class="row" style="padding: 20px">
        <div class="col-md-12">
          <h3  style="    text-align: center;
          background-color: cadetblue;
          padding: 20px;
          color: white;">
            <i class="fas fa-users-cog"></i> A propos de l entreprise
          </h3>
          <br />
          <p>
            Une entreprise dynamique de techniciens <b>frigoristes</b>, au service de
            ses clients !
          </p>

          <p>
            Le Frigoriste fournit un service de dépannage efficace et réactif
           <b> 24h / 24 et 7j / 7.</b> Nous proposons également des programmes de
            maintenance complets pour garantir une durée de vie plus longue et
            une meilleure efficacité des équipements.
          </p>

          <p>
           <b> Nos Services : </b> Installateur, visite techniques des
           compresseur, installation des system de froid. <br>
           <li>locale : Tanger/Maroc.</li> 
           <li> On travaille en Afrique spécialement
            Maroc,Sénégal,Mauritanie .</li>
             
          </p>
        </div>
      </div>
      <div class="row equipe" id="team">
        <div class="col-md-12">
          <h6 style="text-align: center">INTER FROID Équipe</h6>
          <h3
            style="
              padding-left: 40px;
              padding-right: 40px;
              padding-bottom: 40px;
              text-align: center;
            "
          >
            <img src="../images/cold.png" width="50px" />
            Notre professionnels Équipe
          </h3>
        

          <div class="row">
          <?php
            $selectEquipe = $base->query('SELECT * FROM peoples ');
            foreach ($selectEquipe as $data) :
            ?>
            <div
              class="col-md-4 person"
              style="padding: 20px; text-align: center"
            >
              <img class="img"
                alt="Person 2"
                width="60%"
                style="border-radius: 50%" class="img-fluid img"  src='<?php echo $data['image']; ?>'>
              <div>
                <hr />
              </div>
              <h3><?php echo $data['nom'] ?></h3>
              <p> <b> <?php echo $data['job'] ?></b> , <?php echo $data['description'] ?></p>
            </div>

            <?php endforeach; ?>
            <!-- <div
              class="col-md-4 person"
              style="padding: 20px; text-align: center"
            >
              <img
                class="img"
                src="../images/person3-crop.jpg"
                alt="Person 1"
                width="70%"
                style="border-radius: 50%"
              />
              <div>
                <hr />
              </div>
              <h3>Hicham Zamri</h3>
              <p>CEO de INTER FROID , Expérience de plus de +10ans</p>
              <p>Hichamzamri@gmail.com</p>
            </div> -->
            <!-- <div
              class="col-md-4 person"
              style="padding: 20px; text-align: center"
            >
              <img
                src="/images/person1-crop.jpg"
                class="img"
                alt="Person 3"
                width="60%"
                style="border-radius: 50%"
              />
              <div>
                <hr />
              </div>
              <h3>Technicien Specialisee</h3>
              <p>Experience de plus de +10ans</p>
            </div> -->
          </div>
        </div>
      </div>
      <br />
      <div class="row footer-bar">
        <div class="col-md-4" style="text-align: center">
          <h3>A propos de nous</h3>
          <p style="text-align: left; line-height: 35px; font-weight: bold">
            Le Frigoriste fournit un service de dépannage efficace et réactif
            24h / 24 et 7j / 7. Nous proposons également des programmes de
            maintenance complets pour garantir une durée de vie plus longue et
            une meilleure efficacité des équipements.
          </p>
          <hr />
          <h6><i class="fa fa-envelope"></i> froid.inter@gmail.com</h6>
          <hr />
          <h6><i class="fa fa-phone"></i> +212600626950 & +212672309296</h6>
          <hr />
          <h6>
            <i class="fa fa-location-arrow"></i> Quartier Beausejour 5 N 5,
            Tanger .
          </h6>

          <br />
          <!-- <div class="row s-media" data-aos="fade-up"
     data-aos-anchor-placement="center-bottom"  >
            <div class="col-md-3">
              <a class="s-mF" href="https://www.google.com" target="_blank"
                ><i class="fa fa-facebook" aria-hidden="true"></i
              ></a>
            </div>
            <div class="col-md-3">
              <a class="s-mF" href="google.com" target="_blank">
                <i class="fa fa-instagram" aria-hidden="true"></i
              ></a>
            </div>
            <div class="col-md-3">
              <a class="s-mF" href="google.com" target="_blank">
                <i class="fa fa-snapchat" aria-hidden="true"></i
              ></a>
            </div>
            <div class="col-md-3">
              <a class="s-mF" href="google.com" target="_blank">
                <i class="fa fa-youtube" aria-hidden="true"></i
              ></a>
            </div>
          </div> -->
        </div>
        <div class="col-md-4">
          <h3 style="text-align: center">Liens utiles</h3>
          <br />
          <a href="NosProduits.html" style="color: cadetblue">
            <h6 class="lien1" style="font-weight: bold">Nos Produits</h6></a
          >
          <a href="clients.html" style="color: cadetblue">
            <h6 class="lien1" style="font-weight: bold">Nos Clients</h6></a
          >
          <a href="fournisseurs.html" style="color: cadetblue">
            <h6 class="lien1" style="font-weight: bold">Nos Fournisseurs</h6></a
          >
          <a href="gallery.html" style="color: cadetblue">
            <h6 class="lien1" style="font-weight: bold">Nos Galerie de projets</h6></a
          >
          <a href="evolution-charts.html" style="color: cadetblue">
            <h6 class="lien1" style="font-weight: bold">Nos Chiffres</h6></a
          >
          <a href="AboutUs.html" style="color: cadetblue">
            <h6 class="lien1" style="font-weight: bold">Que nous sommes ?</h6></a
          >
        </div>
        <div class="col-md-4" style="text-align: center">
          <h3>Heures de travail</h3>
          <div class="aw9aat">
            <!-- <h5>Heures de travail</h5> -->

            <h6>Lundi-Vendredi</h6>
            <hr />
            <h5>9:00 AM - 21:00 PM</h5>
            <br />
            <h6>Samedi et Dimanche</h6>
            <hr />
            <h5>8:00 AM - 22:00 PM</h5>
          </div>
          <br />
          <div class="row" style="float: left; padding-top: 15px">
            <h5>Restez en contact :</h5>
          </div>
          <div class="row" style="float: right">
            <a
              class="s-m"
              href="https://web.facebook.com/FROID-INTER-118342640026522/"
              target="_blank"
              ><i class="fa fa-facebook" aria-hidden="true"></i
            ></a>
            <a
              class="s-m"
              href="https://www.instagram.com/froidinter/"
              target="_blank"
            >
              <i class="fa fa-instagram" aria-hidden="true"></i
            ></a>
            <a class="s-m" href="https://www.google.com" target="_blank">
              <i class="fa fa-twitter" aria-hidden="true"></i
            ></a>
            <a
              class="s-m"
              href="https://youtube.com/channel/UCwnahbZRmqjjWsCGfvYbH_A"
              target="_blank"
            >
              <i class="fa fa-youtube" aria-hidden="true"></i
            ></a>
          </div>
        </div>
      </div>
      <hr />
      <p style="float: left; padding: 5px">
        Tous les droits sont réservés au FROID INTER
        <i
          class="fa fa-copyright"
          style="font-size: 15px"
          aria-hidden="true"
        ></i>
        2020
      </p>
    </div>
  </body>
  <!-- <a
    title="Vers le Haut"
    id="back-to-top"
    href="#"
    class=" back-to-top"
    role="button"
    ><i class="fa fa-chevron-up"></i
  ></a> -->
  <script
    type="text/javascript"
    src="https://code.jquery.com/jquery-3.2.1.min.js"
  ></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
  <!-- <script type="module" src="/js/main.js"></script> -->
  <!-- <script src="../js/chart.js"></script> -->
  <script src="../js/scroll.js"></script>
</html>
