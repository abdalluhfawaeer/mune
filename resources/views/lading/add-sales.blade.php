<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Menu Face</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ url('mf_logo.png') }}" rel="icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ url('lading/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ url('lading/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ url('lading/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ url('lading/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ url('lading/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ url('lading/css/main.css') }}" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <section id="topbar" class="topbar d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">info@menuface.com</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>+962 78121 1010</span></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section><!-- End Top Bar -->

  <header id="header" class="header d-flex align-items-center">

    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>Menuface<span style="color: #000000">.</span></h1>
      </a>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="/">الصفحة الرئيسية</a></li>
          <li><a href="#about">عن الموقع</a></li>
          <li><a href="#services">خدمات</a></li>
          {{-- <li><a href="#portfolio" >Portfolio</a></li> --}}
          <li><a href="#team">الفريق</a></li>
          <li><a href="#send_mensu">تقديم طلب منيو</a></li>
          <li><a href="/add-sales">تقديم طلب توظيف</a></li>
          {{-- <li><a href="blog.html">Blog</a></li> --}}
          <li><a href="#contact">تواصل معنا</a></li>
        </ul>
      </nav><!-- .navbar -->

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->
  <!-- End Header -->


  <main id="main">
    <section id="send_menu" class="contact">
      <div class="container" data-aos="fade-up">
        <div class="row gx-lg-0 gy-4">
            <div class="section-header">
                <h2>تقديم طلب توظيف</h2>
              </div>
          <div class="col-lg-4">

            <div class="info-container d-flex flex-column align-items-center justify-content-center">
              <div class="info-item d-flex">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <h4>Location:</h4>
                  <p></p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h4>Email:</h4>
                  <p>info@menuface.com</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-phone flex-shrink-0"></i>
                <div>
                  <h4>Call:</h4>
                  <p>+962 78121 1010</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-clock flex-shrink-0"></i>
                <div>
                  <h4>Open Hours:</h4>
                  <p>من 8 صباحا الى 5 مساء</p>
                </div>
              </div><!-- End Info Item -->
            </div>

          </div>

          <div class="col-lg-8">
            <form action="/send/contact/sales" method="post"  class="php-email-form">
              @csrf
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="text" name="mobile" class="form-control" id="name" placeholder="Your Mobile" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
              </div>
              <div class="form-group mt-3">
                <select id="country" class="form-control form-control-lg" name="country">
                    <option>select country</option>
                </select>
              </div>
              <div class="form-group mt-3">
                <select id="state-code" class="form-control form-control-lg" name="state">
                    <option>select country</option>
                </select>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div><!-- End Contact Form -->

        </div>
        <script src="{{ asset('js/country-states.js') }}"></script>
        <script>
        let user_country_code = 'JO';
        (function () {
            let country_list = country_and_states['country'];
            let states_list = country_and_states['states'];
    
            let option =  '';
            option += '<option>select country</option>';
            for(let country_code in country_list){
                let selected = (country_code == user_country_code) ? ' selected' : '';
                option += '<option value="'+country_code+'"'+selected+'>'+country_list[country_code]+'</option>';
            }
            document.getElementById('country').innerHTML = option;
    
            let text_box = '<input type="text" class="form-control form-control-lg" id="state" wire:model="state">';
            let state_code_id = document.getElementById("state-code");
    
            function create_states_dropdown() {
                let country_code = document.getElementById("country").value;
                let states = states_list[country_code];
                console.log(states_list);
                if(!states){
                    state_code_id.innerHTML = text_box;
                    return;
                }
                let option = '';
                if (states.length > 0) {
                    // option = '\n';
                    for (let i = 0; i < states.length; i++) {
                        option += '<option value="'+states[i].name.replace("Governorate", "")+'">'+states[i].name.replace("Governorate", "")+'</option>';
                    }
                    // option += '</select>';
                } else {
                    option = text_box
                }
                state_code_id.innerHTML = option;
            }
    
            const country_select = document.getElementById("country");
            country_select.addEventListener('change', create_states_dropdown);
    
            create_states_dropdown();
        })();
    
        </script>
      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-info">
          <a href="/" class="logo d-flex align-items-center">
            <span>Menuface.</span>
          </a>
          <br>
          <div class="social-links d-flex mt-4">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><a href="#hero">الصفحة الرئيسية</a></li>
            <li><a href="#about">عن الموقع</a></li>
            <li><a href="#services">خدمات</a></li>
            {{-- <li><a href="#portfolio" >Portfolio</a></li> --}}
            <li><a href="#team">الفريق</a></li>
            <li><a href="#team">تقديم طلب منيو</a></li>
            <li><a href="#team">تقديم طلب توظيف</a></li>
            {{-- <li><a href="blog.html">Blog</a></li> --}}
            <li><a href="#contact">تواصل معنا</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Our Services</h4>
          {{-- <ul>
            <li><a href="#">Web Design</a></li>
            <li><a href="#">Web Development</a></li>
            <li><a href="#">Product Management</a></li>
            <li><a href="#">Marketing</a></li>
            <li><a href="#">Graphic Design</a></li>
          </ul> --}}
        </div>

        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
          <h4>Contact Us</h4>
          <p>
            Location<br>
            <strong>Phone:</strong> +962 78121 1010<br>
            <strong>Email:</strong> info@menuface.com<br>
          </p>

        </div>

      </div>
    </div>

    <div class="container mt-4">
      <div class="copyright">
        &copy; Copyright <strong><span>Menuface.</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/impact-bootstrap-business-website-template/ -->
        by <a href="">Abdalluh Fawaeer</a>
      </div>
    </div>

  </footer><!-- End Footer -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ url('lading/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ url('lading/vendor/aos/aos.js') }}"></script>
  <script src="{{ url('lading/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ url('lading/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ url('lading/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ url('lading/vendor/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ url('lading/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ url('lading/js/main.js') }}"></script>

</body>

</html>