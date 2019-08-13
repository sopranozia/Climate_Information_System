@extends('layouts.app')






@section('content')
<table class="table">
		<thead>
			<tr>
			<th>#</th>	
            <th>Title</th>
            <th>Name</th>
            <th>Content</th>
            <th>Image</th>
            <th>Updated_at</th>
            <th>Created_at</th>
			</tr>
		</thead>

<tbody>
@foreach($posts as $post)	

<tr>
<td>{{$loop->iteration}}</td>	
<td>{{$posts->title}}</td>
<td>{{$posts->name}}</td>
<td>{{$loop->content}}</td>
<td>{{$loop->image}}</td>
<td>{{$posts->updated_at}}</td>
<td>{{$posts->created_at}}</td>
<td>
	
	<a href="#">Edit</a>
    <a href="#">Delete</a>
    <a href="{{route('show',$post->id)}}">View</a>
</td>

</tr>

@endforeach


</tbody>
</table>

@endsection