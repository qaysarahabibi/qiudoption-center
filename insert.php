<?php
require 'controllwer.php';
if (isset($_POST["submit"])) {
    if (insert($_POST) > 0) {
        echo "<script> 
        alert ('Hore! Thank you for adopting us!');
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
            background-color: #EDF1D6;
        }

        h1 {
            color: #40513B;
            text-align: center;
            font-weight: 700;
        }

        h6 {
            color: #609966;
            text-align: center;
            font-style: italic;
        }

        .heyo {
            color: #609966;
            margin-top: 25px;
        }

        .heyo::before {
            content: '';
            background-color: #40513B;
            height: 5px;
            width: 200px;
            margin-left: auto;
            margin-right: auto;
            display: block;
            transform: translateY(75px);
        }

        .heyo::after {
            content: '';
            background-color: #40513B;
            height: 10px;
            width: 50px;
            margin-left: auto;
            margin-right: auto;
            margin-bottom: 50px;
            display: block;
            transform: translateY(20px);
        }

        .btn {
            color: #40513B;
            background-color: #9DC08B;
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

        span {
            color: #40513B;
        }

        .haku-img {
            width: 75%;
            margin-top: 10px;
            margin-left: 60px;
        }

        .card {
            margin-top: 35px;
            margin-left: 50px;
            box-shadow: 0 0 20px 4px #9DC08B;
        }
    </style>
</head>

<body>
    <h1 class="heyo">Interested in <span>Adopting</span> Them?</h1>
    <div class="row">
        <div class="col-md-6">
            <img src="img/totorrro.png" class="haku-img">
        </div>
        <div class="col-md-6">
            <div class="card" style="width: 30rem;">
                <div class="card-body">
                    <div class="container-sm">
                        <form action="" method="post">
                            <h1 class="texie">Contact Us</h1>
                            <h6>Please, enter some data below!</h6>
                            <br>
                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Your Name</label>
                                <input type="text" class="form-control" name="nama" id="nama" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Who will you adopt?</label>
                                <select class="form-control" name="animals" autocomplete="off">
                                                <option value="">Choose Friends</option>
                                                <option value="Calcifer">Calcifer</option>
                                                <option value="Ahiru">Ahiru</option>
                                                <option value="Nekobasu">Nekobasu</option>
                                                <option value="Haku">Haku</option>
                                                <option value="Kakashi No Kabu">Kakashi No Kabu</option>
                                                <option value="Totoro">Totoro</option>
                                            </select>
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