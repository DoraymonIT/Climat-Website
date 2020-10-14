<?php require_once('database_connect.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css
" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
  <!-- <link rel="stylesheet" href="../vondor/bootstrap/dist/css/bootstrap.min.css" /> -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
  <link rel="stylesheet" href="../style/style.css" />
  <link rel="shortcut icon" href="../images/air-conditioner 1.png" type="image/x-icon" />
  <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet" />

  <title>FROID INTER Admin | Gestions des membres des équipes</title>

</head>

<body>
  <div class="container-fluid" style="padding: 20px">
    <div class="row">
      <div class="col-md-4">
        <h5>Ajouter Un nouveau membre a équipe</h5>
        <br />
        <form method="post" action="ajout-member.php" enctype="multipart/form-data">
          <input name="image-bla" id="image-bla" style="padding-bottom: 18px" type="file" required placeholder="Photo" />
          <br />
          <label for="">Nom du Membre</label>
          <input type="text" id="nom" name="nom" class="form-control" placeholder="Nom Complet" required />
          <!-- <br />
          <label for="">CIN</label>
          <input name="id" type="text" class="form-control" placeholder="CIN" required /> -->
          <br />
          <label for="">Poste</label>
          <input type="text" id="job" name="job" class="form-control" placeholder="Poste / Job / Titre" required />
          <br />
          <label for="">Description sur ce ou cette membre</label>
          <textarea id="description" name="description" class="form-control" rows="4" placeholder="Description du membre ( experience , parocurs scolaire , ...)"></textarea>
          <br />
          <button id="sumbit" name="submit" type="submit" class="btn btn-success">Ajouter</button>
        </form>

        <br />
      </div>
      <div class="col-md-8">
        <table class="table table-hover table-striped">
          <thead class="thead-inverse">
            <tr>
              <th>Image</th>
              <th>#Id</th>
              <th>Nom Complet</th>
              <th>Poste</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>

            <?php
            $select1 = $base->query('SELECT * FROM peoples ');
            foreach ($select1 as $data) :

            ?>
              <tr>
                <!-- <td></td> -->
                <td style="width: 200px;"><img class="img-fluid"  src='<?php echo $data['image']; ?>'></td>
                <td scope="row"><?php echo $data['id'] ?></td>
                <td><?php echo $data['nom'] ?></td>
                <td><?php echo $data['job'] ?></td>
                <td>
                  <!-- <a href="?id=">
                    <button type="submit" class="btn btn-sm btn-info" data-toggle="modal" data-target=".bd-example-modal-lg">
                      <i class="fa fa-info-circle" aria-hidden="true"></i>
                    </button></a> -->
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
      <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document" style="height: auto">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">
                Dialogue de Confirmation
              </h5>
            </div>
            <div class="modal-body" style="overflow-y: hidden">
              Voulez-Vous Vraiment supprimer cet item?
            </div>
            <div class="modal-footer">

              <button type="button" id="delete" class="btn btn-danger">
                Oui, je veux
              </button>
            </div>
          </div>
        </div>
      </div>
     
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  </script>

</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</html>