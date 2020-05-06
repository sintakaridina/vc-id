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
              <h4>Judul </h4>
              <div class="form-group">
                  <input type="text" value="" placeholder="Judul Postingan" class="form-control" />
                </div>
                <h4>Isi Postingan </h4>
                <div class="form-group">
                <textarea class="form-control" name="name" rows="4" cols="80" placeholder="Tulis isi postingan disini..."></textarea>
                </div>
                <h4>Thumbnail </h4>
                <input type="file" id="img" name="img" class="form-control" accept="image/*">
            </div>
                 
        </div>
      </div>
    </div>

</div>

      
@endsection