


@extends('layouts.app')







@section('content')

 

@foreach($posts as $post)
 <!-- Page Content -->
  <div class="container">

    <div class="row">

      <!-- Post Content Column -->
      <div class="col-lg-8">

        <!-- Title -->
        <h1 class="mt-4">Post Title:{{$post->title}}</h1>

        <!-- Author -->
        <hr>
        <p class="lead">
          by: {{$post->name}}
          
        </p>

        <hr>

        <!-- Date/Time -->
        <p>Posted on: {{$post->created_at}}</p>

        <hr>

        <!-- Preview Image -->
        <img class="img-fluid rounded" src="{{$post->image}}" alt="">

        <hr>

        <!-- Post Content -->
        <p class="lead">Content:</p>


        <p>{{$post->content}}</p>

        <hr>

        <!-- Comments Form -->
        <div class="card my-4">
          <h5 class="card-header">Leave a Comment:</h5>
          <div class="card-body">
            <form>
              <div class="form-group">
                <textarea class="form-control" rows="3"></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>

        
               
              </div>
            </div>
          </div>
        </div>
      </div>


       



<div class="container" style="margin-left: 1000px;">
	<div class="row">
            
    </a>
    <a href="{{('edit')}}" class="btn btn-xs btn-info">
      Edit            
    </a>
    
   {{Form::open(['action'=>['PostsController@destroy',$post->id],'method'=>'POST', 'class'=>'pull-right'])}}
   {{Form::hidden('method','DELETE')}}
   {{Form::submit('delete',['class'=>'btn btn-danger', 'style'=>'margin-left:10px'])}}
	</div>
</div>
<hr>

@endforeach





@endsection