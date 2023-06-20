<?php
require 'controllwer.php';
$id = $_GET["id"];
$feed = query("SELECT * FROM feedback WHERE id = $id")[0];
if (isset($_POST["submit"])) {
    if (update($_POST) > 0) {
        echo "<script> 
        alert ('Hore! Thank you for sending feedback!');
        document.location.href = 'index.php';
        </script>
        ";
    } else {
        echo "<script> 
        alert ('Yah, data gagal ditambahkan :(');
        document.location.href = 'index.php';
        </script>
        ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> ꗃ . ryo ⋆ ♪</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <style>
        body {
            padding-top: 40px;
    padding-bottom: 50px;
    background-color: #DEE3FF
        }

        h1 {
            color: #50447a;
            text-align: center;
            font-weight: 700;
        }

        h6 {
            color: #8b7ac9;
            text-align: center;
            font-style: italic;
        }

        .heyo {
            color: #609966;
            margin-top: 25px;
        }

        .btn {
            color: #fff;
            background-color: #8b7ac9;
            text-align: center;
            font-style: italic;
        }

        .mb-3 {
            color: #4D455D;
        }

        form {
            padding-top: 10px;
        }

        .huhuy {
            position: absolute;
            left: 300px;
            padding: 20px;
        }

        .haku-img {
            width: 80%;
            margin-top: 150px;
            margin-left: 80px;
        }

        .card {
            margin-top: 70px;
            margin-left: 50px;
            box-shadow: 0 0 20px 4px #8b7ac9;
        }
    </style>
</head>

<body>
    <div class="row">
        <div class="col-md-6">
            <img src="img/ponyou.png" class="haku-img">
        </div>
        <div class="col-md-6">
            <div class="card" style="width: 30rem;">
                <div class="card-body">
                    <div class="container-sm">
                        <form action="" method="post">
                            <h1 class="texie">Feedback</h1>
                            <h6>Did you change your mind?</h6>
                            <br>
                            <input type="hidden" name="id" value="<?= $feed["id"] ?>"
                            <div class="mb-3">
                                <label class="form-label">Your Name</label>
                                <input type="text" class="form-control" name="ngaran" id="ngaran" required value="<?= $feed["ngaran"] ?>">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">What would you like to say?</label>
                                <input type="select" class="form-control" name="komen" id="komen" required value="<?= $feed["komen"] ?>">
                            </div>
                            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>