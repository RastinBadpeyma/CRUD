<?php
require_once "signupConfig.php";
$data = new signupConfig();
$id = $_GET['id'];
$data->setId($id);


if (isset($_POST['edit'])){
    $data->setfirstname($_POST['firstname']);
    $data->setlastname($_POST['lastName']);
    $data->setAddress($_POST['address']);

    echo $data->update();
    echo "<script> alert('data updated');document.location='index.php'</script>";

}

$record = $data->fetchOne();

$key = $record[0];

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




    <link rel="stylesheet" href="css/form.css" />
</head>
<body>
<div class="form-body">
    <div class="row">
        <div class="form-holder">
            <div class="form-content">
                <div class="form-items">


                    <form class="requires-validation" novalidate action="" method="post">
                        <h3>Welcome</h3>
                        <div class="col-md-12">
                            <label>FirstName</label>
                                <input class="form-control" type="text" name="firstname" required
                                       value="<?php echo $key['firstName'];?> ">


                        </div>

                        <div class="col-md-12">
                            <label>LastName</label>
                            <input type="text"  name="lastName" required
                                   value="<?php echo $key['lastName']; ?>">



                        </div>

                        <div class="col-md-12">
                            <label >  Address </label>
                                <input class="form-control" type="text" name="address"  required
                                       value="<?php echo $key['address'];?> ">

                        </div>
                        <div class="form-button mt-3">
                            <button  name="edit" value="update" type="submit" class="btn-primary" href="index.php">update</button>

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