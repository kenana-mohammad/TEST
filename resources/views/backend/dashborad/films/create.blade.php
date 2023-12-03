@extends('backend.layout.master')
@section('content')
<section class="section">
        <div class="container-fluid">
          <!-- ========== title-wrapper start ========== -->
          <div class="title-wrapper pt-30">
            <div class="row align-items-center">
              <div class="col-md-6">
                <div class="title">
                  <h2>Add film</h2>
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
                  <h6>film</h6>
                </div>
                <form action="{{route('film.store')}}" method="POST"  enctype="multipart/form-data" >
                @csrf
                    
                  <div class="row">
                    <div class="col-12">
                      <div class="input-style-1">
                        <label> name</label>
                        <input type="text" placeholder="name" name="name" />
                         @error('name')
                        <span class="text-danger text-left">{{ $message }}</span>
                    @enderror
                      </div></div>


                      <div class="col-12">
                       <div class="input-style-1">
                        <label>show Time</label>
                        <input type="date" placeholder="time" name="time">
                       </div> 
</div>

<div class="col-12">
                       <div class="input-style-1">
                        <label>image</label>
                        <input class="form-control" type="file" name="image">
</div></div>

<div class="col-12">
                       <div class="input-style-1">
                        <label>Description</label>
                        <textarea cols="8" rows="8" class="form-control  mt-5 " placeholder="message" name="description"></textarea>

</div></div>

<!-- type -->

                    <!-- check film -->
              
 
                  <div class="select-style-1">
                    <label>multi Type </label>
                    <div class="select-position">
                    <select name="Type_id[]" class="form-control" multiple>
                                                <option selected >please choose types</option>
                                                @foreach($alltypes as $alltype)
                                                <option value="{{$alltype->id}}">{{$alltype->type}}</option>
                                                @endforeach
                                            </select>
                    </div>
                  </div>
                    <div class="col-12">
                      <button class="main-btn primary-btn btn-hover">
                        Add Film
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
@endsection