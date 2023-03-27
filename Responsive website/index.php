<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ArduinoProject</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
    <script src="https://kit.fontawesome.com/8725276fcc.js" crossorigin="anonymous"></script>
</head>

<body data-bs-spy="scroll" data-bs-target="#navbar" data-bs-offset="82">

    <nav id="navbar" class="navbar navbar-expand-lg position-fixed top-0 w-100 py-3">
        <div class="container">
            <a class="navbar-brand" href="#"><i class="fas fa-robot"></i> arduino<span class="blue-text">project
                </span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link active" href="#home">Home</a>
                    <a class="nav-link" href="#aboutproject">about project</a>
                    <a class="nav-link" href="#mechanics">mechanics</a>
                    <a class="nav-link" href="#electronics">electronics</a>
                    <a class="nav-link" href="#application">application</a>
                    <a class="nav-link" href="#achievements">achievements</a>
                    <a class="nav-link" href="#login">login</a>
                    <a class="nav-link" href="#contact">contact</a>
                </div>
            </div>
        </div>
    </nav>
    <header>
        <div id="home" class="hero-img">
            <div class="hero-shadow"></div>
            <div class="hero-text">
                <h1 data-aos="fade-up" data-aos-delay="300">Welcome to <span class="blue-text">arduino project</span>
                </h1>
                <p data-aos="fade-up" data-aos-delay="500">poznajcie to the amazing word of arduino</p>
                <a data-aos="fade-up" data-aos-delay="700" href="#aboutproject" type="button"
                    class="btn btn-outline-light">more</a>
            </div>
            <a href="#aboutproject"><i class="fas fa-chevron-down bounce-top"></i></a>
        </div>
    </header>

    <main>
        <section id="aboutproject" class="aboutproject py-4">
            <div class="container">
                <h2>about project</h2>
                <div class="underline"></div>
                <h5 class="py-3">Thanks to this project, you will learn about the construction of a car remotely controlled from the mechanical and electrical parts as well as the necessary programming functions</h5>
                <div class="container">

                    <!-- PORTFOLIO NA MOBILE -->

                    <div class="card-group d-lg-none">
                        <div class="card me-sm-3">
                            <img src="./img/1.jpg" class="card-img-top" alt="pokazane autko na dworze">
                            <div class="card-body">
                                <h5 class="card-title">For enthusiasts</h5>
                               

                            </div>
                        </div>
                        <div class="card me-sm-3">
                            <img src="./img/2.jpg" class="card-img-top" alt="pokazane autko na dworze">
                            <div class="card-body">
                                <h5 class="card-title">For students</h5>
                              
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                        <div class="card me-sm-3">
                            <img src="./img/3.jpg" class="card-img-top" alt="pokazane autko na dworze">
                            <div class="card-body">
                                <h5 class="card-title">For beginners</h5>
                               
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                        <div class="card me-sm-3">
                            <img src="./img/4.jpg" class="card-img-top" alt="pokazane autko na dworze">
                            <div class="card-body">
                                <h5 class="card-title">For companies</h5>
                               

                            </div>
                        </div>
                        <div class="card">
                            <img src="./img/5.jpg" class="card-img-top" alt="pokazane autko na dworze">
                            <div class="card-body">
                                <h5 class="card-title">For everyone</h5>
                               

                            </div>
                        </div>
                    </div>

                    <!-- PORTFOLIO NA DESKTOPY-->

                    <div id="carouselExampleCaptions" class="carousel slide d-none d-lg-block" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"
                                aria-label="Slide 4"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4"
                                aria-label="Slide 5"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="./img/g1hd.jpg" class="d-block w-100" alt="pokazane autko na dworze">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>For enthusiasts</h5>
                                    
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="./img/2hd.jpg" class="d-block w-100" alt="pokazane autko na dworze">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>For students</h5>
                                    
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="./img/3hd.jpg" class="d-block w-100" alt="pokazane autko na dworze">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>For beginners</h5>
                                    
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="./img/4hd.jpg" class="d-block w-100" alt="pokazane autko na dworze">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>For companies</h5>
                                    
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="./img/5hg.jpg" class="d-block w-100" alt="pokazane autko na dworze">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>For everyone</h5>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <div class="row py-4 pt-5">
                    <div class="col-sm-6 col-md-4 text-center aboutproject-hover" data-aos="zoom-in"
                        data-aos-delay="100">
                        <p><i class="fas fa-mobile-alt"></i></p>
                        <p class="aboutproject-card-title mb-1">mobile application</p>
                        <p class="aboutproject-card-text">An application that allows you to control car</p>
                    </div>
                    <div class="col-sm-6 col-md-4 text-center aboutproject-hover" data-aos="zoom-in"
                        data-aos-delay="200">
                        <p><i class="fas fa-desktop"></i></p>
                        <p class="aboutproject-card-title mb-1">responsive web design</p>
                        <p class="aboutproject-card-text">We create friendly and modern websites</p>
                    </div>
                    <div class="col-sm-6 col-md-4 text-center aboutproject-hover" data-aos="zoom-in"
                        data-aos-delay="300">
                        <p><i class="fas fa-file-code"></i></p>
                        <p class="aboutproject-card-title mb-1">highest standards</p>
                        <p class="aboutproject-card-text">We maintain the highest standards when writing code.</p>
                    </div>
                    <div class="col-sm-6 col-md-4 text-center aboutproject-hover" data-aos="zoom-in"
                        data-aos-delay="400">
                        <p><i class="fas fa-tools"></i></p>
                        <p class="aboutproject-card-title mb-1">Easy to build</p>
                        <p class="aboutproject-card-text">The construction was based on Lego technic bricks</p>
                    </div>
                    <div class="col-sm-6 col-md-4 text-center aboutproject-hover" data-aos="zoom-in"
                        data-aos-delay="500">
                        <p><i class="fas fa-microchip"></i></p>
                        <p class="aboutproject-card-title mb-1">Arduino uno</p>
                        <p class="aboutproject-card-text">The car was built on an arduino uno board</p>
                    </div>
                    <div class="col-sm-6 col-md-4 text-center aboutproject-hover" data-aos="zoom-in"
                        data-aos-delay="600">
                        <p><i class="fas fa-dollar-sign"></i></p>
                        <p class="aboutproject-card-title mb-1">cheap</p>
                        <p class="aboutproject-card-text">Construction budget does not exceed 20$</p>
                    </div>
                </div>
            </div>
        </section>


        <section id="mechanics" class="mechanics py-5">
            <h2>mechanics</h2>
            <div class="underline"></div>
            <div class="container py-5">
                <div class="row">
                    <div class="col-md-3">
                        <div class="mt-3 mb-4 list-align py-6">
                            <p>
                            <p>
                            <h3>Short description</h3>
                            </p>
                            <ul>
                                <li class="py-3">Steering front axle</li>
                                <li class="py-3">Limit sensors that limit the maximum turning of the wheels</li>
                                <li class="py-3">Drive on the rear axle</li>
                                <li class="py-3">Durable skeleton</li>
                                <li class="py-3">Light construction</li>
                            </ul>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 w-75">
                        <img src="./img/1hd.jpg" class="d-block img-fluid " alt="">
                    </div>
                </div>
            </div>
        </section>
        <section id="electronics" class="electronics py-5">
            <h2>electronics</h2>
            <div class="underline"></div>
            <div class="container py-5">
                <div class="row">
                    <div class="col-md-6 w-75 ">
                        <img src="./img/10hd.jpg" class="d-block img-fluid" alt="">
                    </div>
                    <div class="col-md-3">
                        <div class="mt-3 mb-4 list-align">
                            <p>
                            <p>
                            <h3>Short description</h3>
                            </p>
                            <ul class="pt-5 ">
                                <li class="py-3">Electrical diagram</li>
                                <li class="py-3">Simple diagram</li>
                                <li class="py-3">Fast action</li>
                                <li class="py-3">Easy connection of components</li>
                                <li class="py-3 pb-5">The use of a small number of components</li>
                                <p class="contact-info pt-5">Download the full documentation at the <a href="#linkiem"> link.</a></p>

                            </ul>
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <section id="application" class="application py-4">
            <h2>application</h2>
            <div class="underline"></div>
            <div class="container py-3">
                <div id="carouselExampleFade" class="carousel slide d-none d-lg-block" data-bs-ride="carousel">
                    <div class="carousel-inner p-1  pb-5 pt-3">
                        <div class="carousel-item active ">
                            <img src="./img/13hd.jpg" data-aos="flip-left" data-aos-duration="1000"
                                class="d-block w-100" alt="Ruch drogowy">
                        </div>
                        <div class="carousel-item">
                            <img src="./img/nasa.jpg" data-aos="flip-left""  data-aos-duration=" 1000"
                                class="d-block w-100" alt="Wykorzytsanie w misji w kosmos">
                        </div>
                        <div class="carousel-item">
                            <img src="./img/dziecko.jpg" data-aos="flip-left" data-aos-duration="1000"
                                class="d-block w-100" alt="bawiące się dzieci">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>

        </section>


        <section id="achievements" class="achievements py-4">
            <h2>achievements</h2>
            <div class="underline"></div>
            <div class="container py-3">
                <div class="row text-center achievements-list">

                    <div class="col-md-6 col-lg-4 col-xl-2 achievement" data-aos="zoom-in" data-aos-delay="300">
                        <i class="fas fa-thumbs-up"></i>
                        <p class="achievement-number">100%</p>
                        <p class="achievement-text">positive opinions</p>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-2 achievement" data-aos="zoom-in" data-aos-delay="200">
                        <i class="fas fa-trophy"></i>
                        <p class="achievement-number">37</p>
                        <p class="achievement-text">awords won</p>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-2 achievement" data-aos="zoom-in" data-aos-delay="500">
                        <i class="fas fa-share-alt"></i>
                        <p class="achievement-number">30.000</p>
                        <p class="achievement-text">fans on social media</p>
                    </div>

                    <div class="col-md-6 col-lg-4 col-xl-2 achievement" data-aos="zoom-in" data-aos-delay="300">
                        <i class="fas fa-dice"></i>
                        <p class="achievement-number">4</p>
                        <p class="achievement-text">projects created</p>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-2 achievement" data-aos="zoom-in" data-aos-delay="500">
                        <i class="fas fa-user-friends"></i>
                        <p class="achievement-number">2</p>
                        <p class="achievement-text">workers</p>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-2 achievement" data-aos="zoom-in" data-aos-delay="300">
                        <i class="fas fa-globe-americas"></i>
                        <p class="achievement-number">5</p>
                        <p class="achievement-text">continents</p>
                    </div>



                </div>

            </div>

        </section>

        <section id="login" class="contact py-4  bg-dark">
            <h2 class="text-warning">Login</h2>
            <div class="underline"></div>
            <div class="container bg-dark" >
                <?php
                if(isSet($_POST['login'])) {
                    include 'dbh.php';

                    if(!empty($_POST['email']) && !empty($_POST['password']) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                        $checkUser = $dbh->prepare('SELECT * FROM `users` WHERE `email`=:email');
                        $checkUser->bindParam(':email', $_POST['email']);
                        $checkUser->execute();
                        if($checkUser->rowCount() == 1) {
                            $row = $checkUser->fetch();
                            if(password_verify($_POST['password'], $row['password'])) {
                                $_SESSION['user_email'] = $_POST['email'];
                                echo '<div class="alert alert-success rounded">Pomyślnie zalogowano.</div>';
                            } else {
                                echo '<div class="alert alert-danger rounded">Błędny email lub/i hasło.</div>';
                            }
                        } else {
                            echo '<div class="alert alert-danger rounded">Błędny email lub/i hasło.</div>';
                        }
                    } else {
                        echo '<div class="alert alert-danger rounded">Błędny email lub/i hasło.</div>';
                    }
                }

                if(isSet($_POST['register'])) {
                    include 'dbh.php';

                    if(!empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['password_repeat']) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                        $checkUser = $dbh->prepare('SELECT * FROM `users` WHERE `email`=:email');
                        $checkUser->bindParam(':email', $_POST['email']);
                        $checkUser->execute();
                        if($checkUser->rowCount() == 0) {
                            if(strlen($_POST['password']) >= 5 && strlen($_POST['password']) <= 15) {
                                if ($_POST['password'] === $_POST['password_repeat']) {
                                    $addUser = $dbh->prepare('INSERT INTO `users`(`email`, `password`, `created_at`) VALUES (:email, :password, NOW())');
                                    $addUser->bindParam(':email', $_POST['email']);
                                    $addUser->bindValue(':password', password_hash($_POST['password'], PASSWORD_DEFAULT));
                                    if ($addUser->execute()) {
                                        echo '<div class="alert alert-success rounded">Pomyślnie utworzono użytkownika: <b>' . $_POST['email'] . '</b>, od teraz możesz się zalogować.</div>';
                                    } else {
                                        echo '<div class="alert alert-danger rounded">Spróbuj ponownie później.</div>';
                                    }
                                } else {
                                    echo '<div class="alert alert-danger rounded">Hasła różnią się od siebie.</div>';
                                }
                            } else {
                                echo '<div class="alert alert-danger rounded">Hasło musi zawierać od 5-15 znaków.</div>';
                            }
                        } else {
                            echo '<div class="alert alert-danger rounded">Taki użytkownik już istnieje.</div>';
                        }
                    } else {
                        echo '<div class="alert alert-danger rounded">Błędny email lub/i hasła.</div>';
                    }
                }
                ?>
                <div class="card card-body bg-warning">
                    <?php if(!isSet($_SESSION['user_email'])) {?>
                        <form action="#" method="post">
                            <p class="text-uppercase">Możliwość logowania:</p>
                            <p class="size">Podaj email</p>
                            <input type="email" name="email" />
                            <p class="size" >Podaj hasło</p>
                            <input type="password" name="password" />
                            <button type="submit" class="btn-secondary" name="login">Zaloguj</button>
                        </form>
                    <?php } else { ?>
                        <h4>Witaj, <b><?php echo $_SESSION['user_email']; ?></b><a href="logout.php"><button class="btn btn-primary rounded">Wyloguj</button></a></h4>
                        <p>Od teraz możesz pobierać dokumentację.</p>
                        <a href="https://cdn.forbot.pl/blog/wp-content/uploads/2016/08/arduino_uno_schemat.png" target="_blank"><button class="btn btn-primary btn-sm">Pobierz</button></a>
                    <?php } ?>
                </div>

                <div class="card card-body bg-warning">
                    <?php if(!isSet($_SESSION['user_email'])) {?>
                        <form action="#" method="post" class = "login_" >
                            <p class="text-uppercase">Możliwość rejstracji</p>
                            <p>Podaj eamil</p>
                            <input type="email" name="email" />
                            <p>Podaj hasło</p>
                            <input type="password" name="password" />
                            <p>Powtórz hasło</p>
                            <input type="password" name="password_repeat" />
                            <button type="submit"class="btn-secondary" name="register">Zarejestruj</button>
                        </form>
                    <?php } ?>
                </div>
            </div>
        </section>

        <section id="contact" class="contact py-4">
            <h2>contact</h2>
            <div class="underline"></div>
            <div class="container">
                <div class="row text-center contact-us">

                    <div class="col-sem-6 col-lg-4 contact-item">
                        <h3>headquarters</h3>
                        <p>ul. Kochanowskiego </p>
                        <p>46-222 Gliwice</p>
                        <p>+48 000 000 000</p>
                        <p>arduinoproject@mail.pl</p>
                    </div>
                    <div class="col-lg-4 order-0 oreder-lg-1 contact-item xd">
                        <h3>social media</h3>
                        <div class="social-media">
                            <a href="#"><i class="fab fa-facebook-f p-3"></i></a>
                            <a href="#"><i class="fab fa-twitter p-3"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in p-3"></i></a>
                        </div>
                    </div>
                    <div class="col-sem-6 col-lg-4 contact-item order-1">
                        <h3>disclaimer</h3>
                        <button type="button" class="btn btn-outline-secondary">Download</button>
                    </div>
                </div>
            </div>
    </main>

    <footer class="bg-dark text-light py-4 text-center">
        <p class="mb-0"> &copy; 2021 | ArduinoProject</p>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
        </script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="js/main.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            startEvent: 'DOMContentLoaded',
            offset: 200,
            once: true
        });
    </script>
</body>

</html>