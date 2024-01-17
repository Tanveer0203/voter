@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mt-4 mb-4">Edit Voter</h1>

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
            <form action="{{ route('voters.update', $voter->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="first_name">First Name</label>
                    <input type="text" class="form-control" name="first_name" value="{{ $voter->first_name }}" required>
                </div>
                <div class="form-group">
                    <label for="last_name">Last Name</label>
                    <input type="text" class="form-control" name="last_name" value="{{ $voter->last_name }}" required>
                </div>
                <div class="form-group">
                    <label for="dob">Date of Birth</label>
                    <input type="date" class="form-control" name="dob" value="{{ $voter->dob->format('Y-m-d') }}" required>
                </div>
                <div class="form-group">
                    <label for="mobile">Mobile</label>
                    <input type="text" class="form-control" name="mobile" value="{{ $voter->mobile }}" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" value="{{ $voter->email }}" required>
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <textarea class="form-control" name="address" required>{{ $voter->address }}</textarea>
                </div>
                <div class="form-group">
                    <label for="district">District</label>
                    <input type="text" class="form-control" name="district" value="{{ $voter->district }}" required>
                </div>
                <div class="form-group">
                    <label for="state">State</label>
                    <input type="text" class="form-control" name="state" value="{{ $voter->state }}" required>
                </div>
                <!-- Add other fields as needed -->

                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>
@endsection
