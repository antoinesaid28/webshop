


<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<title>SNEAKER SHOP</title>
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:200,300,400,700&amp;display=swap">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
	<link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
	<link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
	<link rel="stylesheet" href="assets/fonts/ionicons.min.css">
	<link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
	<link rel="stylesheet" href="assets/css/Animated-Pretty-Product-List-v12.css">
	<link rel="stylesheet" href="assets/css/Contact-Form-Clean.css">
	<link rel="stylesheet" href="assets/css/Footer-Basic.css">
	<link rel="stylesheet" href="assets/css/Header-Blue.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/css/theme.bootstrap_4.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.css">
	<link rel="stylesheet" href="assets/css/Lightbox-Gallery.css">
	<link rel="stylesheet" href="assets/css/Login-Form-Dark.css">
	<link rel="stylesheet" href="assets/css/Ludens---Dark-Mode-Admin-Dashboard.css">
	<link rel="stylesheet" href="assets/css/Map-Clean.css">
	<link rel="stylesheet" href="assets/css/Pretty-Search-Form.css">
	<link rel="stylesheet" href="assets/css/Responsive-Product-Slider.css">
	<link rel="stylesheet" href="assets/css/Simple-Slider.css">
	<link rel="stylesheet" href="assets/css/styles.css">
	<link rel="stylesheet" href="assets/css/Tamplate-SB-Admin-on-BSS.css">
</head>

<body style="background: #002649;">
	<div class="container" style="position:absolute; left:0; right:0; top: 50%; transform: translateY(-50%); -ms-transform: translateY(-50%); -moz-transform: translateY(-50%); -webkit-transform: translateY(-50%); -o-transform: translateY(-50%);">
		<div class="row justify-content-center">
			<div class="col-md-10 col-lg-9 col-xl-9 col-xxl-7">
				<div class="card shadow-lg o-hidden border-0 my-5">
					<div class="card-body p-0">
						<div class="row">
							<div class="col-lg-12">
								<div class="p-5" style="color: rgb(33, 37, 41);background: #e0cee0;">
									<div class="text-center">
										<h4 class="text-dark mb-4">Admninistration SneakerShop&nbsp;</h4>
									</div>
									<form method='POST' action="connexionAdmin.php" class="user">
										<div class="mb-3">
											<input class="form-control form-control-user" type="email" id="emailA" aria-describedby="emailHelp" placeholder="Email" name="emailA" required="">
										</div>

										<div class="mb-3">
											<input class="form-control form-control-user" type="password" placeholder="Mot de passe" required="" name="passwordA">
										</div>

										<div class="row mb-3">
											<p id="errorMsg" class="text-danger" style="display:none;">Paragraph</p>
										</div><button class="btn btn-primary d-block btn-user w-100" id="submitBtn" type="submit" name="seconnecter">Se Connecter</button>
										<hr>
									</form>
                                    <?php
                                    if(isset($_GET['login_err']))
                                    {
                                        $err = htmlspecialchars($_GET['login_err']);

                                        switch($err)
                                        {
                                            case 'password':
                                                ?>
                                                <div class="alert alert-danger">
                                                    <strong>Erreur</strong> mot de passe incorrect
                                                </div>
                                                <?php
                                                break;

                                            case 'email':
                                                ?>
                                                <div class="alert alert-danger">
                                                    <strong>Erreur</strong> email incorrect
                                                </div>
                                                <?php
                                                break;

                                            case 'already':
                                                ?>
                                                <div class="alert alert-danger">
                                                    <strong>Erreur</strong> compte non existant
                                                </div>
                                                <?php
                                                break;
                                        }
                                    }
                                    ?>
                                    <div class="text-center"><a class="small" href="forgot-password.html">Mot de passe oublié ?</a>             <a class="small" href="index.php">Accueil ?</a></div>
									<div class="text-center"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>



		<script>
			let email = document.getElementById("emailA")
			let submitBtn = document.getElementById("submitBtn")
			let errorMsg = document.getElementById('errorMsg')

			function displayErrorMsg(e) {
				errorMsg.style.display = "block"
				errorMsg.innerHTML = e
				submitBtn.disabled = true
			}

			function hideErrorMsg() {
				errorMsg.style.display = "none"
				submitBtn.disabled = false
			}

			// Validate email upon change
			email.addEventListener("change", function() {
				// Check if the email is valid using a regular expression (string@string.string)
				if (email.value.match(/^[^@]+@[^@]+\.[^@]+$/))
					hideErrorMsg()
				else
					displayErrorMsg("Invalid email")
			});
		</script>
	</div>
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
	<script src="assets/js/Animated-Pretty-Product-List-v12.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/js/jquery.tablesorter.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/js/widgets/widget-filter.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/js/widgets/widget-storage.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.js"></script>
	<script src="assets/js/Lightbox-Gallery.js"></script>
	<script src="assets/js/Ludens---Dark-Mode-Admin-Dashboard-1.js"></script>
	<script src="assets/js/Ludens---Dark-Mode-Admin-Dashboard-2.js"></script>
	<script src="assets/js/Ludens---Dark-Mode-Admin-Dashboard-3.js"></script>
	<script src="assets/js/Ludens---Dark-Mode-Admin-Dashboard-4.js"></script>
	<script src="assets/js/Ludens---Dark-Mode-Admin-Dashboard-5.js"></script>
	<script src="assets/js/Ludens---Dark-Mode-Admin-Dashboard.js"></script>
	<script src="assets/js/Simple-Slider.js"></script>
</body>

</html>