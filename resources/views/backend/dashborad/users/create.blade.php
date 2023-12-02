@extends('backend.layout.master')
@section('content')
<section class="section">
        <div class="container-fluid">
          <!-- ========== title-wrapper start ========== -->
          <div class="title-wrapper pt-30">
            <div class="row align-items-center">
              <div class="col-md-6">
                <div class="title">
                  <h2>Add User</h2>
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
                <form action="{{route('users.store')}}" method="POST"  enctype="multipart/form-data" >
                @csrf

                  <div class="row">
                    <div class="col-12">
                      <div class="input-style-1">
                        <label> Name</label>
                        <input type="text" placeholder="Full Name" name="name" />
                        <!-- validation -->
                        @if ($errors->has('name'))
                        <span class="text-danger text-left">{{ $errors->first('name') }}</span>
                    @endif
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="input-style-1">
                        <label>Email</label>
                        <input type="email" placeholder="Email" name="email"/>
                        @if ($errors->has('email'))
                        <span class="text-danger text-left">{{ $errors->first('email') }}</span>
                    @endif
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="input-style-1">
                        <label>password</label>
                        <input type="password" placeholder="enter password" name="password" />
                      </div>
                    </div>
                    
                   


                   
                                        
                    <div class="col-xxl-4">
                      <div class="input-style-1">
                        <label>role</label>
                        {!! Form::select('role[]', $roles,[], array('class' => 'form-control bg-light','multiple')) !!}

                      </div>
                    </div>
                    
                    </div>
                  
                    <div class="col-12">
                      <button class="main-btn primary-btn btn-hover">
                        Add Profile
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