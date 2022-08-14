@extends('index')
@section('content')
<style>
  /* Make the image fully responsive */
  .carousel .slide{
    height: 250px;
  }
  .carousel-inner  {
    height: 250px;
  }
  .carousel-inner img {
    width: 100%;
    height: 250px;
  }
  a{
    text-decoration: none;
    color:white;
  }
  a:hover{
    color: #04a49c;
  }
</style>
<main>

@include('cookieConsent::index')
    <!-- banniere publicitere -->
    <section class="banniere_pub_outside bg-light">
      <div class="container">
        <a href="#">
          <figure>
            <img src="assets/images/banner.jpg" alt="banner" />
          </figure>
        </a>
      </div>
    </section>

    <!--random articles -->
    

    <x-random />

    <!-- football -->
    
    <x-football />

    <!-- banniere publicitere -->
    <div class="banniere_pub_outside bg-white">
      <div class="container">
        <a href="#">
          <figure>
            <img src="assets/images/banner.jpg" alt="banner" />
          </figure>
        </a>
      </div>
    </div>

    <!-- tennis -->
    
    <x-tennis />

    <!-- Rugby -->
    
    <x-rugby />

    <!-- banniere publicitere -->
    <div class="banniere_pub_outside bg-white">
      <div class="container">
        <a href="#">
          <figure>
            <img src="assets/images/banner.jpg" alt="banner" />
          </figure>
        </a>
      </div>
    </div>

    <!-- Cyclisme -->

    <x-cyclisme />

    <!-- banniere publicitere -->
    <div class="banniere_pub_outside bg-white">
      <div class="container">
        <a href="#">
          <figure>
            <img src="assets/images/banner.jpg" alt="banner" />
          </figure>
        </a>
      </div>
    </div>

    <!--Basket-->

    <x-basket />

    <!-- Videos -->

    <x-videos />

    <!-- People and Divers  -->

    <section class="people_divers_sec section_padding bg-white">
      <div class="container">
        <div class="row">
          <!-- People -->

          <x-people />

          <!--Divers -->

          <x-Divers />

          
        </div>
      </div>
    </section>
  </main>
@endsection