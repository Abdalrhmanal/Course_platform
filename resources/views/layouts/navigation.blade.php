  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container-fluid">

      <div class="row justify-content-center align-items-center">
        <div class="col-xl-11 d-flex align-items-center justify-content-between">
          <h1 class="logo"><a href="/">SR.eng</a></h1>

          <nav id="navbar" class="navbar">
            <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
              @if (Route::has('login'))
              <div class="sm:fixed sm:top-0 sm:right-0 p-6 srd">
                @auth
                <ul class="flex space-x-4 items-center"> <!-- ترتيب العناصر أفقيًا ومحاذاة العناصر -->
                  <li><a class="nav-link scrollto active" href="/">Home</a></li>
                  <li><a class="nav-link scrollto" href="#about">About</a></li>

                  @if(auth()->check() && auth()->user()->name === 'Admin')
                  <li><a class="nav-link scrollto" href="/purchases">purchases</a></li>
                  @else
                  <li><a class="nav-link scrollto" href="/purchasesur">purchases</a></li>
                  @endif

                  <li class="nav-item dropdown sr">
                    <form action="{{ route('change.language') }}" method="POST" class="d-flex align-items-center">
                      @csrf
                      <div class="dropdown " >
                        <select name="locale" onchange="this.form.submit()" class="form-select dr bg-transparent border-0 text-white">
                          <option class="dr" value="en" {{ app()->getLocale() == 'en' ? 'selected' : '' }}>English</option>
                          <option class="dr" value="ar" {{ app()->getLocale() == 'ar' ? 'selected' : '' }}>Arabic</option>
                          <option class="dr" value="tr" {{ app()->getLocale() == 'tr' ? 'selected' : '' }}>Turkish</option>
                        </select>
                      </div>
                    </form>
                  </li>
                  <li><a class="nav-link scrollto" href="/courses1">Courses</a></li>
                  <li><a class="nav-link scrollto" href="/teachers">teachers</a></li>
                  <li><a class="nav-link scrollto" href="#contact">Contact</a></li>

                  <div class="hidden sm:flex sm:items-center sm:ml-6">
                    <x-dropdown align="right" width="48">
                      <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-transparent dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                          <div>{{ Auth::user()->name }}</div>
                          <div class="ml-1">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                              <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                          </div>
                        </button>
                      </x-slot>
                      <x-slot name="content" style="background-color: transparent;"> <!-- استخدام الشفافية مباشرة -->
                        <x-dropdown-link :href="route('profile.edit')" style="background-color: rgba(0, 0, 0, 0.2);"> <!-- تعيين لون الخلفية للروابط -->
                          {{ __('Profile') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}" style="background-color: rgba(0, 0, 0, 0.2);">
                          @csrf

                          <x-responsive-nav-link :href="route('logout')" onclick="event.preventDefault() ;
                                                        this.closest('form').submit();">
                            {{ __('Log Out') }}
                          </x-responsive-nav-link>
                        </form>

                      </x-slot>
                    </x-dropdown>
                  </div>
                </ul>
                @else
                <ul class="flex space-x-4"> <!-- ترتيب العناصر أفقيًا -->
                  <li><a class="nav-link scrollto active" href="/">Home</a></li>
                  <li><a class="nav-link scrollto" href="#about">About</a></li>
                  <li class="nav-item dropdown sr ">
                    <form action="{{ route('change.language') }}" method="POST" class="d-flex align-items-center">
                      @csrf
                      <div class="dropdown ">
                        <select name="locale" onchange="this.form.submit()" class="form-select dr bg-transparent border-0 text-white">
                          <option class="dr" value="en" {{ app()->getLocale() == 'en' ? 'selected' : '' }}>English</option>
                          <option class="dr" value="ar" {{ app()->getLocale() == 'ar' ? 'selected' : '' }}>Arabic</option>
                          <option class="dr" value="tr" {{ app()->getLocale() == 'tr' ? 'selected' : '' }}>Turkish</option>
                        </select>
                      </div>
                    </form>
                  </li>
                  <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                  <li><a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a></li>
                  @if (Route::has('register'))
                  <li><a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a></li>
                  @endif
                </ul>
                @endauth
              </div>
              @endif
            </div>
          </nav><!-- .navbar -->

        </div>

      </div>
    </div>
  </header><!-- End Header -->

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h3>Contact Us</h3>
        <p>Contact us for more information. We will be happy to contact you. We are ready for your inquiries at any time.</p>
      </div>
      <div class="row contact-info">
        <div class="col-md-4">
          <div class="contact-address">
            <i class="bi bi-geo-alt"></i>
            <h3>Address</h3>
            <address>A108 Adam Street, NY 535022, USA</address>
          </div>
        </div>

        <div class="col-md-4">
          <div class="contact-phone">
            <i class="bi bi-phone"></i>
            <h3>Phone Number</h3>
            <p><a href="tel:+532681555826">+532 681 555 826</a></p>
          </div>
        </div>

        <div class="col-md-4">
          <div class="contact-email">
            <i class="bi bi-envelope"></i>
            <h3>Email</h3>
            <p><a href="homjpkatarhom6468@gmail.com">homjpkatarhom6468@gmail.com</a></p>
          </div>
        </div>

      </div>

      <div class="form">
        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
          <div class="row">
            <div class="form-group col-md-6">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
            </div>
            <div class="form-group col-md-6">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
            </div>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
          </div>
          <div class="form-group">
            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
          </div>
          <div class="my-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit">Send Message</button></div>
        </form>
      </div>

    </div>
  </section><!-- End Contact Section -->


  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>BizPage</h3>
            <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus. Scelerisque felis imperdiet proin fermentum leo. Amet volutpat consequat mauris nunc congue.</p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>

            <div class="social-links">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>

          </div>

          <div class="col-lg-3 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna veniam enim veniam illum dolore legam minim quorum culpa amet magna export quem marada parida nodela caramase seza.</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>BizPage</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
        All the links in the footer should remain intact.
        You can delete the links only if you purchased the pro version.
        Licensing information: https://bootstrapmade.com/license/
        Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=BizPage
      -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->