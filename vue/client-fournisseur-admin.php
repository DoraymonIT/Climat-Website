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
    <link rel="stylesheet" href="/style/style.css" />
    <link
      rel="shortcut icon"
      href="../images/air-conditioner 1.png"
      type="image/x-icon"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto"
      rel="stylesheet"
    />

    <title>FROID INTER Admin | Gestions des clients / fournisseurs</title>
  </head>

  <body>
    <div class="container-fluid" style="padding: 20px">
      <div class="row">
        <div class="col-md-5">
          <h5>Ajouter Un nouveau Client / Fournisseur</h5>
          <br />
          <form action="" method="post">
            <input
              style="padding-bottom: 18px"
              type="file"
              required
              placeholder="Logo"
            />
            <br />
            <label for="">Nom du Client / Fournisseur</label>
            <input
              type="text"
              class="form-control"
              placeholder="Libelle du produit"
              required
            />
            <br />
            <label for="">Reference du Client / Fournisseur</label>
            <input
              type="text"
              class="form-control"
              placeholder="Libelle du produit"
              required
            />
            <br />

            <label for="">Catégorie</label>
            <select class="form-control" required>
              <option>Choisir...</option>
              <option>Client</option>
              <option>Fournisseur</option>
            </select>

            <br />
            <label for="">Description du Client / Fournisseur</label>
            <textarea
              class="form-control"
              rows="4"
              placeholder="Description du produit"
            ></textarea>
            <br />
            <button type="submit" class="btn btn-success">Ajouter</button>
          </form>
          <br />
        </div>
        <div class="col-md-7">
          <table class="table table-hover table-striped">
            <thead class="thead-inverse">
              <tr>
                <th>#Id</th>
                <th>Reference</th>
                <th>Catégorie</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td scope="row">1</td>
                <td>Sofitel</td>
                <td>Client</td>
                <td>
                  <button
                    type="submit"
                    class="btn btn-sm btn-info"
                    data-toggle="modal"
                    data-target=".bd-example-modal-lg"
                  >
                    <i class="fa fa-info-circle" aria-hidden="true"></i>
                  </button>
                  <button
                    type="submit"
                    class="btn btn-sm btn-danger"
                    data-toggle="modal"
                    data-target="#exampleModalCenter"
                  >
                    <i class="fa fa-trash" aria-hidden="true"></i>
                  </button>
                </td>
              </tr>
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
                Voulez-Vous Vraiment supprimer cet item?
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
                <h5 class="modal-title" id="exampleModalLabel">
                  Nom du Client / Fournisseur
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
              <div class="modal-body">
                <div class="row">
                  <div class="col-md-5">
                    <img
                      src="../images/service1.png"
                      width="100%"
                      attr="Logo"
                    />
                  </div>
                  <div class="col-md-7">
                    <h4>Nom du Client / Fournisseur : Libelle 1</h4>
                    <br />
                    <h4>Catégorie : Client / Fournisseur</h4>
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
