@extends('backend.layout.master')
@section('content')
<section class="section">
        <div class="container-fluid">
          <!-- ========== title-wrapper start ========== -->
          <div class="title-wrapper pt-30">
            <div class="row align-items-center">
              <div class="col-md-6">
                <div class="title">
                  <h2>Update </h2>
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
                  <h6>edit</h6>
                </div>
                <form action="{{route('film.update',$film->id)}}" method="POST"  enctype="multipart/form-data" >
                @csrf
                @method('PUT')
  
                  <div class="row">
                    <div class="col-12">
                    <div class="col-12">
                      <div class="input-style-1">
                        <label> name</label>
                        <input type="text" placeholder="name" name="name"  value= "{{$film->name}}">
                         @error('name')
                        <span class="text-danger text-left">{{ $message }}</span>
                    @enderror
                      </div></div>


                      <div class="col-12">
                       <div class="input-style-1">
                        <label>show Time</label>
                        <input type="date" placeholder="time" name="time" value= "{{$film->show_time}}">>
                       </div> 
</div>

<div class="col-12">
                       <div class="input-style-1">
                        <label>image</label>
                        <input class="form-control" type="file" name="image" value= "{{$film->image}}">>
</div></div>

<div class="col-12">
                       <div class="input-style-1">
                        <label>Description</label>
                        <textarea cols="8" rows="8" class="form-control  mt-5 " placeholder="message" name="description" value= "{{$film->description}}">{{$film->description}}</textarea>

</div></div>

<!-- type -->

 
<div class="select-style-1">
    <label>multi Type</label>
    @foreach ($types as $type)
        <div>
            <input type="checkbox" name="types_id[]" value="{{ $type->id }}" @if (in_array($type->id, old('types_id', $film->types->pluck('id')->toArray()))) checked @endif>
            <label>{{ $type->type }}</label>
        </div>
    @endforeach
</div>               
                  </div>

                    <div class="col-12">
                      <button class="main-btn primary-btn btn-hover">
                        Update Room
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