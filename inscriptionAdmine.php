<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>SNEAKER SHOP</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">
</head>
<body>
<form method="post" action="testAdmin.php">
    <div class="modal-dialog modal-login">
        <div class="modal-content">
            <div class="modal-header"><h4 class="h4 modal-title">Inscription Admin</h4>
                <button class="btn btn-primary close" type="button" aria-hidden="true" data-bs-dismiss="modal"
                        style="background: rgb(50,111,125);">x
                </button>
            </div>
            <div class="modal-body">
                <form action="testAdmin.php" method="post">
                    <div class="form-group"><i class="fa fa-star fa-user"></i><input class="form-control" name="nomA" type="text"
                                                                                     placeholder="Nom"
                                                                                     required="required"
                                                                                     style="margin-bottom: 5px;"></div>
                    <div class="form-group"><i class="fa fa-star fa-user"></i><input class="form-control" name="prenomA" type="text"
                                                                                     placeholder="Prenom"
                                                                                     required="required"
                                                                                     style="margin-bottom: 5px;"></div>
                    <div class="form-group"><i class="fa fa-star fa-user"></i><input class="form-control" name="emailA" type="email"
                                                                                     placeholder="mail"
                                                                                     required="required"
                                                                                     style="margin-bottom: 5px;"></div>
                    <div class="form-group"><i class="fa fa-star fa-lock"></i><input class="form-control"
                                                                                     name="passwordA" type="password"
                                                                                     placeholder="Password"
                                                                                     required="required"
                                                                                     style="margin-bottom: 5px;"></div>
                    <div class="form-group" style="margin-left: 101px;">
                        <button class="btn btn-primary btn-block btn-lg" type="submit" value="Login"
                                style="margin-left: -25px;">Incription
                        </button>
                    </div>
                </form>
            </div>
            <div class="modal-footer"><a href="forgot.html">Forgot Password?</a></div>
        </div>
    </div>
</form>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>