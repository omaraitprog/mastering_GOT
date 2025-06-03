@extends('components.maprojet')

@section('hello')
<form action="{{ route('postes.update', ['post' => $post->id]) }}" method="post">

    @csrf
    @method('PUT')

    <div class="input-group mb-3">
        <input type="text" name="title" class="form-control" value="{{ $post->title }}">
    </div>

    <div class="input-group mb-3">
        <input type="text" name="description" class="form-control" value="{{ $post->description }}">
    </div>

    <select class="form-select" name="created_By">
        @foreach($Users as $user)
            <option value="{{ $user->id }}" {{ $user->name == $post->created_By ? 'selected' : '' }}>
                {{ $user->name }}
            </option>
        @endforeach
    </select>

    <button class="btn btn-primary" type="submit">Edit Post</button>
</form>

@endsection
