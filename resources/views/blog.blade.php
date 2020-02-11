@extends('layouts.template')
@section('content')
    <section class="banner">
        <div class="principal-banner d-flex justify-content-center align-items-center">
            <img src="./assets/images/blog/blog_banner.jpg" alt="">
            <div class="overlay"></div>
            <h1>FUTECA BLOG</h1>
        </div>
    </section>
    
    {{-- Seccion de ultimas noticias --}}
<section>
  <br><br><br>
  <h1 class="text-center"><span class="h1-span">ÚLTIMAS</span> NOTICIAS</h1>
  <div class="container">
   <div class="row py-3">
        @foreach ($noticias as $noticia)
        <div class="col-lg-4 col-md-4 col-sm-6 col-12">
            <div class="card p-3 card-shadow">
            <img src="{{Storage::url($noticia->imagen)}}" class="card-img-top" alt="...">
              <div class="card-body p-0">
              <h2 class="card-date">{{$noticia->created_at}}</h2>
              <h5 class="card-title p-1 text-center text-bold">{{$noticia->titulo}}</h5>
                <div class="separator-title"></div>
                @php
                    $descripcion = $noticia->descripcion;
                    $descripcion = substr($descripcion, 0, 80);
                @endphp
              <p class="card-text">{{$descripcion}}...</p>
              <a href="" class="btn-futeca-2 d-flex" data-toggle="modal" data-target="#Modal{{$noticia->id}}">
                <div class="ml-2 mt-1">VER MÁS</div>
                <div class="after"></div>
                <span>></span>
              </a>
              </div>
            </div>
          </div>
        @endforeach
        @foreach ($noticias as $noticia)
        <div class="modal fade" id="Modal{{$noticia->id}}" tabindex="-1" role="dialog" aria-labelledby="ModalLabel{{$noticia->id}}" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="ModalLabel{{$noticia->id}}">{{$noticia->titulo}}</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                    <p>{{$noticia->descripcion}}</p>
                    </div>
                    <div class="modal-footer">
                      {{-- <a href="" class="btn-futeca-2 d-flex" data-dismiss="modal">
                        <div class="ml-2 mt-1">CERRAR</div>
                        <div class="after"></div>
                        <span>></span>
                      </a> --}}
                    </div>
                  </div>
                </div>
              </div>
            @endforeach
    </div>
</div>
</section>
@endsection