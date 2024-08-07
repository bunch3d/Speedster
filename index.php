<?php?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Speedster Cars - Home</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
    <!-- Header section -->
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
    
    
   <!-- <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
    
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/2020 BMW 330i.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>2020 BMW 330i</h5>
              <p>The 2020 BMW 330i xDrive combines sporty handling with a powerful turbocharged engine and the surefooted grip of all-wheel drive.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/2021 ford mustang mach 1.jpg"  class="d-block w-100" alt="...">
            < div class="carousel-caption d-none d-md-block">
              <h5>Ford Mustang Mach 1</h5>
              <p>The Mustang Mach 1 bridges the gap between classic muscle car looks and modern performance.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/2022 porsche 911 gt3.jpg"  class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Porsche 911 GT3</h5>
              <p>The Porsche 911 GT3 is a track-focused machine with a screaming high-revving engine, offering a pure and thrilling driving experience.</p>
            </div>
          </div>
          <div class="carousel-item">
            <div class="carousel-caption d-none d-md-block">
              <h5>Nissan GTR R34</h5>
              <p>A legend of the 90s, the Nissan Skyline GT-R R34 dominated the streets with its all-wheel drive, twin-turbo fury.</p>
            </div>
            <img src="img/nissan gtr r34.jpeg"  class="d-block w-100" alt="...">
          </div>

          
          <div class="carousel-item">
            <div class="carousel-caption d-none d-md-block">
              <h5>2024 BMW X3</h5>
              <p>The 2024 BMW X3 offers a compelling combination of performance, comfort, and technology in a stylish package. It competes well with other luxury SUVs in its class. </p>
            </div>
            <img src="img/2024 bmw x3.jpg"  class="d-block w-100" alt="...">
          </div>
          
          <div class="carousel-item">
            <div class="carousel-caption d-none d-md-block">
              <h5>2023 Mercedes Benz GLC Plug-in-Hybrid</h5>
              <p>The 2023 Mercedes-Benz GLC Plug-in Hybrid prioritized refined performance and eco-conscious driving within the compact luxury SUV class.</p>
            </div>
            <img src="img/2023 mercedes benz glc class plug-in-hybrid.jpg" class="d-block w-100" alt="...">
          </div>
        </div> -->

        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="5" aria-label="Slide 6"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="img/2020 BMW 330i.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>BMW 330i</h5>
                <p>The BMW 330i strikes a compelling balance between exhilarating performance, refined handling, and a luxuriously appointed cabin, making it a strong contender in the compact sport sedan segment. </p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="img/2021 ford mustang mach 1.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>Ford Mustang Mach 1</h5>
                <p>The Ford Mustang Mach 1 revives a storied nameplate, offering a heritage-inspired aesthetic coupled with contemporary performance capabilities. </p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="img/2022 porsche 911 gt3.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>Porsche 911 GT3</h5>
                <p>A beast on the track and a head-turner on the street, the Porsche 911 GT3 is a high-performance machine for the driver who craves speed and a thrilling experience. </p>
              </div>

              
            <div class="carousel-item">
              <img src="img/2022 toyota gr86.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>Toyota GR86</h5>
                <p>Delivering sharp handling and a thrilling driving experience at an attainable price point, the Toyota GR86 is a compelling option for the enthusiast seeking an agile and affordable sports coupe. </p>
              </div>
            </div>

            
            <div class="carousel-item">
              <img src="img/2023 mercedes amg c63.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>2023 Mercedes AMG C63</h5>
                <p>The 2023 Mercedes-AMG C63 delivers a thrilling driving experience with its handcrafted V8 engine, seamlessly blending high performance with luxurious comfort and advanced engineering. </p>
              </div>
            </div>

            
            <div class="carousel-item">
              <img src="img/2023 mercedes benz glc class plug-in-hybrid.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>2023 Mercedes Benz GLC Plug-in-Hybrid</h5>
                <p>The 2023 Mercedes GLC combines electric power with gas for eco-friendly luxury driving.</p>
              </div>
            </div>

            
            <div class="carousel-item">
              <img src="img/2024 bmw x3.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>2024 BMW X3</h5>
                <p></p>
              </div>
            </div>

            
            <div class="carousel-item">
              <img src="img/2024 ram 1500 trx final edition.jpeg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>2024 Ram 1500 TRX final edition</h5>
                <p>Targeting both luxury and performance, the 2024 BMW X3 seamlessly integrates a powerful engine lineup with a comfortable, tech-laden interior within a sophisticated design. </p>
              </div>
            </div>

            
            <div class="carousel-item">
              <img src="img/nissan gtr r34.jpeg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>Nissan GTR R34</h5>
                <p>The Nissan Skyline GT-R R34 cemented its place in automotive history with its advanced all-wheel drive system and potent twin-turbocharged engine, becoming a dominant force on both street and track.</p>
              </div>
            </div>

            </div>
          </div>
          
        </div>

        

        <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button> -->
      </div>

    <!---div tag Multi Column length-->

    <!--class="row"-->

    

    <!-- Footer section -->
    <footer class="padding-top bg_black">
      <div class="bg-dark text-secondary px-4 py-5 text-center">
        <div class="py-5">
          <h1 class="display-5 fw-bold text-white">Dark mode hero</h1>
          <div class="col-lg-6 mx-auto">
            <p class="fs-5 mb-4">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
              <button type="button" class="btn btn-outline-info btn-lg px-4 me-sm-3 fw-bold">Custom button</button>
              <button type="button" class="btn btn-outline-light btn-lg px-7">Secondary</button>
            </div>
            <br>
            <br>
            <p>&copy; 2024 Speedster Cars. All rights reserved.</p>
           
          </div>
        </div>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>        
  </footer>
</body>
</html>