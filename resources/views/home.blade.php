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

  
  <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}" />

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo">
        <a href="/">
          <img src="img/ditco_logo.png" alt="ditco logo">
          {{-- <img src="storage/img/9GnY8Qq4P4SgJWy7D7LoNxACCXmZfqa2Ha3JEmZn.jpg" alt=""> --}}
        </a>
      </h1>


      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto " href="/">Home</a></li>
          <li><a class="nav-link scrollto active" href="home">Profile</a></li>

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
          

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->


  <main id="main">
    
              

     <!-- ======= Cta Section ======= -->
     <section id="cta" class="cta">
      <div class="container">

        <div class="align-items-center d-flex flex-column justify-content-center text-center">
          <div class="profile-box">
            <img src="{{ Auth::user()->passport_url }}" alt="" class="img-fluid">
          </div>
          <h3 class="pt-3">{{ Auth::user()->firstname }} {{ Auth::user()->lastname }}</h3>
          <a id="referralCode" class="cta-btn fs-5 btn-main" href="#">{{ Auth::user()->code->code }}</a>
        
          <p id="copiedMsg" class="small">Click button to copy your referral code</p>

        </div>

      </div>
    </section><!-- End Cta Section -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container">

        <div class="section-title">
          <h2>profile</h2>
          <h3>Member <span>Details</span></h3>
        </div>

        <div class="row">

          <div class="col-lg-4 offset-2">
            <div class="box recommended">
              <span class="recommended-badge">My Referrals</span>
              
              <ul class="mt-4">

                @foreach (Auth::user()->referrals as $referral)
                  <li class="bg-white border border-success d-inline-block mb-1 mx-1 px-2 py-1 rounded-3 rounded-pill small fst-italic text-success">

                    {{ $members[$referral->referral_id -1]->firstname }}
                    {{ $members[$referral->referral_id -1]->lastname }}

                  </li>
                @endforeach
              </ul>
            </div>
          </div>


          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box recommended">
              <span class="recommended-badge">Payments</span>

              <div class="mt-4">
                <strong>{{ Auth::user()->date_of_payment }}</strong> 
              </div>
              

              {{-- <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div> --}}
            
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Pricing Section -->

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

  <!-- Vendor JS Files -->
  <!-- <script src="{{ URL::asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script> -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  
  <script src="{{ URL::asset('vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ URL::asset('vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ URL::asset('vendor/swiper/swiper-bundle.min.js') }}"></script>
  <!-- <script src="{{ URL::asset('vendor/php-email-form/validate.js') }}"></script> -->



  <!-- Template Main JS File -->
  <script src="{{ URL::asset('js/main.js') }}"></script>

  {{-- click to copy script --}}
  <script>
    const refCode = document.querySelector('#referralCode');
    const copiedMsg = document.querySelector('#copiedMsg');

    refCode.addEventListener('click', e => {
      e.preventDefault()

      if(!navigator.clipboard){
        return;
      }
      const baseUrl = "https://ditcooperative.com/";

      navigator.clipboard.writeText(`${baseUrl}?referral=${refCode.innerHTML}`)
      .then(() => {
        const originalMsg = copiedMsg.innerHTML;
        copiedMsg.innerHTML = "Link copied!";
        setTimeout(() => {
          copiedMsg.innerHTML = originalMsg;
        }, 3000);
      })
      .catch( err => console.log(err))


    })
    


  </script>

</body>

</html>


<!-- I agree to one time slot payment of N100,000 and invite two persons who I trust to be part of the Cooperative. Upon confirmation of payment of my 2 referrals i will be gifted with N200,000 (Double payment) within 72 hours.
I agree to the process of leaving 10% (N20,000) of the total amount received as administrative charges.
I understand that, this is a private Cooperative society and social media advertisement is prohibited.
I understand there is no provision for refund of payment, I will ensure that I get two trusted members to sign on before making payment
I understand neither the Cooperative nor my referee is responsible for unforeseen payment delays and dispute resolutions
I will ensure to fill and upload all required information before my contribution is processed for gifting
I agree to all the terms and conditions above -->