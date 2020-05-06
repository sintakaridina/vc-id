@extends('layouts.app')


@section('content')

<div class="profile-page sidebar-collapse">

<div class="wrapper">
    <div class="page-header clear-filter page-header-small" filter-color="orange">
      <div class="page-header-image" data-parallax="true" style="background-image:url('/img/bg5.jpg');">
      </div>
      <div class="container">
        <div class="photo-container">
          <img src="/img/ava-1.jpg" alt="">
        </div>
        <h3 class="title">{{Session::get('name')}}</h3>
        <p class="category">( {{Session::get('email')}} )</p>
       
      </div>
    </div>
    <div class="section">
      <div class="container">
        <div class="button-container">
          <a href="#button" class="btn btn-primary btn-round btn-lg">Tulis Postingan</a>
        </div>
        <h3 class="title">Kelola Postingan</h3>
          <div class="row" id="modals">
            
          <div class="col">
              <h4>Judul Postingan tentang legenda banyuwangi</h4>
              <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                Edit Post
              </button>
              <button class="btn btn-warning" data-toggle="modal" data-target="#myModal1">
                Delete Post
              </button>
              <hr>
              <h4>Judul Postingan tentang legenda banyuwangi</h4>
              <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                Edit Post
              </button>
              <button class="btn btn-warning" data-toggle="modal" data-target="#myModal1">
                Delete Post
              </button>
              <hr>

            </div>
                 
        </div>
      </div>
    </div>

</div>

      
@endsection