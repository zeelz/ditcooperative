<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Home | DIT Cooperative</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ URL::asset('img/favicon.png') }}" rel="icon">
  <link href="{{ URL::asset('img/apple-touch-icon.png') }}" rel="apple-touch-icon">


  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ URL::asset('vendor/bootstrap/css/bootstrap.min.css') }}" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <link href="{{ URL::asset('vendor/bootstrap-icons/bootstrap-icons.css') }}" />
  <link href="{{ URL::asset('vendor/boxicons/css/boxicons.min.css') }}" />
  <link href="{{ URL::asset('vendor/glightbox/css/glightbox.min.css') }}" />
  <link href="{{ URL::asset('vendor/remixicon/remixicon.css') }}" />
  <link href="{{ URL::asset('vendor/swiper/swiper-bundle.min.css') }}" />

  <!-- <link rel="stylesheet" href="{{ URL::asset('css/somestylesheet.css') }}" /> -->


  <!-- Template Main CSS File -->
  <!-- <link href="assets/css/style.css" rel="stylesheet"> -->
  
  <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}" />

  <!-- =======================================================
  * Template Name: Tempo - v4.7.0
  * Template URL: https://bootstrapmade.com/tempo-free-onepage-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo">
        <a href="index.html">
          <img src="img/ditco_logo.png" alt="ditco logo">
        </a>
      </h1>


      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="/">Home</a></li>
          <li><a class="nav-link scrollto" href="home">Profile</a></li>

          @guest
              @if (Route::has('login'))
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                  </li>
              @endif

              @if (Route::has('register'))
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('index') }}">{{ __('Register') }}</a>
                  </li>
              @endif

            @else
            <li class="nav-link">

                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
            </li>

          @endguest
          
          {{-- <li>
            <a class="nav-link scrollto" href="admin.login">
              <img src="img/padlock.png" alt="Admin Login" style="height: 20px">
            </a>
          </li> --}}
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <h3>Welcome to <strong>DIT Cooperative</strong></h3>
      <h1>We're a Cooperative</h1>
      <h2>Making contributions to help ourselves</h2>
      <a href="#regform" class="btn-get-started scrollto">Start contributing today</a>
    </div>
  </section><!-- End Hero -->

  <main id="main">
    

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contribution</h2>
          <h3>Contribute <span>With Us</span></h3>
          <p>We are delighted that you are interested in joining <strong>DIT P. M. Co-operative Society Limited.</strong> <br>
            Our aim is to create premium funding support scheme by gifting monetary contributions to each other, with integrity and excellence. <br>
            Kindly fill this form and upload your proof of payment and passport photo after you have made payment.</p>
        </div>

        <div class="row mt-5">
  
          <div class="col-lg-10 offset-lg-1 mt-5 mt-lg-0">            
           
            {{-- @if ($message = Session::get('error'))
              <div id="successMessage" class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>{{ $message }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            @endif --}}
            
            {{-- @if ($message = Session::get('success'))
              <div class="alert alert-success alert-dismissible fade show d-flex justify-content-between" role="alert">
                <strong>{{ $message }}</strong>
                
                <a href="home" class="btn btn-sm rounded-pill" style="color: var(--main-accent-text); border: solid 1px var(--main-accent-text);">Go to Your Profile</a>

                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
              <div class="text-center mb-3"></div>
            
            @endif --}}

            <h2 class="mb-4 text-center fw-bold" id="regform" >Registration Form</h2>

          
            <div class="alert alert-warning fade show mb-2" role="alert">
              <span class="fw-bold">Your <span class="fs-4">N100,000</span> contribution payment must be made before completing this form.</span>
            </div>

            <div class="alert alert-info fade show" role="alert">
              <strong>Please ensure to enter your names as it appears on your bank account for easy reconciliation.</strong>
            </div>
  
            <form id="registerForm" action="{{ route('member-reg') }}" method="POST" enctype="multipart/form-data" role="form" class="php-email-form">
              <div class="row mb-2">
                <div class="col-md-6 form-group">
                  <label for="firstname">Your First Name</label>
                  <input type="text" required name="firstname" class="form-control mt-2 mt-2" id="firstname" placeholder="" >
                </div>

                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <label for="lastname">Your Last Name</label>
                  <input type="text" class="form-control mt-2" required name="lastname" id="lastname" placeholder="" >
                </div>
              </div>

              <div class="row mb-2">
                <div class="col-md-6 form-group">
                  <label for="middlename">Your Middle Name</label>
                  <input type="text" name="middlename" class="form-control mt-2" id="middlename" placeholder="">
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <label for="phone">Your Phone Number</label>
                  <input type="text" required name="phone" class="form-control mt-2" id="phone" placeholder="">
                </div>
              </div>

              <div class="row mb-2">
                <div class="col-md-6 form-group">
                  <label for="email">Your Email Address</label>
                  <input type="email" class="form-control mt-2" required name="email" id="email" placeholder="">
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <label for="passport">Please upload your passport</label>
                  <input type="file" name="passport" class="form-control mt-2" id="" placeholder="">
                </div>
              </div>

              <div class="row mb-2">
                <div class="col-md-6 form-group">
                  <label for="">Enter full name of your Next-of-Kin</label>
                  <input type="text" required name="kin_name" class="form-control mt-2" >
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0"> 
                  <label for="">Enter your Next-of-Kin phone number</label>
                  <input type="text" class="form-control mt-2" required name="kin_phone">                 
                </div>
              </div>

              <div class="row mb-2">
                <div class="col-md-6 form-group">
                  <label for="">Enter your account number </label>
                  <input type="text" required name="account_number" class="form-control mt-2">
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <label for="">Select Your Bank</label>
                  <select class="form-control mt-2" required name="bank" id="">
                    <option value="" selected disabled>Select your bank</option>
                    <option value="Access Bank">Access Bank</option>
                    <option value="Fidelity Bank">Fidelity Bank</option>
                    <option value="First City Monument Bank">First City Monument Bank</option>
                    <option value="First Bank of Nigeria">First Bank of Nigeria</option>
                    <option value="Guaranty Trust Holding Company">Guaranty Trust Holding Company</option>
                    <option value="Union Bank of Nigeria">Union Bank of Nigeria</option>
                    <option value="United Bank for Africa">United Bank for Africa"</option>
                    <option value="Zenith Bank">Zenith Bank</option>
                    <option value="Citibank Nigeria">Citibank Nigeria</option>
                    <option value="Ecobank Nigeria">Ecobank Nigeria</option>
                    <option value="Heritage Bank">Heritage Bank</option>
                    <option value="Keystone Bank">Keystone Bank</option>
                    <option value="Polaris Bank">Polaris Bank</option>
                    <option value="Stanbic IBTC Bank">Stanbic IBTC Bank</option>
                    <option value="Standard Chartered">Standard Chartered</option>
                    <option value="Sterling Bank">Sterling Bank</option>
                    <option value="Titan Trust Bank">Titan Trust Bank</option>
                    <option value="Unity Bank">Unity Bank</option>
                    <option value="Wema Bank">Wema Bank</option>
                  </select>
                </div>
              </div>

              <div class="row mb-2">
                <div class="col-md-6 form-group">
                  <label for="">Please upload your payment confirmation</label>
                  <input type="file" name="payment_confirm" class="form-control mt-2">
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <label for="date_of_payment">Enter date of payment</label>
                   <input type="date" class="form-control mt-2" required name="date_of_payment">
                </div>
              </div>

              <div class="row mb-2">
                <div class="col-md-4 form-group">
                  <label for="referral_code">Enter referral code</label>
                   <input type="text" class="form-control mt-2" name="referral_code" value="{{ $referral }}">
                </div>
                <div class="col-md-4 form-group mt-3 mt-md-0">
                  <label for="password">Create a password</label>
                  <input type="password" class="form-control mt-2" name="password" id="password">
                </div>
                <div class="col-md-4 form-group mt-3 mt-md-0">
                  <label for="confirmPassword">Confirm password</label>
                  <input type="password" class="form-control mt-2" required name="confirmPassword" id="confirmPassword">
                </div>
              </div>

              <div class="form-group d-flex agreebox">
                <input type="checkbox" class="" required name="agree_18yrs" id="subject" placeholder="I acknowledge that: ">
                <label for="subject" style="padding-top: 10px; margin-left: 10px;">I agree to the fact that I am up to 18 years of age to be a member of this Co-operative.</label>
              </div>

              <div class="form-group d-flex agreebox">
                <input type="checkbox" class="" required name="agree_100k" id="subject" placeholder="I acknowledge that: ">
                <label for="subject" style="padding-top: 10px; margin-left: 10px;">I agree to one time slot payment of N100,000 and invite two persons who I trust to be part of the Cooperative. Upon confirmation of payment of my 2 referrals i will be gifted with N200,000 (Double payment) within 72 hours.</label>
              </div>

              <div class="form-group d-flex agreebox">
                <input type="checkbox" class="" required name="agree_10_percent" id="subject" placeholder="I acknowledge that: ">
                <label for="subject" style="padding-top: 10px; margin-left: 10px;">I agree to the process of leaving 10% (N20,000) of the total amount received as administrative charges.</label>
              </div>

              <div class="form-group d-flex agreebox">
                <input type="checkbox" class="" required name="agree_no_advert" id="subject" placeholder="I acknowledge that: ">
                <label for="subject" style="padding-top: 10px; margin-left: 10px;">I understand that, this is a private Cooperative society and social media advertisement is prohibited.</label>
              </div>

              <div class="form-group d-flex agreebox">
                <input type="checkbox" class="" required name="agree_no_refund" id="subject" placeholder="I acknowledge that: ">
                <label for="subject" style="padding-top: 10px; margin-left: 10px;">I understand there is no provision for refund of payment, I will ensure that I get two trusted members to sign on before making payment.</label>
              </div>

              <div class="form-group d-flex agreebox">
                <input type="checkbox" class="" required name="agree_not_liable" id="subject" placeholder="I acknowledge that: ">
                <label for="subject" style="padding-top: 10px; margin-left: 10px;">I understand neither the Cooperative nor my referee is responsible for unforeseen payment delays and dispute resolutions.</label>
              </div>

              <div class="form-group d-flex agreebox">
                <input type="checkbox" class="" required name="agree_required_info" id="subject" placeholder="I acknowledge that: ">
                <label for="subject" style="padding-top: 10px; margin-left: 10px;">I will ensure to fill and upload all required information before my contribution is processed for gifting.</label>
              </div>

              <div class="form-group d-flex agreebox">
                <input type="checkbox" class="" required name="agree_terms" id="subject" placeholder="I acknowledge that: ">
                <label for="subject" style="padding-top: 10px; margin-left: 10px;">I agree to all the terms and conditions above</label>
              </div>

              @csrf
              
              
              <div class="d-flex justify-content-center text-center">
                <button id="registerBtn" class="d-flex btn btn-lg px-5" type="submit">
                  <span>Register</span>
                  {{-- @if (false) --}}
                    
                    <div id="spinner" class="spinner-border spinner-border-md text-white ms-3 d-none" role="status">

                  {{-- @endif --}}
                </button>
              </div>
              
              </div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container d-flex justify-content-between">
      <div class="copyright">
        &copy; Copyright <strong><span>DIT Cooperative</span></strong>. All Rights Reserved
      </div>

      <div class="credits">
        Developed by <a href="https://azusion.com">Azusion</a>
      </div>

    </div>
  </footer>
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <!-- <script src="{{ URL::asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script> -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  
  <script src="{{ URL::asset('vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ URL::asset('vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ URL::asset('vendor/swiper/swiper-bundle.min.js') }}"></script>
  <!-- <script src="{{ URL::asset('vendor/php-email-form/validate.js') }}"></script> -->
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


  <script>
   
   // change to Session::has('success')
    @if ($message = Session::get('success'))

      swal({
        title: "Success",
        text: "Your account has been created",
        icon: "success",
        buttons: {
          cancel: "OK",
          profile: {
            text: "Go to New Profile",
            value: "profile",
            className: 'btn-main'
          }
        },
      }).then( res => {
        if(res === 'profile') location.href = '/home'
      })

    @endif

    @if ($message = Session::get('error'))
      swal({
        title: "Error",
        text: "Registration failed",
        icon: "error"
      })
    @endif


    @if ($message = Session::get('codeError'))
      swal({
        title: "Error",
        text: "Your referral code is invalid! Please, enter a valid one or leave blank.",
        icon: "error"
      })
    @endif
  </script>


  <!-- Template Main JS File -->
  <script src="{{ URL::asset('js/main.js') }}"></script>

  <script>
    // confirmPassword

    const password = document.querySelector('#password');
    const confirmPassword = document.querySelector('#confirmPassword');

    confirmPassword.addEventListener('blur', (e) => {
      if(password.value !== confirmPassword.value){
        alert("Password did not match")
        password.value = ""
        confirmPassword.value = ""
      }
    })
  </script>

  <script>
    const registerForm = document.querySelector('#registerForm');
    const registerBtn = document.querySelector('#registerBtn');
    const spinner = document.querySelector('#spinner');


    registerForm.addEventListener('submit', e => {
      e.preventDefault()
      spinner.classList.remove('d-none')
      registerBtn.setAttribute('disabled', 'disabled')
      e.target.submit()
      
      // setTimeout(() => {
      //   console.log(e.target)
      // }, 3000);
      
    })
  </script>

</body>

</html>