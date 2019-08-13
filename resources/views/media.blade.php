@extends('layouts.app')





@section('content')

<div class="col-lg-15">
    <div class="video" style="text-align: center; margin-top: 150px">
    <iframe class="ytplayer" type="text/html" width="800" height="500"
            src=""
            frameborder="0" allowfullscreen></iframe>
</div>
</div>




<nav class="navbar navbar-dark bg-dark" style="margin-top: 50px;">
  <!-- Navbar content -->
<nav aria-label="breadcrumb" style="margin-left: 450px; padding-top: 10px;">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{('/Climate')}}">Climate</a></li>
    <li class="breadcrumb-item"><a href="{{('/Temperatures')}}">Temperatures</a></li>
    <li class="breadcrumb-item"><a href="">News</a></li>
    <li class="breadcrumb-item"><a href="{{('/About')}}">About Us</a></li>
    <li class="breadcrumb-item active" aria-current="page">Media</li>
  </ol>
</nav>
</nav>


@endsection