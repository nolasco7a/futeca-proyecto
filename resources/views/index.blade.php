@extends('layouts.template')
@section('content')
<div class="bd-example">
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="./assets/images/banner.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Reserva con nosotros</h5>
            {{-- <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p> --}}
            {{-- <a href="#" class="btn btn-danger">ver más</a> --}}
          </div>
        </div>
        <div class="carousel-item">
          <img src="https://via.placeholder.com/1366x720" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Second slide label</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="https://via.placeholder.com/1366x720" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Third slide label</h5>
            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>

  <div class="container-fluid">
     <div class="row">
        <div class="col-lg-6">
            <div class="row mt-5">
                <div class="col-lg-5">
                    <img src="./assets./images/banner.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-7">
                    <h2>Nuuestra Familia</h2>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nihil sapiente exercitationem eaque nam ipsum unde.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, facilis.</p>
                </div>
            </div>
            <a href="" class="btn btn-primary">ver más</a>
          </div>
          <div class="col-lg-6 mt-5">
            <div class="owl-carousel owl-theme" id="staff">
                <div class="item d-flex justify-content-center"><img src="./assets/images/banner.jpg" style="height: 150px !important; width:auto !important" alt="" srcset=""></div>
                <div class="item d-flex justify-content-center"><img src="./assets/images/banner.jpg" style="height: 150px !important; width:auto !important" alt="" srcset=""></div>
                <div class="item d-flex justify-content-center"><img src="./assets/images/banner.jpg" style="height: 150px !important; width:auto !important" alt="" srcset=""></div>
            </div>
          </div>
     </div>
  </div>
  <div class="container">
        <h1 style="font-weight: 700; letter-spacing: 10px; font-size: 50px">MARCAS</h1>
        <div class="owl-carousel owl-theme" id="marcas">
            <div class="item d-flex justify-content-center"><img src="./assets/images/banner.jpg" {{-- style="height: 150px !important; width:auto !important" --}} alt="" srcset=""></div>
            <div class="item d-flex justify-content-center"><img src="./assets/images/banner.jpg" {{-- style="height: 150px !important; width:auto !important" --}} alt="" srcset=""></div>
            <div class="item d-flex justify-content-center"><img src="./assets/images/banner.jpg" {{-- style="height: 150px !important; width:auto !important" --}} alt="" srcset=""></div>
            <div class="item d-flex justify-content-center"><img src="./assets/images/banner.jpg" {{-- style="height: 150px !important; width:auto !important" --}} alt="" srcset=""></div>
            <div class="item d-flex justify-content-center"><img src="./assets/images/banner.jpg" {{-- style="height: 150px !important; width:auto !important" --}} alt="" srcset=""></div>
            <div class="item d-flex justify-content-center"><img src="./assets/images/banner.jpg" {{-- style="height: 150px !important; width:auto !important" --}} alt="" srcset=""></div>
            <div class="item d-flex justify-content-center"><img src="./assets/images/banner.jpg" {{-- style="height: 150px !important; width:auto !important" --}} alt="" srcset=""></div>
            <div class="item d-flex justify-content-center"><img src="./assets/images/banner.jpg" {{-- style="height: 150px !important; width:auto !important" --}} alt="" srcset=""></div>
            <div class="item d-flex justify-content-center"><img src="./assets/images/banner.jpg" {{-- style="height: 150px !important; width:auto !important" --}} alt="" srcset=""></div>
        </div>
  </div>
@endsection