<!--<form action="signupProcess.php" method="post">-->
<!--  <div class="mb-3">-->
<!--    <label for="exampleInputEmail1" class="form-label">first name</label>-->
<!--    <input-->
<!--      type="text"-->
<!--      class="form-control"-->
<!--      name="firstname"-->
<!--      aria-describedby="emailHelp"-->
<!--    />-->
<!--  </div>-->
<!--  <div class="mb-3">-->
<!--    <label for="exampleInputPassword1" class="form-label">lastname</label>-->
<!--    <input-->
<!--      type="text"-->
<!--      name="lastname"-->
<!--      class="form-control"-->
<!--      id="exampleInputPassword1"-->
<!--    />-->
<!--  </div>-->
<!--  <div class="mb-3">-->
<!--    <label for="exampleInputPassword1" class="form-label">address</label>-->
<!--    <input-->
<!--      type="text"-->
<!--      name="address"-->
<!--      class="form-control"-->
<!--      id="exampleInputPassword1"-->
<!--    />-->
<!--  </div>-->
<!--  <button type="submit" name="save" class="btn btn-primary">Submit</button>-->
<!--</form>-->




<!DOCTYPE html>
<html lang="en">
<head>
    <title>CRUD</title>
    <meta charset="utf-8" />
    <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />




    <link rel="stylesheet" href="css/form.css" />
</head>
<body>
<div class="form-body">
    <div class="row">
        <div class="form-holder">
            <div class="form-content">
                <div class="form-items">


                    <form class="requires-validation" novalidate action="signupProcess.php" method="post">
                        <h3>Welcome</h3>
                        <div class="col-md-12">
                            <input class="form-control" type="text" name="firstname" placeholder="Enter your firstname" required>
                            <div class="invalid-feedback">First Name field cannot be blank!</div>
                        </div>

                        <div class="col-md-12">
                            <input class="form-control" type="text" name="lastname" placeholder="Enter your lastname" required>

                            <div class="invalid-feedback">LastName field cannot be blank!</div>
                        </div>

                        <div class="col-md-12">
                            <input class="form-control" type="text" name="address" placeholder="Enter your Address" required>

                            <div class="invalid-feedback">Address field cannot be blank!</div>

                        </div>
                        <div class="form-button mt-3">
                            <button id="submit" name="save" type="submit" class="basic" href="index.php">Register</button>

                        </div>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>
</div>





</body>

<script src="js/jquery.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>
