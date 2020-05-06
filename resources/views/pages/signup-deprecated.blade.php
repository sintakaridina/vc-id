@extends('layouts.app')


@section('content')
<div class="login-page sidebar-collapse">
<div class="page-header clear-filter" filter-color="orange">
    <div class="page-header-image" style="background-image:url(/img/login.jpg)"></div>
    <div class="content" >
      <div class="container"style="color:white">
        <div class="col-md-4 ml-auto mr-auto">
          <div class="card card-login card-plain">
            <form class="form" action="{{ url('/registerPost') }}" method="post">
            {{ csrf_field() }}
              <div class="card-header text-center">
                <div class="logo-container">
                  <img src="/img/now-logo.png" alt="">
                </div>
              </div>
              <div class="card-body">
                <div class="input-group no-border input-lg">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="now-ui-icons users_circle-08"></i>
                    </span>
                  </div>
                  <input type="email" id="email" name="email" class="form-control" placeholder="Email">
                </div>
                <div class="input-group no-border input-lg">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="now-ui-icons text_caps-small"></i>
                    </span>
                  </div>
                  <input type="password" id="password" name="password" placeholder="Password" class="form-control" />
                </div>
              
              <div class="input-group no-border input-lg">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="now-ui-icons text_caps-small"></i>
                    </span>
                  </div>
                  <input type="password" id="confirmation" name="confirmation" placeholder="Password Confirmation" class="form-control" />
                </div>
              
              <div class="input-group no-border input-lg">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="now-ui-icons text_caps-small"></i>
                    </span>
                  </div>
                  <input type="text" id="name" name="name" placeholder="Nama" class="form-control" />
                </div>
              </div>
              <div class="card-footer text-center">
                <button type="submit" class="btn btn-primary btn-round btn-lg btn-block">Get Started</button>
                <div class="pull-left">
                  <h6>
                    
                  </h6>
                </div>
                <div class="pull-right">
                  <h6>
                    <a href="/login-deprecated" class="link">Log In >></a>
                  </h6>
                </div>
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>


</div>
    @endsection