@extends('layouts.admin')

@section('content')
        <h2 class="mb-4 fs-3">{{ 'New New' }}</h2>
        <form action="<?= route('authors.store') ?>" method="post" enctype="multipart/form-data">
            @csrf
            @include('admin.authors._form',['btn_submit' => 'Create'])

        </form>
@endsection
