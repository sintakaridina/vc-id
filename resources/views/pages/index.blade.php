@extends('layouts.app')


@section('content')

<div class="index-page sidebar-collapse">
 <div class="wrapper">
    <div class="page-header clear-filter" filter-color="orange">
      <div class="page-header-image" data-parallax="true" style="background-image:url('img/header.jpg');">
      </div>
      <div class="container">
        <div class="content-center brand">
          <img class="n-logo" src="img/now-logo.png" alt="">
          <h1 class="h1-seo">VC ID</h1>
          <h3>Village Culture Indonesia</h3>
        </div>
        <h5 class="category category-absolute">Ceritakan Desamu Sekarang..
          </h6>
      </div>
    </div>
    <div class="main">
      {{--<div class="section section-images">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="hero-images-container">
                <img src="img/hero-image-1.png" alt="">
              </div>
              <div class="hero-images-container-1">
                <img src="img/hero-image-2.png" alt="">
              </div>
              <div class="hero-images-container-2">
                <img src="img/hero-image-3.png" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>--}}
      <div class="section section-tabs">
        <div class="container">
          <div class="row">
          @foreach($data as $key => $d)
            <div class="col-md-10 ml-auto col-xl-6 mr-auto">
            
              <!-- Nav tabs -->
              <div class="card">
                <div class="card-header">
                    <div class="nav nav-tabs nav-tabs-neutral justify-content-center">
                <img src="{{ $d->thumbnail }}" alt="Raised Image" class="rounded img-raised">
                    </div>
                </div>
                <div class="card-body">
                  <!-- Tab panes -->
                  <div class="tab-content text-center">
                    <div class="tab-pane active" id="home" role="tabpanel">
                    <h4>{{ $d->judul }}</h4>
                      <p>{{ $d->isi }}</p>
                      <a href="{{url('read',array($d->id_post))}}" class="btn btn-outline-default btn-primary btn-round">Read More</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
            


            
            </div>
          </div>
        </div>
      </div>
      <!-- End Section Tabs -->
      </div>


@endsection