@extends('layouts.admin')

@section('content')
        <h2 class="mb-4 fs-3">{{ 'New Article' }}</h2>
        <form action="{{ route('articles.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            @include('admin.articles._form',['btn_submit' => 'Create'])

        </form>
@endsection
