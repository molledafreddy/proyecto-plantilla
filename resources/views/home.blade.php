@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-2 col-md-2" >
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="card" style="width: 12rem; height: 18rem; margin-bottom: 20px;">
                      <img class="card-img-top" src="{{ asset('images/work-5.jpg') }}" style="height: 170px; width: 190px;" alt="Card image cap">
                      <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title.</p>
                      </div>
                    </div> 
                </div>
                <div class="col-lg-12 col-md-12">
                    <div class="card" style="width: 12rem; height: 18rem;">
                      <img class="card-img-top" src="{{ asset('images/work-1.jpg') }}" style="height: 170px; width: 190px;" alt="Card image cap">
                      <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title.</p>
                      </div>
                    </div> 
                </div>
            </div>
        </div>
        <div class="col-md-8 col-lg-8">
            <div class="card" style="margin-left: 29px;">
                {{-- <div class="card-header">Dashboard</div> --}}
                <img class="card-img-top" src="{{ asset('images/banner.jpg') }}" alt="Card image cap">
                <div class="card-body">
                    <div style="padding-left: 10px;">
                        <h1>Lorem ipsum dolor</h1>
                    </div>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="cart-content" style="height:179px;overflow-y:scroll;">
                        <p style="font-size: 15px; color:#6c7179; padding: 15px; ">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.    
                        </p>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-2 col-md-2">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="card" style="width: 12rem; height: 18rem; margin-bottom: 20px;">
                      <img class="card-img-top" src="{{ asset('images/work-3.jpg') }}" style="height: 170px; width: 190px;" alt="Card image cap">
                      <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title.</p>
                      </div>
                    </div> 
                </div>
                <div class="col-lg-12 col-md-12">
                    <div class="card" style="width: 12rem; height: 18rem;">
                      <img class="card-img-top" src="{{ asset('images/work-8.jpg') }}" style="height: 170px; width: 190px;" alt="Card image cap">
                      <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title.</p>
                      </div>
                    </div> 
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
