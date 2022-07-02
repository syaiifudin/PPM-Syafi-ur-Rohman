@extends('layouts.frontend')

@section('content')

<section class="probootstrap-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center section-heading probootstrap-animate">
              <h2>Fasilitas PPM Syafi'ur Rohman</h2>
              <p class="lead">Sed a repudiandae impedit voluptate nam Deleniti dignissimos perspiciatis nostrum porro nesciunt</p>
            </div>
          </div>
      <div class="row">
          @foreach ($fasilitas as $item)
            <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
                <a href="{{route('detailfasilitas', $item->slug)}}" class="probootstrap-featured-news-box">
                <figure class="probootstrap-media"><img src="{{$item->fasilitasgallery()->exists() ? Storage::url($item->fasilitasgallery->first()->url) : "data:image/gif;base64,R0lGODlhAQABAIAAAMLCwgAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw=="}}" alt="Free Bootstrap Template by ProBootstrap.com" class="img-index"></figure>
                <div class="probootstrap-text">
                    <h3>{{$item->name}}</h3>
                </div>
                </a>
            </div>
          @endforeach
        <div class="clearfix visible-sm-block visible-xs-block"></div>
      </div>
    </div>
  </section>

@endsection
