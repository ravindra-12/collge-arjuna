@extends('dashboardlayout')

@section('content')

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
<div class="row my-5">
  <div class="container mr-5 my-3">
    <div class="d-flex justify-content-between align-items-center">
        <h3 class="fs-4 mb-3">All Blogs</h3>
        <a href="/posts/create" class="btn btn-primary mr-2">
            Add Blog
        </a>
    </div>
</div>
  
 <div class="container"><table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Blog Title</th>
        <th scope="col">Category</th>
        {{-- <th scope="col">Username</th> --}}
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach($posts as $post)
      <tr>
     
        <td>{{ $post['PostID']}}</td>
        <td>{{ $post['Title']}}</td>
        <td> {{ $post->category['CategoryName']}}</td>
        {{-- <td> {{ $post->user['name']}}</td> --}}

        <td> 
            <a href="{{ route('blog.edit', $post->PostID) }}" class="btn btn-primary">
                Update
            </a>
        </td>

        <td>

          <form action="{{route('delete.blog', $post->PostID)}}" method="POST">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this college?');">
              Delete
            </button>
          </form>
        
        </td>
        {{-- <td><img
            src="https://mdbootstrap.com/img/new/avatars/8.jpg"
            alt=""
            style="width: 45px; height: 45px"
            class="rounded-circle"
            /></td>
      </tr> --}}
     @endforeach
    </tbody>
  </table>

 </div>
</div>

@endsection