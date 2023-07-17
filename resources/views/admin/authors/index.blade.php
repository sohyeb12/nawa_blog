@extends('layouts.admin')

@section('content')
<header class="mb-4 d-flex">
    <h2 class="mb-4 fs-3"> {{ $title }} </h2>
    <div class="ml-auto">
        <a href="<?= route('authors.create') ?>" class="btn btn-sm btn-primary">+ Create New</a>

    </div>
</header>
@if(session()->has('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif


<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>First name</th>
            <th>Last name</th>
            <th>Created_at</th>
            <th>Images</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach($authors as $new)
        <tr>
            <td>{{ $new->id }}</td>
            <td>{{ $new->first_name }}</td>
            <td>{{ $new->last_name }}</td>
            <td>{{ $new->created_at }}</td>
            <td>
                <a href="{{ $new->image_url }}">
                    <img src="{{ $new->image_url }}" alt="" width="60">
                </a>

            </td>
            
            <td><a href="{{ route('authors.edit', $new->id) }}" class="btn btn -sm btn-outline-dark"><i class="fas fa-edit"></i> Edit</a> </td>
            <td>
                <form action="{{ route('authors.destroy', $new->id) }}" method="post">
                    @csrf
                    @method("delete")
                    <button type="submit" class="btn btn -sm btn-danger"><i class="fas fa-trash"></i> Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<div>
    <!-- paginte -->
</div>
@endsection