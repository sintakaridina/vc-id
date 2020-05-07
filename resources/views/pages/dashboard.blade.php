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
        <p class="category">( {{Session::get('id')}} )</p>
       
      </div>
    </div>
    <div class="section">
      <div class="container">
        <div class="button-container">
          <a href="/write" class="btn btn-primary btn-round btn-lg">Tulis Postingan</a>
        </div>
        <h3 class="title">Kelola Postingan</h3>
          <div class="row" id="modals">
            
          <div class="col">
          @foreach($data as $key => $d)
              <h4>{{ $d->judul }}</h4>
              <a href="{{url('edit',array($d->id_post))}}" class="btn btn-primary" >
                Edit Post
              </a>
              <a href="{{url('delete',array($d->id_post))}}" class="btn btn-warning" data-toggle="modal" data-target="#myModal1">
                Delete Post
              </a>
              <hr>
            @endforeach
             

            </div>
                 
        </div>
      </div>
    </div>

</div>

      
@endsection