@extends('backend.layout.master')
@section('content')
<section class="section">
        <div class="container-fluid">
          <!-- ========== title-wrapper start ========== -->
          <div class="title-wrapper pt-30">
            <div class="row align-items-center">
              <div class="col-md-6">
                <div class="title">
                  <h2>Add type of films</h2>
                </div>
              </div>
              <!-- end col -->
         
          <!-- ========== title-wrapper end ========== -->
<div class="container">
          <div class="row">
            <div class="col-lg-8">
              <div class="card-style settings-card-2 mb-30">
                <div class="title mb-30">
                  <h6>type of film</h6>
                </div>
<form action ="{{route('type.store')}}" method="POST" >
  @csrf
                <div class="row">
<div class="card-style mb-30">
                 
                  <div class="select-style-1">
                    <label>Type</label>
                    <div class="select-position">
                      <select name="type">
                     
                      <option value="" selected>select</option>

                        <option value="romantic">romantic</option>
                        <option value="action">action</option>
                        <option value="comedy">comedy</option>
                        <option value="Drama">Drama</option>
                        <option value="police">police</option>
                      </select>
                    </div>
                  </div>
 
                
                 
                    <div class="col-12">
                    <button type="submit" class="btn btn-primary">Submit</button>  <div class="col-xs-12 col-sm-12 col-md-12 text-center">
      
    </div>
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