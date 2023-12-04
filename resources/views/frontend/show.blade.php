@extends('frontend.navbar')
@section('content')
<div class="container">
<div class="row mt-5">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Name:</strong>
{{ $film->name }}
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>details:</strong>
{{ $film->description }}
<br>
Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores optio, illo suscipit quo doloribus enim alias! Tempore dignissimos, ea alias recusandae tenetur ducimus pariatur. Delectus debitis minus nulla eligendi placeat.
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>image:</strong>
<div class="card4">
                       <img src="{{asset('storage/'.$film->image)}}" class="card-img-top  " alt="..." width="300px" height="250px"></a>

<label class=" text-dark">{{$film->show_time}}</label>

</div>
</div>
</div>
</div>
@endsection