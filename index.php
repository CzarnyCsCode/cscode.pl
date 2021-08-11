<!--=============================================================================

                    Wszelkie prawa zastrzeżone © 2021 CSCode.pl
                    Email: Biznes@CSCode.pl
                    FB: https://facebook.com/cscodepl

                    ZAKAZ KOPIOWANIA!
=============================================================================-->

<!DOCTYPE html>
<html lang="pl">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>CSCode - Spełnimy Twoje oczekiwania!</title>
  <meta content="Ekipa Devs" name="description">
  <meta content="Developers, front-end, back-end, cscode.pl, cscode, web, desktop" name="keywords">

 <!--========= S FVN ==========-->
  <link href="assets/img/favicon.png" rel="icon">
  <!--========= END S FVN ==========-->

   <!--========= S FNT ==========-->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="https://www.1001fonts.com/uni-sans-font.html" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
   <!--========= END S FNT ==========-->

   <!--========= S VNR CSS ==========-->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <!--========= END S VNR CSS ==========-->

<!--========= S MAIN CSS ==========-->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/ld.css" rel="stylesheet">
<!--========= END S MAIN CSS ==========-->
<script src="https://kit.fontawesome.com/848b1b085b.js" crossorigin="anonymous"></script>
</head>

<body>



  <!--========= S HDR ==========-->

  <header id="header" class="fixed-top ">
    <div class="container-fluid">

      <div class="row justify-content-center">
        <div class="col-xl-9 d-flex align-items-center">
          <h1 class="logo mr-auto"><a href="index.php">cscode.pl</a></h1>
          <nav class="nav-menu d-none d-lg-block">
            <ul>
              <li class="active"><a href="index.php">Strona Główna</a></li>
              <li><a href="#about">Nasze Umiejętności</a></li>
              <li><a href="#services">Usługi</a></li>
              <li><a href="#portfolio">Nasze Projekty</a></li>
              <li><a href="#faq">Pytania</a></li>
              <li><a href="#contact">Kontakt</a></li>

            </ul>
          </nav>

          <a href="login.php" class="get-started-btn scrollto">Zaloguj się</a>
        </div>
      </div>

    </div>
  </header>

  <!--========= END S HDR ==========-->


  <!--========= S BG ==========-->

  <section id="hero" class="d-flex align-items-center">

    <div class="container-fluid" data-aos="fade-up">
      <div class="row justify-content-center">
        <div class="col-xl-5 col-lg-6 pt-3 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1>Witaj!</h1>
          <h2>Postaramy się spełnić twoje oczekiwania!</h2>
          <div><a href="login.php" class="btn-get-started scrollto">Zaloguj się</a></div>
        </div>
        <div class="col-xl-4 col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="150">
          <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section>

   <!--========= END S BG ==========-->

  <!--========= S MAIN ==========-->

  <main id="main">

  <!--========= S SKILLS ==========-->

    <section id="about" class="about">
      <div class="container">

        <div class="row justify-content-md-center">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="150">
            <img src="assets/img/skills.png" class="img-fluid animated" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right">
           <div class="skill-bars">
            <div class="bar">
              <div class="info">
                <span>HTML</span>
              </div>
              <div class="progress-line html">
                <span></span>
              </div>
            </div>
            <div class="bar">
              <div class="info">
                <span>CSS</span>
              </div>
              <div class="progress-line css">
                <span></span>
              </div>
            </div>
            <div class="bar">
              <div class="info">
                <span>jQuery</span>
              </div>
              <div class="progress-line jquery">
                <span></span>
              </div>
            </div>
            <div class="bar">
              <div class="info">
                <span>PHP</span>
              </div>
              <div class="progress-line php">
                <span></span>
              </div>
            </div>
            <div class="bar">
              <div class="info">
                <span>Python</span>
              </div>
              <div class="progress-line python">
                <span></span>
              </div>
            </div>
            <div class="bar">
              <div class="info">
                <span>MySQL</span>
              </div>
              <div class="progress-line mysql">
                <span></span>
              </div>
            </div>
            </div>
          </div>
        </div>

      </div>
      <script>
      const pass_field = document.querySelector('.pass-key');
      const showBtn = document.querySelector('.show');
      showBtn.addEventListener('click', function(){
       if(pass_field.type === "password"){
         pass_field.type = "text";
         showBtn.textContent = "HIDE";
         showBtn.style.color = "#3498db";
       }else{
         pass_field.type = "password";
         showBtn.textContent = "SHOW";
         showBtn.style.color = "#222";
       }
      });
    </script>
    </section>

    <!--========= END S SKILLS ==========-->

    <!--========= S STATS ==========-->
    <section id="counts" class="counts">
      <div style="display:flex; margin-top: -60px; height: 150px; overflow: hidden;" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M0.00,49.98 C158.86,114.95 271.49,-49.98 500.00,49.98 L500.00,0.00 L0.00,0.00 Z" style=" stroke: none; fill: #fff;"></path></svg></div>
        <div class="container">
          
          <div class="row counters">

            <div class="col-lg-3 col-6 text-center">
              <span data-toggle="counter-up">232</span>
              <p>Klientów</p>
            </div>

            <div class="col-lg-3 col-6 text-center">
              <span data-toggle="counter-up">521</span>
              <p>Projektów</p>
            </div>

            <div class="col-lg-3 col-6 text-center">
              <span data-toggle="counter-up">1,463</span>
              <p>Godzin Pracy</p>
            </div>

            <div class="col-lg-3 col-6 text-center">
              <span data-toggle="counter-up">15</span>
              <p>Pomyślnych zleceń</p>
            </div>

          </div>
        

      </div>
    </section>
    <div style="margin-top: -160px; height: 150px; overflow: hidden;" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M-22.29,76.47 C109.20,246.20 349.03,-21.20 504.79,123.84 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #fff;"></path></svg></div>
    

    <!--========= END S STATS ==========-->

    <!--========= S SRV ==========-->
    
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Usługi</h2>
          <p>Usługi które, wykonuję są przedstawione poniżej</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box iconbox-blue">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174"></path>
                </svg>
                <i class="bi bi-menu-up"></i>
              </div>
              <h4><a href="">Strony, Sklepy internetowe</a></h4>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box iconbox-blue ">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,582.0697525312426C382.5290701553225,586.8405444964366,449.9789794690241,525.3245884688669,502.5850820975895,461.55621195738473C556.606425686781,396.0723002908107,615.8543463187945,314.28637112970534,586.6730223649479,234.56875336149918C558.9533121215079,158.8439757836574,454.9685369536778,164.00468322053177,381.49747125262974,130.76875717737553C312.15926192815925,99.40240125094834,248.97055460311594,18.661163978235184,179.8680185752513,50.54337015887873C110.5421016452524,82.52863877960104,119.82277516462835,180.83849132639028,109.12597500060166,256.43424936330496C100.08760227029461,320.3096726198365,92.17705696193138,384.0621239912766,124.79988738764834,439.7174275375508C164.83382741302287,508.01625554203684,220.96474134820875,577.5009287672846,300,582.0697525312426"></path>
                </svg>
                <i class="bi bi-shop"></i>
              </div>
              <h4><a href="">Sklepy internetowe</a></h4>
            </div>
          </div>

          

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box iconbox-blue">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,503.46388370962813C374.79870501325706,506.71871716319447,464.8034551963731,527.1746412648533,510.4981551193396,467.86667711651364C555.9287308511215,408.9015244558933,512.6030010748507,327.5744911775523,490.211057578863,256.5855673507754C471.097692560561,195.9906835881958,447.69079081568157,138.11976852964426,395.19560036434837,102.3242989838813C329.3053358748298,57.3949838291264,248.02791733380457,8.279543830951368,175.87071277845988,42.242879143198664C103.41431057327972,76.34704239035025,93.79494320519305,170.9812938413882,81.28167332365135,250.07896920659033C70.17666984294237,320.27484674793965,64.84698225790005,396.69656628748305,111.28512138212992,450.4950937839243C156.20124167950087,502.5303643271138,231.32542653798444,500.4755392045468,300,503.46388370962813"></path>
                </svg>
                <i class="bx bx-layer"></i>
              </div>
              <h4><a href="">Aplikacje desktopowe</a></h4>
              <p>już w krótce..</p>
            </div>
          </div>


        </div>

      </div>
    </section>

    <!--========= END S SRV ==========-->


   

    <!--========= S PRJC ==========-->

    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Zrealizowane Projekty</h2>
          <p>Tu znajdują się zrealizowane projekty.</p>
        </div>

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-card">Card</li>
              <li data-filter=".filter-web">Web</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/project-end/web-3.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 1</h4>
                <p>App</p>
              </div>
              <div class="portfolio-links">
                <a href="assets/img/project-end/web-3.png" data-gall="portfolioGallery" class="venobox" title="App 1"></i></a>
                <a href="portfolio-details.html" title="Przejdź"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/project-end/web-1.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Kacix.dsg</h4>
                <p>Web</p>
              </div>
              <div class="portfolio-links">
                <a href="assets/img/project-end/web-3.png" data-gall="portfolioGallery" class="venobox" title="Web 3"></i></a>
                <a href="#portfolio" title="Strona nieaktywna"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/project-end/web-3.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 2</h4>
                <p>App</p>
              </div>
              <div class="portfolio-links">
                <a href="assets/img/project-end/web-3.png" data-gall="portfolioGallery" class="venobox" title="App 2"></i></a>
                <a href="portfolio-details.html" title="Przejdź"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/project-end/web-3.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Card 2</h4>
                <p>Card</p>
              </div>
              <div class="portfolio-links">
                <a href="assets/img/project-end/web-3.png" data-gall="portfolioGallery" class="venobox" title="Card 2"></i></a>
                <a href="portfolio-details.html" title="Przejdź"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/project-end/web-2.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Mati-Trans.com</h4>
                <p>Web</p>
              </div>
              <div class="portfolio-links">
                <a href="assets/img/project-end/portfolio-5.jpg" data-gall="portfolioGallery" class="venobox" title="Web 2"></i></a>
                <a href="https://mati-trans.com" title="Przejdź" target="_blank"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/project-end/web-3.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 3</h4>
                <p>App</p>
              </div>
              <div class="portfolio-links">
                <a href="assets/img/project-end/web-3.png" data-gall="portfolioGallery" class="venobox" title="App 3"></i></a>
                <a href="portfolio-details.html" title="Przejdź"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/project-end/web-3.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Card 1</h4>
                <p>Card</p>
              </div>
              <div class="portfolio-links">
                <a href="assets/img/project-end/web-3.png" data-gall="portfolioGallery" class="venobox" title="Card 1"></i></a>
                <a href="portfolio-details.html" title="Przejdź"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/project-end/web-3.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Card 3</h4>
                <p>Card</p>
              </div>
              <div class="portfolio-links">
                <a href="assets/img/project-end/web-3.png" data-gall="portfolioGallery" class="venobox" title="Card 3"></i></a>
                <a href="portfolio-details.html" title="Przejdź"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/project-end/web-4.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Usługi-Marcin.pl</h4>
                <p>Web</p>
              </div>
              <div class="portfolio-links">
                <a href="assets/img/project-end/web-4.png" data-gall="portfolioGallery" class="venobox" title="Web 3"></a>
                <a href="https://xn--usugi-marcin-ecc.pl/" title="Przejdź" target="_blank"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section>

    <!--========= END S PRJC ==========-->

    

    <!--========= S FAQ ==========-->

    <section id="faq" class="faq">
    <div style="display:flex; margin-top: -100px; height: 150px; overflow: hidden;" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M0.00,49.98 C158.86,114.95 271.49,-49.98 500.00,49.98 L500.00,0.00 L0.00,0.00 Z" style=" stroke: none; fill: #fff;"></path></svg></div>
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>CZĘSTO ZADAWANE PYTANIA</h2>
        </div>

        <div class="faq-list">
          <ul>
            <li data-aos="fade-up" data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" class="collapse" href="#faq-list-1">Czym się zajmujemy? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-1" class="collapse show" data-parent=".faq-list">
                <p>
                  Tworzymy strony internetowe, aplikacje webowe oraz aplikacje desktopowe.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-2" class="collapsed">Gdzie jest cennik?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-2" class="collapse" data-parent=".faq-list">
                <p>
                  Cenny są ustalane prywatnie zależy od usługi.
                </p>
              </div>
            </li>

          </ul>
        </div>

      </div>
    </section>
    <div style="margin-top: -160px; height: 150px; overflow: hidden;" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M-22.29,76.47 C109.20,246.20 349.03,-21.20 504.79,123.84 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #fff;"></path></svg></div>

    <!--========= END S FAQ ==========-->

    <!--========= S CTC ==========-->
    <section id="contact" class="contact section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Kontakt</h2>
          <p>Witamy, jeśli jesteś zainteresowany naszymi usługami napisz do nas.W innym wpadku jeśli masz pytanie na które, nie ma odpowiedzi w naszym <a href="#" >FAQ</a> również do nas napisz</p>
        </div>

        <div class="row justify-content-md-center">
         

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-envelope"></i>
              <h3>Email </h3>
              <p>Kontakt@cscode.pl</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-phone-call"></i>
              <h3>Zadzwoń</h3>
              <p>+48 791 102 093</p>
            </div>
          </div>
        </div>

        <div class="row justify-content-md-center">

          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Imię" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Temat" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Wiadomość"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Ładowanie</div>
                <div class="error-message"></div>
                <div class="sent-message">Twoja wiadomość została wysłana. Dziękuję Ci!</div>
              </div>
              <div class="text-center"><button type="submit">Wyślij Wiadomość</button></div>
            </form>
          </div>

        </div>

      </div>
    </section>
    <!--========= END S CTC ==========-->

  </main>
  <!--=========END S MAIN ==========-->

  <!--========= S FOOTER ==========-->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>CsCode.PL</h3>
            
              <strong>Telefon:</strong> +48 791 102 093<br>
              <strong>Email:</strong> kontakt@cscode.pl<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4></h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Strona Główna</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">O Nas</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Usługi</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Umiejętności</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Projekty</a></li>
            </ul>
          </div>

        </div>
      </div>
    </div>

    <div class="container">

      <div class="copyright-wrap d-md-flex py-4">
        <div class="mr-md-auto text-center text-md-left">
          <div class="copyright">
           Stworzono przez <a ><?php include_once('assets/js/copyright.php');  echo $Copy; ?></a> 
              | Wszelkie prawa zastrzeżone przez CsCode.pl</a>
          </div>
        </div>
        <div class="social-links text-center text-md-right pt-3 pt-md-0">
          <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="https://www.facebook.com/cscodepl" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="https://www.instagram.com/cscode.pl/" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="https://www.linkedin.com/in/eryk-paluszek-436674201/" class="linkedin"><i class="bx bxl-linkedin" target="_blank"></i></a>
        </div>
      </div>

    </div>
  </footer>

  <!--========= END S FOOTER ==========-->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
  <div id="preloader"></div>

  <!--========= F VNR ==========-->

  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!--========= END JS VNR ==========-->

  <!--========= JS M ==========-->

  <script src="assets/js/main.js"></script>

  <!--========= END JS M ==========-->

  <!--========= JS FB ==========-->

 //

  <!--========= END JS FB ==========-->


</body>

</html>

<!--=============================================================================

                    Wszelkie prawa zastrzeżone © 2021 CSCode.pl
                    Email: Biznes@CSCode.pl
                    FB: https://facebook.com/cscodepl

                    ZAKAZ KOPIOWANIA!
=============================================================================-->
