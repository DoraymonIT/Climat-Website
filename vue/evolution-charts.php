<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

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

    <title>FROID INTER | Évolution de CA et autres chiffres de notre entreprise</title>
  </head>

  <body>
    <div class="container-fluid">
    <?php include_once('header.php'); ?>
      <br />

      <div class="row" style="background-color: cadetblue; padding: 10px">
        <div class="col-md-12">
          <h3 style="text-align: center; color: white;">
            <i class="fa fa-area-chart" aria-hidden="true"></i> FROID INTER en
            Chiffres
          </h3>
          <br />
          <div class="row" style="text-align: center">
            <div class="col-md-4">
              <img
                src="../images/employee.svg"
                width="20%"
                alt="employes number"
              />
              <br />
              <br />

              <h5>50 Employés</h5>
            </div>
            <div class="col-md-4">
              <a
                href="#chiffres"
                title="Cliquez Ici pour voir plus de detailles sur notre evolution chiffres d affaires"
              >
                <img
                  src="../images/exchange.svg"
                  width="20%"
                  alt="exchange number"
                />
                <br />
                <br />

                <h5>50 000 Dirham Marocain (MAD)</h5>
              </a>
            </div>
            <div class="col-md-4">
              <img
                src="../images/project-management.svg"
                width="20%"
                alt="project number"
              />
              <br />
              <br />

              <h5>300 Projets</h5>
            </div>
          </div>
        </div>
      </div>
      <div class="row" style="padding: 50px">
        <div class="col-md-12">
          <h3 style="text-align: center">
            <i class="fa fa-bar-chart" aria-hidden="true"></i> Notre évolution
            par Année
          </h3>
        </div>
      </div>
      <div class="row" >
        <div class="col-md-12">
          <canvas id="myChart"></canvas>
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
  <script src="../js/chart.js"></script>
  <script src="../js/scroll.js"></script>
</html>
