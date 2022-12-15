<?php
require_once "signupConfig.php";
$data = new signupConfig();
$all = $data->fetchAll();


?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <title>CRUD</title>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <link
      href="https://fonts.googleapis.com/css?family=Roboto:400,100,300,700"
      rel="stylesheet"
      type="text/css"
    />

    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />

    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
  <section class="ftco-section">

      <div class="container">
          <div class="row justify-content-center">
              <div class="col-md-6 text-center mb-5">
                  <h2 class="heading-section">CRUD</h2> <br>
                  <a  class="btn-dark" href="signup.php" >Signup</a>
              </div>
          </div>
          <div class="row">
              <div class="col-md-12">

                      <table class="table table-bordered table-dark table-hover">
                          <thead>
                          <tr>
                              <th>Id</th>
                              <th>First Name</th>
                              <th>Last Name</th>
                              <th>Address</th>
                          </tr>
                          </thead>
                          <tbody>
                          <?php
                          foreach ($all as $key =>$val){
                          ?>
                          <tr>
                              <td><?=$val['id']?></td>
                              <td><?=$val['firstName']?></td>
                              <td><?=$val['lastName']?></td>
                              <td><?=$val['address']?></td>
                              <td class="text-center">
                                  <a  href="edit.php?id=<?=$val['id']?>"  class="btn-warning" >Edit</a>
                                  <a  href="delete.php?id=<?=$val['id']?>&req=delete" class="btn-danger" >Delete</a>
                              </td>

                          </tr>
                          <?php
                          }
                          ?>

                          </tbody>
                      </table>

              </div>
          </div>
      </div>
  </section>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
