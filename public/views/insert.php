<?php

require '../core/model.php';
require '../database.php';

$model = new model;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        #row1 {
            background-color: #d7defa;
            margin: 1%;
        }

        #row2 {
            background-color: #87ded2;
        }

        #btn1 {
            margin-right: 15px;
        }
        .btn{
            margin: 0.5% 0% 0% 0.5%;
            width: 24%;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <title>Insert Data</title>
</head>

<body>
    <div class=bg-img">
        <div class="row bg-info">
            <div class="col-12">
                <div class="text-center">
                    <h1 class="display-1 fw-bold">Placement Predictor</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12" id="row2">
                <div class="display-4 text-center">Insert Data</div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <a class="btn btn-primary btn-lg active" href="#" role="button">Create</a>
                <a class="btn btn-primary btn-lg" href="view.php" role="button">Read</a>
                <a class="btn btn-primary btn-lg" href="update.php" role="button">Update</a>
                <a class="btn btn-primary btn-lg" href="delete.php" role="button">Delete</a>
            </div>
        </div>
        <div class="row" id="row1">
            <div class="col-12">
                <form action="" method="POST">
                    <div class="text-left">
                        <h3>Personal Details</h3>
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="fname" class="form-label">First Name</label>
                        <input type="text" name="fname" id="fname" class="form-control" placeholder="Enter First Name" required="true" pattern="A-Za-z]{4,}" title="Use letters only">
                    </div>
                    <div class="mb-3">
                        <label for="lname" class="form-label">Last Name</label>
                        <input type="text" name="lname" id="lname" class="form-control" placeholder="Enter Last Name">
                    </div>
                    <div class="mb-3">
                        <label for="username" class="form-label">Create/Enter Username</label>
                        <input type="text" name="username" id="username" class="form-control" placeholder="Enter username" required="true">
                    </div>
                    <div class="mb-3">
                        <label for="age" class="form-label">Age</label>
                        <input type="number" name="age" id="age" class="form-control" placeholder="Enter your current age" min="0" max="58" required="true">
                    </div>
                    <div class="mb-3">
                        <label for="eduQualification" class="form-label">Educational Qualification</label>
                        <input type="text" name="eduQualification" id="eduQualification" class="form-control" placeholder="Current Qualification">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">E-mail</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Enter your email address" required="true">
                    </div>
                    <div class="mb-3">
                        <label for="country" class="form-label">Nationality</label>
                        <input type="text" name="country" id="country" placeholder="Enter your birth country" class="form-control" required="true">
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Mobile Number</label>
                        <input type="tel" name="phone" id="phone" class="form-control" placeholder="Enter mobile number with country code" required="true">
                    </div>
                    <div class="mb-3">
                        <label for="website" class="form-label">Website URL</label>
                        <input type="text" name="website" id="website" placeholder="Enter your personal web portfolio link if any" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" name="address" id="address" class="form-control" placeholder="Enter your address" required="true">
                    </div>
                    
                    <div class="text-center">
                        <button class="btn btn-primary btn-lg" type="reset" id="btn1">Reset</button>
                        <button class="btn btn-primary btn-lg" type="submit">Submit</button>
                    </div>
                    <br>
                </form>
            </div>
        </div>
    </div>
    <?php if (!$model->newUser) { ?>
        <?php } else{?>
            <?php
                $query = 'INSERT INTO ppm 
                                (username, fName, lName, age, eduQual, email, country, phone, website, address)
                                VALUES(:newUser, :fname, :lname, :age, :eduQual, :email, :country, :phone, :website, :address)';
                $statement = $conn->prepare($query);
                $statement->bindValue(':newUser', $model->newUser);
                $statement->bindValue(':fname', $model->fname);
                $statement->bindValue(':lname', $model->lname);
                $statement->bindValue(':age', $model->age);
                $statement->bindValue(':eduQual', $model->eduQual);
                $statement->bindValue(':email', $model->email);
                $statement->bindValue(':country', $model->country);
                $statement->bindValue(':phone', $model->phone);
                $statement->bindValue(':website', $model->website);
                $statement->bindValue(':address', $model->address);
                $status = $statement->execute();
                $statement->closeCursor();
            ?>
            <?php if($status === true){
                echo '<script>alert("Data successfully inserted.")</script>';
            }
            else{
                '<script>alert("Some error occured while inserting data!!!")</script>';
            } ?>
    <?php }?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>

