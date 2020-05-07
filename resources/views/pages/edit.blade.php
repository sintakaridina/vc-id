@extends('layouts.app')


@section('content')

<div class="profile-page sidebar-collapse">

<div class="wrapper">
    <div class="page-header clear-filter page-header-small" filter-color="orange">
      <div class="page-header-image" data-parallax="true" style="background-image:url('/img/bg5.jpg');">
      </div>
      <div class="container">
        <h3 class="title">Edit Postingan</h3>
      </div>
    </div>
    <div class="section">
      <div class="container">
          <div class="row" id="modals">
            
          <div class="col">
          <form class="form" method="POST" action="{{url('update', $data->id_post)}}">
          {{ csrf_field() }}
              <h4>Judul</h4>
              <div class="form-group">
                  <input type="text" id="judul" name="judul" value="{{$data->judul}}" class="form-control" />
                  
                <h4>Isi Postingan </h4>
              
                <textarea class="form-control" id="isi" name="isi" rows="4" cols="80">{{$data->isi}}</textarea>
                <h4>Thumbnail </h4>
                <input type="text" id="thumbnail" name="thumbnail" value="{{$data->thumbnail}}" class="form-control" />
                  
                </div>
          
             
                <!--<input type="file" id="thumbnail" name="thumbnail" class="form-control" accept="image/*">
  -->
                <button type="submit" class="btn btn-primary btn-round btn-lg btn-block">Update Postingan</button>
                </div>
          </form>
                 
        </div>
      </div>
    </div>

</div>

      
@endsection