@extends('layouts.admin')

@section('content')
        <h2 class="mb-4 fs-3">Edit New</h2>
        <form action="{{ route('news.update', $new->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
            @include('admin.news._form',['btn_submit' => 'Update'])

        </form>
@endsection
