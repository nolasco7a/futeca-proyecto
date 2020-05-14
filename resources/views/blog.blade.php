@extends('layouts.template')
@section('content')
<script src="js/lc_lightbox.lite.js" type="text/javascript"></script>
<script src="lib/AlloyFinger/alloy_finger.min.js" type="text/javascript"></script>

<script>
    @foreach ($noticias as $item)
        $(document).ready(function() {
        lc_lightbox('#{{$item->id}} a',{
            thumb_attr: 'data-lcl-thumb', 
            
            skin: 'minimal',
            radius: 0,
            padding	: 0,
            border_w: 0,

        });
    });
    @endforeach
</script>
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
            @php
                      $urlnoticia = json_decode($noticia->imagen);
                      $urlnoticia = str_replace('\\', '/', $urlnoticia);
                      $first= Arr::first($urlnoticia);
                      @endphp
            
            <img src="{{Storage::url($first)}}" class="card-img-top" alt="...">
           
              <div class="card-body p-0">
                @php
                    $fecha=date_format($noticia->created_at, 'd-m-y');
                      /*$date=date_format($fecha, ); */
                @endphp
              <h2 class="card-date">{{$fecha}}</h2>
              <h5 class="card-title p-1 text-center text-bold">{{$noticia->titulo}}</h5>
                <div class="separator-title"></div>
                @php
                    $descripcion = $noticia->descripcion;
                    $descripcion = substr($descripcion, 0, 100);
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
                    <div class="modal-body" id="{{$noticia->id}}">
                    <div class="row d-flex">
                    <div class="col-md-6">
                    <div class="owl-carousel owl-theme galeria_academia rounded" id="">
                      @php
                      $urlnoticia = json_decode($noticia->imagen);
                      $urlnoticia = str_replace('\\', '/', $urlnoticia);
                      @endphp
                      @foreach ($urlnoticia as $item)
                      <div class="item" >
                                <a  href="{{Storage::url($item)}}" title="">
                                        <img  src="{{Storage::url($item)}}" alt="" height="400" width="363">
                                    </a>
                      </div>
               @endforeach
               </div>
                 </div>
                 <div class="col-md-6">
                    <p>{{$noticia->descripcion}}</p>
                    </div>
                 </div>
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