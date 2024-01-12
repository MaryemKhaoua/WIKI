<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
 
    <link rel="stylesheet" href="../../public/assets/css/style.css">
    <title>WiKi</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
		<div class="container">
        <a class="navbar-brand" href="" style="color: #1F2532;"><span style="color: #597E52;" class="nav-brand-two">Wi</span>Ki</a> 
            <button aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-bs-target="#navbarSupportedContent" data-bs-toggle="collapse" type="button"><span class="navbar-toggler-icon"></span></button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
					
					<li class="nav-item">
						<a class="nav-link navigation" href="about.html">About</a>
					</li>
					<li class="nav-item">
						<a class="nav-link ml-5 navigation" href="contact.html" >Contact</a>
					</li>
                    <li class="nav-item">
						<a class="nav-link ml-5 navigation" href="SignIn.php" >login</a>
					</li>
                    <!-- <li class="nav-item">
						<a class="nav-link ml-5 navigation" href="register.php" >register</a>
					</li> -->
				</ul>
			</div>
		</div>
	</nav>

    <main class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2 class="text-center mb-4">Inscription</h2>
                <form action="'?route=register'" method="POST" id="my-form">
                    <div class="form-group">
                        <label for="nom">Nom</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                        <div id="fname-error" class="error-message"></div>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                        <div id="email-error" class="error-message"></div>
                    </div>
                    <div class="form-group">
                        <label for="password">Mot de passe</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                        <div id="pass-error" class="error-message"></div>
                    </div>
                    <button type="submit"  name='action' value='signup' class="btn btn-primary btn-block">S'inscrire</button>
                    <p class="mt-3">Vous avez déjà un compte? <a href="SignIn.php">Se connecter</a></p>
                </form>
            </div>
        </div>
    </main>




    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>