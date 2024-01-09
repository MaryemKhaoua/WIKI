
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login Form</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link href="../../public/assets/css/style.css" rel="stylesheet">
</head>
<body>
<header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#"><span style="color: #339898;">Wi</span><span style="color: #343a40;">Ki</span></a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <button class="btn btn-primary">Connexion</button>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          <h2 class="text-center">Login</h2>
        </div>
        <div class="card-body">
        <form action='../../index.php' method='POST'>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" name='email' placeholder="Enter your email" required>
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" id="password" name='password' placeholder="Enter your password" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block" name='action' value='login'>Login</button></form>
            <p class='mt-3'>
                Don't have an account ? 
                <a href="SignUp.php">Sign Up</a>
            </p>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="../../public/assets/js/script.js"></script>
</body>
</html>