<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Home | Dit Cooperative</title>
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



  <main id="main">
    

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h3>Admin <span>Registration</span></h3>
        </div>

        <div class="row mt-5">
  
          <div class="col-lg-10 offset-lg-1 mt-5 mt-lg-0">
           
  
            <form action="{{ route('member-reg') }}" method="POST" enctype="multipart/form-data" role="form" class="php-email-form">
              <div class="row mb-2">
                <div class="col-8 offset-2 form-group">
                  <label for="firstname">Your First Name</label>
                  <input type="text" required name="firstname" class="form-control mt-2 mt-2" id="firstname" placeholder="" >
                </div>

                <div class="col-8 offset-2 form-group mt-3 mt-md-0">
                  <label for="lastname">Your Last Name</label>
                  <input type="text" class="form-control mt-2" required name="lastname" id="lastname" placeholder="" >
                </div>
              </div>

              <div class="row mb-2">
                <div class="col-8 offset-2 form-group"> 
                  <label for="">Enter your Next-of-Kin phone number</label>
                  <input type="text" class="form-control mt-2" required name="kin_phone">                 
                </div>
                <div class="col-8 offset-2 form-group mt-3 mt-md-0">
                  <label for="">Enter your account number </label>
                  <input type="text" required name="account_number" class="form-control mt-2">
                </div>
              </div>


              @csrf
              
              
              <div class="text-center"><button class="btn btn-lg" type="submit">Submit</button></div>
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
        &copy; Copyright <strong><span>Dit Cooperative</span></strong>. All Rights Reserved
      </div>

      <div class="credits">
        Developer by <a href="https://azusion.com">Azusion</a>
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



  <!-- Template Main JS File -->
  <script src="{{ URL::asset('js/main.js') }}"></script>



</body>

</html>


<!-- I agree to one time slot payment of N100,000 and invite two persons who I trust to be part of the Cooperative. Upon confirmation of payment of my 2 referrals i will be gifted with N200,000 (Double payment) within 72 hours.
I agree to the process of leaving 10% (N20,000) of the total amount received as administrative charges.
I understand that, this is a private Cooperative society and social media advertisement is prohibited.
I understand there is no provision for refund of payment, I will ensure that I get two trusted members to sign on before making payment
I understand neither the Cooperative nor my referee is responsible for unforeseen payment delays and dispute resolutions
I will ensure to fill and upload all required information before my contribution is processed for gifting
I agree to all the terms and conditions above -->