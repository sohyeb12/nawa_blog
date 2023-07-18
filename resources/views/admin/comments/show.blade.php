@extends('layouts.admin')

@section('content')
<header class="mb-4 d-flex">
    <h2 class="mb-4 fs-3"> Comments List for article <b>{{ $article->title }}</b> </h2>
    <div class="ml-auto">
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
            
            <th>Comment Text</th>
            <th>Created_at</th>
            <th>User Name</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach($comments as $comment)
        <tr>
            <td>{{ $comment->comment_text }}</td>
            <td>{{ $comment->created_at }}</td>
            <td>{{ $comment->user->name }}</td>

        </tr>
        @endforeach
    </tbody>
</table>

<div>
    {{ $comments->links() }}
</div>
@endsection