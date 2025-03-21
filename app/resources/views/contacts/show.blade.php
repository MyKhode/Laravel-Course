@extends('layouts.main')
@section('content')
    <main class="py-5">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header card-title">
                            <strong>Contact Details</strong>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-2 row">
                                        <label for="fullname" class="col-md-3 col-form-label">Full Name</label>
                                        <div class="col-md-9">
                                            <p class="form-control-plaintext text-muted">{{$data['name']}}</p>
                                        </div>
                                    </div>

                                    <div class="mb-2 row">
                                        <label for="gender" class="col-md-3 col-form-label">Gender</label>
                                        <div class="col-md-9">
                                            <p class="form-control-plaintext text-muted">{{$data['gender']}}</p>
                                        </div>
                                    </div>

                                    <div class="mb-2 row">
                                        <label for="email" class="col-md-3 col-form-label">Email</label>
                                        <div class="col-md-9">
                                            <p class="form-control-plaintext text-muted">{{$data['email']}}</p>
                                        </div>
                                    </div>

                                    <div class="mb-2 row">
                                        <label for="phone" class="col-md-3 col-form-label">Phone</label>
                                        <div class="col-md-9">
                                            <p class="form-control-plaintext text-muted">{{$data['phone']}}</p>
                                        </div>
                                    </div>
                                    <div class="mb-2 row">
                                        <label for="company_id" class="col-md-3 col-form-label">Company</label>
                                        <div class="col-md-9">
                                            <p class="form-control-plaintext text-muted">{{$data['company']}}</p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="mb-2 row">
                                        <div class="col-md-9 offset-md-3">
                                            <a href="#" class="btn btn-info">Edit</a>
                                            <a href="#" class="btn btn-outline-danger">Delete</a>
                                            <a href="{{ route('contacts.index') }}" class="btn btn-outline-secondary">Cancel</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection