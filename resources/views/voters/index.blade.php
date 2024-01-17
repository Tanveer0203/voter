@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mt-4 mb-4">Voters List</h1>
    <a href="{{ route('voters.create') }}" class="btn btn-success mb-4">Add Voter</a>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="card">
        <div class="card-body">
            <table class="table table-bordered" id="example">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Date of Birth</th>
                        <th>Mobile</th>
                        <th>Email</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($voters as $voter)
                        <tr>
                            <td>{{ $voter->id }}</td>
                            <td>{{ $voter->first_name }}</td>
                            <td>{{ $voter->last_name }}</td>
                            <td>{{ $voter->dob->format('Y-m-d') }}</td>
                            <td>{{ $voter->mobile }}</td>
                            <td>{{ $voter->email }}</td>
                            <td>
                                <a href="{{ route('voters.show', $voter->id) }}" class="btn btn-info btn-sm">View</a>
                                <a href="{{ route('voters.edit', $voter->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                <form action="{{ route('voters.destroy', $voter->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
