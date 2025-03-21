@extends('layouts.main')
@section('content')
    <main class="py-5">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header card-title">
                            <strong>Add New Contact</strong>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-3 row">
                                        <label for="fullname" class="col-md-3 col-form-label">Name</label>
                                        <div class="col-md-9">
                                            <input type="text" name="fullname" id="fullname" class="form-control">
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label for="gender" class="col-md-3 col-form-label"> Gender</label>
                                        <div class="col-md-9">
                                            <select name="company_id" id="company_id" class="form-control">
                                                <option value="">Select Gender</option>
                                                <option value="1">Female</option>
                                                <option value="2">Male</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label for="email" class="col-md-3 col-form-label">Email</label>
                                        <div class="col-md-9">
                                            <input type="text" name="email" id="email" class="form-control">
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label for="phone" class="col-md-3 col-form-label">Phone</label>
                                        <div class="col-md-9">
                                            <input type="text" name="phone" id="phone" class="form-control">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="company_id" class="col-md-3 col-form-label">Company</label>
                                        <div class="col-md-9">
                                            <select name="company_id" id="company_id" class="form-control">
                                                <option value="">Select Company</option>
                                                <option value="1">Company One</option>
                                                <option value="2">Company Two</option>
                                                <option value="3">Company Three</option>
                                            </select>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="mb-3 row">
                                        <div class="col-md-9 offset-md-3">
                                            <button type="submit" class="btn btn-primary">Save</button>
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