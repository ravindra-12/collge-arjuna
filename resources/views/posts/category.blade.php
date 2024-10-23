<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Post</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</head>
<body>
    @extends('dashboardlayout')

    @section('content')
   
    <div class="container my-3">
       
        <h3 class="fs-4 mb-3">Create a New Category</h3>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{route('category.create')}}" method="POST" >
            @csrf
            {{-- <input type="hidden" name="UserID" value="{{ auth()->id() }}"> --}}

            <div class="form-group">
                <label for="Title">Category Name:</label>
                <input type="text" class="form-control" name="CategoryName" id="CategoryName" placeholder="Enter Your Catrgory Name" required>
            </div>
            <button type="submit" class="btn btn-success">Create Category</button>
        </form>
    </div>
{{--  --}}
<div class="container"><table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
       <th scope="col">Category Name</th>
       <th scope="col">Update</th>
       <th scope="col">Delete</th>
       
      </tr>
    </thead>
    <tbody>
        @foreach($category as $category)
      <tr>
     
        <td>{{ $category['CategoryID']}}</td>
        <td>{{ $category['CategoryName']}}</td>
     

        <td> 
            <a href="{{ route('category.id', $category->CategoryID) }}" class="btn btn-primary">
                Update
            </a>
        </td>

        <td>

          <form action="{{route('category.delete', $category->CategoryID)}}" method="POST">
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

{{--  --}}
    @endsection

</body>
</html>
