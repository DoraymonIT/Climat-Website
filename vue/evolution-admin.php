<?php
require_once('database_connect.php');
ob_start();
session_start();
if (empty($_SESSION['username'])) {
  header('location: login.php');
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css



"
    />
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

    <title>FROID INTER Admin| Gestions des chiffres de l entreprise</title>
  </head>

  <body>
    <div class="container-fluid" style="padding: 20px">
    <div class="row">
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
        <div class="col-md-4"></div>
        <div class="col-md-5">
          <div style="padding: 30px">
           
             <?php if (isset($_SESSION['username'])): ?>
                  <h6> <i class="fa fa-user-circle" aria-hidden="true"></i>  Vous êtes Connecte : <?php echo $_SESSION['username'] ?> !</h6>
                  <p><a href="logout.php" class="btn btn-primary" href="#" role="button"> <i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></p>
              <?php endif ?>
          </div>
        </div>
      </div>
<hr>

      <div class="row">
        <div class="col-md-5">
          <h5>Ajouter Un nouveau chiffre d affaire</h5>
          <br />
          <form method="post" action="ajout-member.php">
            <label for="">L année</label>
            <!-- <select class="form-control" name="annee" >
              <option>Choisir...</option>
              <option>2026</option>
              <option>2025</option>
              <option>2024</option>
              <option>2023</option>
              <option>2022</option>
              <option>2021</option>
              <option>2020</option>
              <option>2019</option>
              <option>2018</option>
              <option>2017</option>
              <option>2016</option>
              <option>2015</option>
              <option>2014</option>
              <option>2013</option>
              <option>2012</option>
              <option>2011</option>
              <option>2010</option>
              <option>2009</option>
            </select> -->
<?php
$already_selected_value = 2050;
$earliest_year = 1991;

print '<select class="form-control" name="annee" >';
foreach (range(date('Y'), $earliest_year) as $x) {
    print '<option value="'.$x.'"'.($x === $already_selected_value ? ' selected="selected"' : '').'>'.$x.'</option>';
}
print '</select>';
?>
            <br />
            <label for="">Combien (MAD : DH)</label>
            <input
              class="form-control"
             type="text" name="combien"
              placeholder="40000 DH ( MAD )"
            />
            <br />
            <button type="submit" name="submit-ca" class="btn btn-success">Ajouter</button>
          </form>
          <br />
        </div>
        <div class="col-md-7">
          <table class="table table-hover table-striped">
            <thead class="thead-inverse">
              <tr>
                <th>#Id</th>
                <th>Année</th>
                <th>Numero ( DH )</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>

<?php
$select1 = $base->query('SELECT * FROM ca ');
foreach ($select1 as $data) :

?>
  <tr>
 
    <td scope="row"><?php echo $data['id'] ?></td>
    <td><?php echo $data['annee'] ?></td>
    <td><?php echo number_format(($data['combien'] / 100), 2, '.', ','); ?> 
   </td>
    <td>
      <a href="delete-item.php?id=<?php echo $data['id'];
                                  ?>">
        <button type="submit" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#exampleModalCenter">
          <i class="fa fa-trash" aria-hidden="true"></i>
        </button></a>
    </td>
  </tr>

<?php endforeach; ?>
</tbody>
          </table>
        </div>

        <!-- Modal -->
        <div
          class="modal fade"
          id="exampleModalCenter"
          tabindex="-1"
          role="dialog"
          aria-labelledby="exampleModalCenterTitle"
          aria-hidden="true"
        >
          <div
            class="modal-dialog modal-dialog-centered"
            role="document"
            style="height: auto"
          >
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">
                  Dialogue de Confirmation
                </h5>
                <button
                  type="button"
                  class="close"
                  data-dismiss="modal"
                  aria-label="Close"
                >
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body" style="overflow-y: hidden">
                Voulez-Vous Vraiment supprimer ce produit?
              </div>
              <div class="modal-footer">
                <button
                  type="button"
                  class="btn btn-secondary"
                  data-dismiss="modal"
                >
                  Annuler
                </button>
                <button type="button" class="btn btn-primary">
                  Oui, je veux
                </button>
              </div>
            </div>
          </div>
        </div>
        <div
          class="modal fade bd-example-modal-lg"
          tabindex="-1"
          role="dialog"
          aria-labelledby="myLargeModalLabel"
          aria-hidden="true"
        >
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Nom produit</h5>
                <button
                  type="button"
                  class="close"
                  data-dismiss="modal"
                  aria-label="Close"
                >
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="row">
                  <div class="col-md-5">
                    <img src="../images/service1.png" width="100%" />
                  </div>
                  <div class="col-md-7">
                    <h4>Titre de Libelle : Libelle 1</h4>
                    <br />
                    <h4>Description :</h4>
                    <p>
                      Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      Modi in aliquid fugiat sed rem deserunt culpa harum
                      quisquam quidem porro hic accusantium numquam, doloremque
                      quaerat natus laborum fugit. Non, ex.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
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
