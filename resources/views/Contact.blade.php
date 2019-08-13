
@extends('layouts.app')

<style type="text/css">
  


.well{

margin: 100px;
margin-left: 250px;
margin-right: 250px;


}


 


</style>







@section('content')

<form action="/search" method="POST" role="search" style="margin-left: 1020px;">
    {{ csrf_field() }}
    <div class="form-inline">
        <input type="text" class="form-control mr-sm-2" name="q"
            placeholder="Search query"> <span class="input-group-btn">
            <button type="submit" class="btn btn-outline-success my-2 my-sm-0">
                <span class="glyphicon glyphicon-search">Search</span>
            </button>
        </span>
    </div>
</form>



@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif


@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif




{{ Form::open(array('url' => 'Contact/submit')) }}


<div class="well">

    <fieldset>

        <legend>Contact Us</legend>

	<div class = "form-group">
	{{Form::label('name','Name')}}
		{{Form::text('name','',['class' => 'form-control','placeholder' => 'Enter Name'])}}

	</div>

 <div class = "form-group">
	{{Form::label('email','Email')}}
		{{Form::email('email','',['class' => 'form-control','placeholder' => 'example@gmail.com'])}}

	</div>


	<div class = "form-group">
	{{Form::label('message','Message')}}
		{{Form::textarea('message','',['class' => 'form-control','placeholder' => 'Message'])}}

	</div>
	<div class = "form-group">
	{{Form::file('image')}}
	</div>
	<!-- Submit Button -->
        <div class="form-group">
            <div class="col-lg-10 col-lg-offset-2">
                {!! Form::submit('submit', ['class' => 'btn btn-lg btn-info pull-right'] ) !!}
            </div>
        </div>

    </fieldset>
</div>
{{ Form::close()}}






<nav class="navbar navbar-dark bg-dark" style="margin-top: 50px;">
  <!-- Navbar content -->
<nav aria-label="breadcrumb" style="margin-left: 450px; padding-top: 10px;">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{('/Climate')}}">Climate</a></li>
    <li class="breadcrumb-item"><a href="{{('/Temperatures')}}">Temperatures</a></li>
    <li class="breadcrumb-item"><a href="https://climate.nasa.gov/earth-now">News</a></li>
    <li class="breadcrumb-item"><a href="{{('/About')}}">About Us</a></li>
    <li class="breadcrumb-item active" aria-current="page">Contact</li>
  </ol>
</nav>
</nav>

@endsection


