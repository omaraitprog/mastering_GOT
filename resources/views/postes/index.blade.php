    

<div class="text-center">
  @extends('components.maprojet');
@section('hello');
  <br><br><br>
<button type="submit" class="  mt-4 btn btn-success"><a href="{{route('postes.create')}}">Add new Post</a></button>
</div>
<table class="table mt-5">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Created by</th>
      <th scope="col">Created AT</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

    @foreach($posts as $post)
      <tr>
        <td scope="row">{{ $post->id }}</td>
        <td>{{ $post->title }}</td>
        <td>{{ $post->created_By}}</td>
        <td>{{ $post->created_at}}</td>
        
        <td>
          <!-- Add your action buttons/links here -->
          <a href="{{route('postes.show',$post['id'])}}" class="btn btn-primary btn-sm">View</a>
        

<a href="{{route('postes.edit',$post['id'])}}" class="btn btn-primary btn-sm">Edit</a>
<form style="display:inline;" method="post" action="{{route('postes.destroy',$post['id'])}}">
  @csrf
  @method('delete')
  <button id="delete" class="btn btn-primary btn-sm"  type="submit" >Delete</button>
</form>

          
        </td>
      </tr>
    @endforeach
  </tbody>
</table>




@endsection