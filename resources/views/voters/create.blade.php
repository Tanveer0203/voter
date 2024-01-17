@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mt-4 mb-4">Create Voter</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card col-md-6">
        <div class="card-body">
            <form action="{{ route('voters.store') }}" method="POST" >
                @csrf
                <div class="form-group">
                    <label for="first_name">First Name</label>
                    <input type="text" class="form-control" name="first_name" required>
                </div>
                <div class="form-group">
                    <label for="last_name">Last Name</label>
                    <input type="text" class="form-control" name="last_name" required>
                </div>
                <div class="form-group">
                    <label for="dob">Date of Birth</label>
                    <input type="date" class="form-control" name="dob" required>
                </div>
                <div class="form-group">
                    <label for="mobile">Mobile</label>
                    <input type="text" class="form-control" name="mobile" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" required>
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <textarea class="form-control" name="address" required></textarea>
                </div>
                <div class="form-group">
                    <label for="district">District</label>
                    <input type="text" class="form-control" name="district" required>
                </div>
                <div class="form-group">
                    <label for="state">State</label>
                    <input type="text" class="form-control" name="state" required>
                </div>
                <!-- Add other fields as needed -->

                <button type="submit" class="btn btn-success">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
