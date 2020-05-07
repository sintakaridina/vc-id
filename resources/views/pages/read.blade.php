@extends('layouts.app')


@section('content')

<div class="index-page sidebar-collapse">
 <div class="wrapper">

 <div class="card-body">
                 
            <div class="col mr-auto">
              <p class="category">{{$data->judul}}</p>
              <!-- Nav tabs -->
              <div class="card">
                <div class="card-header">
                    <div class="nav nav-tabs nav-tabs-neutral justify-content-center">
                <img width="65%" height="auto" src="{{$data->thumbnail}}" alt="Raised Image" class="rounded img-raised">
                    </div>
                </div>
                <div class="card-body">
                  <!-- Tab panes -->
                  <div class="tab-content text-center">
                    <div class="tab-pane active" id="home" role="tabpanel">
                    <h4>{{$data->judul}}</h4>
                      <p>{{$data->isi}}
                      <br> <br>
                      

                      </p>
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>


            
            </div>
          </div>
        </div>
      </div>
      <!-- End Section Tabs -->

</div>
</div>

@endsection