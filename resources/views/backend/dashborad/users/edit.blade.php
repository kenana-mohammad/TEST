@extends('backend.layout.master')
@section('content')
<section class="section">
        <div class="container-fluid">
          <!-- ========== title-wrapper start ========== -->
          <div class="title-wrapper pt-30">
            <div class="row align-items-center">
              <div class="col-md-6">
                <div class="title">
                  <h2>edit User</h2>
                </div>
              </div>
              <!-- end col -->
         
          <!-- ========== title-wrapper end ========== -->
<div class="container">
          <div class="row">
  
<div class="col-2"></div>
            <div class="col-lg-8">
              <div class="card-style settings-card-2 mb-30">
                <div class="title mb-30">
                  <h6>My Profile</h6>
                </div>
                <form action="{{route('users.update',$user->id)}}" method="Post"  enctype="multipart/form-data" >
                @csrf
                @method('PUT')

                  <div class="row">
                    <div class="col-12">
                      <div class="input-style-1">
                        <label> Name</label>
                        <input type="text" placeholder="Full Name" name="name" value="{{$user->name}}" />
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="input-style-1">
                        <label>Email</label>
                        <input type="email" placeholder="Email" name="email" value="{{$user->email}}"/>
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="input-style-1">
                        <label>password</label>
                        <input type="password" placeholder="enter password" name="password" value="{{$user->password}}"/>
                      </div>
                    </div>
                   


                    
                 
                    </div>
                    
                    </div>
                   
                    <div class="col-12">
                      <button class="main-btn primary-btn btn-hover">
                        Update Profile
                      </button>
                    </div>
                  </div>
                </form>
              </div>
              <!-- end card -->
            </div>
            <!-- end col -->
          </div>
          <!-- end row -->
        </div></div>
        <!-- end container -->
      </section>
      <!-- ========== section end ========== -->

@endsection