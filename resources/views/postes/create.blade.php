@extends('components.maprojet')

@section('hello')
<form action="{{ route('postes.store') }}" method="post">
    @csrf

    <div class="input-group mb-3">
        <input type="text" name="title" class="form-control" placeholder="Enter The title of your Post">
    </div>

    <div class="input-group mb-3">
        <input type="text" name="description" class="form-control" placeholder="Enter your Description">
    </div>

<select class="form-select" name="created_By" aria-label="Default select example">
    @foreach($users as $user)
        <option value="{{ $user->id }}">{{ $user->name }}</option>
    @endforeach
</select>



    <button class="btn btn-outline-secondary" type="submit">Create post</button>
</form>
@endsection
