


@extends('backend.layout.master')
@section('content')

<div class="container">
    <div class="row">
    
        <div class="col-4 float-end">
        <a href="{{route('film_Type.create')}}" class="btn btn-primary mt-2 mb-4  "> Add Film Type</a>

</div>
</div></div>

          <!-- ========== tables-wrapper start ========== -->
          <div class="tables-wrapper">
            <div class="row">
              <div class="col-lg-12">
                <div class="card-style mb-30">
                  <h6 class="mb-10">Data Table</h6>
                  <p class="text-sm mb-20">
                    For basic styling—light padding and only horizontal
                    dividers—use the class table.
                  </p>
                  <div class="table-wrapper table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          
                          <th class="lead-info">
                            <h6>name</h6>
                          </th>
                          <th class="lead-info">
                            <h6>type</h6>
                          </th>
                          
                          <th class="lead-info">
                            <h6>Action</h6>
                          </th>
                         
                        </tr>
                        <!-- end table row-->
                      </thead>
                      <tbody>
                      @foreach($Typefilm as $Typefilms)
                        <tr>
                          
                        <th class="lead-info">
                            <h6>{{$Typefilms->Film_Id}}</h6>
                          </th>
                          <th class="lead-info">
                            <h6>{{$Typefilms->type_id}}</h6>
                          </th>
                        
                         
                          </tr>
                        <!-- end table row -->
                         <!-- end table row -->
                         @endforeach
                      </tbody>
                    </table>
                    <!-- end table -->
                  </div>
                </div>
                <!-- end card -->
              </div>
              <!-- end col -->
            </div>
            <!-- end row -->
          </div>
          <!-- ========== tables-wrapper end ========== -->
       
      <!-- ========== table components end ========== -->
@endsection