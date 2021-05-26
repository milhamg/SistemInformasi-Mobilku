@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  
  <title>Dealerku</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

   <!-- Favicons -->
   <link href="{{ asset('/tampilan-home/assets/img/umi.png') }}" rel="icon">
   <link href="{{ asset('/tampilan-home/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">
 
   <!-- Google Fonts -->
   <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
 
   <!-- Vendor CSS Files -->
   <link href="{{ asset('/tampilan-home/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
   <link href="{{ asset('/tampilan-home/assets/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
   <link href="{{ asset('/tampilan-home/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
   <link href="{{ asset('/tampilan-home/assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
   <link href="{{ asset('/tampilan-home/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
   <link href="{{ asset('/tampilan-home/assets/vendor/venobox/venobox.css') }}" rel="stylesheet">
   <link href="{{ asset('/tampilan-home/assets/vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
 
   <!-- Template Main CSS File -->
   <link href="{{ asset('/tampilan-home/assets/css/style.css') }}" rel="stylesheet">

   <!-- Header -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">
		<link type="text/css" rel="stylesheet" href="{{ asset('/tampilan-header/css/bootstrap.min.css') }}">
		<link type="text/css" rel="stylesheet" href="{{ asset('/tampilan-header/css/slick.css') }}">
		<link type="text/css" rel="stylesheet" href="{{ asset('/tampilan-header/css/slick-theme.css') }}">
		<link type="text/css" rel="stylesheet" href="{{ asset('/tampilan-header/css/nouislider.min.css') }}">
		<link rel="stylesheet" href="{{ asset('/tampilan-header/css/font-awesome.min.css') }}">
		<link type="text/css" rel="stylesheet" href="{{ asset('/tampilan-header/css/style.css') }}">
  
</head>
<body>
  



 <!-- ======= Hero Section ======= -->
 <section id="hero">
  <div class="hero-container">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active">
          <div class="carousel-background"><img src="{{ asset('/tampilan-home/assets/img/slide/edit1.png') }} " alt=""></div>
          <div class="carousel-container">
            <div class="carousel-content">
              <h2 class="animated fadeInDown"> <br><span>MOBILKU</span></h2>
              <p class="animated fadeInUp"></p>

            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item">
          <div class="carousel-background"><img src="{{ asset('/tampilan-home/assets/img/slide/edit2.png') }} " alt=""></div>
          <div class="carousel-container">
            <div class="carousel-content">
              {{-- <h2 class="animated fadeInDown">Lorem Ipsum Dolor</h2>
              <p class="animated fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p> --}}

            </div>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item">
          <div class="carousel-background"><img src="tampilan-home/assets/img/slide/edit3.png " alt=""></div>
          <div class="carousel-container">
            <div class="carousel-content">
              {{-- <h2 class="animated fadeInDown">Sequi ea ut et est quaerat</h2>
              <p class="animated fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p> --}}

            </div>
          </div>
        </div>

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon ri-arrow-left-line" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon ri-arrow-right-line" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>

    </div>
  </div>
</section><!-- End Hero -->
<br>


<!-- HEADER -->
<header>
			<!-- MAIN HEADER -->
			<div id="header">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<!-- LOGO -->
						<div class="col-md-3">
							<div class="header-logo">
								<a href="#" class="logo">
									<img src="./img/logo.png" alt="">
								</a>
							</div>
						</div>
						<!-- /LOGO -->

						<!-- SEARCH BAR -->
						<div class="col-md-6">
							<div class="search">
								<form>
									<!-- <select class="input-select">
										<option value="0">Semua Kategori</option>
										<option value="1">Jeep</option>
										<option value="1">Off-road</option>
									</select> -->
                  <div class="input-group mb-3">
                    <input wire:model="search" type="text" class="form-control" placeholder="Search.." aria-label="Search" ariadescribedby="basic-addon1">
                  </div>
                  <div class="input-group mb-3">
                    <input wire:model="min" type="text" class="form-control" placeholder="Harga min.." aria-label="Harga min" ariadescribedby="basic-addon1">
                  </div>

                  <div class="input-group mb-3">
                    <input wire:model="max" type="text" class="form-control" placeholder="Harga max.." aria-label="Harga max" ariadescribedby="basic-addon1">
                  </div>
                  <!-- <input wire:model="search" class="input" placeholder="Search here">
									<button class="search-btn">Search</button> -->
								</form>
							</div>
						</div>
						<!-- /SEARCH BAR -->

						<!-- ACCOUNT -->
            @if(Auth::user())
              @if(Auth::user()->level == 1)
              <div class="col-md-3 clearfix">
							<div class="header-ctn">
								<div>
									<a href="#">
										<i class="fa fa-plus-circle"></i>
                    <a href="{{ url('TambahProduk/') }}">Tambah Produk</a>
                    <!-- <div class="qty">2</div> -->
									</a>
								</div>
              <div class="col-md-3">
                  
              </div>
              @endif
          @endif
						
							</div>
						</div>
						<!-- /ACCOUNT -->
					</div>
					<!-- row -->
				</div>
				<!-- container -->
			</div>
			<!-- /MAIN HEADER -->
		</header>
    
    <!-- END HEADER -->



</br>
<div class="container">
    
    <br>

    <!-- <div class="row">
        <div class="col-md-6">
            <div class="input-group mb-3">
                <input wire:model="search" type="text" class="form-control" placeholder="Search.." aria-label="Search" ariadescribedby="basic-addon1">
            </div>

            <div class="input-group mb-3">
                <input wire:model="min" type="text" class="form-control" placeholder="Harga min.." aria-label="Harga min" ariadescribedby="basic-addon1">
            </div>

            <div class="input-group mb-3">
                <input wire:model="max" type="text" class="form-control" placeholder="Harga max.." aria-label="Harga max" ariadescribedby="basic-addon1">
            </div>
        </div>
    </div> -->

    <section class="products mb-5">
        <div class="row mt-4">
            @foreach($products as $product)
            
            <div class="col-md-3 mb-3">
                <div class="card">

                    <div class="card-body text-center">
                    <img src="{{ asset('.\storage/photos/'.$product->gambar) }}" width="200px" height="270px">
                        <div class="row mt-2">
                            <div class="col-md-12">
                            <h5><strong>{{ $product->nama }}</strong></h5>
                            <h6><strong>Rp. {{ number_format($product->harga) }}</strong></h6>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-12">
                            <button class="btn btn-success btn-block" wire:click="beli({{ $product->id }})">Beli</button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            @endforeach
            
        </div>
    </section>

</div>
<!-- ======= Footer ======= -->
<footer id="footer">
<div class="footer-top">
  <div class="container">

<div class="container">
  <div class="copyright">
    &copy; 2021 Mobilku <strong><span>Indramayu</span></strong>.
  </div>
  <div class="credits">
  </div>
</div>
</footer>
<!-- End Footer -->
<!-- jQuery -->
<script src="{{asset('asset/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('asset/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('asset/dist/js/adminlte.min.js')}}"></script>

<!-- JS for Header -->
<script src="{{ asset('/tampilan-header/js/jquery.min.js') }}"></script>
<script src="{{ asset('/tampilan-header/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('/tampilan-header/js/slick.min.js') }}"></script>
<script src="{{ asset('/tampilan-header/js/nouislider.min.js') }}"></script>
<script src="{{ asset('/tampilan-header/js/jquery.zoom.min.js') }}"></script>
<script src="{{ asset('/tampilan-header/js/main.js') }}"></script>

</body>
</html>

@endsection