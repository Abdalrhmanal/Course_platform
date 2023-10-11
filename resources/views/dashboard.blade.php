@extends('layouts.app')

  <!-- ======= hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

        <ol id="hero-carousel-indicators" class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active" style="background-image: url(assets/img/hero-carousel/1.jpg)">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown">“Study is the key to success,”</h2>
                <p class="animate__animated animate__fadeInUp">
                Studying programming is a pioneering experience that opens its doors to the world of creativity and smart challenges.”</p>
                <a href="#featured-services" class="btn-get-started scrollto animate__animated animate__fadeInUp">Get Started</a>
              </div>
            </div>
          </div>

          <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/2.jpg)">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown">Learn programming</h2>
                <p class="animate__animated animate__fadeInUp">
                “When you learn to code, you have the opportunity to build cool things from code, and this makes studying an exciting adventure.”</p>
                <a href="#featured-services" class="btn-get-started scrollto animate__animated animate__fadeInUp">Get Started</a>
              </div>
            </div>
          </div>

          <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/3.jpg)">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown">Programming gives you the power to turn your ideas into reality</h2>
                <p class="animate__animated animate__fadeInUp">
            “Studying programming gives you the power to turn your ideas into reality. There is nothing more exciting than seeing your applications working successfully.”</p>
                <a href="#featured-services" class="btn-get-started scrollto animate__animated animate__fadeInUp">Get Started</a>
              </div>
            </div>
          </div>

          <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/4.jpg)">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown">Programming is the language of the present and the future</h2>
                <p class="animate__animated animate__fadeInUp">“Programming is the language of the present and the future
                Studying it makes you qualified to engage in the world of technology and innovation.”</p>
                <a href="#featured-services" class="btn-get-started scrollto animate__animated animate__fadeInUp">Get Started</a>
              </div>
            </div>
          </div>

          <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/5.jpg)">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown">When you learn programming,</h2>
                <p class="animate__animated animate__fadeInUp">"
                 You become able to solve problems and challenges in creative and effective ways, making studying an enjoyable and rewarding adventure.”</p>
                <a href="#featured-services" class="btn-get-started scrollto animate__animated animate__fadeInUp">Get Started</a>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

      </div>
    </div>
  </section><!-- End Hero Section -->

  <main id="main">

    <!-- ======= Featured Services Section Section ======= -->
    <section id="featured-services">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 box">
            <i class="bi bi-briefcase"></i>
            <h4 class="title"><a href="">Entry into the labor market</a></h4>
            <p class="description">You will be able to enter the labor market strongly after completing the training courses with us</p>
          </div>

          <div class="col-lg-4 box box-bg">
            <i class="bi bi-card-checklist"></i>
            <h4 class="title"><a href="">Distinctive study system</a></h4>
            <p class="description">We have prepared a regular study system suitable for all groups</p>
          </div>

          <div class="col-lg-4 box">
            <i class="bi bi-binoculars"></i>
            <h4 class="title"><a href="">Our goals that we seek</a></h4>
            <p class="description">We seek to build a community of young people who are able to work and rely on themselves through programming</p>
          </div>

        </div>
      </div>
    </section><!-- End Featured Services Section -->

    <!-- ======= About Us Section ======= -->
    <section id="about">
      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h3>About Us</h3>
          <p>This is my own project, as a university student, and is not affiliated with any external institution.</p>
        </header>

        <div class="row about-cols">

          <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
            <div class="about-col">
              <div class="img">
                <img src="assets/img/about-mission.jpg" alt="" class="img-fluid">
                <div class="icon"><i class="bi bi-bar-chart"></i></div>
              </div>
              <h2 class="title"><a href="#">Our Mission</a></h2>
              <p>
              Our mission is to build a community of young people capable of working in the worst conditions and relying on themselves to earn money.              </p>
            </div>
          </div>

          <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
           <div class="about-col">
              <div class="img">
                <img src="assets/img/about-plan.jpg" alt="" class="img-fluid">
                <div class="icon"><i class="bi bi-brightness-high"></i></div>
              </div>
                <h2 class="title"><a href="#">Our Plan</a></h2>
                <p>We have a plan to distribute the desires of young people who want to learn programming and give them advice in order to build their experience according to their desire.</p>
           </div>
          </div>

          <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
            <div class="about-col">
              <div class="img">
                <img src="assets/img/about-vision.jpg" alt="" class="img-fluid">
                <div class="icon"><i class="bi bi-calendar4-week"></i></div>
              </div>
              <h2 class="title"><a href="#">Our Vision</a></h2>
              <p>
              We see that the young people applying for our training courses are the owners of programming and its wonderful future.              </p>
              </p>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Services Section ======= -->
    <!-- <section id="services">
      <div class="container" data-aos="fade-up">

        <header class="section-header wow fadeInUp">
          <h3>Services</h3>
          <p>Laudem latine persequeris id sed, ex fabulas delectus quo. No vel partiendo abhorreant vituperatoribus, ad pro quaestio laboramus. Ei ubique vivendum pro. At ius nisl accusam lorenta zanos paradigno tridexa panatarel.</p>
        </header>

        <div class="row">

          <div class="col-lg-4 col-md-6 box" data-aos="fade-up" data-aos-delay="100">
            <div class="icon"><i class="bi bi-briefcase"></i></div>
            <h4 class="title"><a href="">Lorem Ipsum</a></h4>
            <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
          </div>
          <div class="col-lg-4 col-md-6 box" data-aos="fade-up" data-aos-delay="200">
            <div class="icon"><i class="bi bi-card-checklist"></i></div>
            <h4 class="title"><a href="">Dolor Sitema</a></h4>
            <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
          </div>
          <div class="col-lg-4 col-md-6 box" data-aos="fade-up" data-aos-delay="300">
            <div class="icon"><i class="bi bi-bar-chart"></i></div>
            <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
            <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
          </div>
          <div class="col-lg-4 col-md-6 box" data-aos="fade-up" data-aos-delay="200">
            <div class="icon"><i class="bi bi-binoculars"></i></div>
            <h4 class="title"><a href="">Magni Dolores</a></h4>
            <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
          </div>
          <div class="col-lg-4 col-md-6 box" data-aos="fade-up" data-aos-delay="300">
            <div class="icon"><i class="bi bi-brightness-high"></i></div>
            <h4 class="title"><a href="">Nemo Enim</a></h4>
            <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
          </div>
          <div class="col-lg-4 col-md-6 box" data-aos="fade-up" data-aos-delay="400">
            <div class="icon"><i class="bi bi-calendar4-week"></i></div>
            <h4 class="title"><a href="">Eiusmod Tempor</a></h4>
            <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
          </div>

        </div>

      </div>
    </section> -->
    <!-- End Services Section -->

    <!-- ======= Call To Action Section ======= -->
    <section id="call-to-action">
      <div class="container text-center" data-aos="zoom-in">
        <h3>He started studying</h3>
        <p> Come on, you can start learning programming from now and join a new job opportunity.</p>
        <a class="cta-btn" href="/courses1">He started studying</a>
      </div>
    </section><!-- End Call To Action Section -->


    <!-- ======= Facts Section ======= -->
    <section id="facts">
      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h3>Facts</h3>
          <p>We have many students who have started learning and who have received lessons from distinguished professors</p>
        </header>

        <div class="row counters">

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
            <p>Students who joined the work</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="421" data-purecounter-duration="1" class="purecounter"></span>
            <p>Students in the study</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="1364" data-purecounter-duration="1" class="purecounter"></span>
            <p>Average hours of study in the course</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="38" data-purecounter-duration="1" class="purecounter"></span>
            <p>Course teachers</p>
          </div>

        </div>

        <div class="facts-img">
          <img src="assets/img/facts-img.png" alt="" class="img-fluid">
        </div>

      </div>
    </section><!-- End Facts Section -->

    <!-- ======= Our Clients Section ======= -->
    <section id="clients">
    <div class="container" data-aos="zoom-in">

      <header class="section-header">
        <h3>Our Clients</h3>
      </header>

      <div class="clients-slider swiper">
        <div class="swiper-wrapper align-items-center">
          <div class="swiper-slide"><img src="https://miro.medium.com/v2/resize:fit:1400/1*EVqCcmCPgpNKxU1wzcTHgw.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTk0dPfG0CjpqC11fsEsOZgsYELYZhs-wA2Dw&usqp=CAU" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="https://miro.medium.com/v2/resize:fit:1200/1*m0H6-tUbW6grMlezlb52yw.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="https://media.geeksforgeeks.org/wp-content/cdn-uploads/Csharp.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="https://www.simplilearn.com/ice9/free_resources_article_thumb/PHP_1.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="https://workiy.com/sites/default/files/inline-images/asp.net-logo-MSA-Technosoft.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="https://international.binus.ac.id/computer-science/files/2020/11/laravel.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/44/Google-flutter-logo.svg/1200px-Google-flutter-logo.svg.png" class="img-fluid" alt=""></div>
        </div>
        <div class="swiper-pagination" style="margin-top: -45%;"></div>
      </div>

    </div>
  </section><!-- End Our Clients Section -->
<!-- End Our Clients Section -->


  </main><!-- End #main -->

