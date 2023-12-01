


@extends('backend.layout.master')
@section('content')

<div class="container">
    <div class="row">
    
        <div class="col-4 float-end">
        <a href="{{route('type.create')}}" class="btn btn-primary mt-2 mb-4  "> Add type</a>
        @if(Session::has('check'))
                            <div class="alert alert-success" role="alert">
                              النوع موجود مسبقا
</div>@endif
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
                            <h6>type</h6>
                          </th>
                        
                          <th class="lead-info">
                            <h6>Action</h6>
                          </th>
                         
                        </tr>
                        <!-- end table row-->
                      </thead>
                      <tbody>
                      @foreach($type as $types)
                        <tr>
                              
                              <td>{{$types->type}}</td>
                              
                        
                         
 <td>
                        
<div class="action justify-content">
                            <button class="edit">
                            </button>
                            <button class="more-btn ml-10 dropdown-toggle" id="moreAction1" data-bs-toggle="dropdown"
                              aria-expanded="false">
                              <i class="lni lni-more-alt"></i>
                            </button>
                           
                          </div>
                        </td>
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