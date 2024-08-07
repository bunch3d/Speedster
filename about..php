<?php

<html>
<head>
	<title>Speedster</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>

  


</head>
<body>
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
              
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Talk to us
                        </a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="about.html">About</a></li>
                          <li><a class="dropdown-item" href="faq.html">F.A.Q.S</a></li>
                          <li><a class="dropdown-item" href="testimonials.html">Testimonials</a></li>
                        </ul>
                      </li>
                    </ul>

                    <!---Put the search bar to the Right-->
                  
                  </div>
                </div>
              </nav>
	</div>
	</header>




    <!-- Custom styles for this template -->
    <link href="heroes.css" rel="stylesheet">
  </head>
  <body>
    
<main>
  <h1 class="visually-hidden">Heroes examples</h1>

  <div class="px-4 py-5 my-5 text-center">
    <h1 class="display-5 fw-bold">About Us</h1>
    <div class="col-lg-6 mx-auto">
      <p class="lead mb-4">At Speedster, we're dedicated to providing a comprehensive range of services to ensure your vehicle runs at its best. Our state-of-the-art service center is equipped with the latest technology and staffed by factory-trained technicians who specialize in high-performance and luxury vehicles.</p>
      <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
        <button type="button" class="btn btn-primary btn-lg px-4 gap-3">Click here to find out more about us.</button>
      </div>
    </div>
  </div>

  <div class="b-example-divider"></div>

    <div class="overflow-hidden" style="max-height: 60vh;">
      <div class="container px-5">
        <img src="img/2022 toyota gr86.jpg" class="img-fluid border rounded-3 shadow-lg mb-4" alt="Example image" width="700" height="500" loading="lazy">
      </div>
    </div>
  </div>

  <div class="b-example-divider"></div>

  <div class="container col-xxl-8 px-4 py-5">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
      <div class="col-10 col-sm-8 col-lg-6">
        <img src="img/2023 mercedes amg c63.jpg" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
      </div>
      <div class="col-lg-6">
        <h1 class="display-5 fw-bold lh-1 mb-3">Mission</h1>
        <p class="lead">At Precision Auto Sales, our mission is to provide exceptional automotive services and a seamless car-buying experience. We are committed to delivering high-quality vehicles, personalized customer service, and comprehensive maintenance solutions to ensure our customers' safety, satisfaction, and long-term trust."</p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start">

        </div>
      </div>
    </div>
  </div>

  <div class="b-example-divider"></div>

  <div class="container col-xl-10 col-xxl-8 px-4 py-5">
    <div class="row align-items-center g-lg-5 py-5">
      <div class="col-lg-7 text-center text-lg-start">
        <h1 class="display-4 fw-bold lh-1 mb-3">Our Vision</h1>
        <p class="col-lg-10 fs-4">To be the leading car dealership recognized for our integrity, innovation, and customer-centric approach, setting new standards in the automotive industry. We strive to create lasting relationships with our customers and community by offering the best in automotive solutions and continuously adapting to their evolving needs.</p>
      </div>
      <div class="col-md-10 mx-auto col-lg-5">
        <form class="p-4 p-md-5 border rounded-3 bg-light">
          <div class="form-floating mb-3">
            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Email address</label>
          </div>
          <div class="form-floating mb-3">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
          </div>
          <div class="checkbox mb-3">
            <label>
              <input type="checkbox" value="remember-me"> Remember me
            </label>
          </div>
          <button class="w-100 btn btn-lg btn-primary" type="submit">Sign up</button>
          <hr class="my-4">
          <small class="text-muted">By clicking Sign up, you agree to the terms of use.</small>
        </form>
      </div>
    </div>
  </div>

  <div class="b-example-divider"></div>

  <div class="container my-5">
    <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
      <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">

        </div>
      </div>
      <div class="col-lg-4 offset-lg-1 p-0 overflow-hidden shadow-lg">
          <img class="rounded-lg-3" src="bootstrap-docs.png" alt="" width="720">
      </div>
    </div>
  </div>

  <div class="b-example-divider"></div>

  <div class="bg-dark text-secondary px-4 py-5 text-center">
    <div class="py-5">
        </div>
      </div>
    </div>
  </div>

  <div class="b-example-divider mb-0"></div>
</main>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>

</body>
</html>


<!---

<div class="dropdown">
  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
    Dropdown link
  </a>

  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">Action</a></li>
    <li><a class="dropdown-item" href="#">Another action</a></li>
    <li><a class="dropdown-item" href="#">Something else here</a></li>
  </ul>
</div>




-->