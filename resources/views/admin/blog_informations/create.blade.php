@extends('layouts.admin')

@section('content')
        <h2 class="mb-4 fs-3">{{ 'Information Blog:' }}</h2>
        <form action="<?= route('blog_informations.store') ?>" method="post" enctype="multipart/form-data">
            @csrf
            @include('admin.blog_informations._form',['btn_submit' => 'Create'])

        </form>
@endsection
