


@extends('backend.layout.master')
@section('content')

<div class="container">
    <div class="row">
    
        <div class="col-4 float-end">
        <a href="{{route('type.create')}}" class="btn btn-primary mt-2 mb-4  "> Add type</a>
        @if(Session::has('add'))
                            <div class="alert alert-success" role="alert">
                            {{ session('add') }}
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
 
                        
                          <a href="{{route('type.edit',$types->id)}}" class="btn btn-primary">  
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill-gear" viewBox="0 0 16 16">
  <path d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm-9 8c0 1 1 1 1 1h5.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.544-3.393C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4Zm9.886-3.54c.18-.613 1.048-.613 1.229 0l.043.148a.64.64 0 0 0 .921.382l.136-.074c.561-.306 1.175.308.87.869l-.075.136a.64.64 0 0 0 .382.92l.149.045c.612.18.612 1.048 0 1.229l-.15.043a.64.64 0 0 0-.38.921l.074.136c.305.561-.309 1.175-.87.87l-.136-.075a.64.64 0 0 0-.92.382l-.045.149c-.18.612-1.048.612-1.229 0l-.043-.15a.64.64 0 0 0-.921-.38l-.136.074c-.561.305-1.175-.309-.87-.87l.075-.136a.64.64 0 0 0-.382-.92l-.148-.045c-.613-.18-.613-1.048 0-1.229l.148-.043a.64.64 0 0 0 .382-.921l-.074-.136c-.306-.561.308-1.175.869-.87l.136.075a.64.64 0 0 0 .92-.382l.045-.148ZM14 12.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0Z"/>
</svg></a>

                   
                        {!! Form::open(['method' => 'DELETE','route' => ['type.destroy', $types->id],'style'=>'display:inline']) !!}
                       {!! Form::submit('Delete ', ['class' => 'btn btn-danger']) !!}
                         {!! Form::close() !!}
                                        
                  
                      
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