
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login Form</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../../public/assets/css/style.css">
</head>
<body>
<header>
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
		<div class="container">
        <a class="navbar-brand" href="home.php" style="color: #1F2532;"><span style="color: #597E52;" class="nav-brand-two">Wi</span>Ki</a> 
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
    </header>
    
<div class="container mt-5">
  <center><h1>Log In</h1></center> 
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          <h2 class="text-center">Login</h2>
        </div>
        <div class="card-body">
        <form action='?route=signin' method='POST'>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" name='email' placeholder="Enter your email" required>
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" id="password" name='password' placeholder="Enter your password" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block" name='action' value='signin'>Login</button></form>
            <p class='mt-3'>
                Don't have an account ? 
                <a href="register.php">Sign Up</a>
            </p>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>