
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg bg-default fixed-top " color-on-scroll="400">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="/" rel="tooltip" title="VC Indonesia" data-placement="bottom">
          VC Indonesia
        </a>
        <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-bar top-bar"></span>
          <span class="navbar-toggler-bar middle-bar"></span>
          <span class="navbar-toggler-bar bottom-bar"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse justify-content-end" id="navigation" data-nav-image="./assets/img/blurred-image-1.jpg">
        <ul class="navbar-nav">
        @if(Auth::check())
        <li class="nav-item active">
                     <!-- <a class="nav-link" href="/login-deprecated">
                       <p>Login</p>
                
                      </a>-->
                     
                      <a class="nav-link" href="/login-deprecated">
                      <p>Login</p>
                      </a>
                   
          </li>
         
          <li class="nav-item">
            <!--<a class="nav-link btn btn-neutral" href="/signup-deprecated">
              
              <p>Sign Up</p>
            </a>-->
            <a class="nav-link btn btn-neutral" href="/signup-deprecated">
            <p>Sign Up</p>
            </a>
          </li>
          @else
          
          <li class="nav-item">
            <!--<a class="nav-link btn btn-neutral" href="/signup-deprecated">
              
              <p>Sign Up</p>
            </a>-->
            <a class="nav-link btn btn-neutral" href="/logout">{{ __('Log Out') }}</a>
           
          </li>
          @endif
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->