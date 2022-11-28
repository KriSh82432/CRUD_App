<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>CRUD App</title>
    <style>
        #row1 {
            background-color: #d7defa;
        }

        #row2 {
            background-color: #87ded2;
        }

        #btn1 {
            margin-right: 15px;
        }
        #row3{
            background-color: #d7defa;
            margin-bottom: 10px;
        }
        .btn{
            width: 24.7%;
        }
    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
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
                <div class="display-4 text-center">CRUD Operations</div>
            </div>
        </div>
        <div class="row">
            <div class="col-12" id="row3">
                <div class="text-center display-6">Choose any of the below options to get started</div>
            </div>
            <div class="col-12">
                <a class="btn btn-primary btn-lg" href="views/insert.php" role="button">Create</a>
                <a class="btn btn-primary btn-lg" href="views/view.php" role="button">Read</a>
                <a class="btn btn-primary btn-lg" href="views/update.php" role="button">Update</a>
                <a class="btn btn-primary btn-lg" href="views/delete.php" role="button">Delete</a>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>