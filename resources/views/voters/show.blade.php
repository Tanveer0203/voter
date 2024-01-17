@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mt-4 mb-4">Voter Details</h1>
    
    <div class="card">
        <div class="card-body">
            <dl class="row">
                <dt class="col-sm-3">ID</dt>
                <dd class="col-sm-9">{{ $voter->id }}</dd>

                <dt class="col-sm-3">First Name</dt>
                <dd class="col-sm-9">{{ $voter->first_name }}</dd>

                <dt class="col-sm-3">Last Name</dt>
                <dd class="col-sm-            9">{{ $voter->last_name }}</dd>

                <dt class="col-sm-3">Date of Birth</dt>
                <dd class="col-sm-9">{{ $voter->dob->format('Y-m-d') }}</dd>

                <dt class="col-sm-3">Mobile</dt>
                <dd class="col-sm-9">{{ $voter->mobile }}</dd>

                <dt class="col-sm-3">Email</dt>
                <dd class="col-sm-9">{{ $voter->email }}</dd>

                <!-- Add other fields as needed -->
            </dl>
        </div>
    </div>
</div>
@endsection

