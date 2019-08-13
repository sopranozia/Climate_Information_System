@extends('layouts.app')






@section('content')

<div class="container">
    @if(isset($details))
        <p> The Search results for your query <b> {{ $query }} </b> are/is :</p>
    <h2>User details</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach($details as $user)
            <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif



</div>
 <nav class="navbar navbar-dark bg-dark" style="margin-top: 100px;">
  <!-- Navbar content -->
<nav aria-label="breadcrumb" style="margin-left: 600px; padding-top: 10px;">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{('/Contact')}}">Back</a></li>
  </ol>
</nav>
</nav>







@endsection