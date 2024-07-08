<?php


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="msapplication-tap-highlight" content="no">
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="style.css" type="stylesheet">

  
  <header>
        <div class="dropdown">
              <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">
                  <a class="navbar-brand" href="#">Speedster</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.html">Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="about.html">About</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="inventory.html">Inventory</a>
                      </li>
              
                      <li class="nav-item">
                        <a class="nav-link" href="services.html">Services</a>
                      </li>
              
                      <li class="nav-item">
                        <a class="nav-link" href="inventory.html">Inventory</a>
                      </li>

                      <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                      </li>

                      <li class="nav-item">
                        <a class="nav-link" href="register.php">Sign Up</a>
                        </li>
              
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Talk to us
                        </a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="about.html">About</a></li>
                          <li><a class="dropdown-item" href="faq.html">F.A.Q.S</a></li>
                          <li><a class="dropdown-item" href="testimonals.html">Testimonials</a></li>
                        </ul>
                      </li>
                    </ul>

                    <!---Put the search bar to the Right-->
                    
                  </div>
                </div>
              </nav>
    </div>
    </header>
    
    <section class="vh-100">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6 text-black">

        <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">

          <form style="width: 23rem;">

            <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Log in</h3>

            <div data-mdb-input-init class="form-outline mb-4">
              <input type="email" id="form2Example18" name="email" class="form-control form-control-lg" />
              <label class="form-label" for="form2Example18">Email address</label>
            </div>

            <div data-mdb-input-init class="form-outline mb-4">
              <input type="password" name="password" id="form2Example28" class="form-control form-control-lg" />
              <label class="form-label" for="form2Example28">Password</label>
            </div>

            <div class="pt-1 mb-4">
              <button data-mdb-button-init data-mdb-ripple-init class="btn btn-info btn-lg btn-block" type="button">Login</button>
            </div>

            <p class="small mb-5 pb-lg-2"><a class="text-muted" href="#!">Forgot password?</a></p>
            <p>Don't have an account? <a href="register.php" class="link-info">Register here</a></p>

          </form>

        </div>

      </div>
      <div class="col-sm-6 px-0 d-none d-sm-block">
        <img src="img/img3.webp"
          alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: left;">
      </div>
    </div>
  </div>
</section>
</html>