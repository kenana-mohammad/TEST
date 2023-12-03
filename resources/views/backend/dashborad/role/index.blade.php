
@extends('backend.layout.master')
@section('content')

<div class="card shadow mb-4">    
        <div class="row"> 
                        <div class="col-10 py-3"> 
                            
                            <h4 class="m-0 font-weight-bold text-primary">All roles </h4>
                        </div>

                
    
       
        <div class="col-2 py-3">
       
            <a class="btn btn-primary" href="{{ route('roles.create') }}"> Create New Role</a>
            
     
    </div>
</div>
@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif
                        
                        <div class="card-body">
                            <div class="table-responsive " >
                            <table class="table table-bordered">

<tr>

   <th>No</th>

   <th>Name</th>

   <th width="280px">Action</th>

</tr>

  @foreach ($roles as $role)

  <tr>

      <td>{{ $role->id }}</td>

      <td>{{ $role->name }}</td>

      <td>
          <a class="btn btn-info" href="{{ route('roles.show',$role->id) }}">Show</a>




         
          

      </td>

  </tr>

  @endforeach

</table>


                                
                            </div>
                        </div>
                    </div>
                    {{$roles->onEachSide(1)->links()}}

@endsection