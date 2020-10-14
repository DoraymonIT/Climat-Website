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

    <title>
      FROID INTER | Gallerie de nos projets avec des photos exclusives
    </title>
  </head>

  <body>
    <div class="container-fluid">
    <?php include_once('header.php'); ?>
      <br />

      <div class="row" style="text-align: center">
        <div class="col-md-12">
          <h3  style="    text-align: center;
          background-color: cadetblue;
          padding: 20px;
          color: white;">
            <i class="fa fa-shopping-bag" aria-hidden="true"></i> La Galerie de
            nos projets
          </h3>
        </div>
      </div>

      <div class="row" style="padding-top: 50px">
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-6">
              <h3 style="text-align: center">
                <span class="badge badge-pill badge-info">
                  <i class="fa fa-flag-checkered" aria-hidden="true"></i> Pays
                  de Maroc</span
                >
              </h3>

              <img
                src="../images/service1.png"
                width="100%"
                alt=""
                style="border-radius: 8px"
              />
              <br />
              <!-- Button trigger modal 1-->
              <button
                type="button"
                class="btn btn-block btn-detailles"
                data-toggle="modal"
                data-target="#exampleModalCenter"
              >
                Voir <i class="fa fa-plus-circle" aria-hidden="true"></i>
              </button>
            </div>
            <br />
            <div class="col-md-6 detailles">
              <i class="fas fa-user-tie"></i> Client : <b>Ahmed Idrissi</b>
              <br />
              <i class="fas fa-book-reader"></i> Description :
              <b>
                <p>
                  Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                  Modi, neorem ipsum, dolor sit amet consectetur adipisicing
                  elit. Modi, nes, aliquids, aliquid.
                </p>
              </b>
            </div>
          </div>
          <hr />
        </div>
        <br />
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-6">
              <h3 style="text-align: center">
                <span class="badge badge-pill badge-info">
                  <i class="fa fa-flag-checkered" aria-hidden="true"></i> Pays
                  de Mauritanie</span
                >
              </h3>

              <img
                src="../images/service1.png"
                width="100%"
                alt=""
                style="border-radius: 8px"
              />
              <br />
              <!-- Button trigger modal 1-->
              <button
                type="button"
                class="btn btn-block btn-detailles"
                data-toggle="modal"
                data-target="#exampleModalCenter"
              >
                Voir <i class="fa fa-plus-circle" aria-hidden="true"></i>
              </button>
            </div>
            <br />
            <div class="col-md-6 detailles">
              <i class="fas fa-user-tie"></i> Client : <b>Ahmed merZouqui</b>
              <br />
              <i class="fas fa-book-reader"></i> Description :
              <b>
                <p>
                  Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                  Modi, neorem ipsum, dolor sit amet consectetur adipisicing
                  elit. Modi, nes, aliquids, aliquid.
                </p>
              </b>
            </div>
          </div>
          <hr />
        </div>
        <br />
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-6">
              <h3 style="text-align: center">
                <span class="badge badge-pill badge-info">
                  <i class="fa fa-flag-checkered" aria-hidden="true"></i> Pays
                  de Senegale</span
                >
              </h3>

              <img
                src="../images/service1.png"
                width="100%"
                alt=""
                style="border-radius: 8px"
              />
              <br />
              <!-- Button trigger modal 1-->
              <button
                type="button"
                class="btn btn-block btn-detailles"
                data-toggle="modal"
                data-target="#exampleModalCenter"
              >
                Voir <i class="fa fa-plus-circle" aria-hidden="true"></i>
              </button>
            </div>
            <br />
            <div class="col-md-6 detailles">
              <i class="fas fa-user-tie"></i> Client : <b>Ahmed Bakari</b>
              <br />
              <i class="fas fa-book-reader"></i> Description :
              <b>
                <p>
                  Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                  Modi, neorem ipsum, dolor sit amet consectetur adipisicing
                  elit. Modi, nes, aliquids, aliquid.
                </p>
              </b>
            </div>
          </div>
          <hr />
        </div>
      </div>

      <!-- Modal 1 -->
      <div
        class="modal fade"
        id="exampleModalCenter"
        tabindex="-1"
        role="dialog"
        aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true"
      >
        <div
          class="modal-dialog modal-lg modal-dialog-centered"
          role="document"
        >
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">
                Titre 1 : Intro
              </h5>
              <button
                type="button"
                class="close"
                data-dismiss="modal"
                aria-label="Close"
              >
                <i class="fa fa-window-close" aria-hidden="true"></i>
              </button>
            </div>
            <div
              id="carouselExampleIndicators"
              class="carousel slide"
              data-ride="carousel"
            >
              <ol class="carousel-indicators">
                <li
                  data-target="#carouselExampleIndicators"
                  data-slide-to="0"
                  class="active"
                ></li>
                <li
                  data-target="#carouselExampleIndicators"
                  data-slide-to="1"
                ></li>
                <li
                  data-target="#carouselExampleIndicators"
                  data-slide-to="2"
                ></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img
                    class="d-block w-100"
                    src="../images/service2.jpg"
                    alt="First slide"
                  />
                  <div class="carousel-caption d-none d-md-block">
                    <h5 class="titreee">Titre :</h5>
                  </div>
                </div>
                <div class="carousel-item">
                  <img
                    class="d-block w-100"
                    src="../images/service3.jpg"
                    alt="Second slide"
                  />
                  <div class="carousel-caption d-none d-md-block">
                    <h5 class="titreee">Titre :</h5>
                  </div>
                </div>
                <div class="carousel-item">
                  <img
                    class="d-block w-100"
                    src="../images/612633-PNIVIG-720.jpg"
                    alt="Third slide"
                  />
                  <div class="carousel-caption d-none d-md-block">
                    <h5 class="titreee">Titre :</h5>
                  </div>
                </div>
              </div>
              <a
                class="carousel-control-prev"
                href="#carouselExampleIndicators"
                role="button"
                data-slide="prev"
              >
                <span
                  class="carousel-control-prev-icon"
                  aria-hidden="true"
                ></span>
                <span class="sr-only">Previous</span>
              </a>
              <a
                class="carousel-control-next"
                href="#carouselExampleIndicators"
                role="button"
                data-slide="next"
              >
                <span
                  class="carousel-control-next-icon"
                  aria-hidden="true"
                ></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
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

  <!-- <script src="../js/scroll.js"></script> -->
  <script
    src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"
  ></script>
  <script
    src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"
  ></script>
  <script
    src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"
  ></script>
</html>