<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Payment List | Dit Cooperative</title>
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

<body class="d-flex flex-column min-vh-100">

  <!-- ======= Header ======= -->
  <header id="header" class="bg-dark fixed-top position-relative">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo">
        <a href="index.html">
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
    
    <section class="p-4" style="background: #f6f4f4">
      <div class="container d-flex justify-content-between">
        <h2>Admin Area</h2>

        @if(session()->has('LoggedAdmin'))
          {{-- {{ session()->get('LoggedAdmin') }} --}}
        @endif

        <div>
          <ul>
            <li class="d-inline me-2"> <a class=" small link-success" href="/admin">Confirmation List</a> </li>
            <li class="d-inline me-2"> <a class=" small link-success" href="/payment">Paid List</a> </li>
            

            <li class="d-inline">

              <a href="{{ route('admin.logout') }}"
                  onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
              </a>

              <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" class="d-none">
                  @csrf
              </form>
              </li>
          </ul>
        </div>

  
      </div>
    </section>
              
    <section id="pricing" class="pricing">
      <div class="container">

        <h3 class="mb-4 fw-bold" id="regform" >Paid Members Table</h3>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Account Number</th>
                    <th scope="col">Bank</th>
                    <th scope="col" class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>


            @foreach ($members as $member)

    

                <tr>
                    <td>{{ $member->firstname }} {{ $member->lastname }}</td>
                    <td>{{ $member->phone }}</td>
                    <td>{{ $member->account_number }}</td>
                    <td>{{ $member->bank }}</td>
                    <td class="text-center">
                      <input id="member_id" type="hidden" name="member_id" value="{{ $member->id }}">
                        <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#approvalForPayment">
                            Drop Member
                        </button>
                    </td>
                </tr>


            @endforeach

            </tbody>
        </table>

      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="mt-auto">
    <div class="container d-flex justify-content-between">
      <div class="copyright">
        &copy; Copyright <strong><span>Dit Cooperative</span></strong>. All Rights Reserved
      </div>

      <div class="credits">
        Developer by <a href="https://azusion.com">Azusion</a>
      </div>

    </div>
  </footer>
  <!-- End Footer -->


  <!-- Modal -->
<div class="modal fade" id="approvalForPayment" tabindex="-1" aria-labelledby="approvalForPaymentLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="approvalForPaymentLabel"><strong>Drop Member</strong></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <p>Are you sure you this member has been paid?</p>
        </div>
        
        <div class="modal-footer">
          <button type="button" class="btn btn-outline border" data-bs-dismiss="modal">Close</button>

          <form id="confirmForm" action="/admin.pay" method="POST">
            <input type="hidden" name="member_id" value="">
            @csrf()




            <button id="confirmInitiator" type="submit" class="btn btn-main" data-bs-dismiss="modal">Yes</button>

          </form>


        </div>
    </div>
    </div>
</div>


  <!-- Vendor JS Files -->
  <!-- <script src="{{ URL::asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script> -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  
  <script src="{{ URL::asset('vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ URL::asset('vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ URL::asset('vendor/swiper/swiper-bundle.min.js') }}"></script>
  <!-- <script src="{{ URL::asset('vendor/php-email-form/validate.js') }}"></script> -->



  <!-- Template Main JS File -->
  <script src="{{ URL::asset('js/main.js') }}"></script>

  {{-- confirmation --}}
  <script>
    const confirmInitiator = document.querySelector('#confirmInitiator');
    const confirmForm = document.querySelector('#confirmForm');
    const memberId = document.querySelector('#member_id');
    
    confirmInitiator.addEventListener('click', e => {
      e.preventDefault();

      let i = document.createElement('input');
      i.setAttribute("value", memberId.value);
      i.setAttribute("type", "hidden");
      i.setAttribute("name", "member_id");

      confirmForm.appendChild(i);

      confirmForm.submit();

      // let ss = e.target.parentNode;
      
      // console.log(confirmForm);

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
