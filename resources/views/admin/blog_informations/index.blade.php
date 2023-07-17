@extends('layouts.admin')

@section('content')
<header class="mb-4 d-flex">
    <h2 class="mb-4 fs-3"> {{ $title }} </h2>
    <div class="ml-auto">
        <a href="<?= route('blog_informations.create') ?>" class="btn btn-sm btn-primary">+ Create New</a>

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
            <th>Name</th>
            <th>Created_at</th>
            <th>LOGO</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @if(isset($blog_information))
        <tr>
            <td>{{ $blog_information->id }}</td>
            <td>{{ $blog_information->name }}</td>
            <td>{{ $blog_information->created_at }}</td>
            <td>
                <a href="{{ $blog_information->image_url }}">
                    <img src="{{ $blog_information->image_url }}" alt="" width="60">
                </a>
            </td>
            
            <td><a href="{{ route('blog_informations.edit', $blog_information->id) }}" class="btn btn -sm btn-outline-dark"><i class="fas fa-edit"></i> Edit</a> </td>
            
        </tr>
        
        @endif
    </tbody>
</table>

<div>
    <!-- paginte -->
</div>
@endsection