@extends('layouts.app')


@section('content')

<div class="profile-page sidebar-collapse">

<div class="wrapper">
    <div class="page-header clear-filter page-header-small" filter-color="orange">
      <div class="page-header-image" data-parallax="true" style="background-image:url('/img/bg5.jpg');">
      </div>
      <div class="container">
        <h3 class="title">Tulis Postingan</h3>
      </div>
    </div>
    <div class="section">
      <div class="container">
          <div class="row" id="modals">
            
          <div class="col">
          <form class="form" method="POST" action="{{ url('/store') }}">
          {{ csrf_field() }}
              <h4>Judul</h4>
              <div class="form-group">
                  <input type="text" id="judul" name="judul" placeholder="Judul Postingan" class="form-control" />
                  <input type="hidden" id="id" name="id" value="{{Session::get('id')}}" />
                <h4>Isi Postingan </h4>
              
                <textarea class="form-control" id="isi" name="isi" rows="4" cols="80" placeholder="Tulis isi postingan disini..."></textarea>
                <h4>Thumbnail Url</h4>
                <input type="text" id="thumbnail" placeholder="example : http://myimage/gambar1.png" name="thumbnail" class="form-control" />  
              </div>
             
                <!--<input type="file" id="thumbnail" name="thumbnail" class="form-control" accept="image/*">
  -->
                <button type="submit" class="btn btn-primary btn-round btn-lg btn-block">Posting</button>
                </div>
          </form>
                 
        </div>
      </div>
    </div>

</div>

      
@endsection