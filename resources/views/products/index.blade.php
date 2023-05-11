@extends('laayout.app')
@section('main')

<div class="text-right">
<a href="products/create" class="btn btn-dark mt-2 ">Create new products</a>
<table class="table table-hover">
    <thead>
      <tr>
        <th>ID</th>
        <th>Email</th>
        <th>Image</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($products as $Employee )
      <tr>
        <td>{{$loop->index+1}}</td>
        <td>{{$Employee->email}}</td>
        <td>
<img src="products/{{$Employee->image}}" class="round-circle" with="50"height="50">

        </td>
        <td>
<a href="products/{{$Employee->id}}/edit" class="btn btn-dark">Edit</a>
<a href="products/{{$Employee->id}}/delete" class="btn btn-danger">Delete</a>
        </td>
      </tr>
     @endforeach
    </tbody>
  </table>

</div>





@endsection