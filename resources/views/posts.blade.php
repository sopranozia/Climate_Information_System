


@extends('layouts.app')

<style type="text/css">
  
.well{

margin: 100px;
margin-left: 250px;
margin-right: 250px;


}




</style>







@section('content')


@if(session()->has('content'))
    <div class="alert alert-success">
        {{ session()->get('content') }}
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





{{ Form::open(array('url' => 'posts/submit')) }}
    
	<div class="well">

		<fieldset>
	<div class = "form-group">
	{{Form::label('title','Title')}}
		{{Form::text('title','',['class' => 'form-control','placeholder' => 'Enter Title'])}}
	
	</div>
 
 <div class = "form-group">
	{{Form::label('name','Name')}}
		{{Form::text('name','',['class' => 'form-control','placeholder' => 'Enter Name'])}}
	
	</div>
	
	
	<div class = "form-group">
	{{Form::label('content','Content')}}
		{{Form::textarea('content','',['class' => 'form-control','placeholder' => 'Content'])}}
	
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
{{ Form::close() }}












<nav class="navbar navbar-dark bg-dark" style="margin-top: 50px;">
  <!-- Navbar content -->
<nav aria-label="breadcrumb" style="margin-left: 450px; padding-top: 10px;">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{('/Climate')}}">Climate</a></li>
    <li class="breadcrumb-item"><a href="{{('/Temperatures')}}">Temperatures</a></li>
    <li class="breadcrumb-item"><a href="https://climate.nasa.gov/earth-now">News</a></li>
    <li class="breadcrumb-item"><a href="{{('/About')}}">About Us</a></li>
    <li class="breadcrumb-item active" aria-current="page">Posts</li>
  </ol>
</nav>
</nav>

@endsection

