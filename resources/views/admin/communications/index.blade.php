@extends('layouts.admin')

@section('content')
<header class="mb-4 d-flex">
    <h2 class="mb-4 fs-3"> {{ $title }} </h2>

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
            <th>Email</th>
            <th>Phone</th>
            <th>Text Message</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        @foreach($communications as $communication)
        <tr>
            <td>{{ $communication->id }}</td>
            <td>{{ $communication->name }}</td>
            <td>{{ $communication->email }}</td>
            <td>{{ $communication->phone }}</td>
            <td>{{ $communication->text_message }}</td>

            <td>
                <form action="{{ route('communications.destroy', $communication->id) }}" method="post">
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
    {{ $communications->links() }}
</div>
@endsection