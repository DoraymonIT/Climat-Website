<?php require_once('database_connect.php') ?>
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
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@300;600;700&display=swap" rel="stylesheet"> 


    <title>FROID INTER | A propos de notre entreprise et notre équipe</title>
  </head>

  <body>
    <div class="container-fluid">
    <?php include_once('header.php'); ?>
<!-- <br> -->
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
      <?php include_once('footer.php') ?>
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
