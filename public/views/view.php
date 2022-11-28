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
        #row1, table {
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
    <title>View Data</title>
</head>

<body>
    <div class="bg-img">
        <div class="row bg-info">
            <div class="col-12">
                <div class="text-center">
                    <h1 class="display-1 fw-bold">Placement Predictor</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12" id="row2">
                <div class="display-4 text-center">View Data</div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <a class="btn btn-primary btn-lg" href="insert.php" role="button">Create</a>
                <a class="btn btn-primary btn-lg active" href="#" role="button">Read</a>
                <a class="btn btn-primary btn-lg" href="update.php" role="button">Update</a>
                <a class="btn btn-primary btn-lg" href="delete.php" role="button">Delete</a>
            </div>
        </div>
        <div class="row" id="row1">
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="GET">
                <label for="user" class="form-label">User Name</label>
                <input type="text" name="user" id="user" required="true" class="form-control" placeholder="Enter your username here">
                <div class="text-center">
                    <button style="margin:10px 0px 10px 0px;" class="btn btn-primary btn-lg" type="submit">Submit</button>
                </div>
            </form>
        </div>
        <?php if ($model->user){ ?>
            <?php 
                $query = 'SELECT * FROM ppm
                                    WHERE username = :user';
                    $statement = $conn->prepare($query);
                    $statement->bindValue(':user', $model->user);
                    $statement->execute();
                    $results = $statement->fetchAll();
                    $statement->closeCursor();
            ?>
            <?php if(!empty($results)) {
                    foreach($results as $result) { ?>
                        <table class="table table-striped table-light table-bordered table-hover table-responsive table-sm">
                            <tbody>
                                <tr>
                                    <th scope="row">User ID</th>
                                    <td><?php echo $result['user_id'];?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Username</th>
                                    <td><?php echo $result['username'];?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Name</th>
                                    <td><?php echo $result['fname']. " ". $result['lname'];?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Age</th>
                                    <td><?php echo $result['age'];?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Educational Qualification</th>
                                    <td><?php echo $result['eduQual'];?></td>
                                </tr>
                                <tr>
                                    <th scope="row">E-mail</th>
                                    <td><?php echo $result['email'];?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Country</th>
                                    <td><?php echo $result['country'];?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Phone Number</th>
                                    <td><?php echo $result['phone'];?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Webiste URL</th>
                                    <td><?php echo $result['website'];?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Address</th>
                                    <td><?php echo $result['address'];?></td>
                                </tr>
                            </tbody>
                        </table>
                    <?php } ?>
                <?php } else{ ?>
                    <p style="text-align: center;">Sorry no results found. Try entering your username again.</p>
                <?php } ?>    
        <?php } else {?> 
        <?php } ?>  
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>      
</body>
</html>