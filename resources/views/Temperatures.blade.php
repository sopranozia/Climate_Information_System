



@extends('layouts.app')




@section('content')


<head><title>Weather Report</title>

</head>

<body>


	<center><br><br>
		<form method="GET" action="{{('get')}}">
		<h1>Type City and Country</h1>
		<br><p>For Example South Africa,Cape Town</p>
			<input type="text" name="q" required>
			<input type="submit" name="submit">
		</form>
	</center>

<center>
<div id="carouselExampleFade"  data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="2019_05_27_73256_1558942861._large.jpg"  alt="..." width="500" height="500" style="margin-top: 70px">
    </div>
</center>

</body>

<nav class="navbar navbar-dark bg-dark" style="margin-top: 50px;">
  <!-- Navbar content -->
<nav aria-label="breadcrumb" style="margin-left: 450px; padding-top: 10px;">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{('/Climate')}}">Climate</a></li>
    <li class="breadcrumb-item active" aria-current="page">Temperatures</li>
    <li class="breadcrumb-item"><a href="https://climate.nasa.gov/earth-now">News</a></li>
    <li class="breadcrumb-item"><a href="{{('/About')}}">About Us</a></li>
    <li class="breadcrumb-item"><a href="{{('/Temperatures')}}">Contact Us</a></li>
  </ol>
</nav>
</nav>
@endsection
